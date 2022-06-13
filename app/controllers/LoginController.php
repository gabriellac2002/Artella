<?php

namespace App\Controllers;

require 'vendor/autoload.php';
use App\Core\Database\QueryBuilder;
class LoginController
{
    protected $queryBuilder;
    function __construct()
    {
      $this->queryBuilder = new QueryBuilder();
    }  

    public function index()
    {
        view('site/login');
    }

    public function dashAdm()
    {
        view('admin/dashBoardAdm');
    }

    public function valida()
    {
        if(empty($_POST['email']) || empty($_POST['password'])){
            header('Location: /login');
            exit();
        }   
        $usuario = $_POST['email'];
        $senha = $_POST['password'];
        $query = $this->queryBuilder->table("users")->select("*")->where("email", "=", $usuario)->where("password", "=", $senha);
        if(!empty($query)){
            
        }
    }
}