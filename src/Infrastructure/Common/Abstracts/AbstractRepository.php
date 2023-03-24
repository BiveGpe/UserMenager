<?php

declare(strict_types=1);

namespace Infrastructure\Common\Abstracts;

use PDO;

class AbstractRepository
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('pgsql:host=192.168.0.69;port=5432;dbname=UserController', 'postgres', 'postgres');
    }
}
