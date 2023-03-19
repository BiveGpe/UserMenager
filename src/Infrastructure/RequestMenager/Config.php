<?php

declare(strict_types = 1);

namespace Infrastructure\RequestMenager;

use Infrastructure\Common\ValueObject\Action;
use Infrastructure\Common\ValueObject\Category;
use Slim\Http\ServerRequest;

class Config
{
    public const API_DOC = 'ApiDoc';

    public const REQUEST_CONSTRAINTS = 'RequestConstraints';

    public const CQ_FACTORY = 'CQFactory';

    public const SERVICE = 'Service';

    public const REPOSITORY = 'QueryRepository';

    public const DTO_FACTORY = 'DTOFactory';

    public const RESPONSE_CONSTRAINTS = 'ResponseConstraints';

    private const CONFIG_CONST_ARRAY = [
        self::API_DOC,
        self::REQUEST_CONSTRAINTS,
        self::CQ_FACTORY,
        self::SERVICE,
        self::REPOSITORY,
        self::DTO_FACTORY,
        self::RESPONSE_CONSTRAINTS,
    ];

    private ConfigProvider $configProvider;

    public function __construct(ConfigProvider $configProvider)
    {
        $this->configProvider = $configProvider;
    }

    public function getClasses(ServerRequest $request): ClassStash
    {
        //TODO: own expeption with throwing when there is no category/action in config or there are missing classes
        $config = $this->configProvider->getConfig();

        $category = $request->getAttribute(Category::class)->getValue();
        $action = $request->getAttribute(Action::class)->getValue();

        $apiDoc = new $config[$category][$action][self::API_DOC]();
        $requestConstrains = new $config[$category][$action][self::REQUEST_CONSTRAINTS]();
        $cqFactory = new $config[$category][$action][self::CQ_FACTORY]();
        $repository = new $config[$category][$action][self::REPOSITORY]();
        $dtoFactory = new $config[$category][$action][self::DTO_FACTORY]();
        $service = new $config[$category][$action][self::SERVICE](
            $repository,
            $dtoFactory,
        );
        $responseConstrains = new $config[$category][$action][self::RESPONSE_CONSTRAINTS]();

        return new ClassStash(
            $apiDoc,
            $requestConstrains,
            $cqFactory,
            $service,
            $responseConstrains,
        );
    }
}
