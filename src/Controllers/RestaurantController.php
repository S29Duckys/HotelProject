<?php

namespace MVC\Controllers;

use MVC\Models\RestaurantManager;
use MVC\Validator;

class RestaurantController
{
    private $manager;
    private $validator;

    public function __construct()
    {
        $this->manager = new RestaurantManager();
        $this->validator = new Validator();
    }

    public function index()
    {
        $menus = $this->manager->getAll();
        require VIEWS . 'App/restaurant.php';
    }

    public function affiche($id)
    {
        $solo = $this->manager->show($id);
        require VIEWS . 'App/menu.php' ;
    }

    public function delete($id) {
        $this->manager->delete($id);
        header("Location: /restaurant");
        exit;
    }

    public function insert() {
    $this->manager->create();
    header("Location: /restaurant");
    exit;
  }

    public function create() {
            $restos = $this->manager->getRestos();
            require VIEWS . 'App/menu_add.php';
        
        }

}