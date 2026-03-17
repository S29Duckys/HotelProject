<?php

namespace MVC\Controllers;

use MVC\Models\RestaurantManager;
use MVC\Validator;

class RestaurantController
{
    private $manager;
    private $validator;

    public function __construct()
    {
        $this->manager = new RestaurantManager();
        $this->validator = new Validator();
    }

    public function index()
    {
        $menus = $this->manager->getAll();
        require VIEWS . 'App/restaurant.php';
    }

}