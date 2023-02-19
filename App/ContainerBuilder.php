<?php

declare(strict_types=1);

namespace App;

use App\Settings\ContainerDependencies;
use DI\Container;

class ContainerBuilder
{
    public static function buildContainer(): Container
    {
        $builder = new \DI\ContainerBuilder();
        $builder->addDefinitions(ContainerDependencies::getDependecies());
        return $builder->build();
    }
}
