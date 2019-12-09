<?php

function sidebar($w=''){
    echo <<<A
    <link rel="stylesheet" href="../extra/bootstraplux.css">
    <script src="https://kit.fontawesome.com/171e28e717.js" crossorigin="anonymous"></script>
    <div class="d-flex">
        <div class="bg-light border-right">
            <div class="sidebar-heading">Administración</div>
                <div class="list-group list-group-flush">
                    <a href="{$w}admin/products.php" class="list-group-item list-group-item-action bg-light">Productos</a>
                    <a href="{$w}admin/categorias.php" class="list-group-item list-group-item-action">Categorías</a>
                    <a href="{$w}admin/sobre_nosotros.php" class="list-group-item list-group-item-action">Sobre nosotros</a>
                    <a href="{$w}admin/contacto.php" class="list-group-item list-group-item-action">Contacto</a>
                    <a href="{$w}include/logout.php" class="list-group-item list-group-item-action bg-light">Cerrar sesión</a>
                </div>
            </div>


A;
}

function inputs($label,$nombre,$place=''){
    echo <<<A
    
        <div class="form-group input-group-prepend">
            <label class="input-group-text">$label</label>
            <input type="text" placeholder="$place" name="$nombre" required class="form-control">
        </div>
A;
}
function inputs2($label,$nombre,$place='',$value){
    echo <<<A
    
        <div class="form-group input-group-prepend">
            <label class="input-group-text">$label</label>
            <input type="text" placeholder="$place" name="$nombre" required value="$value" class="form-control">
        </div>
A;
}

function pppp(){
    echo <<<A
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


A;

}

class Consultas{
    public $conexion;
    public function __construct(){
        $this->conexion = mysqli_connect('localhost','root','','tienda');
    }
    public function AgregarProductos($nombre,$descripcion,$precio,$marca,$foto='',$categoria){
        $query = "insert into productos values(null,'$nombre','$descripcion','$precio','$marca','$foto',$categoria)";
        $resultado = mysqli_query($this->conexion,$query);
        if(!$resultado){
            echo "error al agregar".mysqli_error($this->conexion);
        }
    }
    public function EliminarProductos($id){
        $query = "delete from productos where id=$id";
        mysqli_query($this->conexion,$query);
    }
    public function EliminarCategoria($id){
        $query = "delete from categoria where id=$id";
        mysqli_query($this->conexion,$query);
    }
    public function ExtraerProductos(){
        $query = "select p.id,p.nombre,p.foto, p.descripcion, p.precio,p.marca,c.categoria from productos p inner join categoria c on p.idcategoria = c.id";
        $resultado = mysqli_query($this->conexion,$query);
        return $resultado;
    }
    function ExtraerCategoria(){
    
        $query = "select *from categoria";
        $resultado = mysqli_query($this->conexion,$query);
        return $resultado;
    
    }
    public function AgregarCategoria($categoria){
        $query="insert into categoria values(null,'$categoria')";
        mysqli_query($this->conexion,$query);
    }
    public function ExtraerXID($id){
        $query ="select p.id,p.nombre,p.descripcion, p.precio,p.marca,c.categoria,p.idcategoria from productos p inner join categoria c on c.id=p.idcategoria where p.id=$id";
        $resultado = mysqli_query($this->conexion,$query);
        return $resultado;
    }
    public function ExtraerXIDC($id){
        $query ="select *from categoria where id=$id";
        $resultado = mysqli_query($this->conexion,$query);
        return $resultado;
    }
    public function EditarProducto($id,$nombre,$descripcion,$precio,$marca,$categoria){
        $query = "update productos set nombre='$nombre', descripcion='$descripcion', precio=$precio,marca='$marca',idcategoria=$categoria where id=$id";
        mysqli_query($this->conexion,$query);

    }
    public function EditarCategoria($id,$categoria){
        $query = "update categoria set categoria='$categoria' where id=$id";
        mysqli_query($this->conexion,$query);

    }
    public function ListarNosotros(){
        $query = "select * from nosotros";
        $resultado = mysqli_query($this->conexion,$query);
        return $resultado;
    }
    public function EditarNosotros($info){
        $query = "update nosotros set info='$info' where id=1";
        mysqli_query($this->conexion,$query);
        echo mysqli_error($this->conexion);
    }
    public function Lcontacto(){
        $query = "select *from contacto";
        $rs = mysqli_query($this->conexion,$query);
        return $rs;
    }
    public function EditarContacto($ubicacion,$telefono,$email){
        $query = "update contacto set ubicacion='$ubicacion', telefono='$telefono', mail='$email' where id=1";
        mysqli_query($this->conexion,$query);
        echo mysqli_error($this->conexion);
    }
    public function LUser(){
        $query = "select id, user from usuarios";
        $resultado = mysqli_query($this->conexion,$query);
        return $resultado;
    }
    public function LUserID($id){
        $query = "select * from usuarios where id=$id";
        $resultado = mysqli_query($this->conexion,$query);
        return $resultado;
    }
    
    public function Cpass($id,$pass){
        $pass2 = md5($pass);
        $query = "update usuarios set password='$pass2' where id=$id";
        mysqli_query($this->conexion,$query);
        echo mysqli_error($this->conexion);
    }
    public function GuardarUser($user,$pass){
        $pass2 = md5($pass);
        $query="insert into usuarios values(null,'$user','$pass2')";
        mysqli_query($this->conexion,$query);
    }
}



?>