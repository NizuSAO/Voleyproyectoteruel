<?php
	include("login2.php") 
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
	<h1 style="color: orange">Iniciar Sesion</h1>
	<section class="form-register">
		<h2 style="color: orange">Ingrese los datos de Profesor</h2>
		<input class="controls" type="text" name="Nombres" placeholder="Ingrese Nombre">
		<input class="controls" type="password" name="contraseña" placeholder="ingresar contraseña">
		<input class="botons" type="submit" name="Sesion" value="Iniciar Sesion">
		<p><a style="color:white;" href="..\Paginavoley.html">Volver</a><p>
	</section>
	</form>

	

</body>
</html>