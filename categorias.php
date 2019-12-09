<?php include('funciones.php');
include('include/sql.php');
$obj = new conexion();

head('Categorías');
$result = $obj->ListarCategorias();


?><br>
<h1>Categorías</h1>
<div class="row text-center">
<?php foreach($result as $categoria){
  $foto = $obj->SacarFoto($categoria['id']);
  foreach($foto as $foto2){
  ?>
<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <a href="categoria_detalle.php?id=<?= $categoria['id']; ?>"><img class="card-img-top" src="<?= $foto2['foto']; ?>" height="150" alt=""></a>
    <div class="card-body">
      <h4 class="card-title"><?= $categoria['categoria'] ?></h4>
      <p class="card-text"></p>
    </div>
    <!-- <div class="card-footer">
      <a href="categoria_detalle.php?id=<?= $categoria['id']; ?>" class="btn btn-primary">Leer más</a>
    </div> -->
  </div>
</div>
<?php }}?>


</div>

</div>
<?php foot();?>