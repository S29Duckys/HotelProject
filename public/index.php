<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new MVC\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "HomeController@index");

$router->get('/client' , "ClientController@index");
$router->get('/client/create', "ClientController@create");
$router->post('client/insert', "ClientController@insert");

$router->get('/infra', "InfraController@index");
$router->get('/bar' , "BarController@index");
$router->get('/chambres' , "ChambresController@index");

$router->get('/restaurant', "RestaurantController@index");
$router->get('/restaurant/create', "RestaurantController@create");
$router->post('restaurant/insert', "RestaurantController@insert");
$router->get('/restaurant/:id', "RestaurantController@affiche");
$router->get('/restaurant/delete/:id', "RestaurantController@delete");


$router->get('/auth/login/', "UserController@showLogin");
$router->get('/auth/register/', "UserController@showRegister");
$router->get('/auth/logout/', "UserController@logout");

$router->post('/auth/login/', "UserController@login");
$router->post('/auth/register/', "UserController@register");

$router->run();
