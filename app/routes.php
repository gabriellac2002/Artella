<?php

use App\Core\Router;
use App\Controllers\UserControl;

    $router->get('admin/viewusuario', 'UserControl@view');

    $router->post('admin/create', "UserControl@create");

    $router->post('admin/delete', 'UserControl@delete');

    $router->post('admin/update', 'UserControl@edit');
?>