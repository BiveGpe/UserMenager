<?php

declare(strict_types = 1);

namespace Infrastructure\Common\Validators;

use Infrastructure\Common\Interfaces\ConstraintsInterface;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ServiceValidator
{
    //TODO: abstract validator
    private ValidatorInterface $validator;

    public function __construct()
    {
        $this->validator = Validation::createValidator();
    }

    public function validateArrayWithConstraints(array $data, ConstraintsInterface $constraints): void
    {
        $errors = $this->validator->validate($data, $constraints->get());

        if (count($errors) > 0) {
            $errorsString = (string) $errors;

            throw new \Exception($errorsString); //TODO: own exception
        }
    }
}
