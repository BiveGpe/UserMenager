<?php

declare(strict_types = 1);

namespace Infrastructure\RequestMenager;

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
        $builder = Validation::createValidatorBuilder();
        $builder->addMethodMapping('loadValidatorMetadata');
        $this->validator = $builder->getValidator();
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

    public function validateObjectWithMetadata(object $object): void
    {
        $errors = $this->validator->validate($object);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            //TODO: difrent exception for each object type
            throw new \Exception($errorsString);
        }
    }
}
