<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Interfaces\DocInterface;

/**
 * @OA\Get(
 *     path="/api/users",
 *     summary="Get all users",
 *     @OA\Response(response="200", description="Success")
 * )
 */

class Doc implements DocInterface
{
}
