<?php

namespace Infrastructure\RequestMenager;

use Infrastructure\Common\Abstracts\AbstractDTO;
use Slim\Http\ServerRequest;

class RequestMenager
{
    private Config $config;

    public function __construct(Config $configProvider)
    {
        $this->config = $configProvider;
    }

    public function manageRequest(ServerRequest $request): AbstractDTO
    {
        $classStash = $this->config->getClasses($request);

        $doc = $classStash->getDoc();
        // TODO: validation of docs

        $requestConstraints = $classStash->getRequestConstraints();
        // TODO: validation of request

        $cq = $classStash->getCQFactory()->create($request);

        $dto = $classStash->getService()->getDTO($cq);

        $responseConstraints = $classStash->getResponseConstrains();
        // TODO: validation of DTO

        return $dto;
    }
}
