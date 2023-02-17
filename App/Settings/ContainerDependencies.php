<?php

declare(strict_types=1);

namespace App\Settings;

use DI;
use Infrastructure\RequestMenager\Config;
use Infrastructure\RequestMenager\ConfigProvider;
use Infrastructure\RequestMenager\RequestMenager;

class ContainerDependencies
{
    public static function getDependecies(): array
    {
        return [
            'RequestControlerConfig' => DI\factory(function () {
                return RequestControlerConfig::getConfig();
            }),

            ConfigProvider::class => DI\factory(function ($config) {
                return new ConfigProvider($config);
            })->parameter('config', DI\get('RequestControlerConfig')),

            Config::class => DI\factory(function ($configProvider) {
                return new Config($configProvider);
            })->parameter('configProvider', DI\get(ConfigProvider::class)),

            RequestMenager::class => DI\Factory(function ($config) {
                return new RequestMenager($config);
            })->parameter('config', DI\get(Config::class)),
        ];
    }
}
