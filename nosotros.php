<?php include('funciones.php');
include('admin/admin_f.php');
head('Sobre nosotros');
$obj = new Consultas();
$inf = $obj->ListarNosotros();
foreach($inf as $info){}
?><br>
<h1>Sobre nosotros</h1>
<p><?= $info['info'];?></p>
</div>
<?php foot();?>