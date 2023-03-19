<?php

declare(strict_types = 1);

namespace Infrastructure\RequestMenager;

use Infrastructure\Common\Abstracts\AbstractDTO;
use Infrastructure\Common\Interfaces\ConstraintsInterface;
use Infrastructure\Common\Interfaces\DocInterface;
use Slim\Http\ServerRequest;

class Validator
{
    public function validateDoc(DocInterface $doc): void
    {
    }

    public function validateRequest(ServerRequest $request, ConstraintsInterface $constraints): void
    {
    }

    public function validateDTOWithConstraints(AbstractDTO $object, ConstraintsInterface $constraints): void
    {
    }
}
