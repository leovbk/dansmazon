<?php

namespace App\Manager;

use App\Entity\User;
use App\Entity\Order;
use App\Entity\Product;
use App\Services\StripeService;
use Doctrine\ORM\EntityManagerInterface;

//use ...

class ProductManager {

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var StripeService
     */

    protected $stripeService;

    /**
     * @param EntityManagerInterface $entityManager
     * @param StripeService $stripeService
     */
    
    public function __construct(
        EntityManagerInterface $entityManager,
        StripeService $stripeService
        ) {

        $this->em = $entityManager;
        $this->stripeService = $stripeService;

    }

    public function getProducts() {
        return $this->em->getRepository(className: Product::class)
        ->findAll();
    }

    public function intentSecret(Product $product) {

        $intent = $this->stripeService->paymentIntent($product);

        return $intent['client_secret'] ?? null;
    }

    /**
     * @param array $stripeParameter
     * @param Product $product
     * @return array null
     */

    public function stripe(array$stripeParameter, product $product) {

        $ressource = null;
        $data = $this->stripeService->stripe($stripeParameter, $product);

        if($data) {
            $ressource = [
                'stripeBrand' => $data['charges']['data'][0]['payment_method_details']['card']['brand'],
                'stripeLast4' => $data['charges']['data'][0]['payment_method_details']['card']['last4'],
                'stripeId' => $data['charges']['data'][0]['id'],
                'stripeStatus' => $data['charges']['data'][0]['status'],
                'stripeToken' => $data['client_secret']

            ];
        }

        return $ressource;
    }

    /**
     * @param array $ressource
     * @param Product $product
     * @param User $user
     */

    public function create_subscription(array $ressource, Product $product, User $user) {

        $order = new Order();
        $order->setUser($user);
        $order->setProduct($product);
        $order->setPrice($product->getPrice());
        $order->setReference(uniqid(prefix:'', more_entropy: false));
        $order->setBrandStripe($ressource['stripeBrand']);
        $order->setLast4Stripe($ressource['stripeLast4']);
        $order->setIdChargeStripe($ressource['stripeId']);
        $order->setStripeToken($ressource['stripeToken']);
        $order->setStatusStripe($ressource['stripeStatus']);
        $order->setUpdatedAt(new Datetime());
        $order->setCreatedAt(new Datetime());

        $this->em->persist($order);
        $this->em->flush();







    }

}