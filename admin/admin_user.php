<?php include 'admin_f.php';
    sidebar('../');
include_once '../include/user_session.php';
$user = new UserSession();

if(empty($user->getCurrentUser())){
   header("location: ../login.php");
}
$obj = new Consultas();
$re = $obj->LUser();
if($_POST){
    $obj->GuardarUser($_POST['user'],$_POST['pass']);
}
?>
<div class="container my-4">
<div class="text-right">
    <!-- Boton abrir el modal -->
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal">
    <i class="fas fa-plus"></i> Agregar nuevo usuario
    </button>
    </div>
    <table class='table'>
        <thead class="thead-dark">
            <tr>
                <th>Usuarios</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($re as $info){?>
            <tr>
                <td><?= $info['user'] ?></td>
                <td><a href="pass.php?id=<?= $info['id'] ?>" class="btn btn-info">Cambiar Contraseña</a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">Usuario:
                    <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">Contraseña:
                    <input type="password" name="pass" class="form-control">
                    </div>
                </div>
            
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script><?php pppp();?>