<?php

declare(strict_types = 1);

namespace Infrastructure\Middleware\Authorization;

use Exception;
use Lukasoppermann\Httpstatus\Httpstatuscodes;

class AuthorizationException extends Exception
{
    const UNAUTHORIZED = 'Unauthorized';

    public function __construct()
    {
        parent::__construct(
            self::UNAUTHORIZED,
            Httpstatuscodes::HTTP_UNAUTHORIZED,
        );
    }
}
