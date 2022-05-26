<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    
    const DEVISE = 'eur';
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stripe_token;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $brand_stripe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $last4_stripe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $id_charge_stripe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status_stripe;

    /**
     * @ORM\Column(type="datetime", nullable=true, default=now())
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true, default=now())
     */
    private $updated_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $price;

    public function getId(): int
    {
        return $this->id;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getStripeToken(): string
    {
        return $this->stripe_token;
    }

    public function setStripeToken(string $stripe_token): self
    {
        $this->stripe_token = $stripe_token;

        return $this;
    }

    public function getBrandStripe(): string
    {
        return $this->brand_stripe;
    }

    public function setBrandStripe(string $brand_stripe): self
    {
        $this->brand_stripe = $brand_stripe;

        return $this;
    }

    public function getLast4Stripe(): string
    {
        return $this->last4_stripe;
    }

    public function setLast4Stripe(string $last4_stripe): self
    {
        $this->last4_stripe = $last4_stripe;

        return $this;
    }

    public function getIdChargeStripe(): string
    {
        return $this->id_charge_stripe;
    }

    public function setIdChargeStripe(string $id_charge_stripe): self
    {
        $this->id_charge_stripe = $id_charge_stripe;

        return $this;
    }

    public function getStatusStripe(): string
    {
        return $this->status_stripe;
    }

    public function setStatusStripe(string $status_stripe): self
    {
        $this->status_stripe = $status_stripe;

        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }
}
