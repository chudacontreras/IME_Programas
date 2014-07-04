<style type="text/css">
<!--
body {
	background-image: url();
	background-repeat: no-repeat;
}
-->
</style><?php 

class Cei{
	
private $nombre_cei,$direccion,$parroquia,$docente,$matricula_a,$seccion,$turno,$matricula_ini,$matricula_fin,$varones_a,$hembras_a,$varones_ini,$hembras_ini,$varones_fin,$hembras_fin,$anio_escolar,$coordinador,$status;
		//Carga del consructor de nuestra clase!!!
		
		function Cei($nombre_cei,$direccion,$parroquia,$docente,$matricula_a,$seccion,$turno,$matricula_ini,$matricula_fin,$varones_a,$hembras_a,$varones_ini,$hembras_ini,$varones_fin,$hembras_fin,$anio_escolar,$coordinador){
			$this->nombre_cei=$nombre_cei;
			$this->direccion=$direccion;
			$this->parroquia=$parroquia;
			$this->docente=$docente;
			$this->matricula_a=$matricula_a;
			$this->seccion=$seccion;
			$this->turno=$turno;
			$this->matricula_ini=$matricula_ini;
			$this->matricula_fin=$matricula_fin;
			$this->varones_a=$varones_a;
			$this->hembras_a=$hembras_a;
			$this->varonea_ini=$varones_ini;
			$this->hembras_ini=$hembras_ini;
			$this->varones_fin=$varones_fin;
			$this->hembras_fin=$hembras_fin;
			$this->anio_escolar=$anio_escolar;
			$this->coordinador=$coordinador;
			
			
			
			
			}
			
		function insertar($idcon){
			$strsql = "INSERT INTO cei value('$this->nombre_cei','$this->direccion','$this->parroquia','$this->docente','$this->matricula_a','$this->seccion','$this->turno','$this->matricula_ini','$this->matricula_fin','$this->varones_a','$this->hembras_a','$this->varonea_ini','$this->hembras_ini','$this->varones_fin','$this->hembras_fin','$this->anio_escolar','$this->coordinador');";
			$con = new Controlad();
			$result = $con->ejecutar($strsql,$idcon);
     if (!$result) {
       die('Error al Insertar:'. mysql_error());
     }
    echo "Registro Exitoso";
	  }
	 function eliminar($idcon){
	 	$strsql="DELETE FROM cei WHERE nombre_cei='$this->nombre_cei';";
		$con=new Controlad();
    $result = $con->ejecutar($strsql,$idcon);
    if (!$result) {
       die('Error al Eliminar:'. mysql_error());
    }
    echo "Eliminacion Exitosa";
  }
  	function actualizar($idcon){
    $strsql = "UPDATE cei SET direccion='$this->direccion',parroquia='$this->parroquia',docente='$this->docente',matricual_a='$this->matricula_a',seccion='$this->seccion',turno='$this->turno',matricula_ini='$this->matricula_ini',matricula_fin='$this->matricula_fin',varones_a='$this->varones_a',hembras_a='$this->hembras_a',varones_ini='$this->varonea_ini',hembras_ini='$this->hembras_ini',varones_fin='$this->varones_fin',hembras_fin='$this->hembras_fin',anio_escolar='$this->anio_escolar',coordinador='$this->coordinador'  WHERE nombre_cei='$this->nombre_cei';";
    $con=new Controlad();
    $result = $con->ejecutar($strsql,$idcon);
    if (!$result) {
      die('Error al Actualizar:'. mysql_error());
    }
      echo "Actualizacion Exitosa";
  }
	function mostrar($idcon){
    $con=new Controlad();
    $result = $con->ejecutar("select * from cei order by nombre_cei",$idcon);
    echo "<h3 align=center>Listado de C. E. I.</h3><hr>";	
	echo "<table width=770 border=1 align=center>";
	echo "<tr><th>Nombre del C.E.I.</th><th>Direcci&oacute;n</th><th>Parroquia</th><th>Docente</th><th>Matricula Actual</th><th>Secci&oacute;n</th><th>Turno</th><th>Matricula Inicial</th><th>Matricula Final</th><th>Alunos Actuales</th><th>Alunas Actuales</th><th>Alumnos al Inicio</th><th>Alumnas al Inicio</th><th>Alumnos al Final</th><th>Alumnas al Final</th><th>A&ntilde;o Escolar</th><th>Coordinador</th></tr>";
	while ($fila = mysql_fetch_array($result)) {
	echo "<tr>";
      echo "<td>$fila[nombre_cei]</td>";
      echo "<td>$fila[direccion]</td>";
      echo "<td>$fila[parroquia]</td>";
      echo "<td>$fila[docente]</td>";
	  echo "<td>$fila[matricula_a]</td>";
      echo "<td>$fila[seccion]</td>";
	  echo "<td>$fila[turno]</td>";
      echo "<td>$fila[matricula_ini]</td>";
	  echo "<td>$fila[matricula_fin]</td>";
	  echo "<td>$fila[varones_a]</td>";
	  echo "<td>$fila[hembras_a]</td>";
	  echo "<td>$fila[varones_ini]</td>";
	  echo "<td>$fila[hembras_ini]</td>";
	  echo "<td>$fila[varones_fin]</td>";
	  echo "<td>$fila[hembras_fin]</td>";
	  echo "<td>$fila[anio_escolar]</td>";
	 
	  echo "<td>$fila[coordinador]</td>";
    echo "</tr>";
	
	}
	echo "</table>";
mysql_free_result($result);
  }
}
?>
