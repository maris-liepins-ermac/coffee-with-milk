<?php

namespace HomeWork\Model;

use HomeWork\Exception\AssertionException;
use HomeWork\Helper\Assertion;

class Money
{
    private $amount;
    private $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getFormatted(): string
    {
        $formattedAmount = number_format(($this->amount / 100), 2, '.', '');
        return sprintf('%s %s', $formattedAmount, $this->currency);
    }

    public static function add(Money $left, Money $right)
    {
        try {
            Assertion::equals($left->currency, $right->currency);
            $newAmount = $left->amount + $right->amount;
            return new Money($newAmount, $left->currency);
        } catch (AssertionException $exception) {
            die($exception->getMessage()); // Temporary stuff, since this homework is not intended to be huge.
        }
    }

}