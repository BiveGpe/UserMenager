<?php

declare(strict_types = 1);

namespace Infrastructure\Common\Constraints\Custom;

use Infrastructure\Common\Validators\CanCreateValueObjectValidator;
use Symfony\Component\Validator\Constraint;

class CanCreateValueObject extends Constraint
{
    public string $message = 'The value "{{ value }}" cannot be used to create a {{ class }} object.';

    public string $class;

    public function __construct(string $class, ?array $options = null, ?array $groups = null, $payload = null)
    {
        $this->class = $class;
        parent::__construct($options ?? [], $groups, $payload);
    }

    public function getTargets(): string
    {
        return self::PROPERTY_CONSTRAINT;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function validatedBy(): string
    {
        return CanCreateValueObjectValidator::class;
    }
}
