<?php

namespace App\Core\Db;

use Exception;
use PDO;
use PDOException;

class Mysql implements DBInterface
{
    protected $pdo;

    public function connect($config)
    {
        try {
            $this->pdo = new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $error) {
            die(render($error->getMessage()));
        }
    }

    public function query(string $query, array $parameters): array
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute($parameters);

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectAll(string $table, string $model = null): array
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $model ? "App\\Models\\{$model}" : 'stdClass');
    }

    public function insert(string $table, array $parameters = []): void
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $error) {
            unset($error);

            die('Something went wrong.');
        }
    }
}
