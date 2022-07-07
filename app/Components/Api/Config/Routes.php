<?php defined('APPPATH') OR exit('No direct...');

if (!isset($routes)) {
    $routes = \Config\Services::routes(true);
}

$routes->group('api', ['namespace' => 'App\Components\Api\Controllers'], function($subroutes) {    
    $subroutes->get('cars', 'Cars::getAll');
    $subroutes->get('car/(:segment)', 'Car::getCar/$1');
    $subroutes->post('car', 'Car::addCar');
    $subroutes->post('fuel', 'Car::addFuel');
});     

