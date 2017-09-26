<?php
	
	if(!empty($_POST))
	
	{
		if(isset($_POST['nombre'])&&isset($_POST['domicilio'])&&isset($_POST['celular'])&&isset($_POST['domilio_trabajo'])&&isset($_POST['tel_trabajo'])&&isset($_POST['ife'])&&isset($_POST['comprobante_dom']))
		{
			include('BD.php');
			$nom=$_POST['nombre'];
			$dom=$_POST['domicilio'];
			$cel=$_POST['celular'];
			$dom_trab=$_POST['domilio_trabajo'];
			$tel_trab=$_POST['tel_trabajo'];
			$ife=$_POST['ife'];
			$com_dom=$_POST['comprobante_dom'];
			$query= "INSERT INTO cliente(nombre, domicilio, celular, domilio_trabajo, tel_trabajo, ife, comprobante_dom) VALUES (".$nom.",".$dom.",".$cel.",".$dom_trab.",".$tel_trab.",".$ife.",".$com_dom.")";
			
			if(mysqli_query($conexion,$query))
			{
				print "<script>alert('El cliente se ha registrado correctamente');</script>";
			}
			else
			{
				print "<script>alert('Error al insertar cliente');</script>";
			}
		}
	}
?>