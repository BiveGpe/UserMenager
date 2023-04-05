<?php

declare(strict_types = 1);

namespace App\Settings;

/* Class with config to manage request by attributes with Value Object.
 * In this config file function get Config sends Array with first key Category,
 * second Action, third key is const from Config providers that are keys to files that manage request.
 * Expected data:
 *  Category::USER => [
 *      Action::ADD_USER => [
 *          Config::API_DOC => Doc::class,
 *          Config::REQUEST_CONSTRAINTS => RequestConstraints::class,
 *          Config::CQ_FACTORY => QueryFactory::class,
 *          Config::SERVICE => Service::class,
 *          Config::REPOSITORY => QueryRepository::class,
 *          Config::DTO_FACTORY => DTOFactory::class,
 *          Config::RESPONSE_CONSTRAINTS => ResponseConstraints::class,
 *      ],
 *  ],
 *
 */

use Domain\User\GetUserById\Doc;
use Domain\User\GetUserById\DTOFactory;
use Domain\User\GetUserById\QueryFactory;
use Domain\User\GetUserById\RequestConstraints;
use Domain\User\GetUserById\ResponseConstraints;
use Domain\User\GetUserById\Service;
use Domain\User\Repository\QueryRepository;
use Infrastructure\Common\ValueObject\Action;
use Infrastructure\Common\ValueObject\Category;
use Infrastructure\RequestMenager\Config;

class RequestMenagerConfig
{
    public static function getConfig(): array
    {
        return [
            Category::USER => [
                Action::GET_USER_BY_ID => [
                    Config::API_DOC => Doc::class,
                    Config::REQUEST_CONSTRAINTS => RequestConstraints::class,
                    Config::CQ_FACTORY => QueryFactory::class,
                    Config::SERVICE => Service::class,
                    Config::REPOSITORY => QueryRepository::class,
                    Config::DTO_FACTORY => DTOFactory::class,
                    Config::RESPONSE_CONSTRAINTS => ResponseConstraints::class,
                ],
            ],
        ];
    }
}
