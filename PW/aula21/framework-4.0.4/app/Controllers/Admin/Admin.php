<?php
namespace App\Controllers\Admin;
use CodeIgniter\Controller;

class Admin extends Controller{
     
    public function index(){ //testando se o usuario existe
        $session = \Config\Services::session();
        if($session ->has('user')): // has metodo que verifica se variavel esta cetada na sessao
            //dar a pg inicial
            echo view('admin/templates/header');
            echo view('admin/users/home');
            echo view('admin/templates/footer');
        else:
            $this->login();
        endif;
    }
    
    public function login(){
        echo view('admin/users/login');
    }

    public function logout(){
        $session = \Config\Services::session();
        $session->destroy();
        return redirect() -> to(base_url('admin'));
    }
}