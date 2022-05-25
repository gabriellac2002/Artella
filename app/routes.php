<?php
  use App\Core\Router;
  
  //--------------------Rotas dos products----------------------------
  $router->get("admin/products", "CrudProductController@index");
  $router->post("admin/productsCreate","CrudProductController@create");
  $router->get("admin/productsSearch","CrudProductController@search");
  $router->post("admin/productsEdit","CrudProductController@update");
  $router->post("admin/productsDelete","CrudProductController@delete");
 //----------------------------------------------------------------




?>