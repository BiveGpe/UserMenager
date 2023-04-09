<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Constraints\Set\PositiveIntegerVOConstraints;
use Infrastructure\Common\Interfaces\ConstraintsInterface;
use Symfony\Component\Validator\Constraints\Collection;

class RequestConstraints implements ConstraintsInterface
{
    public function get(): Collection
    {
        return new Collection([
            'allowExtraFields' => true,
            'fields' => [
                'id' => PositiveIntegerVOConstraints::get(),
            ],
        ]);
    }
}
