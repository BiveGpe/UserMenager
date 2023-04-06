<?php

declare(strict_types = 1);

namespace Infrastructure\Common\Constraints\Set;

use Infrastructure\Common\Constraints\Custom\CanCreateValueObject;
use Infrastructure\Common\ValueObject\PositiveInteger;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;

class PositiveIntegerVOConstraints
{
    public static function get(): array
    {
        return [
            new NotBlank(),
            new Type('numeric'),
            new CanCreateValueObject(PositiveInteger::class),
        ];
    }
}
