<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Core\Database\QueryBuilder;

class ExampleController
{
    protected $queryBuilder;

    public function __construct() {
        $this->queryBuilder = new QueryBuilder();
    }

    public function index()
    {
        var_dump($this->queryBuilder->table("users")->select("*")->where("id", '=', 2)
        ->where("name", '=', 'Gustavo')
        ->commit());
    }

    public function show()
    {

    }

    public function create()
    {
 
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        
    }

    public function delete()
    {
 
    }
}