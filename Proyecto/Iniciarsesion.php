<?php
	include("login.php") 
	 ?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="..\Estilos\shu.css">
	<title>Voley jovenes</title>
</head>
<body>
	<form method="post">
	<h1 style="color: #00FFDC">Iniciar Sesion</h1>
	<section class="form-register">
		<h2 style="color: #00FFDC">Ingrese los datos de alumno</h2>
		<input class="controls" type="text" name="Nombres" placeholder="Ingrese Nombre">
		<input class="controls" type="password" name="contraseña" placeholder="ingresar contraseña">
		<p style="color: #00FFDC">Estoy de acuerdo con los <a href="terminosycondiciones.html">terminos y condiciones</a> </p>
		<input class="botons" type="submit" name="Sesion" value="Iniciar Sesion">
		<p><a style="color:white;" href="..\Paginavoley.html">Volver</a><p>
	</section>
	</form>

	

</body>
</html>