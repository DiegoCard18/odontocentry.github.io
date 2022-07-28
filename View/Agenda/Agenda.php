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


		<a class="btn btn-succes" href="?c=Agenda&a=Nuevo">Agregar</a>
		<br><br><br>
		<div class="col-md-8">
			<br />
			<br />
			<div class="table-responsive">
				<!-- Tabla -->
				<table class="table table-bordered">
					<thead>
						<tr class=" table-primary">
							<th> fechaAgenda </th>
							<th> horaAgenda </th>
							<th> Consultorio </th>
							<th> estadoAgenda </th>
							<th> Editar Usuarios </th>
							<th> Inhabilitar Agenda </th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datos["agenda"] as $datos) {
							echo "<tr>";
							echo "<td>" . $datos["fechaAgenda"] . "</td>";
							echo "<td>" . $datos["horaAgenda"] . "</td>";
							echo "<td>" . $datos["Consultorio"] . "</td>";
                            echo "<td>" . $datos["estadoAgenda"] . "</td>";
                            
							echo "<td><a href='?c=Agenda&a=Modificar&id=".$datos["idAgenda"]."' class='btn btn-warning'>Modificar</a></td>";

							echo "<td><a href='?c=Agenda&a=Inhabilitar&id=".$datos["idAgenda"]."' class='btn btn-warning'>Inhabilitar</a></td>";

							?>
						<?php } ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>

</body>

</html>