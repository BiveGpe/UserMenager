<?php

namespace Infrastructure\RequestMenager;

use Slim\Http\ServerRequest;

class RequestMenager
{
    private Config $config;

    public function __construct(Config $configProvider)
    {
        $this->config = $configProvider;
    }

    public function manageRequest(ServerRequest $request): void
    {
        $config = $this->config->getClasses($request);

        var_dump($config);
    }
}