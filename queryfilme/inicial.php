<?php
include_once ("func/funcoes.php");
include_once ("config/conexao.php");
include_once ("config/constantes.php");

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
    
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php"><img src='./img/logo.png' style="width: 5rem;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class=" dropdown-toggle btn-outline-light rounded-4 btn" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              CATEGORIA
            </a>
            <ul class="dropdown-menu">
            <?php
$retornogen = listarTabela ('genero', 'genero','idgenero');
if ($retornogen != 'Vazio') {
foreach ($retornogen as $rg) {
$genero = $rg->genero;
?>

<li><a class="dropdown-item" href="#"><?php echo $genero?></a></li>
<li><hr class="dropdown-divider"></li>


<?php }
} ?>
            </ul>
          </li>
        </ul>

        <form class="d-flex " role="search">
          <input class="form-control me-2 rounded-5" type="search" placeholder="Pesquise aqui" aria-label="search">
          <button class="btn btn-outline-light rounded-4" type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div>

    </div>
  </nav> 
  <div class="bg-preto">
  <div class="container">

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="img/banner1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="5500">
      <img src="img/banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="7000">
      <img src="img/banner3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
  



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  
</body>

</html>