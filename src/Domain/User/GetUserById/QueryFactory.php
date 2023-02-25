<?php

declare(strict_types=1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Abstracts\AbstractQuery;
use Infrastructure\Common\Interfaces\CQFactoryInterface;
use Slim\Http\ServerRequest;

class QueryFactory implements CQFactoryInterface
{

    public function create(ServerRequest $request): AbstractQuery
    {
        return new Query();
    }
}
