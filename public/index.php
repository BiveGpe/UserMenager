<?php

declare(strict_types = 1);

use App\ContainerBuilder;
use App\Middleware\AuthorizationMiddleware;
use App\RouteInitializer;
use DI\Bridge\Slim\Bridge;
use Infrastructure\Middleware\Authorization\Authorization;

require __DIR__ . '/../vendor/autoload.php';

// Build container with dependecies
$container = ContainerBuilder::buildContainer();

// Creating app instance
$app = Bridge::create($container);

// Middleware
$app->add(new AuthorizationMiddleware(new Authorization()));

// Routing
RouteInitializer::init($app);

$app->run();
