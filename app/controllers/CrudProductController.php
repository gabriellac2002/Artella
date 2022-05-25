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
        ->select("*")->where("name"," like", "$seach%");
        return view('admin/adminproducts', ['products' => $prepare->commit()]);

    }

    public function show(){
    }

    public function create(){

        $this->queryBuilder->table("products")->insert([$_POST['name'],$_POST['price'], $_POST['selection-category'],$_POST['description']]);
        header("Location: /admin/products");

    }


    public function store(){
    }



    public function update(){
        var_dump($_POST);
        $prepare = $this->queryBuilder->table("products")->update(['name','price'], [$_POST['name'],$_POST['price']]);

        // header("Location: /admin/products");


    }

    public function delete(){

        $prepare = $this->queryBuilder->table("products")->delete()->where('id','=',$_POST['id']);
        $prepare->commit();
        header("Location: /admin/products");

    }
}
