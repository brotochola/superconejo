<?

$nombre= $_REQUEST['nombre'];
$telefono = $_REQUEST['telefono'];
$email = $_REQUEST['email'];
$tipo = $_REQUEST['tipo'];
$comentarios = $_REQUEST['comentarios'];
$ya = $_REQUEST['ya'];
$como_nos_conocio = $_REQUEST['opcionbase'];

$mensaje = "nombre: $nombre \n telefono: $telefono \n email: $email \n\n Tipo de evento: $tipo \n\n ya: $ya  \n cómo nos conoció: $como_nos_conocio \n\n $comentarios";

$destinatarios="saiegh@gmail.com, gabrielfreidkes@gmail.com";
$asunto="SuperConejo - Consulta de $email";
$headers  = "reply-to: $email";

if(mail($destinatarios, $asunto, $mensaje, $headers)){
echo 'ok';
}else{
echo 'no salio';
}


?>


