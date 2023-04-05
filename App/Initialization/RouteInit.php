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

        $app->group('/users', function (App $app) {
            $app->get('', [UserController::class, 'getUserById']);
        });
    }
}
