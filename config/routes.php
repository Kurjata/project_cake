<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'Home', 'action' => 'index', 'home'], ['_name' => 'home.index'])->setMethods(['get']);
        $routes->connect('/about', ['controller' => 'About', 'action' => 'index'], ['_name' => 'about.index'])->setMethods(['get']);
        $routes->connect('/product/{id}', ['controller' => 'Product', 'action' => 'show'], ['_name' => 'product.index', 'pass'=> ['id'], 'id' => '[0-9]+'])->setMethods(['get']);
    });

    $routes->scope('/admin', function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'Admin', 'action' => 'index'], ['_name' => 'admin.index'])->setMethods(['get']);
        $routes->connect('/users', ['controller' => 'AdminUsers', 'action' => 'index'], ['_name' => 'adminusers.index'])->setMethods(['get']);
        $routes->connect('/users/{id}', ['controller' => 'AdminUsers', 'action' => 'show'], ['_name' => 'adminusers.show', 'pass'=> ['id'], 'id' => '[0-9]+'])->setMethods(['get']);
    });

    $routes->fallbacks();
};