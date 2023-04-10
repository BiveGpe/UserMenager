<?php

declare(strict_types = 1);

namespace App\Settings;

use DI;
use Infrastructure\Common\RoutingStrategy\RequestWithArgsAsQueryResponse;
use Infrastructure\RequestMenager\Config;
use Infrastructure\RequestMenager\ConfigProvider;
use Infrastructure\RequestMenager\RequestMenager;
use Infrastructure\RequestMenager\Validator;

class ContainerDependencies
{
    public static function getDependecies(): array
    {
        return [
            /**
             * RequestMenager
             */
            'RequestMenagerConfig' => DI\factory(function () {
                return RequestMenagerConfig::getConfig();
            }),

            ConfigProvider::class => DI\factory(function ($config) {
                return new ConfigProvider($config);
            })->parameter('config', DI\get('RequestMenagerConfig')),

            Config::class => DI\factory(function ($configProvider) {
                return new Config($configProvider);
            })->parameter('configProvider', DI\get(ConfigProvider::class)),

            RequestMenager::class => DI\Factory(function ($config) {
                return new RequestMenager(
                    $config,
                    new Validator(),
                );
            })->parameter('config', DI\get(Config::class)),
        ];
    }
}
