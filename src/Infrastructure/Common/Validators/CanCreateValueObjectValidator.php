<?php

declare(strict_types = 1);

namespace Infrastructure\Common\Validators;

use Infrastructure\Common\Constraints\Custom\CanCreateValueObject;
use InvalidArgumentException;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class CanCreateValueObjectValidator extends ConstraintValidator
{
    public function validate(mixed $value, Constraint $constraint)
    {
        if (!$constraint instanceof CanCreateValueObject) {
            throw new UnexpectedTypeException($constraint, CanCreateValueObject::class);
        }

        try {
            new ($constraint->getClass())($value);
        } catch (InvalidArgumentException $e) {
            $this->context->buildViolation($constraint->getMessage())
                ->setParameter('{{ value }}', $value)
                ->setParameter('{{ class }}', $constraint->class)
                ->addViolation();
        }
    }
}
