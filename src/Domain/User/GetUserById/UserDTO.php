<?php

declare(strict_types=1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Abstracts\AbstractDTO;

class UserDTO extends AbstractDTO
{
    private string $firstName;

    private string $secondName;

    private string $nick;

    public function __construct(string $firstName, string $secondName, string $nick)
    {
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->nick = $nick;
    }

    public function jsonSerialize(): array
    {
        return [
            'firstName' => $this->getFirstName(),
            'secondName' => $this->getSecondName(),
            'nick' => $this->getNick(),
        ];
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getSecondName(): string
    {
        return $this->secondName;
    }

    public function getNick(): string
    {
        return $this->nick;
    }
}
