<?php
// * Para ejecutar este script es necesario que haya ejecutado cookieUsuario.php
// cookieUsuario.php crea las cookies donde se guardan los datos del usuario
session_start();
$login=$_COOKIE['login'];
$pass=$_COOKIE['pass'];
?>
<html>
<head>

</head>
<body>
<?php
if (($_POST['login']!=NULL) and ( $_POST['pass']!=NULL))
{
	$login=$_POST["login"];
	$pass=$_POST["pass"];
	if ($login==$login and $pass==$pass)
		{
		$mascota=$_COOKIE['mascota'];
                $raza=$_COOKIE['raza'];
		$color=$_COOKIE['color'];
                $edad=$_COOKIE['edad'];
                $sexo=$_COOKIE['sexo'];
		$comentarios=$_COOKIE['comentarios'];
		
		$ID = session_id();
		$_SESSION["login"] = $login;
		$_SESSION["pass"] = $pass;
		
		echo "<h3 align=center>Sr(a) $login , ha iniciado sesion!</h3>";
		echo "<hr>";
		echo "<p align=center>Su ID de sesion: <b>".$ID."</b><br>\n";
		echo "Su ID de Usuario es: <b>".$_SESSION["login"] ."</b></p>";
		print ("<hr>");
		
		}
		else
		{
			echo "<h3 align=center>Login y/o Password incorrectos!</h3>";
			echo "<hr>";
		}
}
else
{
			echo "<h3 align=center>Debe completar todos los campos!</h3>";
			echo "<hr>";
}
		
?>
<a href="Zmenuphp.php">Ir al Menu</a><br>
</body>
</html>
