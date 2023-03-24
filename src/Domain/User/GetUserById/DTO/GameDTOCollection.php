<?php

declare(strict_types=1);

namespace Domain\User\GetUserById\DTO;

use InvalidArgumentException;

class GameDTOCollection
{
    private array $games;

    private string $class;

    public function __construct(string $class)
    {
        $this->class = $class;
    }

    public function getGames(): array
    {
        return $this->games;
    }

    public function addItem($item): void
    {
        if ($item::class !== $this->class) {
            throw new InvalidArgumentException('Invalid item type');
        }
        $this->games[] = $item;
    }

    public function jsonSerialize(): array
    {
        return $this->games;
    }
}
