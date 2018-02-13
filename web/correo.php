<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	echo $email;
	
	if(mail($email, $asunto,$mensaje)){
		echo "Se ha enviado";
	}

	else{
		echo "Failed";
	}

?>