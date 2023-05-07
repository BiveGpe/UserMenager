<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById;

use Infrastructure\Common\Interfaces\DocInterface;

//TODO: other responses, headers to responses
//TODO: password minimal length
//TODO: Params and Properties to Components

/**
 * @OA\Get(
 *     summary="getUserById",
 *     path="/api/users/{id}",
 *     tags={"User"},
 *     description="Get user by id",
 *     @OA\Parameter(
 *         name="Authorization",
 *         in="header",
 *         description="Token",
 *         required=true,
 *         @OA\Schema(
 *             type="string",
 *         ),
 *     ),
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="User id",
 *         required=true,
 *         @OA\Schema(
 *             type="integer",
 *         ),
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Success",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 type="object",
 *                 required={
 *                     "id",
 *                     "firstname",
 *                     "lastname",
 *                     "email",
 *                     "password",
 *                     "createdAt",
 *                     "updatedAt",
 *                     "games",
 *                 },
 *                 @OA\Property(
 *                     property="id",
 *                     description="User id",
 *                     type="integer",
 *                     format="PostiveInteger",
 *                     minimum=0,
 *                     exclusiveMinimum=true,
 *                     example=1,
 *                 ),
 *                 @OA\Property(
 *                     property="firstname",
 *                     description="User firstname",
 *                     type="string",
 *                     example="Maciek",
 *                 ),
 *                 @OA\Property(
 *                     property="lastname",
 *                     description="User lastname",
 *                     type="string",
 *                     example="Kowalski",
 *                 ),
 *                 @OA\Property(
 *                     property="email",
 *                     description="User email",
 *                     type="string",
 *                     example="maciekkowalski@mail.com",
 *                 ),
 *                 @OA\Property(
 *                     property="password",
 *                     description="User password",
 *                     type="string",
 *                     example="zaq1@WSX",
 *                 ),
 *                 @OA\Property(
 *                     property="createdAt",
 *                     description="When user was created",
 *                     type="string",
 *                     format="date-time",
 *                     example="2023-04-05 21:48:31",
 *                 ),
 *                 @OA\Property(
 *                     property="updatedAt",
 *                     description="When user was updated",
 *                     type="string",
 *                     format="date-time",
 *                     example="2023-04-05 21:48:31",
 *                 ),
 *                 @OA\Property(
 *                     property="games",
 *                     description="User games",
 *                     type="array",
 *                     @OA\Items(
 *                         type="object",
 *                         required={
 *                             "id",
 *                             "name",
 *                             "description",
 *                             "createdAt",
 *                             "updatedAt",
 *                         },
 *                         @OA\Property(
 *                             property="id",
 *                             description="Game id",
 *                             type="integer",
 *                             format="PostiveInteger",
 *                             minimum=0,
 *                             exclusiveMinimum=true,
 *                             example=1,
 *                         ),
 *                         @OA\Property(
 *                             property="name",
 *                             description="Game name",
 *                             type="string",
 *                             example="Minecraft",
 *                         ),
 *                         @OA\Property(
 *                             property="description",
 *                             description="Game description",
 *                             type="string",
 *                             example="Minecraft is a sandbox video game created by Swedish game developer Markus Persson and released by Mojang in 2011.",
 *                         ),
 *                         @OA\Property(
 *                             property="createdAt",
 *                             description="When user was created",
 *                             type="string",
 *                             format="date-time",
 *                             example="2023-04-05 21:48:31",
 *                         ),
 *                         @OA\Property(
 *                             property="updatedAt",
 *                             description="When user was updated",
 *                             type="string",
 *                             format="date-time",
 *                             example="2023-04-05 21:48:31",
 *                         ),
 *                     ),
 *                 ),
 *             ),
 *         ),
 *     ),
 * ),
 */
class Doc implements DocInterface
{
}
