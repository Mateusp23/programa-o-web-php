<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script.js"></script>
    <title>Started</title>

     <!-- Booststrap -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->

  <link rel="stylesheet" type="text/css" href="assets/css/style-adm.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="?controller=site&action=home">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="?controller=site&action=sobre">Sobre <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?controller=site&action=produtos">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?controller=site&action=contato">Contato</a>
            </li>
          </ul>
        </div>
      </nav>

        <header class="jumbotron mb-0">
            <h1>Àrea Administrativa</h1>
            <a href="<?=base_url('admin/logout')?>">logout</a>
        </header>

        
        <section class="container-fluid">
            <h2>Clientes</h2>
            <a class="nav-link" href="?controller=clients&action=register">Cadastro</a>
            <a class="nav-link" href="?controller=clients&action=listClient">Listagem de clientes</a>
            <article>
                
         