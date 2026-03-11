<?php

namespace MVC\Controllers;

class ChambresController
{
    public function __construct()
    {

    }

    public function index()
    {
        require VIEWS . 'App/chambres.php';
    }

}