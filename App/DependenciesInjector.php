<?php

declare(strict_types=1);

namespace App;

use Psr\Container\ContainerInterface;

class DependenciesInjector
{
    static public function init(ContainerInterface $container): void
    {
        print_r($container);
    }
}
