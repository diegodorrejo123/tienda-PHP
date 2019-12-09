<?php include('funciones.php');
include('admin/admin_f.php');
head('Contacto');
$obj = new Consultas();
$rs = $obj->Lcontacto();
foreach($rs as $con){

}
?><br>
<div class="row">
            <div class="col-lg-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.9975983074996!2d-69.94188878510779!3d18.483767987430454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89ec5148da81%3A0xd795dd4b26306a90!2sAgora%20Mall!5e0!3m2!1ses!2sdo!4v1570769868487!5m2!1ses!2sdo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-lg-4">
                <h3>Contactanos</h3>
                <p><?= $con['ubicacion'] ?></p>
                <p>Telefono: <?= $con['telefono'] ?></p>
                <p>Email: <?= $con['mail'] ?></p>
            </div>
        </div><br>
        <div class="row pbj">
            <div class="col-lg-6">
                <form action="">
                    <b>Asunto:</b>
                    <input type="text" placeholder="Asunto" class="form-control">
                    <b>Email:</b>
                    <input type="text" placeholder="Email" class="form-control">
                    <b>Nombre:</b>
                    <input type="text" placeholder="Nombre" class="form-control">
                    <b>Mensaje:</b>
                    <textarea type="text" placeholder="Mensaje" class="form-control form-group"></textarea>
                    <input type="button" class="btn btn-success" value="Enviar">
                    
                </form>
            </div>
        </div>
    </div>
    <?php foot();?>