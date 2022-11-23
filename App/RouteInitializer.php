<?php

namespace App;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

Class RouteInitializer
{
    static public function init(App $app)
    {
        $app->get('/', function (Request $request, Response $response, $args) {
            $response->getBody()->write("Chuj");
            return $response;
        });
    }
}
