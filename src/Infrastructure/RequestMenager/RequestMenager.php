<?php

declare(strict_types = 1);

namespace Infrastructure\RequestMenager;

use Exception;
use Infrastructure\Common\Abstracts\AbstractDTO;
use Slim\Http\ServerRequest;

/**
 * @description responsible for managing request by getting classes from config, validating request,
 * creating CQ, DTO and validating it.
 *
 */
class RequestMenager
{
    /**
     * @var Config $config Class responsible for getting classes from config
     */
    private Config $config;


    /**
     * @var Validator $validator Class responsible for validating docs, request, CQ and DTO
     */
    private Validator $validator;

    public function __construct(
        Config $configProvider,
        Validator $validator,
    ) {
        $this->config = $configProvider;
        $this->validator = $validator;
    }

    /**
     * @throws Exception
     */
    public function manageRequest(ServerRequest $request): AbstractDTO
    {
        $classStash = $this->config->getClasses($request);

        $doc = $classStash->getDoc();
        $this->validator->validateDoc($doc);

        $requestConstraints = $classStash->getRequestConstraints();
        $this->validator->validateRequest($request, $requestConstraints);

        $cq = $classStash->getCQFactory()->create($request);
        $this->validator->validateObjectWithMetadata($cq);

        $responseConstraints = $classStash->getResponseConstrains();
        $dto = $classStash->getService()->getDTO($cq, $responseConstraints);
        $this->validator->validateObjectWithMetadata($dto);

        return $dto;
    }
}
