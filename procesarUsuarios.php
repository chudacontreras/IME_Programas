<?php
include("classControladDB.php");
include("classUsuarios.php");
$con=new Controlad();
$id=$con->conectar();
$con->select_bd("ime");
	
	$usu=new Usuarios($_POST['coordinador'],$_POST['nombre_p'],$_POST['login'],$_POST['password'],$_POST['ced'],$_POST['tel'],$_POST['cargo']);
	
	if ($_POST['insertar']) {
  $usu->insertar($id);
}
//Boton Eliminar
if ($_POST['eliminar']) {
  $usu->eliminar($id);
}
//Boton Actualizar
if ($_POST['actualizar']) {
  $usu->actualizar($id);
}
//Boton Mostrar
if ($_POST['mostrar']) {
  $usu->mostrar($id);
}
  $usu->desconectar();
?>
