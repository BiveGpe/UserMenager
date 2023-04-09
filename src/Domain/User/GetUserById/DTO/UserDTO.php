<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById\DTO;

use DateTime;
use Infrastructure\Common\Abstracts\AbstractDTO;
use Infrastructure\Common\ValueObject\PositiveInteger;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Mapping\ClassMetadata;

//TODO: GamesCount Dodać
class UserDTO extends AbstractDTO
{
    private PositiveInteger $id;

    private string $firstname;

    private string $lastname;

    private string $username;

    private string $email;

    private string $password;

    private DateTime $createdAt;

    private DateTime $updatedAt;

    private GameDTOCollection $games;

    public function __construct(
        PositiveInteger $id,
        string $firstname,
        string $lastname,
        string $username,
        string $email,
        string $password,
        DateTime $createdAt,
        DateTime $updatedAt,
        GameDTOCollection $games,
    ) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->games = $games;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getId()->getValue(),
            'firstname' => $this->getFirstname(),
            'lastname' => $this->getLastname(),
            'username' => $this->getUsername(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            'createdAt' => $this->getCreatedAt()->format('Y-m-d H:i:s'),
            'updatedAt' => $this->getUpdatedAt()->format('Y-m-d H:i:s'),
            'games' => $this->getGames()->jsonSerialize()
        ];
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('id', new NotBlank());
        $metadata->addPropertyConstraint('firstname', new NotBlank());
        $metadata->addPropertyConstraint('lastname', new NotBlank());
        $metadata->addPropertyConstraint('username', new NotBlank());
        $metadata->addPropertyConstraint('email', new NotBlank());
        $metadata->addPropertyConstraint('password', new NotBlank());
        $metadata->addPropertyConstraint('createdAt', new NotBlank());
        $metadata->addPropertyConstraint('updatedAt', new NotBlank());
        $metadata->addPropertyConstraint('games', new NotBlank());
    }

    public function getId(): PositiveInteger
    {
        return $this->id;
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

    public function getGames(): GameDTOCollection
    {
        return $this->games;
    }
}
