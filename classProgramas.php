<style type="text/css">
<!--
body {
	background-image: url();
	background-repeat: no-repeat;
}
-->
</style><?php 

class Programas{
	
private $nombre_p, $fecha_sol, $fecha_eje, $responsable, $ced, $tel_1, $comunidad, $parroqia, $direccion, $ue, $tel_2, $direccion_ue, $director, $tel_dir, $beneficiados, $ninios, $adultos, $coordinador;
		//Carga del consructor de nuestra clase!!!
		
		function Programas($nombre_p, $fecha_sol, $fecha_eje, $responsable, $ced, $tel_1, $comunidad, $parroqia, $direccion, $ue, $tel_2, $direccion_ue, $director, $tel_dir, $beneficiados, $ninios, $adultos, $coordinador){
		
			$this->nombre_p=$nombre_p;
			$this->fecha_sol=$fecha_sol;
			$this->fecha_eje=$fecha_eje;
			$this->responsable=$responsable;
			$this->ced=$ced;
			$this->tel_1=$tel_1;
			$this->comunidad=$comunidad;
			$this->parroqia=$parroqia;
			$this->direccion=$direccion;
			$this->ue=$ue;
			$this->tel_2=$tel_2;
			$this->direccion_ue=$direccion_ue;
			$this->director=$director;
			$this->tel_dir=$tel_dir;
			$this->beneficiados=$beneficiados;
			$this->ninios=$ninios;
			$this->adultos=$adultos;
			$this->coordinador=$coordinador;
			
			
			}
			
		function insertar($idcon){
		//echo "Por aqui Paso Esta vaina el Error es mas abajo>>>>><<a<";
		
		$strsql = "INSERT INTO programas value('$this->nombre_p','$this->fecha_sol','$this->fecha_eje','$this->responsable','$this->ced','$this->tel_1','$this->comunidad','$this->parroquia','$this->direccion','$this->ue','$this->tel_2','$this->direccion_ue','$this->director','$this->tel_dir','$this->beneficiados','$this->ninios','$this->adultos','this->coordinador');";
			$con = new Controlad();
			$result = $con->ejecutar($strsql,$idcon);
     if (!$result) {
       die('Error al Insertar:'. mysql_error());
     }
    echo "Registro Exitoso";
	
	  }
	 function eliminar($idcon){
	 	$strsql="DELETE FROM programas WHERE nombre_p='$this->nombre_p';";
		$con=new Controlad();
    $result = $con->ejecutar($strsql,$idcon);
    if (!$result) {
       die('Error al Eliminar:'. mysql_error());
    }
    echo "Eliminacion Exitosa";
  }
  	function actualizar($idcon){
    $strsql = "UPDATE programas SET fecha_sol='$this->fecha_sol',fecha_eje='$this->fecha_eje',responsable='$this->responsable',ced='$this->ced',tel_1='$this->tel_1',comunidad='$this->comunidad',parroquia='$this->parroquia',direccion='$this->direccion',ue='$this->ue',tel_2='$this->tel_2',direccion_ue='$this->direccion_ue',director='$this->director',tel_dir='$this->tel_dir',beneficiados='$this->beneficiados',ninios='$this->ninios',adultos='$this->adultos',coordinador='$this->coordinador'  WHERE nombre_p='$this->nombre_p';";
    $con=new Controlad();
    $result = $con->ejecutar($strsql,$idcon);
    if (!$result) {
      die('Error al Actualizar:'. mysql_error());
    }
      echo "Actualizacion Exitosa";
  }
	function mostrar($idcon){
    $con=new Controlad();
    $result = $con->ejecutar("select * from programas ORDER BY nombre_p",$idcon);
    echo "<h3 align=center>Listado de Programas Sociales I. M. E.</h3><hr>";	
	echo "<table width=770 border=1 align=center>";
	echo "<tr><th>Nombre del Programa.</th><th>Fecfha de Solicitud</th><th>Fecha de Ejecuci&oacute;n</th><th>Responsable</th><th>Cedula del Responsable</th><th>Telefono del responsable</th><th>Comunidad Atendida</th><th>Parroquia</th><th>Direccion</th><th>Unidad Educativa</th><th>Telefono U. E.</th><th>Direccion U. E.</th><th>Director(a)</th><th>Telefono Director(a)</th><th>Beneficiados</th><th>Niños(as)</th><th>Adultos(as)</th><th>Coordinador</th></tr>";
	while ($fila = mysql_fetch_array($result)) {
	echo "<tr>";
      echo "<td>$fila[nombre_p]</td>";
      echo "<td>$fila[fecha_sol]</td>";
      echo "<td>$fila[fecha_eje]</td>";
      echo "<td>$fila[responsable]</td>";
	  echo "<td>$fila[ced]</td>";
      echo "<td>$fila[tel_1]</td>";
	  echo "<td>$fila[comunidad]</td>";
      echo "<td>$fila[parroquia]</td>";
	  echo "<td>$fila[direccion]</td>";
	  echo "<td>$fila[ue]</td>";
	  echo "<td>$fila[tel_2]</td>";
	  echo "<td>$fila[direccion_ue]</td>";
	  echo "<td>$fila[director]</td>";
	  echo "<td>$fila[tel_dir]</td>";
	  echo "<td>$fila[beneficiados]</td>";
	  echo "<td>$fila[ninios]</td>";
	  echo "<td>$fila[adultos]</td>";
	  echo "<td>$fila[coordinador]</td>";
    echo "</tr>";
	
	}
	echo "</table>";
mysql_free_result($result);
  }
}
?>
