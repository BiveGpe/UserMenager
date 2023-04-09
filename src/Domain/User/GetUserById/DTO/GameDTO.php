<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById\DTO;

use DateTime;
use Infrastructure\Common\Abstracts\AbstractDTO;
use Infrastructure\Common\ValueObject\PositiveInteger;

class GameDTO extends AbstractDTO
{
    private PositiveInteger $id;

    private string $name;

    private string $description;

    private DateTime $createdAt;

    private DateTime $updatedAt;

    public function __construct(
        PositiveInteger $id,
        string $name,
        string $description,
        DateTime $createdAt,
        DateTime $updatedAt,
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getId()->getValue(),
            'name' => $this->getName(),
            'description' => $this->getDescription(),
            'createdAt' => $this->getCreatedAt()->format('Y-m-d H:i:s'),
            'updatedAt' => $this->getUpdatedAt()->format('Y-m-d H:i:s'),
        ];
    }

    public function getId(): PositiveInteger
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }
}
