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
        
        usort($categorias, function ($cat1, $cat2) {
            return $cat1["id"] > $cat2["id"];
        });

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
        $prepare=$this->queryBuilder->table("categories")->update(['name'], [$_POST['name']])->where('id', '=', $_POST['id']);
        $prepare->commit();
        header('Location: /admin/categorias');
    }

    public function update()
    {
        
    }

    public function delete()
    {
        $this->queryBuilder->table("categories")->delete()->where('id', '=', $_POST['id'])->commit();
        header('Location: /admin/categorias');
    }
    public function search()
    {
        $seach = $_GET['search'];
        $categorias = $this->queryBuilder->table("categories")->select("*")->where("name", " like", "$seach%");
        $categorias = $categorias->commit();

        usort($categorias, function ($cat1, $cat2) {
            return $cat1["id"] > $cat2["id"];
        });

        $tables=[
            'categorias'=>$categorias,
        ];

        return view('admin/view_adm_categorias', $tables);
    }
}