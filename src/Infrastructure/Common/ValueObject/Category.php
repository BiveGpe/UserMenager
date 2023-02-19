<?php

declare(strict_types=1);

namespace Infrastructure\Common\ValueObject;

use http\Exception\InvalidArgumentException;

class Category
{
    public const USER = 'User';

    public const ALLOWED_CATEGORY = [
        self::USER,
    ];

    private string $value;

    public function __construct(string $value)
    {
        if (!in_array($value, self::ALLOWED_CATEGORY)) {
            throw new InvalidArgumentException(sprintf("There is no such category as %s", $value)); // TODO: Own exception
        }

        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
