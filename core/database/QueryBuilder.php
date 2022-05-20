<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    protected $pdo;
    protected $table = "";
    protected $rootQuery = "";
    protected $storedValues = array();
    protected $index = 0;


    public function __construct()
    {
        $dbConfig = [
            'connection' => "mysql:dbname=artella;host=127.0.0.1",
            "name" => "artella",
            "username" => "root",
            "password" => "",
            "options" => [],
        ];
        $this->pdo = Connection::make($dbConfig);
    }

    public function getQuery() {
        return $this->rootQuery;
    }

    public function table(string $name) {
        $this->table = $name;
        return $this;
    }

    public function select(string $query) {
        $baseQuery = "SELECT ".$query." FROM ".$this->table;
        $this->rootQuery = $baseQuery;
        return $this;
    }

    public function where(string $columnName, string $condition, $value) {
        if(!empty($this->rootQuery)) {
            if(strpos($this->rootQuery, "WHERE") === false) {
                $query = $this->rootQuery." WHERE ".$columnName." ".$condition." ?";
                $this->rootQuery = $query;
                $this->storedValues[$this->index] = $value;
                $this->index++;
                return $this;
            }
            else {
                $query = $this->rootQuery." AND ".$columnName." ".$condition." ?";
                $this->rootQuery = $query;
                $this->storedValues[$this->index] = $value;
                $this->index++;
                return $this;
            }
        }
    }

    public function orWhere(string $columnName, string $condition, $value) {
        if(!empty($this->rootQuery)) {
            if(strpos($this->rootQuery, "WHERE") === false) {
                $query = $this->rootQuery." WHERE ".$columnName." ".$condition." ?";
                $this->rootQuery = $query;
                $this->storedValues[$this->index] = $value;
                $this->index++;
                return $this;
            }
            else {
                $query = $this->rootQuery." OR ".$columnName." ".$condition." ?";
                $this->rootQuery = $query;
                $this->storedValues[$this->index] = $value;
                $this->index++;
                return $this;
            }
        }
    }

    public function insert($values) {
        $query = "INSERT INTO ".$this->table." values(default,";
        $params = "";
        for($i = 0; $i < count($values); $i++) {
            if($i == count($values) - 1) {
                $params = $params."?";
            }
            else {
                $params = $params."?,";
            }
        }
        $query = $query.$params.")";
        $statement = $this->pdo->prepare($query);
        $statement->execute($values);
        
    }

    public function commit() {
        $statement = $this->pdo->prepare($this->rootQuery);
        $statement->execute($this->storedValues);
        $this->table = "";
        $this->storedValues = [];
        $this->rootQuery = "";
        $this->index = 0;
        return $statement->fetch();
    }

    public function selectAll()
    {
      
    }

    public function update($names, $values)
    {
        $this->rootQuery = "UPDATE ".$this->table." set ";
        for($i = 0; $i < count($names); $i++) {
            
        }
        return $this;
    }

    public function delete()
    {
      
    }

    public function read()
    {
      
    }
}
