<?php
include("conex.php");

if (isset($_POST['Ingresar'])) {
	if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['telefono']) >= 1) 
		{
			$nombre = trim($_POST['nombre']);
			$precio = trim($_POST['apellido']);
			$telefono =  trim($_POST['telefono']);
			$consulta = "INSERT INTO Alumno(`nombre`, `apellido`, `telefono`) VALUES ('$nombre','$apellido','$telefono')";
			$resultado = mysqli_query($conn,$consulta);
			if (!$resultado){
				die("error: ".mysqli_error($conn));
			} else {
				header("location: paginaweb.html");
			}
		}
}
?>