<?php

namespace MVC\Controllers;

use MVC\Models\ClientManager;
use MVC\Validator;

class ClientController
{
    private $manager;
    private $validator;

    public function __construct()
    {
        $this->manager = new ClientManager();
        $this->validator = new Validator();
    }

    public function index()
    {
        $clients = $this->manager->getAll();
        require VIEWS . 'App/clients.php';
    }

}