<?php

namespace MVC\Controllers;

use MVC\Models\InfraManager;
use MVC\Validator;

class InfraController
{
    private $manager;
    private $validator;

    public function __construct()
    {
        $this->manager = new InfraManager();
        $this->validator = new Validator();
    }

    public function index()
    {
        $piscines = $this->manager->getAllPiscine();
        $salles = $this->manager->getAllSalle();

        require VIEWS . 'App/infra.php';
    }
}