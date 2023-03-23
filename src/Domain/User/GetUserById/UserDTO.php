<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById;

use DateTime;
use Infrastructure\Common\Abstracts\AbstractDTO;

class UserDTO extends AbstractDTO
{
    private string $firstname;

    private string $lastname;

    private string $username;

    private string $email;

    private string $password;

    private DateTime $createdAt;

    private DateTime $updatedAt;

    private bool $active;

    public function __construct(
        string $firstname,
        string $lastname,
        string $username,
        string $email,
        string $password,
        DateTime $createdAt,
        DateTime $updatedAt,
        bool $active,
    ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->active = $active;
    }

    public function jsonSerialize(): array
    {
        return [
            'firstname' => $this->getFirstname(),
            'lastname' => $this->getLastname(),
            'username' => $this->getUsername(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            'createdAt' => $this->getCreatedAt(),
            'updatedAt' => $this->getUpdatedAt(),
            'active' => $this->getActive(),
        ];
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    public function getActive(): bool
    {
        return $this->active;
    }
}
