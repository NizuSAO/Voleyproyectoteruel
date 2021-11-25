<?php require_once("conex.php"); ?>

<?php


if(isset($_POST["Sesion"])){

$Nom=$_POST['Nombres'];
$cont=$_POST['contraseña'];

$queryusuario = mysqli_query($conexion,"SELECT * FROM registro WHERE  Nombre='$Nom' and contraseña = '$cont'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
		if($nr == 1)
			{	
				header("Location: paginalogin.html");
			}
		}
}
?>