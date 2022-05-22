<?php
  use App\Core\Router;
  
  $router->get("admin/products", "CrudProductController@index");
  


?>