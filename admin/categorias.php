<?php include 'admin_f.php';
    sidebar('../');
include_once '../include/user_session.php';
$user = new UserSession();

if(empty($user->getCurrentUser())){
   header("location: ../login.php");
}
$consulta= new Consultas();
if($_POST){
    $categoria = $_POST['categoria'];
    $consulta->AgregarCategoria($categoria);
}
?>
<div class="container my-5">
    <div class="text-right">
    <!-- Boton abrir el modal -->
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-plus"></i> Agregar nueva categoría
    </button>
    </div>
        <table class="table my-1">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php 
                    foreach($consulta->ExtraerCategoria() as $categorias){
                ?>
                        
                    <td><?= $categorias['id']; ?></td>
                    <td><?= $categorias['categoria']; ?></td>
                    <td><a href="edit_categoria.php?id=<?= $categorias['id']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                    <a href="delete_categoria.php?id=<?= $categorias['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    
                    <?= inputs('Nombre de la categoría','categoria','Categoría'); ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<?php pppp();?>