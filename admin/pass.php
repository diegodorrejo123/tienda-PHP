<?php include 'admin_f.php';
    sidebar('../');
include_once '../include/user_session.php';
$user = new UserSession();

if(empty($user->getCurrentUser())){
   header("location: ../login.php");
}
$obj = new Consultas();
$re = $obj->LUserID($_GET['id']);
foreach($re as $info){}
if($_POST){
    $obj->Cpass($_POST['id'],$_POST['pass']);
    header("location: admin_user.php");
}
?>
<div class="container my-4">
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $info['id'] ?>">
    Usuario: <?= $info['user'] ?><br>
        Introduzca la nueva contraseña:
        <input type="password" name="pass" class="form-control">
        <input type="submit" class="btn btn-info" value="Guardar">
    
    </form>
</div>