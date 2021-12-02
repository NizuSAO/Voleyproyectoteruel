<?php 
require('ing.php');

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Consultar Datos</title>
 	<link rel="stylesheet" href="tabla.css">

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
					<th>deporte</th>
					<th>horarios</th>
					<th>profesor</th>
					<th>contacto</th>
					<th>ubicacion</th>
					<th>Eliminar</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			foreach ($query as $row){ ?>
				<tr>
					<td><?php echo $row['deporte']; ?></td>
					<td><?php echo $row['horarios']; ?></td>
					<td><?php echo $row['profesor']; ?></td>
					<td><?php echo $row['contacto']; ?></td>
					<td><?php echo $row['ubicacion']; ?></td>
					<td><p><a style="color: black;" href="Eliminardatos.php">Eliminar</a><p></td>
					<td><p><a style="color: black;" href="Actualizardatos.php">Modificar</a><p></td>
			</tbody>
			<?php  
			}
			?>
		</table>




 </body>
 <footer>
 	<p><a href="..\..\Proyecto\paginaderector\rector.html" style="color: white">Volver</a></p>
 </footer>
 </html>