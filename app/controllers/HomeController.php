<?php

namespace App\Controllers;

use App\Core\Database\QueryBuilder;

class HomeController
{

  protected $queryBuilder;

  function __construct()
  {
    $this->queryBuilder = new QueryBuilder();
  }

  public function index()
  {
    $data = $this->queryBuilder->table('products')->select('*')->orderBy('products.id', true)->size(6)->commit();
    $telas = $this->queryBuilder->table('products')->select("*")->where('categoryId', '=', '20')->orderBy('products.id', true)->size(6)->commit();
    $pinturas = $this->queryBuilder->table('products')->select("*")->where('categoryId', '=', '21')->orderBy('products.id', true)->size(6)->commit();
    $nfts = $this->queryBuilder->table('products')->select("*")->where('categoryId', '=', '22')->orderBy('products.id', true)->size(6)->commit();
    $esculturas = $this->queryBuilder->table('products')->select("*")->where('categoryId', '=', '23')->orderBy('products.id', true)->size(6)->commit();

    $itens = [];
    foreach ($data as $product) :

      $images = $this->queryBuilder->table("images")->select("*")->where("productId", "=", $product['id'])->commit();
      array_push($itens, [$product, $images]);

    endforeach;

    $telasArray = [];
    foreach ($telas as $tela) :

      $images = $this->queryBuilder->table("images")->select("*")->where("productId", "=", $tela['id'])->commit();
      array_push($telasArray, [$tela, $images]);

    endforeach;

    $pinturasArray = [];
    foreach ($pinturas as $pintura) :

      $images = $this->queryBuilder->table("images")->select("*")->where("productId", "=", $pintura['id'])->commit();
      array_push($pinturasArray, [$pintura, $images]);

    endforeach;

    $nftsArray = [];
    foreach ($nfts as $nft) :

      $images = $this->queryBuilder->table("images")->select("*")->where("productId", "=", $nft['id'])->commit();
      array_push($nftsArray, [$nft, $images]);

    endforeach;

    $esculturasArray = [];
    foreach ($esculturas as $escultura) :

      $images = $this->queryBuilder->table("images")->select("*")->where("productId", "=", $escultura['id'])->commit();
      array_push($esculturasArray, [$escultura, $images]);

    endforeach;

    return view('site/home', ['data' => $itens, 'telas' => $telasArray, 'pinturas' => $pinturasArray, 'nfts' => $nftsArray, 'esculturas' => $esculturasArray]);
  }
}
