<?php

declare(strict_types=1);

use App\DependenciesInjector;
use App\RouteInitializer;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

// Creating app instance
$app = AppFactory::create();

RouteInitializer::init($app);
//DependenciesInjector::init($app->getContainer());

$app->run();
