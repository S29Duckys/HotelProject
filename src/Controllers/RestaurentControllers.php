<?php

namespace MVC\Controllers;

class RestauController
{
    public function __construct()
    {

    }

    public function index()
    {
        require VIEWS . 'App/restaurent.php';
    }

}