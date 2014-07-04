
<?php
 session_start();
?>
<?php

 if (!isset($_SESSION["login"])){
   echo("no iniciada");
}
else{
$mascota=$_COOKIE['mascota'];
$raza=$_COOKIE['raza'];
$color=$_COOKIE['color'];
$edad=$_COOKIE['edad'];
$sexo=$_COOKIE['sexo'];
$comentarios=$_COOKIE['comentarios'];
}
?>
<html>
<head>

</head>
<body>
<h2 align="center">Bienvenido(a)!</h2>
<hr>
<h3 align="center">Esta es la informacion registrada:</h3>
<?php
print ("<table bordercolor=blue border=1 align=center>\n");
print("<tr><td>Tipo de Mascota:</td><td>$mascota</td></tr>");
print("<tr><td>Raza:</td><td>$raza</td></tr>");
print("<tr><td>Color:</td><td>$color</td></tr>");
print("<tr><td>Edad:</td><td>$edad</td></tr>");
print("<tr><td>Sexo:</td><td>$sexo</td></tr>");
print("<tr><td>Comentarios:</td><td>$comentarios</td></tr>");
print ("</table>");
print("Gracias por consultar su informacion!");
?>
</body>
</html>