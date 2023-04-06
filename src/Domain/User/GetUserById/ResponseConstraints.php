<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Interfaces\ConstraintsInterface;
use Symfony\Component\Validator\Constraints\Collection;

class ResponseConstraints implements ConstraintsInterface
{
    public function get(): Collection
    {
        return new Collection([

        ]);
    }
}
