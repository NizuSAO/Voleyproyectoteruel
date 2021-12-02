<?php 
require('connex.php');

if (isset($_POST['Eliminar'])) {

$id = $_POST['nombre'];

$resul=mysqli_query($connex,"DELETE FROM profesores WHERE Nombre='$id'");
		if (!$resul){
				die("error: ".mysqli_error($connex));
			} else {
				header("location: mostrarprofesor.php");
			}


}

 ?>