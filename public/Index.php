<?php

use App\RouteInitializer;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

RouteInitializer::init($app);

$app->run();
