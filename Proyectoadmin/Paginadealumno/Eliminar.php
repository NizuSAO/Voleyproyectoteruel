<?php 
require('conn.php');

if (isset($_POST['Eliminar'])) {

$id = $_POST['nombre'];

$resul=mysqli_query($conni,"DELETE FROM alumnos WHERE Nombre='$id'");
		if (!$resul){
				die("error: ".mysqli_error($conni));
			} else {
				header("location: mostraralumno.php");
			}


}

 ?>