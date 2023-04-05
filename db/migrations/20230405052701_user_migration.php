<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UserMigration extends AbstractMigration
{
    public function up(): void
    {
        $sql = <<<SQL
            create table public."user"
            (
                id         serial
                    constraint user_pk
                    primary key,
                firstname  varchar(64)                            not null,
                lastname   varchar(64)                            not null,
                username   varchar(64)                            not null,
                email      varchar(128)                           not null,
                password   varchar(128)                           not null,
                created_at timestamp with time zone default now() not null,
                updated_at timestamp with time zone default now() not null,
                deleted    boolean                  default false not null
            );
        SQL;

        $this->execute($sql);
    }

    public function down(): void
    {
        $sql = <<<SQL
            drop table public."user";
        SQL;

        $this->execute($sql);
    }
}
