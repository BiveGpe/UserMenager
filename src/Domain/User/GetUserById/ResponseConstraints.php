<?php

declare(strict_types = 1);

namespace Domain\User\GetUserById;

use DateTime;
use Infrastructure\Common\Constraints\Custom\CanCreateValueObject;
use Infrastructure\Common\Constraints\Set\PositiveIntegerVOConstraints;
use Infrastructure\Common\Interfaces\ConstraintsInterface;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Optional;
use Symfony\Component\Validator\Constraints\Type;

class ResponseConstraints implements ConstraintsInterface
{
    public function get(): Collection
    {
        return new Collection([
            'allowExtraFields' => true,
            'fields' => [
                'id' => PositiveIntegerVOConstraints::get(),
                'firstname' => [
                    new NotBlank(),
                    new Type('string'),
                ],
                'lastname' => [
                    new NotBlank(),
                    new Type('string'),
                ],
                'username' => [
                    new NotBlank(),
                    new Type('string'),
                ],
                'email' => [
                    new NotBlank(),
                    new Type('string'),
                ],
                'password' => [
                    new NotBlank(),
                    new Type('string'),
                ],
                'created_at' => [
                    new NotBlank(),
                    new Type('string'),
                    new CanCreateValueObject(DateTime::class),
                ],
                'updated_at' => [
                    new NotBlank(),
                    new Type('string'),
                    new CanCreateValueObject(DateTime::class),
                ],
                'games' => [
                    new Type('array'),
                    new All([
                        new Optional([
                            new Collection([
                                'allowExtraFields' => true,
                                'fields' => [
                                    'id' => PositiveIntegerVOConstraints::get(),
                                    'name' => [
                                        new NotBlank(),
                                        new Type('string'),
                                    ],
                                    'description' => [
                                        new NotBlank(),
                                        new Type('string'),
                                    ],
                                    'created_at' => [
                                        new NotBlank(),
                                        new Type('string'),
                                        new CanCreateValueObject(DateTime::class),
                                    ],
                                    'updated_at' => [
                                        new NotBlank(),
                                        new Type('string'),
                                        new CanCreateValueObject(DateTime::class),
                                    ],
                                ],
                            ]),
                        ]),
                    ]),
                ],
            ],
        ]);
    }
}
