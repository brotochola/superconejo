<?



$nombre= $_REQUEST['nombre'];
$telefono = $_REQUEST['telefono'];
$email = $_REQUEST['email'];
$tipo = $_REQUEST['tipo'];
$dia= $_REQUEST['dia'];
$mes= $_REQUEST['mes'];
$ano = $_REQUEST['ano'];
$lugar = $_REQUEST['lugar'];
$comentarios = $_REQUEST['comentarios'];
$adquirio = $_REQUEST['adquirio'];
$como_nos_conocio = $_REQUEST['opcionbase'];


$mensaje = "nombre: $nombre \n telefono: $telefono \n email: $email \n \n fecha del evento: $dia \ $mes \ $ano \n Tipo de evento: $tipo \n Lugar del evento: $lugar \n\n es cliente: $adquirio  \n cómo nos conoció: $como_nos_conocio \n\n comentarios: $comentarios";

$destinatarios="saiegh@gmail.com, gabrielfreidkes@gmail.com";
$asunto="SuperConejo - Consulta de ".$email;
$headers  = "reply-to: $email";

if(mail($destinatarios, $asunto, $mensaje, $headers)){
echo 'ok';
}else{
echo 'no salio';
}





?>