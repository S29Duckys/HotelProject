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

    // public function index()
    // {
    //     $bars = $this->manager->getBar();
    //     $boissonBar = $this->manager->getBoissonBar($id_bar);
    //     require VIEWS . 'App/bar.php';
    // }

    public function index()
    {
        $bars = $this->manager->getBar();
        $boissonsBar = [];
        foreach ($bars as $bar) {
            $boissonsBar[$bar->getIdBar()] = $this->manager->getBoissonBar($bar->getIdBar());
        }
        require VIEWS . 'App/bar.php';
    }

}