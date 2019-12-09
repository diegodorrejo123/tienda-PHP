
<?php
include('funciones.php');
include('include/sql.php');
head('Detalle del producto');
$id = $_GET['id'];
$consulta = new conexion();
$producto = $consulta->ExtraerXID($id);
foreach($producto as $product){}
$categoria = $product['idcategoria'];
$resultados = $consulta->ExtraerXCategoria($categoria,$id);

?>
<div class="container">

<div class="row align-items-center my-5">
  <div class="col-lg-4">
    <img class="img-fluid rounded mb-4 mb-lg-0" src="<?= $product['foto']; ?>" width="300" alt="">
  </div>
  <div class="col-lg-5">
    <h1 class="font-weight-light"><?= $product['nombre']; ?></h1>
    <p><?= $product['descripcion']; ?></p>
    <p><b>RD$:<?= $product['precio'] ?></b></p>
    <a class="btn btn-primary" href="contacto.php">Contactar</a>
  </div>
</div>
<h4>Productos de la misma categoría:</h4>
<div class="row text-center">
    <?php foreach($resultados as $productos){?>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalle_producto.php?id=<?= $productos['id']; ?>"><img class="card-img-top" src="<?= $productos['foto']; ?>" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?= $productos['nombre']; ?></a>
            </h4>
            <h5>RD$ <?= $productos['precio']; ?></h5>
            <p class="card-text"><?= $productos['descripcion']; ?></p>
          </div>
          <!-- <div class="card-footer">
            <small class="text-muted"><a href="" class="btn btn-info">Ver</a></small>
          </div> -->
        </div>
      </div>

    <?php }?>
</div>
</div></div>
<?php foot();?>