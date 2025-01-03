<?php

declare(strict_types = 1);

namespace App\Controller;

use Infrastructure\Common\ValueObject\Action;
use Infrastructure\Common\ValueObject\Category;
use Infrastructure\RequestMenager\RequestMenager;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

class UserController
{
    private RequestMenager $requestMenager;

    public function __construct(RequestMenager $requestMenager)
    {
        $this->requestMenager = $requestMenager;
    }

    public function getUserById(ServerRequest $request, Response $response): Response
    {
        $request = $request
            ->withAttribute(Category::class, new Category(Category::USER))
            ->withAttribute(Action::class, new Action(Action::GET_USER_BY_ID));

        $dto = $this->requestMenager->manageRequest($request);

        return $response->withJson($dto->jsonSerialize());
    }
}
