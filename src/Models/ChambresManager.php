<?php

namespace MVC\Models;

use MVC\Models\Chambres;

/** Class UserManager **/
class ChambresManager
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
        $stmt = $this->bdd->query("SELECT * FROM chambre");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Chambres");

        return $stmt->fetchAll();
    }

}
