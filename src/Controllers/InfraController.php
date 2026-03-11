<?php

namespace MVC\Controllers;

class InfraController
{
    public function __construct()
    {
    }

    public function index()
    {
        require VIEWS . 'App/infra.php';
    }
}