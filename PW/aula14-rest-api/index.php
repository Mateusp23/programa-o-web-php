<?php

    session_start();

    $requestMethod = $_SERVER['REQUEST_METHOD'];    //  get, post, put, delete
    $local = $_SERVER['SCRIPT_NAME']; //pw_2020...index.php
    $uri = $_SERVER['PHP_SELF']; // pw_2020...index.php/xx/123
    $rout = str_replace($local,'', $uri); // /xx/123

    $uriSegments = explode('/', $rout);

    if(isset($uriSegments[1])){
        $controller = $uriSegments[1];
        switch ($controller) {
            case 'clients':
                require_once('controllers/clients.php');
                $Clients = new clientsController();
                switch($requestMethod){
                    case 'GET':
                        if(isset($uriSegments[2]) && $uriSegments[2] != ''){
                            $Clients -> listClientId($uriSegments[2]);
                        }else{
                            $Clients -> listClient();
                        }
                    break;
                    case 'POST':
                        $Clients -> insertClient();
                    break;
                    case 'PUT':
                        $Clients -> updateClient($uriSegments[2]);
                    break;
                    case 'DELETE':
                        $Clients -> deleteClient($uriSegments[2]);
                    break;
                }  
                break;
            
            case 'users':
                require_once('controllers/UsersController.php');
                $Users = new UsersController();
                switch($requestMethod){
                    case 'GET':
                        if(isset($uriSegments[2]) && $uriSegments[2] =='login'){
                            if(!isset($uriSegments[3]) || $uriSegments[3] = ''){
                                $Users -> login();
                            }
                        }
                    break;
                }
            break;
        }
    }

?>