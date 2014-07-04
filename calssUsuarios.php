<?php 

class Usuarios{
	
private $coordinador,$nombre_p,$login,$password,$ced,$tel,$cargo;
		//Carga del consructor de nuestra clase!!!
		function Usuarios($coordinador,$nombre_p,$login,$password,$ced,$tel,$cargo){
			$this->coordinador=$coordinador;
			$this->nombre_p=$nombre_p;
			$this->login=$login;
			$this->password=$passqord;
			$this->ced=$ced;
			$this->tel=$tel;
			$this->cargo=$cargo;
			}
			
		function insertar($idcon){
			$strsql = "INSERT INTO usuarios value('$this->coordinador','$this->nombre_p','$this->login','$this->password','$this->ced','$this->tel','$this->cargo');";
			$con = new Controlad();
			$result = $con->ejecutar($strsql,$idcon);
     if (!$result) {
       die('Error al Insertar:'. mysql_error());
     }
    echo "Registro Exitoso";
	  }
	 function eliminar($idcon){
	 	$strsql="DELETE FROM usuarios WHERE corordinador=$this->coordinador;";
		$con=new Controlad();
    $result = $con->ejecutar($strsql,$idcon);
    if (!$result) {
       die('Error al Eliminar:'. mysql_error());
    }
    echo "Eliminacion Exitosa";
  }
  	function actualizar($idcon){
    $strsql = "UPDATE usuarios SET nombre_p='$this->nombre_p', login='$this->login', tpassword='$this->password', ced='$this->ced', tel='$this->tel', cargo='$this->cargo'  WHERE coordinador=$this->coordinador;";
    $con=new Controlad();
    $result = $con->ejecutar($strsql,$idcon);
    if (!$result) {
      die('Error al Actualizar:'. mysql_error());
    }
      echo "Actualizacion Exitosa";
  }
	function mostrar($idcon){
    $con=new Controlad();
    $result = $con->ejecutar("select * from usuarios",$idcon);
    echo "<h3 align=center>Listado de Coordinadores</h3><hr>";	
	echo "<table width=770 border=1 align=center>";
	echo "<tr><th>Nombre del Coordinador</th><th>Nombre del Programa que Coordina</th><th>Login</th><th>Password</th><th>Cedula de Identidad</th><th>Tel&aacute;efono</th><th>Cargo</th></tr>";
	while ($fila = mysql_fetch_array($result)) {
	echo "<tr>";
      echo "<td>$fila[coordinador]</td>";
      echo "<td>$fila[nombre_p]</td>";
      echo "<td>$fila[Login]</td>";
      echo "<td>$fila[password]</td>";
	  echo "<td>$fila[ced]</td>";
      echo "<td>$fila[tel]</td>";
	  echo "<td>$fila[cargo]</td>";
    echo "</tr>";
	
	}
	echo "</table>";
mysql_free_result($result);
  }
}
?>
