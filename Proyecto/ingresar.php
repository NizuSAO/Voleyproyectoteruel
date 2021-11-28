<?php
include('conex.php');

if (isset($_POST['Ingresar'])) {
	if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['contraseña'])>= 1 && strlen($_POST['telefono']) >= 1) 
		{
			$nombre = trim($_POST['nombre']);
			$apellido = trim($_POST['apellido']);
			$contraseña = trim($_POST['contraseña']);
			$telefono =  trim($_POST['telefono']);
			$consulta = "INSERT INTO alumnos(`Nombre`, `Apellido`, `Contraseña`, `Telefono`) VALUES ('$nombre','$apellido','$contraseña','$telefono')";
			$resultado = mysqli_query($conexion,$consulta);
			if (!$resultado){
				die("error: ".mysqli_error($conexion));
			} else {
				header("location: ..\Paginavoley.html");
			}
		}
}
?>