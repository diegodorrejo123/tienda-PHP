<?php
include('funciones.php');
head('Inicio');
include('include/sql.php');
$productos = new conexion();
$resultado = $productos->ExtraerProducto3();
?>

<header class="jumbotron my-4">
  <h1 class="display-3">Bienvenid@s!</h1>
  <p class="lead">La mejor tienda tecnológica del país, encuentra el producto que buscabas al mejor precio.</p>
  <a href="productos.php" class="btn btn-primary btn-lg">Ver todos los productos</a>
</header>

<div class="row text-center">
<?php foreach($resultado as $producto){
  ?>
  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <a href="detalle_producto.php?id=<?= $producto['id']; ?>"><img class="card-img-top" src="<?= $producto['foto'] ?>" height="150" alt=""></a>
      <div class="card-body">
        <a href="detalle_producto.php?id=<?= $producto['id']; ?>"><h4 class="card-title"><h4 style="font-size:14px;"><?= $producto['nombre'] ?></h4></h4></a>
        <p class="card-text"><h6><?= $producto['precio'] ?></h6></p>
      </div>
      <!-- <div class="card-footer">
        
      </div> -->
    </div>
  </div>
<?php }?>
  
</div>

</div>
<?php foot();?>
</body>