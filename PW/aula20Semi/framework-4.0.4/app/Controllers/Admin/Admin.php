<?php
namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\ClientsModel;

class Admin extends Controller{
    public function index(){
        $session = \Config\Services::session();
        if($session -> has('user')):
            
            echo view('admin/templates/header');
            echo view('admin/users/home');
            echo view('admin/templates/footer');
        else:
            $this -> login();
        endif;
    }
    public function login(){
        echo view('admin/users/login');
    }

    public function logout(){
        $session = \Config\Services::session();
        $session ->destroy();
        return redirect() -> to(base_Url('admin'));
    }

    public function clients(){
        $clients = new ClientsModel();

        $data = [
            'clients' => $clients -> getClients()
        ];

        echo view('admin/templates/header');
        echo view('admin/clients/list', $data);
        echo view('admin/templates/footer');
    }
    public function detailsClient($idClient){
        $client = new ClientsModel();

        $data = [
            'clients' => $client -> getClients($idClient)
        ];

        echo view('admin/templates/header');
        echo view('admin/clients/details', $data);
        echo view('admin/templates/footer');
    }
}