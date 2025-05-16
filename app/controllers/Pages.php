<?php
class Pages extends Controller {
    public function __construct() {
    }

    public function index() {
        $data = [
            'title' => 'Welcome to Note Taking App',
            'description' => 'A simple note taking application built with PHP MVC'
        ];
        
        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'title' => 'About Us',
            'description' => 'App to share notes with others'
        ];
        
        $this->view('pages/about', $data);
    }
} 