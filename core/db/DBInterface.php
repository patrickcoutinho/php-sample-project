<?php

namespace App\Core\Db;

interface DBInterface
{
    public function connect(array $config);

    public function query(string $query, array $parameters): array;

    public function selectAll(string $table, string $model = null): array;

    public function insert(string $table, array $parameters = []): void;
}
