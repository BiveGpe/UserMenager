<?php

namespace App;

use Infrastructure\Common\Interfaces\DocInterface;

//TODO: adds Tags and Components

/**
 * @OA\OpenApi(
 *     openapi="3.1.0",
 *     @OA\Info(
 *         title="UserController",
 *         description="Communicate with the App by JSON requests and responses, each request must contain Authorization header with token.",
 *         version="1.0.0",
 *         @OA\Contact(
 *             name="Wiktor Rapacz",
 *             email="wiktorrapacz@gmail.com",
 *         ),
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
