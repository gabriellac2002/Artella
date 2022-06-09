<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Core\Database\QueryBuilder;

class Categorias_Controller
{
    protected $queryBuilder;
    function __construct()
    {
        $this->queryBuilder = new QueryBuilder();
    }

    public function index()
    {
        $categorias=$this->queryBuilder->table("categories")->select("*");
        $categorias=$categorias->commit();
        $tables=[
            'categorias'=>$categorias,
        ];
        return view('admin/view_adm_categorias', $tables);
    }

    public function show()
    {

    }

    public function create()
    {
        $parameters = [
            'name' => $_POST['name'],
        ];

        $this->queryBuilder->table("categories")->insert([$_POST['name']]);

        header('Location: /admin/categorias');
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