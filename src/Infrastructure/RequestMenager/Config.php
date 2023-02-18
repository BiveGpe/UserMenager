<?php

declare(strict_types=1);

namespace Infrastructure\RequestMenager;

use Infrastructure\Common\ValueObject\Action;
use Infrastructure\Common\ValueObject\Category;
use Slim\Http\ServerRequest;

class Config
{
    public const REQUEST_CONSTRAINS = 'RequestConstrains';
    public const CQ_FACTORY = 'CQFactory';
    public const SERVICE = 'Service';
    public const REPOSITORY = 'Repository';
    public const API_DOC = 'ApiDoc';

    private const CONFIG_CONST_ARRAY = [
        self::REQUEST_CONSTRAINS,
        self::CQ_FACTORY,
        self::SERVICE,
        self::REPOSITORY,
        self::API_DOC,
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

        $requestConstrains = new $config[$category][$action][self::REQUEST_CONSTRAINS];
        $cqFactory = new $config[$category][$action][self::CQ_FACTORY];
        $service = new $config[$category][$action][self::SERVICE];
        $repository = new $config[$category][$action][self::REPOSITORY];
        $apiDoc = new $config[$category][$action][self::API_DOC];

        return new ClassStash(
            $requestConstrains,
            $cqFactory,
            $service,
            $repository,
            $apiDoc,
        );
    }
}