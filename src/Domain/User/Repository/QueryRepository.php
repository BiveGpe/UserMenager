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
                *
            FROM
                "user";
        SQL;

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data;
    }
}
