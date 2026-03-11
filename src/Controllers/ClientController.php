<?php

namespace MVC\Controllers;

class ClientController
{
    public function __construct()
    {

    }

    public function index()
    {
        require VIEWS . 'App/clients.php';
    }

}