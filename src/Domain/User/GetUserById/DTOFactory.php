<?php

declare(strict_types=1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Abstracts\AbstractDTO;
use Infrastructure\Common\Interfaces\DTOFactoryInterface;

class DTOFactory implements DTOFactoryInterface
{

    public function create(...$args): AbstractDTO
    {
        return new AbstractDTO();
    }
}
