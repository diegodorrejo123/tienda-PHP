<?php include('funciones.php');include('include/sql.php');
head('Productos');
$consulta = new conexion();
$result = $consulta->ExtraerProducto2();




?><br>
<h1>Productos en venta</h1>
<div class="row text-center">
    <?php foreach($result as $producto){?>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalle_producto.php?id=<?= $producto['id']; ?>"><img class="card-img-top" src="<?= $producto['foto']; ?>" height="250"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalle_producto.php?id=<?= $producto['id']; ?>"><?= $producto['nombre']; ?></a>
            </h4>
            <h5>RD$ <?= $producto['precio']; ?></h5>
            <!-- <p class="card-text"><?= $producto['descripcion']; ?></p> -->
          </div>
          <!-- <div class="card-footer">
            <small class="text-muted"><a href="detalle_producto.php?id=<?= $producto['id']; ?>" class="btn btn-info">Ver</a></small>
          </div> -->
        </div>
      </div>

    <?php }?>

</div>

</div>
<?php foot();?>