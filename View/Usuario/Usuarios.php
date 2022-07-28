<?php
session_start();
include_once("Controller/BDnor.php")
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $datos["titulo"]; ?></title>
	<link rel="stylesheet" href="Assets/Css/Style.css">
</head>

<body>

	<!-- Nav -->

	<?php include "View/Includes/Nav.php"; ?>

	<!-- Titulo -->

	<div class="container">
		<h1><?php echo $datos["titulo"]; ?></h1>


		<a class="btn btn-succes" href="?c=Usuario&a=Nuevo">Agregar</a>
		<br><br><br>
		<div class="col-md-8">
			<br />
			<br />
			<div class="table-responsive">
				<!-- Tabla -->
				<table class="table table-bordered">
					<thead>
						<tr class=" table-primary">
							<th> Cédula </th>
							<th> Nombre </th>
							<th> Apellido </th>
							<th> Correo Electrónico </th>
							<th> Telefono de Contacto </th>
							<th> Dirección de residencia </th>
							<th> Rol del Usuario </th>
							<th> Estado del usuario </th>
							<th> Editar Usuarios </th>
							<th> Inhabilitar Usuarios </th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datos["usuarios"] as $datos) {
							echo "<tr>";
							echo "<td>" . $datos["idUsuario"] . "</td>";
							echo "<td>" . $datos["nombreUsuario"] . "</td>";
							echo "<td>" . $datos["apellidoUsuario"] . "</td>";
							echo "<td>" . $datos["correoUsuario"] . "</td>";
							echo "<td>" . $datos["telefonoUsuario"] . "</td>";
							echo "<td>" . $datos["direccionUsuario"] . "</td>";
							echo "<td>" . $datos["rolUsuario"] . "</td>";
							echo "<td>" . $datos["estadoUsuario"] . "</td>";
							
							echo "<td><a href='?c=Usuario&a=Modificar&id=".$datos["idUsuario"]."' class='btn btn-warning'>Modificar</a></td>";

							echo "<td><a href='?c=Usuario&a=Inhabilitar&id=".$datos["idUsuario"]."' class='btn btn-warning'>Inhabilitar</a></td>";

							?>
						<?php } ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>

</body>

</html>