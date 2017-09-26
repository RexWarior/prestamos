<?php
	$server='localhost';
	$basedatos='prestamos';
	$usuario='root';
	$contraseña='';
	/*$conexion=new mysqli($server, $usuario, $contraseña, $basedatos);*/
	$conexion= mysqli_connect($server, $usuario, $contraseña, $basedatos);
?>