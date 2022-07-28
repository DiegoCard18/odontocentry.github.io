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


		<a class="btn btn-succes" href="?c=Paciente&a=Nuevo">Agregar</a>
		<br><br><br>
		<div class="col-md-8">
			<br />
			<br />
			<div class="table-responsive">
				<!-- Tabla -->
				<table class="table table-bordered">
					<thead>
						<tr>
							<th> Cedula </th>
							<th> Nombre </th>
							<th> Apellido </th>
							<th> Dirección</th>
							<th> Telefono</th>
							<th> Correo</th>
							<th> Fecha nacimiento </th>
							<th> Estado Paciente </th>
							<th> Editar Paciente </th>
							<th> Inhabilitar Paciente </th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datos["paciente"] as $datos) {
							echo "<tr>";
							echo "<td>" . $datos["idPaciente"] . "</td>";
							echo "<td>" . $datos["nombrePaciente"] . "</td>";
							echo "<td>" . $datos["apellidoPaciente"] . "</td>";
							echo "<td>" . $datos["direccionPaciente"] . "</td>";
							echo "<td>" . $datos["telefonoPaciente"] . "</td>";
							echo "<td>" . $datos["correoPaciente"] . "</td>";
							echo "<td>" . $datos["fechaNacimiento"] . "</td>";
							echo "<td>" . $datos["estadoPaciente"] . "</td>";

							echo "<td><a href='?c=Paciente&a=Modificar&id=".$datos["idPaciente"]."' class='btn btn-warning'>Modificar</a></td>";

							echo "<td><a href='?c=Paciente&a=Inhabilitar&id=".$datos["idPaciente"]."' class='btn btn-warning'>Inhabilitar</a></td>";
						?>
						<?php } ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>

</body>

</html>