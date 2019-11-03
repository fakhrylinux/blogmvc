<?php

class Login_model {

    private $table = 'admin';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function login($email, $password) {
        $sql = "SELECT :email from $this->table WHERE email = :email AND password = MD5(:password)";
        $this->db->query($sql);
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        $this->db->execute();

        return $this->db->rowCount();
    }

}
