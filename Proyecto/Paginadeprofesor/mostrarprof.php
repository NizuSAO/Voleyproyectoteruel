<?php 
require('ing2.php');

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Consultar Datos</title>
 	<link rel="stylesheet" href="..\paginadealumno\tabla.css">

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
					<th>fecha</th>
					<th>ubicacion</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			foreach ($query as $row){ ?>
				<tr>
					<td><?php echo $row['deporte']; ?></td>
					<td><?php echo $row['horarios']; ?></td>
					<td><?php echo $row['profesor']; ?></td>
					<td><?php echo $row['fecha']; ?></td>
					<td><?php echo $row['ubicacion']; ?></td>
			</tbody>
			<?php  
			}
			?>
		</table>




 </body>
 <footer>
 	<p><a href="profesor.html" style="color: white">Volver</a></p>
 </footer>
 </html>