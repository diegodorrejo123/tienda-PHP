<?php
include 'admin_f.php';
include_once '../include/user_session.php';
$user = new UserSession();

if(empty($user->getCurrentUser())){
   header("location: ../login.php");
}
sidebar('../');
if(null != $user->getCurrentUser()){
    $id = $_GET['id'];
    $consulta = new Consultas();
    $product = $consulta->ExtraerXID($_GET['id']);
    foreach($rs1=$consulta->ExtraerXID($id) as $product1){
    }
}
if($_POST){
    
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $marca = $_POST['marca'];
    $categoria = $_POST['categoria'];
    var_dump($_POST['categoria']);
    $consulta->EditarProducto($_GET['id'],$nombre,$descripcion,$precio,$marca,$categoria);
    header("location: products.php");
}


?>
<div class="container my-4">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="<?= $product1['id']; ?>"> 
        <?= inputs2('Nombre del producto','nombre','Nombre',$product1['nombre']); ?>
        <?= inputs2('Descripción del producto','descripcion','Descripión',$product1['descripcion']); ?>
        <?= inputs2('Precio del producto','precio','Precio',$product1['precio']); ?>
        <?= inputs2('Marca del producto','marca','Marca',$product1['marca']); ?>
        <div class="form-group">Selecciona la categoria:
            <select class="form-control" required name="categoria">
                <option value="">Seleccionar</option>
                <?php 
                    foreach($rs=$consulta->ExtraerCategoria() as $categoria){
                            ?>
                    <option value="<?= $categoria['id']; ?>"><?= $categoria['categoria']; ?></option>
                    <?php }?>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>