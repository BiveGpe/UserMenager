<?php

declare(strict_types=1);

namespace Controller;

use Slim\Http\ServerRequest;
use Slim\Http\Response;

class UserController
{
    public function getUserById(ServerRequest $request, Response $response): Response
    {
        $queryParams = $request->getQueryParams();
        $name = $queryParams['name'];

        $dataToReturn = [
            '1' => [
                'name' => $name,
            ],
        ];

        return $response->withJson($dataToReturn);
    }

}