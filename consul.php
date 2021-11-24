<?php 
require('conex.php');


$consulta = "SELECT * FROM Alumnos";
$query = mysqli_query($conexion,$consulta);
$array = mysqli_fetch_array($query);


if (!$consulta){
				die("error: ".mysqli_error($conexion));
			} else {
				header("Tablas.php");
			}



 ?>