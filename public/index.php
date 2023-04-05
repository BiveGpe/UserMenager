<?php

declare(strict_types = 1);

use App\AppBuilder;

require __DIR__ . '/../vendor/autoload.php';

try {
    $app = AppBuilder::build();
    $app->run();
} catch (\Exception $e) {
    http_response_code(500);
    echo $e->getMessage();
}
