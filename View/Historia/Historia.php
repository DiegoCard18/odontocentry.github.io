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


		<a class="btn btn-succes" href="?c=Historia&a=Nuevo">Agregar</a>
		<br><br><br>
		<div class="col-md-8">
			<br />
			<br />
			<div class="table-responsive">
				<!-- Tabla -->
				<table class="table table-bordered">
					<thead>
						<tr class=" table-primary">
							<th> Estatura </th>
							<th> Peso </th>
							<th> Antecedentes Familiares </th>
							<th> Alergias </th>
							<th> Enfermedades Padecidas </th>
							<th> Editar Historia </th>
							<!--<th> Eliminar </th>-->
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datos["historia"] as $datos) {
							echo "<tr>";
							echo "<td>" . $datos["Estatura"] . "</td>";
							echo "<td>" . $datos["Peso"] . "</td>";
							echo "<td>" . $datos["antecedentesFamiliares"] . "</td>";
							echo "<td>" . $datos["Alergias"] . "</td>";
							echo "<td>" . $datos["enfermedadesPadecidas"] . "</td>";
                            
							echo "<td><a href='?c=Historia&a=Modificar&id=".$datos["idHistoria"]."' class='btn btn-warning'>Modificar</a></td>";

							//echo "<td><a href='?c=Historia&a=Eliminar&idUsuario=".$datos["idHistoria"]."' class='btn btn-warning'>Eliminar</a></td>";

							?>
						<?php } ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>

</body>

</html>