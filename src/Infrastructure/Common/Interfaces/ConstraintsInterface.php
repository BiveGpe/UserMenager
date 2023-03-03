<?php

declare(strict_types=1);

namespace Infrastructure\Common\Interfaces;

interface ConstraintsInterface
{
    public function get(): array;
}
