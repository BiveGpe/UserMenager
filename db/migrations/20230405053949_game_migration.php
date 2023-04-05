<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class GameMigration extends AbstractMigration
{
    public function up(): void
    {
        $sql = <<<SQL
            create table public.game
            (
                id          serial
                    constraint game_pk
                    primary key,
                name        varchar(128)                           not null,
                description varchar(1024)                          not null,
                created_at  timestamp with time zone default now() not null,
                updated_at  timestamp with time zone default now() not null,
                deleted     boolean                  default false not null
            );
        SQL;

        $this->execute($sql);
    }

    public function down(): void
    {
        $sql = <<<SQL
            drop table public.game;
        SQL;

        $this->execute($sql);
    }
}
