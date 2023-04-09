<?php

declare(strict_types=1);

require("vendor/autoload.php");

$openapi = (new OpenApi\Generator)
    ->generate(Symfony\Component\Finder\Finder::create()->files()->in(['src', 'App']))
;

$docFile = fopen(__DIR__ . "/docs/openapi.json", "w") or die("Unable to open file!");
fwrite($docFile, $openapi->toJson());
fclose($docFile);
