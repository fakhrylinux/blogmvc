<?php

class Editor_model {
    private $table = 'blog';
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }
    
    public function addEntry($data) {
        $query = "INSERT INTO $this->table 
                    (title, entry_text)
                    VALUES (:title, :entry_text)";
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('entry_text', $data['entry_text']);
        $this->db->execute();
        
        return $this->db->rowCount();
    }
    
    public function updateEntry($data) {
        $query = "UPDATE $this->table
                 SET title = :title,
                entry_text = :entry_text
                WHERE entry_id = :entry_id";
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('entry_text', $data['entry_text']);
        $this->db->bind('entry_id', $data['entry_id']);
        $this->db->execute();
        
        return $this->db->rowCount();
    }
    
    public function deleteEntry($id) {
        $query = "DELETE FROM $this->table WHERE entry_id = :entry_id";
        $this->db->query($query);
        $this->db->bind('entry_id', $id);
        
        $this->db->execute();
        return $this->db->rowCount();
    }
}