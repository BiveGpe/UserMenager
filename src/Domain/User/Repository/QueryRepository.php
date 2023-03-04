<?php

declare(strict_types=1);

namespace Domain\User\Repository;

use http\Exception\InvalidArgumentException;
use Infrastructure\Common\Interfaces\RepositoryInterface;
use Infrastructure\Common\ValueObject\PositiveInteger;

class QueryRepository implements RepositoryInterface
{
    public function getUserById(PositiveInteger $id): array
    {
        if ($id->getValue() !== 5) {
            throw new InvalidArgumentException('userNotFound'); // TODO: own exceptions
        }

        return [
            'firstName' => 'Wiktor',
            'secondName' => 'Rapacz',
            'nick' => 'PussyDestroyer',
        ];
    }
}
