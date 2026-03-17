<?php

namespace MVC\Models;

use MVC\Models\Bar;

/** Class UserManager **/
class BarManager
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

    public function getBar()
    {
        $stmt = $this->bdd->query("SELECT * FROM Bar");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Bar");

        return $stmt->fetchAll();
    }

    public function getBoissonBar($id_bar)
    {

        $stmt = $this->bdd->prepare("SELECT bb.*, bo.name AS boisson_name FROM bar_boisson bb JOIN boisson bo ON bb.id_boisson = bo.id_boisson WHERE id_bar = ?");

        $stmt->execute([
            $id_bar
        ]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Bar");

        return $stmt->fetchAll();
    }
}