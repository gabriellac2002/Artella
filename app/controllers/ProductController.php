<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Core\Database\QueryBuilder;

class ProductController
{

  protected $queryBuilder;

  function __construct()
  {
    $this->queryBuilder = new QueryBuilder();
  }

  public function index()
  {

    $products = $this->queryBuilder->table("products")->select("*");
    $products = $products->commit();

    

    $itens = [];

    foreach ($products as $product) :

      $images = $this->queryBuilder->table("images")->select("*")->where("productId", "=", $product['id']);
      $images = $images->commit();
      $categorys = $this->queryBuilder->table("categories")->select("*")->where("id", "=", $product['categoryId']);
      $categorys = $categorys->commit();
      array_push($itens, [$product, $images, $categorys]);

    endforeach;
    

    return view('site/products', ['itens' => $itens, 'categorys' => $categorys]);
  }
}
