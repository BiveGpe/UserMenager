<?php

declare(strict_types = 1);

namespace App;

use App\Initialization\ContainerInit;
use App\Initialization\EnvInit;
use App\Initialization\MiddlewareInit;
use App\Initialization\RouteInit;
use DI\Bridge\Slim\Bridge;
use Slim\App;

class AppBuilder
{
    public static function build(): App
    {
        // Build container with dependecies
        $container = ContainerInit::buildContainer();

        // initialization env variables
        EnvInit::init(EnvInit::DEFAULT_ENV);

        // Creating app instance
        $app = Bridge::create($container);

        // Middleware with error handling
        MiddlewareInit::init($app);

        // Routing
        RouteInit::init($app);

        return $app;
    }
}
