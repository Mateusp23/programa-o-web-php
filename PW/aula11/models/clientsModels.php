<?php

    class clientsModels{

        var $result;

        public function listClient()
        {
            require_once("bd/connectClass.php");
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getConn();

            $sql = "SELECT * FROM clients";
            
            $this -> result = $conn -> query($sql);

        }

        public function getConsult()
        {
            return $this -> result;
        }
    }
?>