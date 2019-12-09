<?php

class conexion{
    private $conexion;
    public function __construct(){
        $this->conexion = mysqli_connect('localhost','root','','tienda');
    }
    
    public function ExtraerProducto2(){
        $query = "select *from productos order by rand()";
        $result = mysqli_query($this->conexion,$query);
        return $result;
    }
    public function ExtraerProducto3(){
        $query = "select *from productos order by rand() limit 8";
        $result = mysqli_query($this->conexion,$query);
        return $result;
    }
    public function ExtraerXID($id){
        $query = "select * from productos where id= $id";
        $result = mysqli_query($this->conexion,$query);
        return $result;
    }
    public function ExtraerXCategoria($categoria,$id){
        $query = "select * from productos where idcategoria=$categoria and id<>$id";
        $result = mysqli_query($this->conexion,$query);
        return $result;
    }
    public function ListarCategorias(){
        $query = "select * from categoria";
        $result = mysqli_query($this->conexion,$query);
        return $result;
    }
    public function SacarFoto($id){
        $query = "select p.foto from productos p inner join categoria c on c.id=p.idcategoria where p.idcategoria=$id order by rand() limit 1";
        $result = mysqli_query($this->conexion,$query);
        return $result;
    }
    public function PxC($idcategoria){
        $query = "select p.id,p.foto, p.nombre,p.precio from productos p inner join categoria c on c.id=p.idcategoria where p.idcategoria = $idcategoria";
        $result = mysqli_query($this->conexion,$query);
        return $result;
    }
    public function CxID($id){
        $query = "select * from categoria where id=$id";
        $result = mysqli_query($this->conexion,$query);
        return $result;
    }

}





?>