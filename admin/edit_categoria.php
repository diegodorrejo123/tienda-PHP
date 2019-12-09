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
    $product = $consulta->ExtraerXIDC($_GET['id']);
    foreach($rs1=$consulta->ExtraerXIDC($id) as $categoria){
    }
}
if($_POST){
    
    $categoria = $_POST['categoria'];
    $consulta->EditarCategoria($_GET['id'],$categoria);
    header("location: categorias.php");
}?>
<div class="container my-4">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="<?= $categoria['id']; ?>"> 
        <?= inputs2('Nombre de la categoría','categoria','Categoría',$categoria['categoria']); ?>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>