<?php

    session_start();

    if(!isset($_GET['controller'])){

    }else{
        switch($_REQUEST['controller']){
                
        case 'clients':
            require_once('controllers/clients.php');
            $client = new clientsController();
            if (!isset($_GET['action'])){
                $client -> index ();
            }else{
                switch($_REQUEST['action']){
                    case 'listClient':
                        $client -> listClient();
                    break;
                    case 'insertClient':
                        $client -> insertClient();
                    break;
                    case 'updateClient':
                        $id = $_GET['id'];
                        $client -> updateClient($id);
                    break;
                    case 'deleteClient':
                        $id = $_GET['id'];
                        $client -> deleteClient($id);
                    break;
                    }    
                } 
            break;   
        }
    }

?>