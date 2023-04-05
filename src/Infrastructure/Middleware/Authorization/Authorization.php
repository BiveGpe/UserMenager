<?php

declare(strict_types = 1);

namespace Infrastructure\Middleware\Authorization;

use Slim\Http\ServerRequest;

class Authorization
{
    public function authorize(ServerRequest $request): void
    {
        echo "Authorization";
    }
}
