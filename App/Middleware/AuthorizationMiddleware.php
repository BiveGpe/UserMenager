<?php

declare(strict_types = 1);

namespace App\Middleware;

use Infrastructure\Middleware\Authorization\Authorization;
use Slim\Http\Response;

class AuthorizationMiddleware
{
    private Authorization $auth;

    public function __construct(Authorization $auth)
    {
        $this->auth = $auth;
    }

    public function __invoke($request, $handler): Response
    {
        $this->auth->authorize($request);
        
        return $handler->handle($request);
    }

}
