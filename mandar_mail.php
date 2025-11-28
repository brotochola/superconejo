<?php
	$fecha = date("d/m/Y");
	$ip= $_SERVER['REMOTE_ADDR'];
	$destinatario = 'gabrielfreidkes@gmail.com';
	$nombre = $_REQUEST['nombre'];
	
	
	$telefono = $_REQUEST['telefono'];
		$fechaEvento = $_REQUEST['fecha'];
	
	$email = $_REQUEST['email'];
	$consulta = $_REQUEST['detalle'];
	$headers = "From:". $email . "\r\n" .	"Reply-To: ".$email . "\r\n" .	"X-Mailer: PHP/" . phpversion();
	$asunto = "Consulta desde SuperConejo.com.ar";
	$mensaje = "nombre: $nombre \n Deadline: $fechaEvento \n Teléfono: $telefono \n Fecha del mensaje: $fecha  \n e-mail: $email \n\n Consulta: \n $consulta";

	
	$file=fopen("mails.txt","a") or die("Problemas");
	fwrite($file, $email.', ');
	fclose($file);
	$mando = mail($destinatario,$asunto,$mensaje,$headers);
	echo $mando;
?>