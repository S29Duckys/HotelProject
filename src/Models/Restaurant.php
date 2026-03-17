<?php
namespace MVC\Models;

/** Class Restaurant **/
class Restaurant {

    private $username;
    private $password;
    private $id_user;
    private $role;

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getId() {
        return $this->id_user;
    }

    public function getRole()
    {
        return $this->role;
    }
    public function setUsername(String $username) {
        $this->username = $username;
    }

    public function setPassword(String $password) {
        $this->password = $password;
    }

    public function setId() {
        $this->id_user = uniqid();
    }

    public function setAdmin($role)
    {
        $this->role = $role;
    }
}
