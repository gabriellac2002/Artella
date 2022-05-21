<?php
  use App\Core\Router;
  $router->get("admin/insert", "TestController@create");
  $router->get("admins", "TestController@index");
  $router->get("admin", "PostController@index");
  $router->get("pro", "PostaController@index");
  $router->get("plo", "PostpController@index");
  $router->get("ptr", "PostaPController@index");


?>