<?php
include_once ("func/funcoes.php");
include_once ("config/conexao.php");
include_once ("config/constantes.php");

if ($_SESSION['idadm']){
    $idUsuarioSession = $_SESSION['idadm'];
    echo $idUsuarioSession;
    $nome = $_SESSION['nome'];
} else {
    session_destroy();  
    header('Location: ./index.php?error=404');
    die();
    }

 ?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QUERYFILME</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>

<body>



    <nav class="navbar navbar-dark bg-black fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./adm.php"><img src='./img/logo.png' style="width: 5rem;"></a>
            <b class='text-white'>PAINEL DE CONTROLE</b>
            <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">ADMINISTRADOR</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./adm.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Menu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Cadastros
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" id="menu">
                                <li><a class="dropdown-item" href='#' onclick="carregarConteudo()">Clientes</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="adm.php?menu=filme">Filmes</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="adm.php?menu=genero">Gêneros</a></li>
                                
                            </ul>
                          
                        </li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </nav>

   
    <div class="card mt-5 bg-preto">
        
  <div class="mt-5">
 
  <a class="navbar-brand p-3 "> <img class=' p-3 rounded-circle w-20' src='img/icon.png'><b class='text-white'> Olá, <?php echo $nome ?></b></a> 
       
            <a class='button btn-outline-light rounded-5 btn end-0 ' href='./logout.php'> <i class=" bi bi-box-arrow-left "></i> </a>
  </div>
</div>

<?php
                if (isset($_GET['menu']) && !empty($_GET['menu'])) {
                    $menu = $_GET['menu'];
                    if ($menu == 'cliente') {
                        include_once 'cliente.php';
                    } else if ($menu == 'filme') {
                        include_once 'filme.php';
                    } else if ($menu == 'genero') {
                        include_once 'genero.php';
                    }
                } else {

                    echo 'oioioioi';
                } ?>

        
   
 






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="js/func.js"></script>
</body>

</html>