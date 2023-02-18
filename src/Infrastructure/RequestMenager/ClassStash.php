<?php

declare(strict_types=1);

namespace Infrastructure\RequestMenager;

use Infrastructure\Common\Interfaces\CQFactoryInterface;
use Infrastructure\Common\Interfaces\DocInterface;
use Infrastructure\Common\Interfaces\RepositoryInterface;
use Infrastructure\Common\Interfaces\RequestConstrainsInterface;
use Infrastructure\Common\Interfaces\ServiceInterface;

class ClassStash
{
    private RequestConstrainsInterface $requestConstrains;

    private CQFactoryInterface $cqFactory;

    private ServiceInterface $service;

    private RepositoryInterface $repository;

    private DocInterface $doc;

    public function __construct(
        RequestConstrainsInterface $requestConstrains,
        CQFactoryInterface $cqFactory,
        ServiceInterface $service,
        RepositoryInterface $repository,
        DocInterface $doc
    ) {
        $this->requestConstrains = $requestConstrains;
        $this->cqFactory = $cqFactory;
        $this->service = $service;
        $this->repository = $repository;
        $this->doc = $doc;
    }

    public function getRequestConstrains(): RequestConstrainsInterface
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

    public function getDoc(): DocInterface
    {
        return $this->doc;
    }
}