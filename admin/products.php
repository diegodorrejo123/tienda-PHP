<?php include 'admin_f.php';
    sidebar('../');
include_once '../include/user_session.php';
$user = new UserSession();

if(empty($user->getCurrentUser())){
   header("location: ../login.php");
}
$consulta = new Consultas();
if($_POST){
    $nombre= $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $marca= $_POST['marca'];
    $foto ='';
    $categoria = $_POST['categoria'];
    $nombreimg = $_FILES['foto']['name'];
    $archivo = $_FILES['foto']['tmp_name'];
    $ruta = "img/$nombreimg";
    $ruta2 = "../img/$nombreimg";
    move_uploaded_file($archivo,$ruta2);
    $foto =$ruta;
    $consulta->AgregarProductos($nombre,$descripcion,$precio,$marca,$foto,$categoria);
}

?> 
    <div class="container my-5">
    <div class="text-right">
    <!-- Boton abrir el modal -->
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal">
    <i class="fas fa-plus"></i> Agregar nuevo producto
    </button>
    </div>
        <table class="table my-1">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                    foreach($consulta->ExtraerProductos() as $product){
                ?><tr>
                        
                    <td><?= $product['id']; ?></td>
                    <td><img src="../<?= $product['foto']; ?>" width="50" alt=""></td>
                    <td><?= $product['nombre']; ?></td>
                    <td><?= $product['descripcion'];?></td>
                    <td><?= $product['marca']; ?></td>
                    <td><?= $product['precio']  ?></td>
                    <td><?= $product['categoria']  ?></td>
                    <td><a href="edit_product.php?id=<?= $product['id']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Estas seguro de que quieres eliminar este producto?')" href="deleteproduct.php?id=<?= $product['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                    <label for="">Imagen del producto:</label>
                        <input type="file" name="foto" class="">
                    </div>
                    <?= inputs('Nombre del producto','nombre','Nombre'); ?>
                    <div class="form-group">Descripción del producto:
                        <textarea name="descripcion" placeholder="Descripción" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <?= inputs('Precio del producto','precio','Precio'); ?>
                    <?= inputs('Marca del producto','marca','Marca'); ?>
                    <div class="form-group">Seleccione la categoria:
                        <select class="form-control" name="categoria" id="">
                            <option value="">Seleccionar</option>
                            <?php 
                                foreach($rs=$consulta->ExtraerCategoria() as $categoria){
                                    ?>
                            <option value="<?= $categoria['id'];?>"><?= $categoria['categoria']; ?></option>
                                <?php }?>
                        </select>
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
<script>

</script>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<?php pppp();?>