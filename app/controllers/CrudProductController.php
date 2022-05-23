<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Core\Database\QueryBuilder;

class CrudProductController
{
    protected $queryBuilder;
    function __construct()
    {
        $this->queryBuilder = new QueryBuilder();
    }

    public function index()
    {
        if($_GET == "")
        $prepare = $this->queryBuilder->table("products")
            ->select("*");
            
        else $prepare = $this->queryBuilder->table("products") //TODO buscar com filtro
        ->select("*");

        return view('admin/adminproducts', ['products' => $prepare->commit()]);
    }

    public function show(){
    }

    public function create()
    {
        var_dump($_POST);
    }


    public function store(){
    }

    public function edit(){
    }

    public function update(){
    }

    public function delete(){
    }
}
