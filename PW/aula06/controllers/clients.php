<?php
    class clientsController{

public function index()
{
    
}

public function register()
{
    require_once('views/templates/header.php');
    require_once('views/clients/register.php');
    require_once('views/templates/footer.php');
}

public function registerView()
{
    $client = array(
        'name' => $_POST['name'],
        'email'=>  $_POST['email'],
        'interest'=>  $_POST['interest'],
        'senha' =>  $_POST['senha'],
        'genero' =>     $_POST['genero'],
        $language = $_POST['language'],
        'options'=> $_POST['options'],
        'platform'=> $_POST['platform'],
    );
    
    require_once('views/templates/header.php');
    require_once('views/clients/registerView.php');
    require_once('views/templates/footer.php');

}

}
?>    