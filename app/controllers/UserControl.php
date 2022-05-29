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
        //$users = App::get('database')->selectAll('users');
        /*
        $table = [
           'users' => $users,
        ]; 
        */
        $auxUsers = $users->commit();
        return view('admin/viewUsuario', $auxUsers);
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
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        App::get('database')->insert('users', $parameters);

        header('Location: /admin/viewusuario');
    }

    public function store()
    {

    }

    public function edit()
    {
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        App::get('database')->edit('users', $_POST['id'] ,$parameters);

        header('Location: /admin/viewusuario');
    }

    public function update()
    {

    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('users', $id);

        header('Location: /admin/viewusuario');
    }
}