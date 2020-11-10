<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Site extends Controller{

    public function index()
    {
        $this -> View('home');
    }

    public function View($page = 'home')
    {
        $data['title'] = ucfirst($page);
        

        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    
    }
}