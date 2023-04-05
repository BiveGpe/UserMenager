<?php

declare(strict_types = 1);

namespace App\Initialization;

use App\Settings\ContainerDependencies;
use DI\Container;
use DI\ContainerBuilder;

class ContainerInit
{
    public static function buildContainer(): Container
    {
        $builder = new ContainerBuilder();
        $builder->addDefinitions(ContainerDependencies::getDependecies());

        return $builder->build();
    }
}
