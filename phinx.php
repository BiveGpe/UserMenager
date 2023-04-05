<?php

declare(strict_types = 1);

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'pgsql',
            'host' => '192.168.0.69',
            'name' => 'UserController',
            'user' => 'postgres',
            'pass' => 'postgres',
            'port' => '5432',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'pgsql',
            'host' => '192.168.0.69',
            'name' => 'UserController',
            'user' => 'postgres',
            'pass' => 'postgres',
            'port' => '5432',
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => 'pgsql',
            'host' => '192.168.0.69',
            'name' => 'UserController',
            'user' => 'postgres',
            'pass' => 'postgres',
            'port' => '5432',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
