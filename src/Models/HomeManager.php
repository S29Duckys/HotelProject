<?php

namespace MVC\Models;

use MVC\Models\Home;

class HomeManager
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
        $stmt = $this->bdd->query("SELECT (SELECT SUM(total_ttc) FROM Facture) AS totaux, (SELECT COUNT(*) FROM Client) AS nombre_client, (SELECT COUNT(*) FROM Chambre WHERE occupe = 1) AS occupe, (SELECT COUNT(*) FROM Chambre) AS total_chambre;");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Home");

        return $stmt->fetchAll();
    }

    public function getLastFacture()
    {
        $stmt = $this->bdd->query("SELECT * FROM Facture ORDER BY date DESC LIMIT 5;");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Home");

        return $stmt->fetchAll();
    }
    
}
