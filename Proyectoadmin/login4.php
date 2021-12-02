<?php require_once("conex.php"); ?>

<?php


if(isset($_POST["Sesion"])){

$cont=$_POST['contraseña'];

$queryusuario = mysqli_query($conexion,"SELECT * FROM Contraseña WHERE contraseña = '$cont'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
		if($nr == 1)
			{	
				header("Location: Paginavoleyadmin.html");
			}
		}
}
?>