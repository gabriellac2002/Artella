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
<<<<<<< HEAD
=======
    private $countOperation = false;
>>>>>>> main


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

<<<<<<< HEAD
=======
    public function count(string $query) {
        $baseQuery = "SELECT count(".$query.") FROM ".$this->table;
        $this->rootQuery = $baseQuery;
        $this->countOperation = true;
        return $this;
    }

>>>>>>> main
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
        $query = "INSERT INTO ".$this->table;
        $uniqueArray = [];
        $localIndex = 0;
        if(gettype($values[0]) !== "array") {
            $uniqueArray = $values;
            $query = $query." values(default,";
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
        }
        else {
            $query = $query." values";
            for($i = 0; $i < count($values); $i++) {
                $query = $query." (default,";
                $params = "";
                for($b = 0; $b < count($values[$i]); $b++) {
                    if($b == count($values[$i]) - 1) {
                        $params = $params."?";
                    }
                    else {
                        $params = $params."?,";
                    }
                    $uniqueArray[$localIndex] = $values[$i][$b];
                    $localIndex++;
                }
                if($i == count($values) - 1) {
                    $query = $query.$params.")";
                }
                else {
                    $query = $query.$params."),";
                }
            }
        }
        $statement = $this->pdo->prepare($query);
        $statement->execute($uniqueArray);
        $this->cleanup();
        return $this;
    }

    public function cleanup() {
        $this->table = "";
        $this->storedValues = [];
        $this->rootQuery = "";
        $this->index = 0;
<<<<<<< HEAD
    }

    public function commit() {
        $statement = $this->pdo->prepare($this->rootQuery);
        $statement->execute($this->storedValues);
        $this->cleanup();
        return $statement->fetchAll();
=======
        $this->countOperation = false;
    }

    public function commit() {
        if(!$this->countOperation) {
            $statement = $this->pdo->prepare($this->rootQuery);
            $statement->execute($this->storedValues);
            $this->cleanup();
            return $statement->fetchAll();
        }
        else {
            $statement = $this->pdo->prepare($this->rootQuery);
            $statement->execute($this->storedValues);
            $this->cleanup();
            return $statement->fetchColumn();
        }
    }

    public function commitCount() {
        
>>>>>>> main
    }

    public function selectAll()
    {
      
    }

    public function update($names, $values)
    {
        $this->rootQuery = "UPDATE ".$this->table." set ";
        for($i = 0; $i < count($names); $i++) {
            if($i == count($names) - 1) {
                $this->rootQuery = $this->rootQuery.$names[$i]." = ?";
            }
            else {
                $this->rootQuery = $this->rootQuery.$names[$i]." = ?, ";
            }
            $this->storedValues[$this->index] = $values[$i];
            $this->index++;
        }
        return $this;
    }

    public function delete()
    {
        $this->rootQuery = "DELETE FROM ".$this->table;
        return $this;
    }

    public function join($table, $rootColumn, $clause, $foreignColumn) {
        $this->rootQuery = $this->rootQuery." inner join ".$table." on ".$table
        .".".$foreignColumn." ".$clause." ".$this->table.".".$rootColumn;
        return $this;
    }

    public function limit($rowCount, $offset) {
        $this->rootQuery = $this->rootQuery." limit ".$rowCount.", ".$offset;
        return $this;
    }

    public function read()
    {
      
    }
}