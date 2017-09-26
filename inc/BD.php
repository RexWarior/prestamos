<?php
	$server='localhost';
	$basedatos='prestamos';
	$usuario='root';
	$contraseña='geode2530';
	//conexion a la base de datos
	$conexion= mysqli_connect($server, $usuario, $contraseña, $basedatos) or die(mysqli_error());
?>