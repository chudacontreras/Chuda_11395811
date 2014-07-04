<?php
session_start();
?>
<html>
<head>
<title>Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<br>
<ul>
<li><a href="Zbienvenidophp.html" target="cuerpo">Bienvenido</a></li>

<li><a href="Zmascotaphp.html" target="cuerpo">Datos Mascota</a></li>

<li><a href="Zconsultardatosmascotaphp.php" target="cuerpo">Consultar Datos Mascota</a></li>
</ul>

<form name="form0" method="post" action="Zsesionphp.php">
<br> <br><br>
<hr width="220" align="left">
<tr> 
 <td align="center" valign="top"><a href="Zcerrarsesionphp.php"><strong>Cerrar Sesion</strong></a></td>
</tr>
<br> <br><br> 
<h3> Iniciar sesion </h3>
Login: &nbsp; &nbsp;&nbsp;&nbsp; <input type="text" name="login" maxlength="15"> <br>
Password: &nbsp;<input type="password" name="pass" maxlength="8"> <br>
<input type="submit" name="enviar" value="Iniciar Sesion"> &nbsp; &nbsp; &nbsp;
</form>

</body>

</html>