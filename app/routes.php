<?php
  use App\Core\Router;

  $router = new Router();
  $router->get("admin/test", "TestController@index");
?>