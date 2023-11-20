<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index'],['_name' => 'home.index'])->setMethods(['get']);
    $routes->connect('/about', ['controller' => 'About', 'action' => 'index'], ['_name' => 'about.index'])->setMethods(['get', 'post']);
};