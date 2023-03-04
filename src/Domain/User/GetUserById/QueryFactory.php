<?php

declare(strict_types=1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Abstracts\AbstractQuery;
use Infrastructure\Common\Interfaces\CQFactoryInterface;
use Infrastructure\Common\ValueObject\Action;
use Infrastructure\Common\ValueObject\Category;
use Infrastructure\Common\ValueObject\PositiveInteger;
use Slim\Http\ServerRequest;

class QueryFactory implements CQFactoryInterface
{
    public function create(ServerRequest $request): AbstractQuery
    {
        $data = $request->getParams();

        return new Query(
            new PositiveInteger($data['id']),
            $request->getAttribute(Category::class),
            $request->getAttribute(Action::class),
        );
    }
}
