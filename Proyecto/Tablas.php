<?php
	include('consul.php') 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="siu.css">
	<title>TABLAS</title>
</head>
<body>
	
 	<nav style="background-color:#00796b">
		<center>
			<h1>Listado de Datos</h1>
		</center>	
	</nav>

	<center>
		<table border="10">
			<thead>
				<tr>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Contraseñas</th>
					<th>Telefonos</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			foreach ($query as $row){ ?>
				<tr>
					<td><?php echo $row['Nombre']; ?></td>
					<td><?php echo $row['Apellido']; ?></td>
					<td><?php echo $row['Contraseña']; ?></td>
					<td><?php echo $row['Telefono']; ?></td>
				</tr>

			</tbody>
			<?php  
			}
			?>

		</table>

		<footer>
			<center>
				<h1><a href="Paginavoley.html">volver a inicio</a></h1>
			</center>
		</footer>
	</center>

</body>

</html>