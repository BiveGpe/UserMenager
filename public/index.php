<?php

declare(strict_types=1);

use App\RouteInitializer;
use DI\Bridge\Slim\Bridge;

require __DIR__ . '/../vendor/autoload.php';

// Creating app instance
$app = Bridge::create();

RouteInitializer::init($app);
//DependenciesInjector::init($app->getContainer());

$app->run();
