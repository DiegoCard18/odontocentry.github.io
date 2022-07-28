<header>
	<nav class="navegacion">
		<ul class="menu">
			<li><a href="?c=Dashboard&a=Index">Inicio</a></li>
			<!--<li><a href="#">Nosotros</a></li>-->

			<!--
			<li><a href="#">Usuarios</a>
				<ul class="submenu">
					<li><a href="Crear_Usuarios.php">Crear Usuarios</a></li>
					<li><a href="Usuarios.php">Usuarios</a></li>
				</ul>
			</li>
			-->

			<!-- Usuarios-->
			<?php
			if ($_SESSION['rolUsuario'] == '1'){
			?>
				<li><a href="?c=Usuario&a=Index">Usuarios</a></li>
			<?php 
				} 
			?>
			<!-- Paciente -->
			<?php
			if ($_SESSION['rolUsuario'] == '1') {
			?>
				<li><a href="?c=Paciente&a=Index">Pacientes</a></li>
			<?php }?>
			<!-- Medico -->
			<?php
			if ($_SESSION['rolUsuario'] == '1') {
			?>
				<li><a href="?c=Medico&a=Index">Medicos</a></li>
			<?php } ?>
			<!-- Historia -->
			<?php
			if ($_SESSION['rolUsuario'] == '1' || $_SESSION['rolUsuario'] == '2' || $_SESSION['rolUsuario'] == '3') {
			?>
				<li><a href="?c=Historia&a=Index">Historia Clínica</a></li>
			<?php } ?>
			<!-- Consulta -->
			<?php
			if ($_SESSION['rolUsuario'] == '1' || $_SESSION['rolUsuario'] == '2') {
			?>
				<li><a href="?c=Consulta&a=Index">Consulta Médica</a></li>
			<?php } ?>
			<!-- Diagnostico -->
			<?php
			if ($_SESSION['rolUsuario'] == '1' || $_SESSION['rolUsuario'] == '2') {
			?>
				<li><a href="?c=Diagnostico&a=Index">Diagnostico</a></li>
			<?php } ?>
			<!-- Examen -->
			<?php
			if ($_SESSION['rolUsuario'] == '1' || $_SESSION['rolUsuario'] == '2' || $_SESSION['rolUsuario'] == '3') {
			?>
				<li><a href="?c=Examen&a=Index">Examen</a></li>
			<?php } ?>
			<!-- Agenda -->
			<?php
			if ($_SESSION['rolUsuario'] == '1' || $_SESSION['rolUsuario'] == '2' || $_SESSION['rolUsuario'] == '3') {
			?>
				<li><a href="?c=Agenda&a=Index">Agenda</a></li>
			<?php } ?>
			<!-- Editar Usuario -->
			<!-- <li class="edit_perf"><a href="Editar_perfil.php?id<?php //echo $_SESSION['idUsuario']; 
																	?>">Editar Perfil</a></li> -->
			<!-- Cerrar Sesion -->
			<li><a href="Controller/Cerrarsession.php">Cerrar Sesión</a></li>
		</ul>
	</nav>
</header>