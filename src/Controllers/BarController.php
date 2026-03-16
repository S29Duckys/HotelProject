<?php

namespace MVC\Controllers;

class BarController
{
    public function __construct()
    {

    }

    public function index()
    {
        require VIEWS . 'App/bar.php';
    }

}