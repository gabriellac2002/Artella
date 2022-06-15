<?php

namespace App\Controllers;

session_start();
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
        $query = $this->queryBuilder->table("users")->select("*")->where("email", "=", $usuario)->where("password", "=", $senha)->commit();
        if(!empty($query)){
            $_SESSION['usuario'] = $usuario;
            session_cache_expire(5); // destroi a sessao em 5 min
            header('Location: /dashadm');
            exit();
        } else{
            header('Location: /login');
            exit();
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: /home');
        exit();
    }
}