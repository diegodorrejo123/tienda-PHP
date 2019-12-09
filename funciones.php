
<?php 
function head($titulo){
    echo <<<A
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>$titulo</title>

  <link href="extra/bootstraplux.css" rel="stylesheet">

</head>
<style>


</style>
<body style="">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navh">
    <div class="container">
      <a class="navbar-brand" href="index.php">TechTop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="nosotros.php">Sobre nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos.php">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categorias.php">Categorías</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container lol" style="min-height: calc(100vh - 117px);"><br><br>
A;
}

  function foot(){
    echo <<<A
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; TechTop</p>
        </div>
    </footer>
    <script src="extra/bootstrap.bundle.js"></script>
    <script src="extra/jquery.min.js"></script>
A;
}
  ?>