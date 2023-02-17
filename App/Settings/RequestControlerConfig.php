<?php

declare(strict_types=1);

namespace App\Settings;

/* Class with config to manage request by attributes with Value Object.
 * In this config file function get Config sends Array with first key Category,
 * second Action, third key is const from Config providers that are keys to files that manage request.
 * Expected data:
 *  Category::USER => [
 *      Action::ADD_USER => [
 *          ConfigProvider::REQUEST_CONSTRAINS => ExampleClass::class,
 *          ConfigProvider::CQ_FACTORY => ExampleClass::class,
 *          ConfigProvider::SERVICE => ExampleClass::class,
 *          ConfigProvider::REPOSITORY => ExampleClass::class,
 *          ConfigProvider::RESPONSE_CONSTRAINS => ExampleClass::class,
 *          ConfigProvider::API_DOC => ExampleClass::class,
 *      ],
 *
 *
 */

use Infrastructure\Common\ValueObject\Action;
use Infrastructure\Common\ValueObject\Category;

class RequestControlerConfig
{
    public static function getConfig(): array
    {
        return [
            Category::USER => [
                Action::GET_USER_BY_ID => [

                ],
            ],
        ];
    }
}