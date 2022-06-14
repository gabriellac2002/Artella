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
    $page = 1;
    if(isset($_GET['page'])) {
      $page = $_GET['page'];
    }
    if (isset($_GET['search']))
      $products->where("name", "like", "%" . $_GET['search'] . "%");
    if (isset($_GET['category']))
      $products->where("categoryId", "=", $_GET['category']);

    $products->limit(($page - 1) * 10, $page * 10);
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

  public function searchAjax(){

    $products = $this->queryBuilder->table("products")->select("*");
    $page = 1;
    if(isset($_GET['page'])) {
      $page = $_GET['page'];
    }
    if (isset($_GET['search']))
      $products->where("name", "like", "%" . $_GET['search'] . "%");
    if (isset($_GET['category']))
      $products->where("categoryId", "=", $_GET['category']);

    $products->limit(($page - 1) * 10, $page * 10);
    $products = $products->commit();

    $itens = [];

    foreach ($products as $product) :
      $images = $this->queryBuilder->table("images")->select("*")->where("productId", "=", $product['id'])->commit();
      $categorys = $this->queryBuilder->table("categories")->select("*")->where("id", "=", $product['categoryId'])->commit()[0];
      array_push($itens, ["product" => $product, "images" => $images, "category" => $categorys]);

    endforeach;
    $categorys = $this->queryBuilder->table("categories")->select("*")->commit();
    echo json_encode($itens);
  }
}
