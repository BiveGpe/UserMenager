<?php

declare(strict_types=1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Abstracts\AbstractDTO;
use Infrastructure\Common\Interfaces\CQInferface;
use Infrastructure\Common\Interfaces\RepositoryInterface;
use Infrastructure\Common\Interfaces\ServiceInterface;

class Service implements ServiceInterface
{
    public function getDTO(CQInferface $cq, RepositoryInterface $repository): AbstractDTO
    {
        $data = $repository->getUserById();

        return new UserDTO();
    }
}
