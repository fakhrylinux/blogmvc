<?php

class Editor extends Controller {
    public function index($id = null) {
        if (isset($_SESSION['email'])){
        $data['blog'] = $this->model('Blog_model')->getEntryById($id);
        $this->view('templates/header');
        $this->view('editor/index', $data);
        $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . '/login/index/');
        }
    }
    
    public function add() {
        if ($this->model('Editor_model')->addEntry($_POST) > 0) {
            header('Location: ' . BASEURL);
        }
    }
    
    public function update() {
        if ($this->model('Editor_model')->updateEntry($_POST) > 0) {
            header('Location: ' . BASEURL . '/blog/entry/' . $_POST['entry_id']);
        } else {
            header('Location: ' . BASEURL . '/blog/entry/' . $_POST['entry_id']);
        }
        
    }
    
    public function delete($id) {
        if ($this->model('Editor_model')->deleteEntry($id) > 0) {
            header('Location: ' . BASEURL);
        }
    }
}