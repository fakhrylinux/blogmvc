<?php

class Blog_model {

    private $table = 'blog';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllEntries($page, $recordPerPage) {
        $startFrom = ($page - 1) * $recordPerPage;
        $sql = "SELECT entry_id, title, DATE_FORMAT(date_created, '%Y-%M-%D') AS date_created,
                SUBSTRING(entry_text, 1, 150) AS intro FROM $this->table
                ORDER BY entry_id DESC LIMIT $startFrom, $recordPerPage";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getEntryById($id) {
        $sql = "SELECT * FROM " . $this->table . " WHERE entry_id = :entry_id";
        $this->db->query($sql);
        $this->db->bind('entry_id', $id);
        return $this->db->single();
    }

    public function getTotalRecords() {
        $sql = "SELECT entry_id FROM $this->table";
        $this->db->query($sql);
        $this->db->execute();
        return $this->db->rowCount();
    }

}
