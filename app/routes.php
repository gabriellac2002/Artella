<?php

use App\Core\Router;
use App\Controllers\UserControl;

$router->get('admin/viewusuario', 'UserControl@view');

$router->post('admin/create', "UserControl@create");

$router->post('admin/delete', 'UserControl@delete');

$router->post('admin/update', 'UserControl@edit');


//--------------------Rotas dos crud products----------------------------
$router->get("admin/products", "CrudProductController@index");
$router->post("admin/productsCreate", "CrudProductController@create");
$router->get("admin/productsSearch", "CrudProductController@search");
$router->post("admin/productsEdit", "CrudProductController@update");
$router->post("admin/productsDelete", "CrudProductController@delete");
//------------------------- Rotas products --------------------------------
$router->get("products", "ProductController@search");
$router->get("productsSearch", "ProductController@search");
$router->get("products/search", "ProductController@searchAjax");
//------------------------- Contato ---------------------------------------
$router->get("contato", "ContatoController@index");
$router->post("contato/enviar", "ContatoController@send");
$router->get("", "HomeController@index");
$router->get("home", "HomeController@index");
$router->get("about", "AboutUsController@index");

$router->get("login", "LoginController@index");
$router->post("login/valida", "LoginController@valida");

$router->get("dashadm", "LoginController@dashadm");
$router->get("login/logout", "LoginController@logout");

//------------------------- Rotas dos crud categorias --------------------------------

$router->get("admin/categorias", "Categorias_Controller@index");

$router->post('admin/categorias-create', "Categorias_Controller@create");

$router->post('admin/categorias-edit', 'Categorias_Controller@edit');

$router->post('admin/categorias-delete', 'Categorias_Controller@delete');

$router->get('admin/categorias-search', 'Categorias_Controller@search');

$router->get("product-view", "ProductViewController@index");