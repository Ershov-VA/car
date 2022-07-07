<?php defined('APPPATH') OR exit('No direct...');

if (!isset($routes)) {
    $routes = \Config\Services::routes(true);
}

$routes->group('admin', ['namespace' => 'App\Components\Admin\Controllers'], function($subroutes) {    
    $subroutes->get('/', 'Main::index');
    $subroutes->get('cars', 'Cars::index');
    $subroutes->get('car', 'Car::getCar/$1');
    $subroutes->get('repairs', 'Repairs');

});     

