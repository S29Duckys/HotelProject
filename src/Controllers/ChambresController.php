<?php

namespace MVC\Controllers;

use MVC\Models\ChambresManager;
use MVC\Validator;

class ChambresController
{
    private $manager;
    private $validator;

    public function __construct() {
        $this->manager = new ChambresManager();
        $this->validator = new Validator();
    }

    public function index()
    {
        $chambres = $this->manager->getAll();
        require VIEWS . 'App/chambres.php';
    }

}