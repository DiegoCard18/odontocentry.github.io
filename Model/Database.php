<?php

define("CONTROLADOR_PRINCIPAL", "Index");
define("ACCION_PRINCIPAL", "Index");

class Database
{

	public static function conexion()
	{

		$conn = new mysqli("localhost", "root", "", "consultorio");

		return $conn;
	}
}
