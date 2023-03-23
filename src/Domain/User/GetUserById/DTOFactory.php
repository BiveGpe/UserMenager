<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById;

use DateTime;
use Infrastructure\Common\Abstracts\AbstractDTO;
use Infrastructure\Common\Interfaces\DTOFactoryInterface;

class DTOFactory implements DTOFactoryInterface
{
    public function create(... $args): AbstractDTO
    {
        $databaseData = $args[0];

        return new UserDTO(
            $databaseData['firstname'],
            $databaseData['lastname'],
            $databaseData['username'],
            $databaseData['email'],
            $databaseData['password'],
            new DateTime($databaseData['created_at']),
            new DateTime($databaseData['updated_at']),
            $databaseData['active'],
        );
    }
}
