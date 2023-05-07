<?php

declare(strict_types = 1);

namespace App\Initialization;

use App\Controller\UserController;
use Slim\Http\Response;
use Slim\Http\ServerRequest;
use Slim\Routing\RouteCollectorProxy as App;

class RouteInit
{
    public static function init(App $app): void
    {
        // Ping
        $app->get('/', function (ServerRequest $request, Response $response) {
            $response->getBody()->write($_ENV['APP_NAME'] . ' is running');

            return $response;
        });

        $app->group('/api/v1', function (App $app) {
            $app->group('/users', function (App $app) {
                $app->get('', [UserController::class, 'getUsers'])
                    ->setName('getUsers');
                $app->get('/{id:[0-9]+}', [UserController::class, 'getUserById'])
                    ->setName('getUserById');
            });
        });
    }
}
