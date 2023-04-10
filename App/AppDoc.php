<?php

namespace App;

use Infrastructure\Common\Interfaces\DocInterface;

/**
 * @OA\OpenApi(
 *     openapi="3.1.0",
 *     @OA\Info(
 *         title="UserController",
 *         version="1.0.0",
 *     ),
 *     @OA\Server(
 *         url="http://192.168.0.69:2137",
 *         description="Development server",
 *     ),
 * ),
 */

class AppDoc implements DocInterface
{
}
