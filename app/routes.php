<?php

use App\Core\Router;
use App\Controllers\UserControl;

    $router->get('admin/viewusuario', 'UserControl@view');

    $router->post('admin/create', "UserControl@create");

    $router->post('admin/delete', 'UserControl@delete');

    $router->post('admin/update', 'UserControl@edit');
?>

//--------------------Rotas dos crud products----------------------------
$router->get("admin/products", "CrudProductController@index");
$router->post("admin/productsCreate", "CrudProductController@create");
$router->get("admin/productsSearch", "CrudProductController@search");
$router->post("admin/productsEdit", "CrudProductController@update");
$router->post("admin/productsDelete", "CrudProductController@delete");
//------------------------- Rotas products --------------------------------
$router->get("products", "ProductController@index");
$router->get("productsSearch", "ProductController@search");
//------------------------- Contato ---------------------------------------
$router->get("contato", "ContatoController@index");
$router->post("contato/enviar", "ContatoController@send");



