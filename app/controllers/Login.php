<?php

class Login extends Controller {

    public function index() {
        $this->view('templates/header');
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function runLogin() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($this->model('Login_model')->login($email, $password) > 0) {
            Session::set('email', $email);
            header('Location: ' . BASEURL);
        } else {
            header('Location: ' . BASEURL . "/login/index");
        }

        $this->view('templates/header');
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function runLogout() {
        Session::destroy();
        header('Location: ' . BASEURL);
    }

}
