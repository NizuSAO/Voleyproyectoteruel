<?php 
require('connex.php');


$consulta = "SELECT * FROM pagprof";
$query = mysqli_query($connex,$consulta);
$array = mysqli_fetch_array($query);


if (!$consulta){
				die("error: ".mysqli_error($connex));
			} else {
				header("mostrardat.php");
			}



 ?>