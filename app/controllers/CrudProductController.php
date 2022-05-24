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
        
    $prepare = $this->queryBuilder->table("products")->select("*");
    $aux = $prepare->commit();
    $categorys = $this->queryBuilder->table("categories")->select("*"); 
            
        return view('admin/adminproducts', ['products' => $aux, 'categorys' => $categorys->commit()]);
        
    }

    public function search(){
        $seach = $_GET['search'];
        $prepare = $this->queryBuilder->table("products") //TODO buscar com filtro
        ->select("*")->where("name","=", "$seach");
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
