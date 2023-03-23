<?php

declare(strict_types = 1);

namespace Domain\User\Repository;

use Infrastructure\Common\Interfaces\RepositoryInterface;
use Infrastructure\Common\ValueObject\PositiveInteger;
use PDO;

class QueryRepository implements RepositoryInterface
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('pgsql:host=192.168.0.69;port=5432;dbname=UserController', 'postgres', 'postgres');
    }

    public function getUserById(PositiveInteger $id): array
    {
        $sql = <<<'SQL'
            SELECT
                id,
                firstname,
                lastname,
                username,
                email,
                password,
                created_at,
                updated_at,
                active
            FROM
                "user"
            WHERE
                id = :id
        SQL;

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute(['id' => $id->getValue()]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data;
    }
}
