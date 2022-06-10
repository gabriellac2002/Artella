<?php

use App\Core\Router;

//--------------------Rotas dos crud products----------------------------
$router->get("admin/products", "CrudProductController@index");
$router->post("admin/productsCreate", "CrudProductController@create");
$router->get("admin/productsSearch", "CrudProductController@search");
$router->post("admin/productsEdit", "CrudProductController@update");
$router->post("admin/productsDelete", "CrudProductController@delete");
//------------------------- Rotas products --------------------------------
$router->get("products", "ProductController@index");
$router->get("productsSearch", "ProductController@search");

//------------------------- Rotas dos crud categorias --------------------------------

$router->get("admin/categorias", "Categorias_Controller@index");

$router->post('admin/categorias-create', "Categorias_Controller@create");

$router->post('admin/categorias-edit', 'Categorias_Controller@edit');

$router->post('admin/categorias-delete', 'Categorias_Controller@delete');

$router->get('admin/categorias-search', 'Categorias_Controller@search');