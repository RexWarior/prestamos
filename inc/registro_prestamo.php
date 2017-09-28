<?php
	
	if(!empty($_POST))
	
	{
		if(isset($_POST['importe'])&&isset($_POST['fecha_prestamo'])&&isset($_POST['interes'])&&isset($_POST['dia_cobro'])&&isset($_POST['mensualidad'])&&isset($_POST['estado'])&&isset($_POST['plazo']))
		{
			include('BD.php');
			$imp=$_POST['importe'];
			$fec_p=$_POST['fecha_prestamo'];
			$inte=$_POST['interes'];
			$dia_c=$_POST['dia_cobro'];
			$mens=$_POST['mensualidad'];
			$estado=$_POST['estado'];
			$plazo=$_POST['plazo'];
			$query= "INSERT INTO prestamo(importe, fecha_prestamo, interes, dia_cobro, mensualidad, estado, plazo) VALUES ('".$imp."','".$fec_p."','".$inte."','".$dia_c."','".$mens."','".$estado."','".$plazo."')";
			/*echo $query;*/
			if(mysqli_query($conexion,$query))
			{
				print "<script>alert('El presta se ha registrado correctamente');window.location='../pages/prestamo';</script>";
				
			}
			else
			{
				print "<script>alert('Error al insertar prestamo');window.location='../pages/prestamo';</script>";
			}
		}
	}
?>