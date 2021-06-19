<?php

$routes->group('admin/users', ['namespace' => 'Modules\Users\Controllers'], function($routes){
  $routes->get('/', 'Users::index', ["filter" => "auth"]);
  $routes->match(['get', 'post'], 'add', 'Roles::add', ["filter" => "auth"]);
  $routes->match(['get', 'post'], 'edit/(:alphanum)', 'Roles::edit/$1', ["filter" => "auth"]);
  $routes->get('delete/(:num)', 'Roles::delete/$1', ["filter" => "auth"]);
});
