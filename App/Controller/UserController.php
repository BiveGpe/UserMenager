<?php

declare(strict_types=1);

namespace App\Controller;

use Infrastructure\Common\ValueObject\Category;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

class UserController
{
    public function getUserById(ServerRequest $request, Response $response): Response
    {
        $request->withAttribute(Category::USER, new Category('User'));
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