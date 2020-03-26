<?php

namespace HomeWork\Entity;

use HomeWork\Model\Money;

class Product implements ProductInterface
{
    public $id;
    public $description;
    public $unit;
    public $price;

    public function getId(): int
    {
        return $this->id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function getPrice(): Money
    {
        return $this->price;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * I'm aware that entities are supposed to be unique, so ID should be something like increment not set up like this,
     * this is just to save time.
     */
    public static function buildProduct(int $id, string $description, string $unit, Money $price): Product
    {
        $product = new Product();
        $product->setId($id);
        $product->setDescription($description);
        $product->setUnit($unit);
        $product->setPrice($price);

        return $product;
    }
}