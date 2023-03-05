<?php

declare(strict_types=1);

namespace Domain\User\GetUserById;

use Domain\User\Repository\QueryRepository;
use Infrastructure\Common\Abstracts\AbstractDTO;
use Infrastructure\Common\Interfaces\CQInferface;
use Infrastructure\Common\Interfaces\ServiceInterface;

class Service implements ServiceInterface
{
    private QueryRepository $repository;

    private DTOFactory $DTOFactory;

    public function __construct(QueryRepository $repository, DTOFactory $DTOFactory)
    {
        $this->repository = $repository;
        $this->DTOFactory = $DTOFactory;
    }

    public function getDTO(CQInferface $cq): AbstractDTO
    {
        $inputData = $cq->getArray();

        $userData = $this->repository->getUserById($inputData['id']);

        return $this->DTOFactory->create($userData);
    }
}
