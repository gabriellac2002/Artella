<?php
  use App\Core\Router;
  
  $router->get("admin/products", "CrudProductController@index");

  $router->post("admin/productsCreate","CrudProductController@create");


?>