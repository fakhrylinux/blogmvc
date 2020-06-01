<?php

abstract class Models {

    public function __construct() {
        $this->db = new Database(DB_VENDOR, DB_HOST, DB_NAME, DB_USR, DB_PWD);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}
