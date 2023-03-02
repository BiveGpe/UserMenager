<?php

declare(strict_types=1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Interfaces\ConstraintsInterface;

class ResponseConstraints implements ConstraintsInterface
{
    public function get(): array
    {
        return [];
    }
}
