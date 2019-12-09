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
?>
<div class="container my-4">
    <table class='table'>
        <thead class="thead-dark">
            <th>Informacion actual</th>
            <th>Acción</th>
        </thead>
        <tbody>
            <td><?= $info['info'] ?></td>
            <td><a href="edit_nosotros.php" class="btn btn-info">Editar</a></td>
        </tbody>
    </table>
</div>