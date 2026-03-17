<?php

namespace MVC\Controllers;

use MVC\Models\HomeManager;
use MVC\Validator;

class HomeController
{
    private $manager;
    private $validator;

    public function __construct()
    {
        $this->manager = new HomeManager();
        $this->validator = new Validator();
    }

    public function index()
    {
        $homes = $this->manager->getAll();
        $factures = $this->manager->getLastFacture();
        require VIEWS . 'App/homepage.php';
    }

}