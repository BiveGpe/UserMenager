<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById;

use Domain\User\Repository\QueryRepository;
use Infrastructure\Common\Abstracts\AbstractDTO;
use Infrastructure\Common\Interfaces\ConstraintsInterface;
use Infrastructure\Common\Interfaces\CQInferface;
use Infrastructure\Common\Interfaces\ServiceInterface;
use Infrastructure\Common\Validators\ServiceValidator;

class Service implements ServiceInterface //TODO: abstract Service
{
    private QueryRepository $repository;

    private DTOFactory $DTOFactory;

    private ServiceValidator $validator;

    public function __construct(QueryRepository $repository, DTOFactory $DTOFactory)
    {
        $this->repository = $repository;
        $this->DTOFactory = $DTOFactory;
        $this->validator = new ServiceValidator();
    }

    public function getDTO(CQInferface $cq, ConstraintsInterface $constraints): AbstractDTO
    {
        $inputData = $cq->getArray();

        $userData = $this->repository->getUserById($inputData['id']);
        $userData['games'] = $this->repository->getUserGames($inputData['id']);

        $this->validator->validateArrayWithConstraints($userData, $constraints);

        return $this->DTOFactory->create($userData);
    }
}
