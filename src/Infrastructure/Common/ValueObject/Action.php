<?php

declare(strict_types=1);

namespace Infrastructure\Common\ValueObject;

use http\Exception\InvalidArgumentException;

class Action
{
    public const GET_USER_BY_ID = 'GetUserById';

    public const ALLOWED_ACTIONS = [
        self::GET_USER_BY_ID,
    ];

    private string $value;

    public function __construct(string $value)
    {
        if (!in_array($value, self::ALLOWED_ACTIONS)) {
            throw new InvalidArgumentException(sprintf("There is no such category as %s", $value)); // TODO: Own exception
        }

        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}