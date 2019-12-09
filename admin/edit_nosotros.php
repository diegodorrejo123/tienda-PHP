<?php include 'admin_f.php';
    sidebar('../');
include_once '../include/user_session.php';
$user = new UserSession();

if(empty($user->getCurrentUser())){
   header("location: ../login.php");
}
$obj = new Consultas();
$re = $obj->ListarNosotros();
foreach($re as $info){}
if($_POST){
    $obj->EditarNosotros($_POST['info']);
    header("location: sobre_nosotros.php");
}
?>
<div class="container my-4">
    <form action="" method="POST">
        Introduzca la nueva información:
        <textarea name="info" class="form-control" id="" cols="30" rows="10"><?= $info['info']; ?></textarea>
        <input type="submit" class="btn btn-info" value="Guardar">
    
    </form>
</div>