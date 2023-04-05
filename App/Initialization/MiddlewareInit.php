<?php

declare(strict_types = 1);

namespace App\Initialization;

use App\Middleware\AuthorizationMiddleware;
use Slim\App;

class MiddlewareInit
{
    public static function init(App $app): void
    {
        $app->add(AuthorizationMiddleware::class);
        $app->addErrorMiddleware(true, true, true); //TODO: Own error handler
    }
}
