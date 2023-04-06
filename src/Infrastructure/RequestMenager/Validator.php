<?php

declare(strict_types = 1);

namespace Infrastructure\RequestMenager;

use Infrastructure\Common\Abstracts\AbstractDTO;
use Infrastructure\Common\Interfaces\ConstraintsInterface;
use Infrastructure\Common\Interfaces\DocInterface;
use Slim\Http\ServerRequest;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class Validator
{
    private ValidatorInterface $validator;

    public function __construct()
    {
        $this->validator = Validation::createValidator();
    }

    public function validateDoc(DocInterface $doc): void
    {
    }

    public function validateRequest(ServerRequest $request, ConstraintsInterface $constraints): void
    {
        $data = $request->getParams();

        $errors = $this->validator->validate($data, $constraints->get());

        if (count($errors) > 0) {
            $errorsString = (string) $errors;

            throw new \Exception($errorsString);
        }
    }

    public function validateDTOWithConstraints(AbstractDTO $object, ConstraintsInterface $constraints): void
    {
    }
}
