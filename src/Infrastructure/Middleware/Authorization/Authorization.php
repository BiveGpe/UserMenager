<?php

declare(strict_types = 1);

namespace Infrastructure\Middleware\Authorization;

use Slim\Http\ServerRequest;

class Authorization
{
    private const HEADER_AUTHORIZATION = 'Authorization';

    private string $auth;

    public function __construct()
    {
        $this->auth = $_ENV['AUTHORIZATION'];
    }

    public function authorize(ServerRequest $request): void
    {
        if ($request->hasHeader(self::HEADER_AUTHORIZATION)
            && $request->getHeader(self::HEADER_AUTHORIZATION)[0] === $this->auth) {
            return;
        }

        throw new AuthorizationException();
    }
}
