<?php

    class clientsModels{

        var $result;

        public function listClient()
        {
            require_once("bd/ConnectClass.php");
            $Oconn = new ConnectClass();
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