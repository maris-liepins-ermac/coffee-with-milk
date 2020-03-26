<?php
include 'autoload.php';

use HomeWork\Entity\Product;
use HomeWork\Enum\ProductUnitEnum;
use HomeWork\Model\Money;
use HomeWork\Enum\CurrencyEnum;
use HomeWork\Decorator\ProductMilkDecorator;

/** Making the coffee */
$coffee = Product::buildProduct(
    1,
    'Coffee',
    ProductUnitEnum::MILILITERS,
    new Money(200, CurrencyEnum::EURO)
);

/** Adding some milk to it */
$coffeeWithMilk = new ProductMilkDecorator($coffee);

echo sprintf(
    'You originaly ordered "%s" for %s, but then you decided to add some Milk to it and ended up with "%s" which costs %s',
    $coffee->getDescription(),
    $coffee->getPrice()->getFormatted(),
    $coffeeWithMilk->getDescription(),
    $coffeeWithMilk->getPrice()->getFormatted()
);
die();
