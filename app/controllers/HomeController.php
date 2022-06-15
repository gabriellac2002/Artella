<?php 
  namespace App\Controllers;

  class HomeController {
    
    function __construct()
    {
      
    }

    public function index() {
      return view('site/home');
    }


  }
?>