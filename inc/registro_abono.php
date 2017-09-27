<?php
	
	if(!empty($_POST))
	
	{
		if(isset($_POST['cantidad_abonada'])&&isset($_POST['fecha_abono'])&&isset($_POST['capital_abono']))
		{
			include('BD.php');
			$cant_abo=$_POST['cantidad_abonada'];
			$fecha_abo=$_POST['fecha_abono'];
			$capital=$_POST['capital_abono'];
			$query= "INSERT INTO abono(cantidad_abonada, fecha_abono, capital_abono) VALUES ('".$cant_abo."','".$fecha_abo."','".$capital."')";
			echo $query;
			/*if(mysqli_query($conexion,$query))
			{
				print "<script>alert('El abono se ha registrado correctamente');window.location='../pages/clientes';</script>";
				
			}
			else
			{
				print "<script>alert('Error al insertar un abono');window.location='../pages/clientes';</script>";
			}
			*/
			
		}
		else
		{
				print "algo esta mal";
		}
	}
	else
		{
				print "algo esta mal peor";
		}
?>