<?php

declare(strict_types = 1);

namespace App;

use App\Controller\UserController;
use Slim\Http\Response;
use Slim\Http\ServerRequest;
use Slim\Routing\RouteCollectorProxy as App;

class RouteInitializer
{
    public static function init(App $app): void
    {
        // Ping
        $app->get('/', function (ServerRequest $request, Response $response) {
            $response->getBody()->write("Ping");

            return $response;
        });

        $app->group('/users', function (App $app) {
            $app->get('', [UserController::class, 'getUserById']);
        });
    }
}
