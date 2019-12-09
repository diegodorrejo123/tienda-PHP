<?php include 'admin_f.php';
    sidebar('../');
include_once '../include/user_session.php';
$user = new UserSession();

if(empty($user->getCurrentUser())){
   header("location: ../login.php");
}
$obj = new Consultas();
$re = $obj->Lcontacto();
foreach($re as $info){}
if($_POST){
    
    $obj->EditarContacto($_POST['ubicacion'],$_POST['telefono'],$_POST['email']);
    header("location: contacto.php");
}
?>
<div class="container">
    <form action="" method="POST">
        <h2>Editar</h2>
        <div class="form-group">
            Ubicación:
            <input type="text" name="ubicacion" value="<?= $info['ubicacion']; ?>" class="form-control">
        </div>
        <div class="form-group">
        Teléfono:
        <input type="text" name="telefono" value="<?= $info['telefono']; ?>" class="form-control">
        </div>
        <div class="form-group">
        Email:
        <input type="text" name="email" value="<?= $info['mail']; ?>" class="form-control">
        </div>
        <input type="submit" class="btn btn-info" value="Guardar">
    
    </form>
</div>