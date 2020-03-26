<?php

namespace HomeWork\Decorator;

use HomeWork\Entity\ProductInterface;
use HomeWork\Enum\CurrencyEnum;
use HomeWork\Model\Money;

class ProductMilkDecorator implements ProductInterface
{
    protected $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    public function getId(): int
    {
        return $this->product->getId();
    }

    public function getDescription(): string
    {
        return sprintf('%s - %s', $this->product->getDescription(), ' Milk');
    }

    public function getPrice(): Money
    {
        $milkPrice = new Money(50, CurrencyEnum::EURO);
        return Money::add($this->product->getPrice(), $milkPrice);
    }

    public function getUnit(): string
    {
        return $this->product->getUnit();
    }
}