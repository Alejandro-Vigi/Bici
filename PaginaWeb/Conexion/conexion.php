<?php
	// Datos de la base de datos
	$usuario = "alex";
	$password = "mypass123";
	$servidor = "localhost";
	$basededatos = "bici";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

?>