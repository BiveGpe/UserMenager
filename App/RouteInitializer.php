<?php

declare(strict_types = 1);

namespace App;

use Controller\UserController;
use Slim\App;
use Slim\Http\Response;
use Slim\Psr7\Request;

Class RouteInitializer
{
    static public function init(App $app): void
    {
        // Ping
        $app->get('/', function (Request $request, Response $response, $args) {
            $response->getBody()->write("Chuj");
            return $response;
        });

        $app->group('/users', function (App $app) {
            $app->get('', [UserController::class, 'getUsers']);
            $app->get('/:id', [UserController::class, 'getUserById']);
        });

    }
}
