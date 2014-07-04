<?php
$mascota=NULL;
$razam=NULL;
$colorm=NULL;
$edadm=NULL;
$sexo=NULL;
$comentario=NULL;
$login=NULL;
$pass=NULL;
$repass=NULL;

if (array_key_exists('mascota', $_POST))
{
$mascota=$_POST["mascota"];
}

if (array_key_exists('raza', $_POST))
{
$raza=$_POST["raza"];
}

if (array_key_exists('color', $_POST))
{
$color=$_POST["color"];
}

if (array_key_exists('edad', $_POST))
{
$edad=$_POST["edad"];
}

if (array_key_exists('sexo', $_POST))
{
$sexo=$_POST["sexo"];
}

if (array_key_exists('comentarios', $_POST))
{
$comentarios=$_POST["comentarios"];
}

if (array_key_exists('login', $_POST))
{
$login=$_POST["login"];
}

if (array_key_exists('pass', $_POST))
{
$pass=$_POST["pass"];
}

if (array_key_exists('repass', $_POST))
{
$repass=$_POST["repass"];
}

setcookie("mascota", "$mascota",time()+82000,"/","",0);
setcookie("raza", "$raza",time()+82000,"/","",0);
setcookie("color", "$color",time()+82000,"/","",0);
setcookie("edad", "$edad",time()+82000,"/","",0);
setcookie("sexo", "$sexo",time()+82000,"/","",0);
setcookie("comentarios", "$comentarios",time()+82000,"/","",0);
setcookie("login","$login",time()+82000,"/","",0);
setcookie("pass","$pass",time()+82000,"/","",0);
setcookie("repass", "$repass",time()+82000,"/","",0);

?>
<html>
<head>

</head>
<body>
<h2 align="center">Informacion Registrada!</h2>
<hr>
<?php
print ("<hr>");
print("Puede consultar la informacion enviada. en Consultar datos de Mascota");
?>
</body>
</html>