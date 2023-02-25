<?php

declare(strict_types=1);

namespace Infrastructure\RequestMenager;

use Infrastructure\Common\Interfaces\CQFactoryInterface;
use Infrastructure\Common\Interfaces\DocInterface;
use Infrastructure\Common\Interfaces\DTOFactoryInterface;
use Infrastructure\Common\Interfaces\RepositoryInterface;
use Infrastructure\Common\Interfaces\ConstraintsInterface;
use Infrastructure\Common\Interfaces\ServiceInterface;

class ClassStash
{
    private DocInterface $doc;

    private ConstraintsInterface $requestConstrains;

    private CQFactoryInterface $cqFactory;

    private ServiceInterface $service;

    private RepositoryInterface $repository;

    private DTOFactoryInterface $DTOFactory;

    private ConstraintsInterface $responseConstrains;

    public function __construct(
        DocInterface $doc,
        ConstraintsInterface $requestConstrains,
        CQFactoryInterface $cqFactory,
        ServiceInterface $service,
        RepositoryInterface $repository,
        DTOFactoryInterface $DTOFactory,
        ConstraintsInterface $responseConstrains
    ) {
        $this->doc = $doc;
        $this->requestConstrains = $requestConstrains;
        $this->cqFactory = $cqFactory;
        $this->service = $service;
        $this->repository = $repository;
        $this->DTOFactory = $DTOFactory;
        $this->responseConstrains = $responseConstrains;
    }

    public function getDoc(): DocInterface
    {
        return $this->doc;
    }

    public function getRequestConstrains(): ConstraintsInterface
    {
        return $this->requestConstrains;
    }

    public function getCqFactory(): CQFactoryInterface
    {
        return $this->cqFactory;
    }

    public function getService(): ServiceInterface
    {
        return $this->service;
    }

    public function getRepository(): RepositoryInterface
    {
        return $this->repository;
    }

    public function getDTOFactory(): DTOFactoryInterface
    {
        return $this->DTOFactory;
    }

    public function getResponseConstrains(): ConstraintsInterface
    {
        return $this->responseConstrains;
    }
}
