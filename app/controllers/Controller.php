<?php
class Controller {
    // Load model
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    // Load view
    public function view($view, $data = []) {
        if(file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die('View does not exist');
        }
    }

    // Redirect
    public function redirect($page) {
        header('location: ' . APP_URL . '/' . $page);
    }

    // Check if user is logged in
    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    // Require login
    public function requireLogin() {
        if(!$this->isLoggedIn()) {
            $this->redirect('users/login');
        }
    }
} 