<!DOCTYPE html>
<html>

<head>


	<!-- Start of StatCounter Code for Default Guide -->
	<script type="text/javascript">

		var sc_project = 10324527;
		var sc_invisible = 1;
		var sc_security = "ec729ac2";
		var scJsHost = (("https:" == document.location.protocol) ?
			"https://secure." : "http://www.");
		document.write("<sc" + "ript type='text/javascript' src='" +
			scJsHost +
			"statcounter.com/counter/counter.js'></" + "script>");
	</script>

	<!-- End of StatCounter Code for Default Guide -->

	<meta name="msvalidate.01" content="7B11B56F1027DB709999E6E4E88D5C2A" />
	<meta http-equiv="Content-Language" content="es, en">
	<link rel="apple-touch-icon" sizes="57x57" href="img/icon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/icon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/icon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/icon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/icon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/icon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="img/icon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/icon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="img/icon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="img/icon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/icon/manifest.json">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="img/icon/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link rel="author" href="https://plus.google.com/112251250305768826639" />


	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://www.superconejo.com.ar" />
	<meta property="og:image" content="http://www.superconejo.com.ar/SC_DAP.png" />
	<meta property="fb:admins" content="superconejoanimaciones" />
	<meta name="twitter:image" content="http://www.superconejo.com.ar/SC_DAP.png">







	<?php
	header('Content-type: text/html; charset=utf-8');



	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;

	$deviceType = "phone";
	$scriptVersion = $detect->getScriptVersion();

	//pongo como variable de sesion el valor de $deviceType, asi puede abrirse en otros phps
	session_start();
	$_SESSION['mobile'] = $deviceType;


	//detecto si estas en compu o en telefono o tablet, y lo pongo como variable javascript
	if ($deviceType == "computer") {
		echo "<script>var  mobile= 0;</script>";

	} else {
		echo "<script>var  mobile= 1;</script>";

	}

	///////////////////////////////////////////////////////////////////////////
// slider para mobile, porq el video de youtube no va en celus
//////////////////////////////////////////////////////////////////////////////////
	
	//evita q se pongan errores
	
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	//defino el tiempo por imagen y a la carpeta  
	$tiempoPorImagen = 5;
	$imagesDir = 'img/sliderMobile/';
	$images = glob($imagesDir . '*.{jpg,jpeg,png,gif,JPG,JPEG,JPE}', GLOB_BRACE);
	$cantidad = count($images);
	//mezcla random el array de las imagenes
	// shuffle($images);
	$divSlider = "#reelSC";

	///////////////////////////////////////////////////////////////////////////////////
	
	include('localization/localization.php');

	//asi se usa:
	echo '
