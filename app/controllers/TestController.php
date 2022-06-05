<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Core\Database\QueryBuilder;

class TestController
{
    protected $queryBuilder;

    public function __construct() {
        $this->queryBuilder = new QueryBuilder();
    }

    public function index()
    {
        echo ceil($this->queryBuilder->table("products")->count("*")->commit() / 10);
    }

    public function show()
    {

    }

    public function create()
    {
        $this->queryBuilder->table("products")->insert([
            ['Produto 8', 20.75, 2, 'Descrição generica 1'],
            ['Produto 9', 25.75, 3, 'Descrição generica 2'],
            ['Produto 13', 28.75, 2, 'Descrição generica 3'],
            ['Produto 42', 24.75, 4, 'Descrição generica 4'],
        ]);
        echo "Inserted";
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