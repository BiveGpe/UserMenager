<?php

declare(strict_types=1);

namespace App\Settings;

/* Class with config to manage request by attributes with Value Object.
 * In this config file function get Config sends Array with first key Category,
 * second Action, third key is const from Config providers that are keys to files that manage request.
 * Expected data:
 *  Category::USER => [
 *      Action::ADD_USER => [
 *          Config::REQUEST_CONSTRAINS => ExampleClass::class,
 *          Config::CQ_FACTORY => ExampleClass::class,
 *          Config::SERVICE => ExampleClass::class,
 *          Config::REPOSITORY => ExampleClass::class,
 *          Config::API_DOC => ExampleClass::class,
 *      ],
 *  ],
 *
 *
 */

use Domain\User\GetUserById\Doc;
use Domain\User\GetUserById\QueryFactory;
use Domain\User\GetUserById\Repository;
use Domain\User\GetUserById\RequestConstrains;
use Domain\User\GetUserById\Service;
use Infrastructure\Common\ValueObject\Action;
use Infrastructure\Common\ValueObject\Category;
use Infrastructure\RequestMenager\Config;

class RequestControlerConfig
{
    public static function getConfig(): array
    {
        return [
            Category::USER => [
                Action::GET_USER_BY_ID => [
                    Config::REQUEST_CONSTRAINS => RequestConstrains::class,
                    Config::CQ_FACTORY => QueryFactory::class,
                    Config::SERVICE => Service::class,
                    Config::REPOSITORY => Repository::class,
                    Config::API_DOC => Doc::class,
                ],
            ],
        ];
    }
}