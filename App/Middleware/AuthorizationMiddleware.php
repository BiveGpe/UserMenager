<?php

declare(strict_types = 1);

namespace App\Middleware;

use Infrastructure\Middleware\Authorization\Authorization;
use Infrastructure\Middleware\Authorization\AuthorizationException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Http\ServerRequest;

class AuthorizationMiddleware
{
    private Authorization $auth;

    public function __construct(Authorization $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param $request ServerRequest
     * @param $handler RequestHandlerInterface
     * @return ResponseInterface
     *
     * @throws AuthorizationException
     */
    public function __invoke(ServerRequest $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $this->auth->authorize($request);

        return $handler->handle($request);
    }
}
