<?php
  use App\Core\Router;
  $router->get("admin/insert", "TestController@create");
  $router->get("admins", "TestController@index");
  $router->get("admin", "PostController@index");

?>