<?php

namespace Models;

class Model
{
    private $pdo;
    protected $table;
    protected $column;
    protected $value;

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

    public function where($column, $value)
    {
        $statement = $this->getPDO()->query("SELECT * FROM {$this->table} WHERE {$column} = {$value}");
        return $statement->fetchAll();
    }

    public function delete($column, $value)
    {
        $statement = $this->getPDO()->query("DELETE FROM {$this->table} WHERE {$column} = {$value}");
        return $statement->fetchAll();
    }

    public function insert($sql, $values)
    {
        return $this->getPDO()->prepare("INSERT INTO {$this->table} SET {$sql}")->execute($values);
    }

    public function update($column, $value, $sql, $values)
    {
        return $this->getPDO()->prepare("UPDATE {$this->table} SET {$sql} WHERE {$column} = {$value}")->execute($values);
    }
}
