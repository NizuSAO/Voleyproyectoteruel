<?php
	include('ingresar3.php') 
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
	<h1 style="color: #00FFDC">Registro </h1>
	<section class="form-register">
		<h2 style="color: #00FFDC">Registro de rector</h2>
		<input class="controls" type="text" name="nombre" placeholder="Ingrese Nombre">
		<input class="controls" type="text" name="apellido" placeholder="ingresar Apellido">
		<input class="controls" type="password" name="contraseña" placeholder="Ingresar su contraseña">
		<input class="controls" type="text" name="telefono" placeholder="Ingresar Telefono">
		<p style="color: #00FFDC">Estoy de acuerdo con los <a href="terminosycondiciones.html">terminos y condiciones</a> </p>
		<input class="botons" type="submit" name="Ingresar" value="Registrarse"> 
		<p><a style="color:white;" href="Paginavoleyadmin.html">Volver</a><p>
	</section>
	</form>
