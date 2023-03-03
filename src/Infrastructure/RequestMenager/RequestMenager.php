<?php

namespace Infrastructure\RequestMenager;

use Infrastructure\Common\Abstracts\AbstractDTO;
use Slim\Http\ServerRequest;

class RequestMenager
{
    private Config $config;

    private Validator $validator;

    public function __construct(
        Config $configProvider,
        Validator $validator,
    ) {
        $this->config = $configProvider;
        $this->validator = $validator;
    }

    public function manageRequest(ServerRequest $request): AbstractDTO
    {
        $classStash = $this->config->getClasses($request);

        $doc = $classStash->getDoc();
        $this->validator->validateDoc($doc);

        $requestConstraints = $classStash->getRequestConstraints();
        $this->validator->validateRequest($request, $requestConstraints);

        $cq = $classStash->getCQFactory()->create($request);
        $dto = $classStash->getService()->getDTO($cq);

        $responseConstraints = $classStash->getResponseConstrains();
        $this->validator->validateDTOWithConstraints($dto, $responseConstraints);

        return $dto;
    }
}
