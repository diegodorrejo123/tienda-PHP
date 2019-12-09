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
?>
<div class="container my-4">
    <table class='table'>
        <thead class="thead-dark">
            <th>Ubicación</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Acción</th>
        </thead>
        <tbody>
            <td><?= $info['ubicacion'] ?></td>
            <td><?= $info['telefono'] ?></td>
            <td><?= $info['mail'] ?></td>
            <td><a href="edit_contacto.php" class="btn btn-info">Editar</a></td>
        </tbody>
    </table>
</div>