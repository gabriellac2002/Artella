<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use App\Core\Database\QueryBuilder;

session_start();
class CrudProductController
{
    protected $queryBuilder;
    protected $allowedFiles = ['jpg', 'png', 'jpeg'];
    function __construct()
    {
        $this->queryBuilder = new QueryBuilder();
    }

    public function index()
    {

        $products = $this->queryBuilder->table("products")->select("*");
        $products = $products->commit();

        $categorys = $this->queryBuilder->table("categories")->select("*");
        $categorys = $categorys->commit();

        $images = $this->queryBuilder->table("images")->select("*");
        foreach ($products as $product) :
            $images->orWhere("productId", "=", $product['id']);
        endforeach;
        $images  = $images->commit();
        return view('admin/adminproducts', ['products' => $products, 'categorys' => $categorys, 'images' => $images]);
    }

    public function search()
    {
        $seach = $_GET['search'];
        $products = $this->queryBuilder->table("products")->select("*")->where("name", " like", "$seach%");
        $products = $products->commit();

        $categorys = $this->queryBuilder->table("categories")->select("*");
        $categorys = $categorys->commit();

        $images = $this->queryBuilder->table("images")->select("*");
        foreach ($products as $product) :
            $images->orWhere("productId", "=", $product['id']);
        endforeach;
        $images  = $images->commit();
        return view('admin/adminproducts', ['products' => $products, 'categorys' => $categorys, 'images' => $images]);
    }

    public function create()
    {
        try {
            $this->queryBuilder->table("products")->insert([$_POST['name'], $_POST['price'], $_POST['selection-category'], $_POST['description']]);
            $idProduct = $this->queryBuilder->table("products")->select("*")->where("name", "=", $_POST['name'])->commit()[0]['id'];
            $_SESSION["INFO"] = ["msg1" => "Sucesso!",  "msg2" => "produto adicionado com sucesso", "tag" => "success"];
        } catch (Exception $e) {

            $_SESSION["INFO"] = ["msg1" => "Erro!",  "msg2" => "Verifique os campos de cadastro e tente novamente.", "tag" => "danger"];
            header("Location: /admin/products");
        }

        try {
            $files = $_FILES['files'];
            $names = $files['name'];
            for ($i = 0; $i < count($names); $i++) :
                $extension = explode('.', $names[$i]);
                $extension = end($extension);

                if (in_array($extension, $this->allowedFiles)) :
                    $this->queryBuilder->table("images")->insert([$names[$i], $idProduct]);
                    $destino = "public/assets/products/" . $names[$i];
                    move_uploaded_file($files['tmp_name'][$i], $destino);
                endif;
            endfor;
        } catch (Exception $e) {
            $_SESSION["INFO"] = ["msg1" => "Erro!",  "msg2" => "Erro ao cadastrar as imagens.", "tag" => "danger"];
            header("Location: /admin/products");
        }

        header("Location: /admin/products");
    }

    public function update()
    {
        $files = $_FILES['files'];
        $names = $files['name'];

        try {
            $prepare = $this->queryBuilder->table("products")->update(['name', 'price', 'categoryId', 'description'], [$_POST['name'], $_POST['price'], $_POST['selection'], $_POST['description']])->where('id', '=', $_POST['id']);
            $prepare->commit();
            $idProduct = $this->queryBuilder->table("products")->select("*")->where("name", "=", $_POST['name'])->commit()[0]['id'];
            $_SESSION["INFO"] = ["msg1" => "Sucesso!",  "msg2" => "Produto alterado com sucesso.", "tag" => "success"];
        } catch (Exception $e) {
            $_SESSION["INFO"] = ["msg1" => "Erro!",  "msg2" => "Não foi possivel alterar, verifique as informações e tente novamente.", "tag" => "danger"];
            header("Location: /admin/products");
        }

        try {
            if ($_FILES['files']['error'][0] != 4 && $_FILES['files']['size'][0] != 0) :
                $prepare = $this->queryBuilder->table("images")->delete()->where('productId', '=', $idProduct);
                $prepare->commit();
            endif;

            for ($i = 0; $i < count($names); $i++) :
                $extension = explode('.', $names[$i]);
                $extension = end($extension);

                if (in_array($extension, $this->allowedFiles)) :
                    $this->queryBuilder->table("images")->insert([$names[$i], $idProduct]);
                    $destino = "public/assets/products/" . $names[$i];
                    move_uploaded_file($files['tmp_name'][$i], $destino);
                endif;
            endfor;
        } catch (Exception $e) {
            $_SESSION["INFO"] = ["msg1" => "Erro!",  "msg2" => "Erro ao cadastrar as imagens.", "tag" => "danger"];
            header("Location: /admin/products");
        }

        header("Location: /admin/products");
    }

    public function delete()
    {
        try {
            $prepare = $this->queryBuilder->table("products")->delete()->where('id', '=', $_POST['id']);
            $prepare->commit();
            $_SESSION["INFO"] = ["msg1" => "Sucesso!",  "msg2" => "Produto removido com sucesso", "tag" => "success"];
        } catch (Exception $e) {
            $_SESSION["INFO"] = ["msg1" => "Erro!",  "msg2" => "Não foi possível remover produto.", "tag" => "success"];
        }

        header("Location: /admin/products");
    }
}
