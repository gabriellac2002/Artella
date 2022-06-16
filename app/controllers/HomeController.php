<?php 
  namespace App\Controllers;
  use App\Core\Database\QueryBuilder;
  
  class HomeController {

    protected $queryBuilder;
    
    function __construct()
    {
      $this->queryBuilder = new QueryBuilder();
    }

    public function index() {
      $data = $this->queryBuilder->table('products')->select('*')
      ->join('images', 'id', '=', 'productId')
      ->orderBy('products.id', true)->size(6)->commit();
      return view('site/home', ['data' => $data]);
    }


  }
?>