<?php

declare(strict_types = 1);

namespace Domain\User\Repository;

use Infrastructure\Common\Abstracts\AbstractRepository;
use Infrastructure\Common\ValueObject\PositiveInteger;
use PDO;

class QueryRepository extends AbstractRepository
{
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
                deleted
            FROM
                "user"
            WHERE
                id = :id
        SQL;

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute(['id' => $id->getValue()]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserGames(PositiveInteger $id): array
    {
        $sql = <<<'SQL'
            SELECT
                game.id,
                game.name,
                game.description,
                game.created_at,
                game.updated_at,
                game.deleted
            FROM
                game
            JOIN users_games
                ON game.id = users_games.game_id
            WHERE
                users_games.user_id = :id
        SQL;

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute(['id' => $id->getValue()]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
