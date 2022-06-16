<?php 
  namespace App\Controllers;

  class AboutUsController {
    
    function __construct()
    {
      
    }

    public function index() {
      return view('site/quemSomos');

    }

  }
?>