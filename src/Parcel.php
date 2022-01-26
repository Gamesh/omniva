<?php

namespace Omniva;

use ArrayIterator;

class Parcel
{
    /**
     * weight in kilograms
     */
    private $weight;
    private $services;
    /**
     * amount in euros
     */
    private $codAmount;
    /**
     * bank account number (IBAN)
     */
    private $bankAccount;
    private $comment;
    private $partnerId;
    private $receiver;
    private $returnee;
    private $sender;

    private $trackingNumber;

    public function __construct()
    {
        $this->services = new ArrayIterator();
    }

    public function setWeight(float $weightInGrams): self
    {
        $this->weight = $weightInGrams;

        return $this;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function hasWeight(): bool
    {
        return $this->weight !== null;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function hasComment(): bool
    {
        return !is_null($this->comment);
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setPartnerId(string $partnerId): self
    {
        $this->partnerId = $partnerId;

        return $this;
    }

    public function hasPartnerId(): bool
    {
        return $this->partnerId !== null;
    }

    public function getPartnerId(): string
    {
        return $this->partnerId;
    }

    public function setCodAmount(float $amount): self
    {
        $this->codAmount = $amount;

        return $this;
    }

    public function getCodAmount(): ?float
    {
        return $this->codAmount;
    }

    public function setBankAccount(string $number): self
    {
        $this->bankAccount = $number;

        return $this;
    }

    public function getBankAccount(): string
    {
        return $this->bankAccount;
    }

    public function hasServices(): bool
    {
        return $this->services->count() > 0;
    }

    public function addService(Service $service): self
    {
        $this->services->append($service);

        return $this;
    }

    public function getServices(): ArrayIterator
    {
        return $this->services;
    }

    public function setSender(Address $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getSender(): Address
    {
        return $this->sender;
    }

    public function setReceiver(Address $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getReceiver(): Address
    {
        return $this->receiver;
    }

    public function setReturnee(Address $returnee): self
    {
        $this->returnee = $returnee;

        return $this;
    }

    public function getReturnee(): Address
    {
        return $this->returnee;
    }

    public function hasTrackingNumber(): bool
    {
        return !is_null($this->trackingNumber);
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(string $number): self
    {
        $this->trackingNumber = $number;

        return $this;
    }
}
