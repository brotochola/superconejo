<?


$email = $_REQUEST['email'];
$nombre = $_REQUEST['nombre'];
$telefono = $_REQUEST['telefono'];
$texto= $_REQUEST['mensaje'];

$mensaje = "nombre: $nombre\n\n email: $email\n\n Telefono: $telefono \n\n  Mensaje: \n  $texto";

$asunto="Mail desde SuperConejo.com.ar de ".$email;

$cabeceras = "Reply-To: $email";



mail("saiegh@gmail.com", $asunto, $mensaje, $cabeceras);
mail("gabrielfreidkes@gmail.com", $asunto, $mensaje, $cabeceras);

?>