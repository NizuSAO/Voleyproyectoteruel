<?php 
require('conn.php');


$consulta = "SELECT * FROM alumnos";
$query = mysqli_query($conni,$consulta);
$array = mysqli_fetch_array($query);


if (!$consulta){
				die("error: ".mysqli_error($conni));
			} else {
				header("mostraralumno.php");
			}



 ?>