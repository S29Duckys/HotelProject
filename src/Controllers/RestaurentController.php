<?php

namespace MVC\Controllers;

class RestaurentController
{
    public function __construct()
    {

    }

    public function index()
    {
        require VIEWS . 'App/restaurent.php';
    }

}