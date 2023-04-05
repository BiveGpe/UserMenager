<?php

declare(strict_types = 1);

namespace App\Initialization;

use Symfony\Component\Dotenv\Dotenv;

class EnvInit
{
    public const DEFAULT_ENV = '.env';

    public static function init(string $env): void
    {
        $dotenv = new Dotenv();
        $dotenv->load(__DIR__ . '/../../' . $env);
    }
}
