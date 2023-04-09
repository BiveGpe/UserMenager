<?php

declare(strict_types=1);

require("vendor/autoload.php");

$openapi = \OpenApi\Generator::scan([__DIR__], ['exclude' => ['tests'], 'pattern' => '*.php']);

header('Content-Type: application/json');
echo $openapi->toJson();
