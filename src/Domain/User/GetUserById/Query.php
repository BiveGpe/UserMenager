<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Abstracts\AbstractQuery;
use Infrastructure\Common\ValueObject\Action;
use Infrastructure\Common\ValueObject\Category;
use Infrastructure\Common\ValueObject\PositiveInteger;

class Query extends AbstractQuery
{
    private PositiveInteger $id;

    public function __construct(
        PositiveInteger $id,
        Category $category,
        Action $action,
    ) {
        $this->id = $id;
        parent::__construct(
            $category,
            $action,
        );
    }

    public function getArray(): array
    {
        return [
            'id' => $this->getId(),
        ];
    }

    public function getId(): PositiveInteger
    {
        return $this->id;
    }
}
