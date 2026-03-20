<?php

namespace MVC\Models;

use MVC\Models\User;

/** Class UserManager **/
class UserManager
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

    public function find(String $username): User | false
    {
        $stmt = $this->bdd->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute(array(
            $username
        ));
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "MVC\Models\User");

        return $stmt->fetch();
    }

    public function all()
    {
        $stmt = $this->bdd->query('SELECT * FROM Users');

        return $stmt->fetchAll(\PDO::FETCH_CLASS, "MVC\Models\User");
    }

    public function store($password)
    {
        $stmt = $this->bdd->prepare("INSERT INTO Users(username, password, role) VALUES (?, ?, ?)");
        $stmt->execute(array(
            $_POST["username"],
            $password,
            0
        ));
    }

    public function getAllUsers()
    {
        $stmt = $this->bdd->prepare("SELECT * FROM users ORDER BY id_user ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM users WHERE id_user = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateAdminStatus($userId, $status)
    {
        $stmt = $this->bdd->prepare("UPDATE users SET admin = ? WHERE id_user = ?");
        return $stmt->execute([$status, $userId]);
    }
}
