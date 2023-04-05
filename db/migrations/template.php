<?php

declare(strict_types = 1);

use Phinx\Migration\AbstractMigration;

final class template extends AbstractMigration
{
    public function up(): void
    {
        $sql = <<<SQL
            SQL;

        $this->execute($sql);
    }

    public function down(): void
    {
        $sql = <<<SQL
            SQL;

        $this->execute($sql);
    }
}
