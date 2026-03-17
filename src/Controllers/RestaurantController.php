<?php

namespace MVC\Controllers;

class RestaurantController
{
    public function __construct()
    {

    }

    public function index()
    {
        require VIEWS . 'App/restaurant.php';
    }

}