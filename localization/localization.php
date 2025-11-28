<?php

 error_reporting(E_ERROR | E_WARNING | E_PARSE);
header ('Content-type: text/html; charset=utf-8');

/*
$string = file_get_contents("es.json");
$json=json_decode($string,true);
*/
//asi lo vamos a usar:
//echo utf8_decode($json['botonNav1']);
/*
foreach ($json as $clave => $valor) {
   echo utf8_decode($clave).": ".utf8_decode($valor)."<br />\n";
}
*/

//si ya se metio el idioma con la variable L
//agarro la variable L, q va a determinar el lenguaje, si se quiere, sino se detecta
if(isset($_REQUEST['l']) &&$_REQUEST['l'] !=NULL) {
	$l=$_REQUEST['l'];
	if($l=='es'){
		echo "<script>var language = 'es';</script>";
		$string = file_get_contents("localization/es.json");
	} 
	if($l=='en'){
		echo "<script>var language = 'en';</script>";
		$string = file_get_contents("localization/en.json");
	} 
	if($l!='en' && $l!='es'){
		echo "<script>var language = 'en';</script>";
		$string = file_get_contents("localization/en.json");
	} 
}else{
	//me fijo el idioma del aparato
	$idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	//esta variable la toma el archivo idiomas.js, y cambia en tiempo real.
	echo "<script>var language = '$idioma';</script>";
	
	//segun el idoima cargo uno u otro archivo JSON
/*	if($idioma=='es'){
		$string = file_get_contents("localization/es.json");
	}else{
		$string = file_get_contents("localization/en.json");
	}*/
	//dejo puesto que el idioma base sea español, via javascript va a modificarse ni bien se carga la pagina. Pero lo que lee google va a ser en español
		$string = file_get_contents("localization/es.json");
}


//convierte de JSON a array con nombres, en vez de posiciones numeradas
$json=json_decode($string,true);


?>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />