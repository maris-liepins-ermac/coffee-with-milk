<?php


namespace HomeWork\Entity;


use HomeWork\Model\Money;

interface ProductInterface
{
    public function getId(): int;

    public function getDescription(): string;

    public function getUnit(): string;

    public function getPrice(): Money;
}