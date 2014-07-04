<?php
include("classControladDB.php");
include("classProgramas.php");
$con=new Controlad();
$id=$con->conectar();
$con->select_bd("ime");
	
	$prog=new Programas($_POST['nombre_p'],$_POST['fecha_sol'],$_POST['fecha_eje'],$_POST['responsable'],$_POST['ced'],$_POST['tel_1'],$_POST['comunidad'],$_POST['parroquia'],$_POST['direccion'],$_POST['ue'],$_POST['tel_2'],$_POST['direccion_ue'],$_POST['director'],$_POST['tel_dir'],$_POST['beneficiados'],$_POST['ninios'],$_POST['adultos'],$_POST['coordinador']);
	
	if ($_POST['insertar']) {
  $prog->insertar($id);
}
//Boton Eliminar
if ($_POST['eliminar']) {
  $prog->eliminar($id);
}
//Boton Actualizar
if ($_POST['actualizar']) {
  $prog->actualizar($id);
}
//Boton Mostrar
if ($_POST['mostrar']) {
  $prog->mostrar($id);
}
  $con->desconectar();
?>