<meta name="description" content="' . $json['metaDescription'] . '">
<meta name="keywords" content="' . $json['metaKeywords'] . '">
<meta name="author" content="SuperConejo Dibujos Animados">
<meta property="og:title" content="' . $json['metaTitle'] . '"/>
<meta property="og:description" content="' . $json['metaDescription'] . '"/>
';




	?>





	<style>
		#reelSC.indexMobile div {
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0px;
			left: 0px;
			color: transparent;
			background-size: cover;
			background-position: 50% 50%;
			background-repeat: no-repeat;
			opacity: 0;
			z-index: 0;

			-webkit-animation: imageAnimation
				<?php echo $tiempoPorImagen * $cantidad . "s"; ?>
				linear infinite 0s;
			animation: imageAnimation
				<?php echo $tiempoPorImagen * $cantidad . "s"; ?>
				linear infinite 0s;
		}

		<?php
		//genero los delays y fondos para todos los divs
		if ($deviceType != 'computer') {
			for ($i = 0; $i < $cantidad; $i++) {
				//le saco los espacios a los nombres y los reemplazo por algo q no trae problemas:
				$nuevoNombre = str_replace(" ", "%20", $images[$i]);
				echo "$divSlider div:nth-child(" . ($i + 1) . ") {
		background-image: url(" . $nuevoNombre . ");
		animation-delay: " . (($i + 1) * $tiempoPorImagen - $tiempoPorImagen) . "s;
		-webkit-animation-delay: " . (($i + 1) * $tiempoPorImagen - $tiempoPorImagen) . "s;
		}\n";
			}

			//segun la cantidad de imagenes q hay, calcula los porcentajes para los keyframes:
			$numero = 100 / $cantidad / 2;
			//esta variable se va a usar 2 veces: con y sin -webkit
			$keyframes = $numero . "% {opacity: 1; display:block; transform: scale(1.05) rotate(0deg);-webkit-transform: scale(1.05) rotate(0deg);}\n" . ($numero * 2) . "% {opacity: 1;transform: scale(1.1) rotate(1deg);-webkit-transform: scale(1.1) rotate(1deg);}\n" . ($numero * 3) . "% {opacity: 0;transform: scale(1.15) rotate(2deg);-webkit-transform: scale(1.15) rotate(2deg);}\n" . ($numero * 3.01) . "% {display:none}}";

			//genera la animacion de keyframes, q es la misma para todos. Con los delays se suceden bien.
			echo "\n@keyframes imageAnimation {\n";
			echo $keyframes;
			echo "\n@-webkit-keyframes imageAnimation {\n";
			echo $keyframes;
		}
		?>
	</style>


	<title> <?php echo $title; ?></title>
	<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
	<!-- para animaciones html5-->
	<script src="js/swiffy.js" type="text/javascript"></script>
	<!-- validador de formus -->
	<script src="js/jquery.validate.js"></script>

	<!-- para q los celus no cambien los tamaños de las cosas y se respete la densidad de pixeles 1:1 -->
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="mobile-web-app-capable" content="yes">
	<!-- mis funciones para esta pagina -->
	<script src="js/sc2015.js"></script>





	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" href="estilos.css" />


	<script type="text/javascript">
		// analytics:
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-9793684-1']);
		_gaq.push(['_trackPageview']);

		(function () {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

</head>

<body onscroll="try{activo==4 && animarCirculitos();}catch(e){}">



	<nav>
		<ul id="menu">
			<li id="logo" class="itemsMenu"><a href="javascript:seccion(0);" class="botonesNav" id="botonNav0"> <img
						alt="<?php echo $json['metaTitle']; ?>" src="img/logo.png" id="logo"></a>
			</li>

			<li id="queEsSC" class="itemsMenu"> <a href="javascript:seccion(1);" class="botonesNav"
					id="botonNav1"><?php echo $json['botonNav1']; ?></a>
			</li>
			<li id="institucionales" class="itemsMenu"> <a href="javascript:seccion(2);" class="botonesNav"
					id="botonNav2"><?php echo $json['botonNav2']; ?></a>
			</li>
			<li id="homenajes" class="itemsMenu"> <a href="javascript:seccion(3);" class="botonesNav"
					id="botonNav3"><?php echo $json['botonNav3']; ?></a>
			</li>
			<li id="videojuegos" class="itemsMenu"> <a href="javascript:seccion(4);" class="botonesNav"
					id="botonNav4"><?php echo $json['botonNav4']; ?></a>
			</li>
			<li id="contacto" class="itemsMenu"><a href="javascript:seccion(5);" class="botonesNav" id="botonNav5">
					<?php echo $json['botonNav5']; ?></a>
			</li>
			<!--<li id='espacio'> </li>-->

			<a href="javascript:cambiarIdioma('es');" id="esp" class="active"><span>
					esp</span></a>


			<a href="javascript:cambiarIdioma('en');" id="eng"><span>
					eng</span></a>

			<li id="menuMobile" onClick="desplegarMenu();">
			</li>

		</ul>


	</nav>

	<div id="menuDesplegado">
		<a href="javascript:seccion(0);" class="botonesNav" id="botonNav6"> Home</a>
		<a href="javascript:seccion(1);" class="botonesNav" id="botonNav7"> <?php echo $json['botonNav1']; ?></a>
		<a href="javascript:seccion(2);" class="botonesNav" id="botonNav8"> <?php echo $json['botonNav2']; ?></a>
		<a href="javascript:seccion(3);" class="botonesNav" id="botonNav9"> <?php echo $json['botonNav3']; ?></a>
		<a href="javascript:seccion(4);" class="botonesNav" id="botonNav10"> <?php echo $json['botonNav4']; ?></a>
		<a href="javascript:seccion(5);" class="botonesNav" id="botonNav11"> <?php echo $json['botonNav5']; ?></a>
	</div>
	<a href="javascript:desplegarMenu();" id="retraerMenu"></a>


	<div id='seccion1' class="contenidos"></div>

	<div id='seccion3' class="contenidos"></div>

	<div id='seccion2' class="contenidos"></div>

	<div id='seccion4' class="contenidos"></div>

	<div id='seccion0' class="contenidos activo">
		<header id="circuloWrapper">
			<div id="circuloHome">
				<div id="welcome">
					<h1>SuperConejo</h1>
					<h2 id="subtituloCirculo"><?php echo $json['subtituloCirculo']; ?></h2>
					<hr>
					<div id="sliderHome">


						<div>
							<h3 id="H3intro1">
								<?php echo $json['H3intro1']; ?>
							</h3>
						</div>

						<div>
							<h3 id="H3intro2">
								<?php echo $json['H3intro2']; ?>
							</h3>
						</div>
						<div>
							<h3 id="H3intro3"> <?php echo $json['H3intro3']; ?></h3>
						</div>
					</div>
					<div id="botonera">
						<!-- segun la cantidad de links de estos genera el movimiento -->
						<a href="javascript:cambiarSlider(0);" id="botonSlider0" class="botonesSlider activo"></a>
						<a href="javascript:cambiarSlider(1);" id="botonSlider1" class="botonesSlider"></a>
						<a href="javascript:cambiarSlider(2);" id="botonSlider2" class="botonesSlider"></a>


					</div>
				</div>
			</div>
		</header>

		<div id="efectoNegro"></div>



		<div id="video-viewport-wrapper">
			<div id="video-viewport">
				<!--<video id="reelSC" width="640" height="360"  preload="auto" autoplay loop poster="img/loading.gif" >
				<source src="reel.mp4" type="video/mp4">
			</video>-->

				<?php

				// if($deviceType == 'computer'){
				echo '

				<iframe  id="reelSC" class="indexPC" src="https://www.youtube-nocookie.com/embed/PBsJKyUNxBo?loop=1&autoplay=1&controls=0&showinfo=0&mute=1&start=8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';



				// }
				

				?>




			</div>
		</div>
		<?php
		// if($deviceType != 'computer'){
		// 	echo '<div id="reelSC" class="indexMobile">';
		// 	//pongo tantos divs como fotos hay
		// 	  for($i=0;$i<$cantidad;$i++){
		// 		echo "<div></div>";  
		// 	  }
		// 	echo '</div>';
		// }
		?>

	</div> <!-- fin seccion 0 -->

	<!--    CONTACTO -->
	<div id="seccion5" class="contenidos">

	</div>




	<div id="popupVideo">
		<p id="gire"><?php echo $json['gire']; ?></p>
		<a href="javascript:$('#popupVideo').fadeOut(0);toggleVideo('hide');" id="cerrar">X</a>
		<iframe width="512" height="288" src="" frameborder="0" allowfullscreen></iframe>

	</div>
	<!-- y la posibilidad de cambiar de idioma en tiempo real con js -->
	<script src="js/idiomas.js"></script>



	<?php if (isset($_REQUEST['contacto'])) {
		echo "<script> seccion(5); </script>";
	} ?>

</body>

</html>