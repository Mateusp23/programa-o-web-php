<!DOCTYPE html>
<link rel="icon" href="homePage1.jpg">
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio de Mateus Paulart</title>

       <!-- Booststrap -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: whitesmoke;">
        <a class="navbar-brand" href="?modulo=mateus">Mateus Paulart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="?modulo=sobre">Sobre <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#comp2">Trabalhos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
    </nav>
      
    <header class="jumbotron mb-0">
        <h1>Quem sou eu?</h1>
        <div class="image">
             <img id="fotoMateus" src="FotoMateus.jpeg" alt="minha foto">
        </div>
        <h2>Eu sou Mateus Paulart, estudante de analise e desenvolvimento de sistemas.</h2>     
    </header>

    
            <?php
                if(!isset($_GET['modulo'])){
                    require_once('mateus.php');
                }else{
                    switch($_REQUEST['modulo']){
                        case 'sobre':
                            require_once("sobre.php");
                        break;
                        case 'sobre':
                            require_once('trabalhos.php');
                        break;
                        case 'contatos':
                            require_once('contatos.php');
                        break;
                    }
                }
            ?>

    <section>
        <article>
            <div class="colors">
                <h2>Como me encontrar?</h2>
                <div class="texto1">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio aspernatur, harum qui perferendis esse inventore commodi quaerat fuga vero provident ipsum tenetur, officia unde fugiat sit, dolorum laudantium eveniet ducimus ipsam est reiciendis molestias id! Harum, illum? Recusandae culpa, quod quis autem facilis esse aliquid eum, veniam obcaecati repudiandae accusamus?</p>
                    <a href="#" class="btn btn-secondary btn-lg" role="button" aria-pressed="true">🔍</a>
                </div>
            </div>
            
            <h3>Quais são meus principais trabalhos?</h3>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <p> Desenvolvimento em HTML, CSS e Javascript.</p>
                        <img id="comp1" src="HTML5-CSS3-JS.jpg" alt="competencia um">
                    </div>
                    <div class="col-md-4">
                        <p> Conhecimento na linguagem.</p>
                        <img id="comp2" src="php.png" alt="competencia dois">
                    </div>
                    <div class="col-md-4">
                        <p> Conhecimento da linguagem.</p>
                        <img id="comp3" src="java.jpg" alt="competencia três">
                    </div>
                </div>
            </div>
        </article>
    </section>

    <!-- Footer -->
<footer class="jumbotron mb-0">
        <div class="redes">
            <!-- Facebook -->
            <a href="https://www.facebook.com/profile.php?id=100006685871502" target="blank" class="fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-4">  </i>
            </a>
            <!-- Twitter -->
            <a href="https://twitter.com/mpaulart" target="blank"  class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a href="https://www.linkedin.com/in/mateus-paulart-7903881a2/" target="blank" class="li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a href="https://www.instagram.com/m.paulart/?hl=pt-br" target="blank" class="ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
            </a>
        </div>    
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>  
  </footer>
  

</body>
</html>