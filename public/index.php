<?php

declare(strict_types = 1);

use App\ContainerBuilder;
use App\RouteInitializer;
use DI\Bridge\Slim\Bridge;

require __DIR__ . '/../vendor/autoload.php';

// Build container with dependecies
$container = ContainerBuilder::buildContainer();

// Creating app instance
$app = Bridge::create($container);

// Routing
RouteInitializer::init($app);

$app->run();
