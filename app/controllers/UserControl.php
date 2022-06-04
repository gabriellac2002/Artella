<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Core\Database\QueryBuilder;

class UserControl
{
    protected $queryBuilder;
    function __construct()
    {
        $this->queryBuilder = new QueryBuilder();
    }
    public function view()
    {
        $users = $this->queryBuilder->table('users')->select("*");
        $users = $users->commit();
        $tabela = [
            'users' => $users,
        ];

        return view('admin/viewUsuario', $tabela);
    }
    public function index()
    {

    }

    public function show()
    {

    }

    public function create()
    {
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];

        $this->queryBuilder->table("users")->insert([$_POST['name'], $_POST['email'], $_POST['password']]);

        header('Location: /admin/viewusuario');
    }

    public function store()
    {

    }

    public function edit()
    {

        $this->queryBuilder->table("users")->update(['name', 'email','password'], [$_POST['name'], $_POST['email'], $_POST['password']])->where('id', '=', $_POST['id'])->commit();

        header('Location: /admin/viewusuario');
    }

    public function update()
    {
        
    }

    public function delete()
    {
        $this->queryBuilder->table("users")->delete()->where('id', '=', $_POST['id'])->commit();


        header('Location: /admin/viewusuario');
    }
}