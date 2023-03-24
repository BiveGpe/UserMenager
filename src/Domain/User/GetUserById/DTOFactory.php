<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById;

use DateTime;
use Domain\User\GetUserById\DTO\GameDTO;
use Domain\User\GetUserById\DTO\GameDTOCollection;
use Domain\User\GetUserById\DTO\UserDTO;
use Infrastructure\Common\Abstracts\AbstractDTO;
use Infrastructure\Common\Interfaces\DTOFactoryInterface;

class DTOFactory implements DTOFactoryInterface
{
    public function create(... $args): AbstractDTO
    {
        $UserData = $args[0];

        $gamesData = $args[1];

        $gameDTOCollection = new GameDTOCollection(GameDTO::class);
        foreach ($gamesData as $gameData) {
            $gameDTOCollection->addItem(
                new GameDTO(
                    $gameData['name'],
                    $gameData['description'],
                    new DateTime($gameData['created_at']),
                    new DateTime($gameData['updated_at']),
                )
            );
        }

        return new UserDTO(
            $UserData['firstname'],
            $UserData['lastname'],
            $UserData['username'],
            $UserData['email'],
            $UserData['password'],
            new DateTime($UserData['created_at']),
            new DateTime($UserData['updated_at']),
            $UserData['deleted'],
            $gameDTOCollection,
        );
    }
}
