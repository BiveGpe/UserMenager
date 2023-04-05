<?php

declare(strict_types = 1);

use App\Initialization\ContainerInit;
use App\Initialization\EnvInit;
use App\Initialization\RouteInit;
use App\Middleware\AuthorizationMiddleware;
use DI\Bridge\Slim\Bridge;

require __DIR__ . '/../vendor/autoload.php';

// Build container with dependecies
$container = ContainerInit::buildContainer();

// initialization env variables
EnvInit::init(EnvInit::DEFAULT_ENV);

// Creating app instance
$app = Bridge::create($container);

// Middleware
$app->add(AuthorizationMiddleware::class);
$app->addErrorMiddleware(true, true, true);

// Routing
RouteInit::init($app);

$app->run();
