<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css')?>">
    <script type="text/javascript" src="script.js"></script>
    <title>pag exemplo</title>

     <!-- Booststrap -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?=base_url('home')?>">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?=base_url('sobre')?>">Sobre <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('produtos')?>">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('contato')?>">Contato</a>
            </li>
          </ul>
        </div>
      </nav>

        <header class="jumbotron mb-0">
            <h1>Lorem ipsum dolor!!</h1>
        </header>

        
        <section class="container-fluid">
            <h2>Clientes</h2>
            <a class="nav-link" href="<?=base_url('')?>">Cadastro</a>
            <a class="nav-link" href="<?=base_url('clients')?>">Listagem de clientes</a>
            <article>
                
         