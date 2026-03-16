<?php

namespace MVC\Controllers;

use MVC\Models\BarManager;
use MVC\Validator;

class BarController
{
    private $manager;
    private $validator;

    public function __construct() {
        $this->manager = new BarManager();
        $this->validator = new Validator();
    }

    public function index()
    {
        $bars = $this->manager->getAll();
        require VIEWS . 'App/bar.php';
    }

}