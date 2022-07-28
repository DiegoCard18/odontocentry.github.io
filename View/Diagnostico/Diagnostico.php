<?php
session_start();
include_once("Controller/BDnor.php")
?>
<?php
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


		<a class="btn btn-succes" href="?c=Diagnostico&a=Nuevo">Agregar</a>
		<br><br><br>
		<div class="col-md-8">
			<br />
			<br />
			<div class="table-responsive">
				<!-- Tabla -->
				<table class="table table-bordered">
					<thead>
						<tr class=" table-primary">
							<th> Id Diagnostico </th>
							<th> Descripcion </th>
							<th> Editar Usuarios </th>
							<!--<th> Inhabilitar Usuarios </th>-->
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datos["diagnostico"] as $datos) {
							echo "<tr>";
                            echo "<td>" . $datos["idDiagnostico"] . "</td>";
                            
                            echo "<td>" . $datos["Descripcion"] . "</td>";
                            
							echo "<td><a href='?c=Diagnostico&a=Modificar&id=".$datos["idDiagnostico"]."' class='btn btn-warning'>Modificar</a></td>";

							//echo "<td><a href='?c=Diagnostico&a=Inhabilitar&idUsuario=".$datos["idDiagnostico"]."' class='btn btn-warning'>Inhabilitar</a></td>";

							?>
						<?php } ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>

</body>

</html>