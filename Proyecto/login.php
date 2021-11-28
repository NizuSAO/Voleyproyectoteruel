<?php require_once("conex.php"); ?>

<?php


if(isset($_POST["Sesion"])){

$Nom=$_POST['Nombres'];
$cont=$_POST['contraseña'];

$queryusuario = mysqli_query($conexion,"SELECT * FROM alumnos WHERE  Nombre='$Nom' and Contraseña = '$cont'");
$nr = mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
		if($nr == 1)
			{	
				header("Location: ..\Paginavoley.html");
			}
		}
}
?>