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

    public function getAll()
    {
        $stmt = $this->bdd->query("SELECT
    b.id_bar,
    b.name,
    bo.name,
    bb.quantite_stock,
    c.nom,
    c.prenom,
    cb.quantite,
    cb.date
FROM Bar b
JOIN Bar_Boisson bb ON b.id_bar = bb.id_bar
JOIN Boisson bo ON bb.id_boisson = bo.id_boisson
LEFT JOIN Client_Boisson cb ON bo.id_boisson = cb.id_boisson
LEFT JOIN Client c ON cb.id_client = c.id_client
WHERE cb.date = (
    SELECT MAX(cb2.date)
    FROM Client_Boisson cb2
    WHERE cb2.id_boisson = bo.id_boisson
)
ORDER BY b.name, bo.name;");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\Bar");

        return $stmt->fetchAll();
    }

}
