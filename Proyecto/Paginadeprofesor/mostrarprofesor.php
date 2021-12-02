<?php 
require('mosta.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Consultar Datos</title>
 	<link rel="stylesheet" href="..\Paginadealumno\tabla.css">

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
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Telefono</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			foreach ($query as $row){ ?>
				<tr>
					<td><?php echo $row['Nombre']; ?></td>
					<td><?php echo $row['Apellido']; ?></td>
					<td><?php echo $row['Telefono']; ?></td>
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