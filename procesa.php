<?php

		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$correo = $_POST['correo'];
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];
		$error=false;
		$emailerror=false;
		$msg="";
		

		if ((!ctype_alpha($nombre)) || empty($nombre)) {
				$error=true;
				$msg .= "nombre=";
			}else{
				$msg .= "nombre=$nombre";
			}	
		if ((!is_numeric($telefono)) || empty($telefono)) {
				$error=true;
				$msg .= "&telefono=";
			}else{
				$msg .= "&telefono=$telefono";
			}
		$tel = str_split($correo);
		if ((substr_count($correo, "@")==1) && (substr_count($correo, ".")>=1)) {
			$emailerror=true;
			$msg .= "&correo=";
		}else{
			$msg .= "&correo=$correo";
		}
		if ((!ctype_alpha($asunto)) || empty($asunto)) {
				$error=true;
				$msg .= "&asunto=";
		}else{
				$msg .= "&asunto=$asunto";
		}
		if ((!ctype_alpha($mensaje)) || empty($mensaje)) {
				$error=true;
				$msg .= "&mensaje=";
		}else{
			$msg .= "&mensaje=$mensaje";
		}

		header('Location:index.php?'.$msg.'#form');
		
		 ?>