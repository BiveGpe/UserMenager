<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Interfaces\DocInterface;

/**
 * @OA\Info(
 *     title="My API",
 *     version="1.0.0",
 *     description="This is my API description"
 * ),
 * @OA\Get(
 *     path="/api/users",
 *     summary="Get all users",
 *     @OA\Response(response="200", description="Success")
 * )
 */
class Doc implements DocInterface
{
}
