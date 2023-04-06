<?php

declare(strict_types = 1);

namespace Infrastructure\Common\ValueObject;

use InvalidArgumentException;

class PositiveInteger
{
    private int $value;

    public function __construct(mixed $value)
    {
        if (
            $value < 0
            || !is_numeric($value)
        ) {
            throw new InvalidArgumentException(sprintf("%s is not Positive Integer", $value));
        }
        $this->value = (int) $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
