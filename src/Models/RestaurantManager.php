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

    public function getRestos()
    {
        $stmt = $this->bdd->query("SELECT * FROM restaurant");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Restaurant");

        return $stmt->fetchAll();
    }

    public function show($id) {
        $stmt = $this->bdd->prepare("SELECT m.*, r.* FROM menu m LEFT JOIN restaurant_menu rm ON m.id_menu = rm.id_menu LEFT JOIN restaurant r ON r.id_restaurant = rm.id_restaurant WHERE m.id_menu = ?");

        $stmt->execute([
            $id
        ]);
        
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Restaurant");

        return $stmt->fetchAll();
    }

    

    public function delete($id) {
        $stmt = $this->bdd->prepare("DELETE FROM menu WHERE id_menu = ?");

       return $stmt->execute([
            $id
        ]);
    }

    public function create() {
    $stmt = $this->bdd->prepare("INSERT INTO menu (name, description, prix_un) VALUES (?, ?, ?)");
    $stmt->execute([
        $_POST['nom'],
        $_POST['description'],
        $_POST['prix']
    ]);

    $id_menu = $this->bdd->lastInsertId();

    if (!empty($_POST['restaurants'])) {
        $stmt2 = $this->bdd->prepare("INSERT IGNORE INTO restaurant_menu (id_restaurant, id_menu) VALUES (?, ?)");
        foreach ($_POST['restaurants'] as $id_restaurant) {
            $stmt2->execute([$id_restaurant, $id_menu]);
        }
    }
}

}
