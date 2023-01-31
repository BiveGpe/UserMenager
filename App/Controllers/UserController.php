<?php

declare(strict_types=1);

namespace App\Controllers;

use Slim\Http\Response;
use Slim\Http\ServerRequest;


class UserController
{
    public function getUserById(ServerRequest $request, Response $response): Response
    {
        $queryParams = $request->getQueryParams();
        $name = $queryParams['id'];

        $dataToReturn = [
            '1' => [
                'name' => $name,
            ],
        ];

        return $response->withJson($dataToReturn);
    }

}