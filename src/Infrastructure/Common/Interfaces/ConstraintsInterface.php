<?php

declare(strict_types = 1);

namespace Infrastructure\Common\Interfaces;

use Symfony\Component\Validator\Constraints\Collection;

interface ConstraintsInterface
{
    public function get(): Collection;
}
