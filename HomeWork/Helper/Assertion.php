<?php

namespace HomeWork\Helper;

use HomeWork\Exception\AssertionException;

class Assertion
{
    public static function equals($left, $right)
    {
        if ($left !== $right) {
            throw new AssertionException(
                sprintf('%s is not equal to %s.', $left, $right)
            );
        }
    }
}
