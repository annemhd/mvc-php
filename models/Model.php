<?php

namespace Models;

class Model
{
    private $pdo;
    protected $table;

    public function __construct($table)
    {
        try {
            $this->pdo = new \PDO('mysql:dbname=app;host=db', 'root', 'root', [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        $this->table = $table;
    }

    public function getPDO()
    {
        return $this->pdo;
    }

    public function all()
    {
        $statement = $this->getPDO()->query("SELECT * FROM {$this->table}");
        return $statement->fetchAll();
    }
}
