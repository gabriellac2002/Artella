<?php
  use App\Core\Router;
  $router->get("admin/insert", "TestController@create");
  $router->get("admin/test", "TestController@index");
?>