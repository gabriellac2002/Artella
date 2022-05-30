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

    $products = $this->queryBuilder->table("products")->select("*")->commit();

    $itens = [];

    foreach ($products as $product) :

      $images = $this->queryBuilder->table("images")->select("*")->where("productId", "=", $product['id'])->commit();
      $categorys = $this->queryBuilder->table("categories")->select("*")->where("id", "=", $product['categoryId'])->commit();
      array_push($itens, [$product, $images, $categorys]);

    endforeach;

    $categorys = $this->queryBuilder->table("categories")->select("*")->commit();
    return view('site/products', ['itens' => $itens, 'categorys' => $categorys]);
  }

  public function search(){

    $products = $this->queryBuilder->table("products")->select("*");
    if (isset($_GET['search']))
      $products->where("name", "like", $_GET['search'] . "%");
    if (isset($_GET['category']))
      $products->where("categoryId", "=", $_GET['category']);

    $products = $products->commit();

    $itens = [];

    foreach ($products as $product) :

      $images = $this->queryBuilder->table("images")->select("*")->where("productId", "=", $product['id'])->commit();
      $categorys = $this->queryBuilder->table("categories")->select("*")->where("id", "=", $product['categoryId'])->commit();
      array_push($itens, [$product, $images, $categorys]);

    endforeach;
    $categorys = $this->queryBuilder->table("categories")->select("*")->commit();
    return view('site/products', ['itens' => $itens, 'categorys' => $categorys]);
  }
}
