<?php 

class clientsController{

    var $ClientModel;
    public function __construct()
    {
        if(!isset($_SESSION['login'])){
            header('location:index.php?controller=main&action=login');
        }else{
        require_once('models/clientsModels.php');
        $this -> ClientModel = new clientsModels();
        }
    }

    public function listClient()
    { 
        $this -> ClientModel -> getClients();
        $result = $this -> ClientModel -> getConsult();

        $arrayClients = array();

        while ($line = $result -> fetch_assoc()) {
            array_push($arrayClients, $line);
        }
        require_once('views/templates/header.php');
        require_once('views/clients/listClient.php');
        require_once('views/templates/footer.php');    
    }
    public function insertClient()
    {
        require_once('views/templates/header.php');
        require_once('views/clients/insertClient.php');
        require_once('views/templates/footer.php');  
    }


    public function insertClientAction()
    {
        $arrayClient['name']= $_POST['name'];
        $arrayClient['email']= $_POST['email'];
        $arrayClient['phone']= $_POST['phone'];
        $arrayClient['address']= $_POST['address'];

        $this -> ClientModel -> insertClient($arrayClient);
        header('location:index.php?controller=clients&action=listClient');
    }
}
?>    