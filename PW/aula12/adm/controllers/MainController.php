<?php

    class MainController{

        public function index()
        {
            if(!isset($_SESSION['login'])){
                header('location:index.php?controller=main&action=login');
            }else{
                require_once('views/templates/header.php');
                require_once('views/templates/index.php');
                require_once('views/templates/footer.php');
            }
        }

        public function login()
        {
           require_once('views/users/login.php');
        }
        
        public function logout()
        {
           session_destroy();
           header('location:index.php?controller=main&action=login');
        }
    }

?>