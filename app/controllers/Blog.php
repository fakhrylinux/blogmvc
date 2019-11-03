<?php

class Blog extends Controller {

    public function index($page = 1) {
        $data['recordPerPage'] = 5;
        $data['title'] = 'Just a Simple Blog';
        $data['blog'] = $this->model('Blog_model')->getAllEntries($page, $data['recordPerPage']);
        $data['totalRecords'] = $this->model('Blog_model')->getTotalRecords();
        $data['totalPages'] = ceil($data['totalRecords'] / $data['recordPerPage']);
        $data['page'] = $page;
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }

    public function entry($id) {
        $data['title'] = 'Blog entry';
        $data['blog'] = $this->model('Blog_model')->getEntryById($id);
        $this->view('templates/header', $data);
        $this->view('blog/entry', $data);
        $this->view('templates/footer');
    }

}
