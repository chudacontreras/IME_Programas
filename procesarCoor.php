<?php
include("classControladDB.php");
include("classCoordinador.php");
$con=new Controlad();
$id=$con->conectar();
$con->select_bd("ime");
	
	$co=new Coordinador($_POST['coordinador'],$_POST['nombre_p'],$_POST['ced'],$_POST['tel'],$_POST['cargo']);
	
	if ($_POST['insertar']) {
  $co->insertar($id);
}
//Boton Eliminar
if ($_POST['eliminar']) {
  $co->eliminar($id);
}
//Boton Actualizar
if ($_POST['actualizar']) {
  $co->actualizar($id);
}
//Boton Mostrar
if ($_POST['mostrar']) {
  $co->mostrar($id);
}
  $con->desconectar();
?>
