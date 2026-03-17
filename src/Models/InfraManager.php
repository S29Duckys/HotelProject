<?php

namespace MVC\Models;

use MVC\Models\Infra;

class InfraManager
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

    public function getAllPiscine()
    {
        $stmt = $this->bdd->query("SELECT id_piscine, `name` AS name_piscine, `description` AS description_piscine, `image` AS image_piscine, `ouverture`, `fermeture`, `nettoyage` FROM `piscine`");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Infra");

        return $stmt->fetchAll();
    }

    public function getAllSalle()
    {
        $stmt = $this->bdd->query("SELECT `id_salle`, `name` AS name_salle, `description` AS description_salle, `image` AS image_salle, `type`, `options` FROM `salle`");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Infra");

        return $stmt->fetchAll();
    }

}