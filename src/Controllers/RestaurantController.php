<?php

namespace MVC\Controllers;

class RestaurantController
{
    public function __construct()
    {
        $this->manager = new BarManager();
        $this->validator = new Validator();
    }

    public function index()
    {
        require VIEWS . 'App/restaurant.php';
    }

}