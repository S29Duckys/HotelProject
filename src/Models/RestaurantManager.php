<?php

namespace MVC\Models;

use MVC\Models\Restaurant;

class RestaurantManager
{

    private $bdd;

    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd()
    {
        return $this->bdd;
    }

    public function getAll()
    {
        $stmt = $this->bdd->query("SELECT id_menu, name AS menu_name, description, prix_un FROM menu");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Restaurant");

        return $stmt->fetchAll();
    }

    public function show($id) {
        $stmt = $this->bdd->prepare("SELECT * FROM menu WHERE id_menu = ?");

        $stmt->execute([
            $id
        ]);
        
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Restaurant");

        return $stmt->fetchAll();
    }

}
