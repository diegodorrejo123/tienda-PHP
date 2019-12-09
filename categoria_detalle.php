<?php 
include('funciones.php');
include('include/sql.php');
$consulta = new conexion();
$result2 = $consulta->CxID($_GET['id']);
foreach($result2 as $aa){}
$titulo = "Categoria de ".$aa['categoria'];
head($titulo);
$result = $consulta->PxC($_GET['id']);
?><br>
<h2><?= $titulo; ?></h2>

<div class="row text-center">
    <?php foreach($result as $categoria){?>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalle_producto.php?id=<?= $categoria['id']; ?>"><img class="card-img-top" src="<?= $categoria['foto']; ?>" height="250"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalle_producto.php?id=<?= $categoria['id']; ?>"><?= $categoria['nombre']; ?></a>
            </h4>
            <h5>RD$ <?= $categoria['precio']; ?></h5>
            <!-- <p class="card-text"><?= $categoria['descripcion']; ?></p> -->
          </div>
          <!-- <div class="card-footer">
            <small class="text-muted"><a href="detalle_producto.php?id="" class="btn btn-info">Ver</a></small>
          </div> -->
        </div>
      </div>

    <?php }?>

</div>