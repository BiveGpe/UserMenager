<?php

declare(strict_types=1);

namespace Infrastructure\RequestMenager;

use Slim\Http\ServerRequest;

class Config
{
    private ConfigProvider $configProvider;

    public function __construct(ConfigProvider $configProvider)
    {
        $this->configProvider = $configProvider;
    }

    public function getClasses(ServerRequest $request): array
    {
        $config = $this->configProvider->getConfig();
        return [];
    }
}