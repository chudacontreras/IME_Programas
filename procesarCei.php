<?php
include("classControladDB.php");
include("classCei.php");
$con=new Controlad();
$id=$con->conectar();
$con->select_bd("ime");
	
	$cei=new Cei($_POST['nombre_cei'],$_POST['direccion'],$_POST['parroquia'],$_POST['docente'],$_POST['matricula_a'],$_POST['seccion'],$_POST['turno'],$_POST['matricula_ini'],$_POST['matricula_fin'],$_POST['varones_a'],$_POST['hembras_a'],$_POST['varones_ini'],$_POST['hembras_ini'],$_POST['varones_fin'],$_POST['hembras_fin'],$_POST['anio_escolar'],$_POST['coordinador']);
	
	if ($_POST['insertar']) {
  $cei->insertar($id);
}
//Boton Eliminar
if ($_POST['eliminar']) {
  $cei->eliminar($id);
}
//Boton Actualizar
if ($_POST['actualizar']) {
  $cei->actualizar($id);
}
//Boton Mostrar
if ($_POST['mostrar']) {
  $cei->mostrar($id);
}
  $con->desconectar();
?>
