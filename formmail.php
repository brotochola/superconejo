<?


$email = $_REQUEST['email'];
$nombre = $_REQUEST['nombre'];
$telefono = $_REQUEST['telefono'];
$tema= $_REQUEST['tema'];
$detalle= $_REQUEST['detalle'];

$mensaje = "nombre: $nombre\n\n email: $email\n\n Telefono: $telefono \n  Tema: \n  $tema \n Detalle: $detalle";

$asunto="Mail desde UVDP de ".$email;


$cabeceras = "From: " .$email. "\r\n" .
"Reply-To:". $email. "\r\n" .
"X-Mailer: PHP/" . phpversion();




mail("alberto@unavidadepelicula.com.ar", $asunto, $mensaje, $cabeceras);

?>