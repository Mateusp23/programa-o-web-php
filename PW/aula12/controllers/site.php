<?php
    class siteController{
        public function home(){
            require_once("views/templates/header.php");
            require_once("views/site/home.php");
            require_once("views/templates/footer.php");
        }

        public function sobre(){
            require_once("views/templates/header.php");
            require_once("views/site/sobre.php");
            require_once("views/templates/footer.php");  
        }

        public function produtos(){
            require_once("views/templates/header.php");
            require_once("views/site/produtos.php");
            require_once("views/templates/footer.php");  
        }

        public function contato(){
            require_once("views/templates/header.php");
            require_once("views/site/contato.php");
            require_once("views/templates/footer.php");  
        }
    }
?>