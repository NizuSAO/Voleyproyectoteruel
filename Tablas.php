<?php
	include('consul.php') 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TABLAS</title>
</head>
<body>
	<h1>TABLAS</h1>
			<thead>
				<tr>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Telefonos</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			foreach ($query as $row){ ?>
				<tr>
					<td><?php echo $row['Nombre']; ?></td>
					<td><?php echo $row['Apellido']; ?></td>
					<td><?php echo $row['ID_producto']; ?></td>
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