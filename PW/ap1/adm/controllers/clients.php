<?php 

class clientsController{
    public function listClient()
    {
        require_once('models/clientsModels.php');
        $client = new clientsModels();
        $client -> listClient();
        $client -> getConsult();
        $result = $client -> getConsult();

        $arrayClients = array();

        while ($line = $result -> fetch_assoc()) {
            array_push($arrayClients, $line);
        }
        require_once('views/templates/header.php');
        require_once('views/clients/listClient.php');
        require_once('views/templates/footer.php');    
    }
}
?>    