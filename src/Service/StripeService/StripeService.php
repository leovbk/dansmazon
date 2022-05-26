<?php

namespace App\Services;

use Stripe\Order;
use Stripe\Stripe;
use App\Entity\Product;
use Stripe\PaymentIntent;

class StripeService {

    private $privateKey; 

   public function __construct() {
    
        if($_ENV['APP_ENV'] === 'dev') {
            $this->privateKey = $_ENV['STRIPE_PUBLIC_KEY_TEST'];
        }else {
            $this->privateKey = $_ENV['STRIPE_PUBLIC_KEY_TEST'];
        }
    }

    /**
     * @param Product $product
     * @return \Stripe\PaymentIntent
     * @throws \Stripe\Exception\ApiErrorException
     */

    public function paymentIntent(Product $product) {

        Stripe::setApiKey($this->privateKey);

        return PaymentIntent::create([
           'amount' => $product->getPrice() * 100,
            'currency' => Order::DEVISE,
            'payment_method_types'=> ['card']
        ]);

    }

    public function paiement(
        $amount,
        $currency,
        $description,
        array $stripeParameter
    )
    {
        \Stripe\Stripe::setApiKey($this->privateKey);
        $payment_intent = null;

        if(isset($stripeParameter['stripeIntentId'])) {
            $payment_intent =  \Stripe\PaymentIntent::retrieve($stripeParameter['stripeIntentId']);
        }

        if($stripeParameter['stripeIntentId'] === 'succeeded') {
            
        }else {
            $payment_intent->cancel();
        }

        return $payment_intent;


    }

    /**
     * @param array $stripeParameter
     * @param Product $product
     * @return \Stripe\PaymentIntent null
     */



public function stripe(array $stripeParameter, Product $product) {
       
   return $this->paiement(
      amount: $product->getPrice() * 100,
       currency: Order:: DEVISE,
      description: $product->getTitle(),
      stripeParameter: $stripeParameter
   );
}

}
