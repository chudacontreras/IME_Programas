<?php
// * Para ejecutar este script es necesario que haya ejecutado cookieUsuario.php
// cookieUsuario.php crea las cookies donde se guardan los datos del usuario
session_start();
$loginUs=$_COOKIE['loginUs'];
$passwordUs=$_COOKIE['passwordUs'];
?>
<html>
<head>
<title>Uso de las Variables de Sesi� - Ejemplo 5.4</title>
</head>
<body>
<?php
if (($_POST['login']!=NULL) and ( $_POST['password']!=NULL))
{
	$login=$_POST["login"];
	$password=$_POST["password"];
	if ($login==$loginUs and $password==$passwordUs)
		{
		$nombreUs=$_COOKIE['nombreUs'];
		$emailUs=$_COOKIE['emailUs'];
		$direccionUs=$_COOKIE['direccionUs'];
		
		$ID = session_id();
		$_SESSION["idUsuario"] = $loginUs;
		$_SESSION["nombreUsuario"] = $nombreUs;
		
		echo "<h3 align=center>Sr(a) $nombreUs , ha iniciado sesi�!</h3>";
		echo "<hr>";
		echo "<p align=center>Esta es la informaci� almacenada:</p>";
		print ("<table bordercolor=blue border=1 align=center>\n");
		print("<tr><td>Nombre:</td><td>$nombreUs</td></tr>");
		print("<tr><td>Email:</td><td>$emailUs</td></tr>");
		print("<tr><td>Direcci�</td><td>$direccionUs</td></tr>");
		print ("</table>");
		echo "<p align=center>Su ID de sesi�: <b>".$ID."</b><br>\n";
		echo "Su ID de Usuario es: <b>".$_SESSION["idUsuario"] ."</b></p>";
		print ("<hr>");
		echo "<a href=\"Licencia.php\">Ver condiciones</a>";
		}
		else
		{
			echo "<h3 align=center>Login y/o Password incorrectos!</h3>";
			echo "<h4 align=center><a href=\"ejemplo-5.4.html\">Intente de nuevo!</a></h4>";
			echo "<hr>";
		}
}
else
{
			echo "<h3 align=center>Debe completar todos los campos!</h3>";
			echo "<h4 align=center><a href=\"ejemplo-5.4.html\">Intente de nuevo!</a></h4>";
			echo "<hr>";
}

?>
</body>
</html>
