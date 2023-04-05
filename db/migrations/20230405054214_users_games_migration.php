<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UsersGamesMigration extends AbstractMigration
{
    public function up(): void
    {
        $sql = <<<SQL
            create table public.users_games
            (
                id         serial
                    constraint users_games_pk
                    primary key,
                user_id    integer                                not null
                    constraint users
                    references public."user",
                game_id    integer                                not null
                    constraint games
                    references public.game,
                created_at timestamp with time zone default now() not null,
                deleted    boolean                  default false not null
            );
        SQL;

        $this->execute($sql);
    }

    public function down(): void
    {
        $sql = <<<SQL
            drop table public.users_games;
        SQL;

        $this->execute($sql);
    }
}
