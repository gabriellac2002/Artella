<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Core\Database\QueryBuilder;

class ProductViewController
{
    protected $queryBuilder;
    function __construct()
    {
        $this->queryBuilder = new QueryBuilder();
    }
    public function index()
    {
        if (isset($_GET['id'])) :
            $product = $this->queryBuilder->table('products')->select("*")->where("id", "=", $_GET['id'])->commit();
            if (count($product) != 1)
                header("Location: products");
            $category = $this->queryBuilder->table('categories')->select("*")->where("id","=", $product[0]['categoryId'])->commit()[0];
            $images = $this->queryBuilder->table('images')->select("*")->where("productId","=", $product[0]['id'])->commit();
            return view('site/productView', ['product' => $product[0], 'category' => $category, 'images' => $images]);
        endif;
        header("Location: products");
    }
}
