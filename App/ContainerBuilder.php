<?php

declare(strict_types=1);

namespace App;

use App\Settings\ContainerDependencies;
use DI\Container;

class ContainerBuilder
{
    /**
     * @throws \Exception
     */
    public static function buildContainer(): Container
    {
        $builder = new \DI\ContainerBuilder();
        $builder->addDefinitions(ContainerDependencies::getDependecies());
        return $builder->build();
    }
}