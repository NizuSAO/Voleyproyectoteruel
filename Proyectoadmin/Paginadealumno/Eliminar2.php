<?php 
require('conn.php');

if (isset($_POST['Eliminar'])) {

$id = $_POST['nombre'];

$resul=mysqli_query($conni,"DELETE FROM paginalumnos WHERE Nombre='$id'");
		if (!$resul){
				die("error: ".mysqli_error($conni));
			} else {
				header("location: mostrardat.php");
			}


}

 ?>