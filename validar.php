<?php
if (isset($_POST['enviar'])) {
	$error = false;
	if (empty($nombre)) {
	 	echo "<p class='error'>* El nombre está vacío</p>";
	 	$error=true;
	}else{
		if (!ctype_alpha(trim($nombre))) {
			echo "<p class='error'> * El nombre debe ser solo letras</p>";
			$error=true;
		}
	}
	if(empty($telefono)){
		echo "<p class='error'> * El teléfono está vacío</p>";
		$error=true;
	}else{
		if (!is_numeric(trim($telefono))) {
			echo "<p class='error'> * El teléfono debe ser solo números</p>";
			$error=true;
		}
	}
	if (empty($correo)) {
		echo "<p class='error'> * El correo eletrónico está vacío</p>";
		$error=true;
	}else{
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			echo "<p class='error'> * Escriba una dirección de correo eletrónica válida</p>";
			$error=true;
		}
	}
	if (empty($asunto)) {
		echo "<p class='error'> * El asunto está vacío</p>";
		$error=true;
	}
	if (empty($mensaje)) {
		echo "<p class='error'> * El mensaje está vacío</p>";
		$error=true;
	}
	if (!$error) {
		echo "<p class='success'>El mensaje ha sido enviado satisfactoriamente! <a href='#' class='' style='color:#fff' data-toggle='modal' data-target='#message'>Ver mensaje</a></p>";
	}
}

?>