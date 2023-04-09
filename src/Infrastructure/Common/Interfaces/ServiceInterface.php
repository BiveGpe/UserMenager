<?php

declare(strict_types = 1);

namespace Infrastructure\Common\Interfaces;

use Infrastructure\Common\Abstracts\AbstractDTO;

interface ServiceInterface
{
    public function getDTO(CQInferface $cq, ConstraintsInterface $constraints): AbstractDTO;
}
