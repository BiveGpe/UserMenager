<?php

declare(strict_types = 1);

namespace Infrastructure\RequestMenager;

use Infrastructure\Common\Interfaces\ConstraintsInterface;
use Infrastructure\Common\Interfaces\CQFactoryInterface;
use Infrastructure\Common\Interfaces\DocInterface;
use Infrastructure\Common\Interfaces\ServiceInterface;

class ClassStash
{
    private DocInterface $doc;

    private ConstraintsInterface $requestConstraints;

    private CQFactoryInterface $cqFactory;

    private ServiceInterface $service;

    private ConstraintsInterface $responseConstrains;

    public function __construct(
        DocInterface $doc,
        ConstraintsInterface $requestConstrains,
        CQFactoryInterface $cqFactory,
        ServiceInterface $service,
        ConstraintsInterface $responseConstrains
    ) {
        $this->doc = $doc;
        $this->requestConstraints = $requestConstrains;
        $this->cqFactory = $cqFactory;
        $this->service = $service;
        $this->responseConstrains = $responseConstrains;
    }

    public function getDoc(): DocInterface
    {
        return $this->doc;
    }

    public function getRequestConstraints(): ConstraintsInterface
    {
        return $this->requestConstraints;
    }

    public function getCQFactory(): CQFactoryInterface
    {
        return $this->cqFactory;
    }

    public function getService(): ServiceInterface
    {
        return $this->service;
    }

    public function getResponseConstrains(): ConstraintsInterface
    {
        return $this->responseConstrains;
    }
}
