<?php

declare(strict_types=1);

namespace App\Settings;

use DI\Container;
use Infrastructure\RequestMenager as RequestConfigProvider;
use DI;

class DependenciesInjector
{
    public static function init(Container $container): array
    {
        return [
            'RequestControlerConfig' => RequestControlerConfig::getConfig(),

            RequestConfigProvider\Config::class => DI\factory(function ($config) {
                return new RequestConfigProvider\Config($config);

            })->parameter('config', DI\get('RequestControlerConfig')),
        ];
    }
}
