<?php
class Controlad{
  private $idConn;

  function conectar(){
    $this->idConn =mysql_connect('localhost','root','');
    if (!$this->idConn) {
      die("Error de conexión: ". mysql_error());
    }
    return $this->idConn;
  }
  
  function select_bd($bd){
    $dbSelect = mysql_select_db($bd,$this->idConn);
    if (!$dbSelect) {
      die ('Error en la selección:'. mysql_error());
    }
  }

  function ejecutar($strsql,$id){
    return mysql_query($strsql,$id);
  }

  function desconectar(){
    mysql_close($this->idConn);
  }
}
?>
