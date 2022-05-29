<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Core\Database\QueryBuilder;
session_start();
class CrudProductController
{
    protected $queryBuilder;
    function __construct()
    {
        $this->queryBuilder = new QueryBuilder();
    }

    public function index()
    {

        $products = $this->queryBuilder->table("products")->select("*");
        $auxProducts = $products->commit();
        $categorys = $this->queryBuilder->table("categories")->select("*");
        $categorys = $categorys->commit();
        $images = $this->queryBuilder->table("images")->select("*");
        $images  = $images->commit();
        return view('admin/adminproducts', ['products' => $auxProducts, 'categorys' => $categorys, 'images' => $images]);
    }

    public function search()
    {
        $seach = $_GET['search'];
        $products = $this->queryBuilder->table("products")
            ->select("*")->where("name", " like", "$seach%");

        $auxProducts = $products->commit();
        $categorys = $this->queryBuilder->table("categories")->select("*");
        $categorys = $categorys->commit();
        $images = $this->queryBuilder->table("images")->select("*");
        $images  = $images->commit();

        return view('admin/adminproducts', ['products' => $auxProducts, 'categorys' => $categorys, 'images' => $images]);
    }

    public function create(){

        $this->queryBuilder->table("products")->insert([$_POST['name'], $_POST['price'], $_POST['selection-category'], $_POST['description']]);
        $idProduct = $this->queryBuilder->table("products")->select("*")->where("name", "=", $_POST['name'])->commit()[0]['id'];


        $allowedFiles = ['jpg', 'png', 'jpeg'];

        $files = $_FILES['files'];

        $names = $files['name'];
        for ($i = 0; $i < count($names); $i++) :
            $extension = explode('.', $names[$i]);
            $extension = end($extension);

            if (in_array($extension, $allowedFiles)) :
                $this->queryBuilder->table("images")->insert([$names[$i], $idProduct]);
                $destino = "public/assets/products/" . $names[$i];
                move_uploaded_file($files['tmp_name'][$i], $destino);
            endif;
        endfor;

        $_SESSION['ALT'] = "yes";
        $_SESSION["INFO"]=["status"=>"salve", "msg1"=>"Sucesso!",  "msg2" => "produto adicionado com sucesso", "tag" => "success"];

        header("Location: /admin/products");
    }

    public function update()
    {
        $allowedFiles = ['jpg', 'png', 'jpeg'];
        $files = $_FILES['files'];
        $names = $files['name'];

        $prepare = $this->queryBuilder->table("products")->update(['name', 'price', 'categoryId', 'description'], [$_POST['name'], $_POST['price'], $_POST['selection'], $_POST['description']])->where('id', '=', $_POST['id']);
        $prepare->commit();
        $idProduct = $this->queryBuilder->table("products")->select("*")->where("name", "=", $_POST['name'])->commit()[0]['id'];

        if ($_FILES['files']['error'][0] != 4 && $_FILES['files']['size'][0] != 0) :
            $prepare = $this->queryBuilder->table("images")->delete()->where('productId', '=', $idProduct);
            $prepare->commit();
        endif;

        for ($i = 0; $i < count($names); $i++) :
            $extension = explode('.', $names[$i]);
            $extension = end($extension);

            if (in_array($extension, $allowedFiles)) :
                $this->queryBuilder->table("images")->insert([$names[$i], $idProduct]);
                $destino = "public/assets/products/" . $names[$i];
                move_uploaded_file($files['tmp_name'][$i], $destino);
            endif;
        endfor;

        header("Location: /admin/products");
    }

    public function delete()
    {

        $prepare = $this->queryBuilder->table("products")->delete()->where('id', '=', $_POST['id']);
        $prepare->commit();
        header("Location: /admin/products");
    }
}
