<?php
	include('ingresar.php') 
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
	<h1 style="color: orange">Registro </h1>
	<section class="form-register">
		<h2 style="color: orange">Registro de alumno</h2>
		<input class="controls" type="text" name="nombre" placeholder="Ingrese Nombre">
		<input class="controls" type="text" name="apellido" placeholder="ingresar Apellido">
		<input class="controls" type="password" name="contraseña" placeholder="Ingresar su contraseña">
		<input class="controls" type="text" name="telefono" placeholder="Ingresar Telefono">
		<input class="botons" type="submit" name="Ingresar" value="Registrarse"> 
		<p><a style="color:white;" href="..\Paginavoley.html">Volver</a><p>
	</section>
	</form>

	

</body>
</html>