<?php

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	echo $nombre;
	echo $email;
	echo $mensaje;
		
	if(mail($email, $asunto,$mensaje)){
		echo "Se ha enviado";
	}

	else{
		echo "Failed";
	}

?>