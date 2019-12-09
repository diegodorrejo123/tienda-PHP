<?php
include 'admin_f.php';
include_once '../include/user_session.php';
$user = new UserSession();

if(empty($user->getCurrentUser())){
   header("location: ../login.php");
}
$id = $_GET['id'];
$producto = new Consultas();
$producto->EliminarCategoria($id);
header("location: categorias.php")

?>