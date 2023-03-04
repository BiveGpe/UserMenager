<?php

declare(strict_types=1);

namespace Infrastructure\Common\Abstracts;

use Infrastructure\Common\Interfaces\CQInferface;
use Infrastructure\Common\ValueObject\Action;
use Infrastructure\Common\ValueObject\Category;

abstract class AbstractQuery implements CQInferface
{
    private Category $category;

    private Action $action;

    public function __construct(Category $category, Action $action)
    {
        $this->category = $category;
        $this->action = $action;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function getAction(): Action
    {
        return $this->action;
    }
}
