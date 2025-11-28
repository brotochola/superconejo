<?php

include('localization/localization.php');

?>



<div id="sliderHomenajes" >
	<h4 class="tituloSeccion" id="granRegalo"> <?php echo $json['granRegalo']; ?></h4>
	<p class="textoFiestas"  id="textoFiestas1">  <?php echo $json['textoFiestas1']; ?></p>

	
		
	<?php	
	/*
	 $imagesDir = 'img/homenajes/';
	 $images = glob($imagesDir . '*.{jpg,jpeg,png,gif,JPG,JPEG,JPE}', GLOB_BRACE);
	 $cantidad=count($images);
	for($i=0;$i<$cantidad;$i++) {
		$nuevoNombre=str_replace(" ", "%20", $images[$i]);
		echo "<div style='background-image:url(".$nuevoNombre.")'></div>";

		}
		*/
		?>

</div>

<br>
<h5 id="enterateComo"><?php echo $json['enterateComo']; ?>  </h5>


<iframe  id="AVE" width="1280" height="720" src="https://www.youtube.com/embed/JcS_sYwCQrA?showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>

	<!--
	<iframe  id="AVE"  src="http://player.vimeo.com/video/117335296" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>  
	-->
	
	
	<br>	<br>
<h5 id="homenajesTextos"> <?php echo $json['homenajesTextos']; ?>  </h5>
	<br>

	<div id="masVideos">
		<a  class="videosHomenajes" style="background-image:url(img/capturas/fiestas/arola.jpg);"  target="_blank" href="javascript:abrirVideo('Iu0kduT6bGk');" frameborder="0" allowfullscreen><div class="cartelitoLink"> El Casamiento de Arola & Verlo</div></a>
		<a    class="videosHomenajes"   style="background-image:url(img/capturas/fiestas/bella.jpg);"   target="_blank"  href="javascript:abrirVideo('uka-9b_WETY');" frameborder="0" allowfullscreen><div class="cartelitoLink">Videoclip para los 60 años de Bella </div></a>
				<a   class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/schiavi.jpg);"   target="_blank"  href="javascript:abrirVideo('x4jZkBpOT1U');" frameborder="0" allowfullscreen><div class="cartelitoLink">Los 40 años del Rolando 'El Flaco' Schiavi </div></a>

				<a   class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/anamaka.jpg);"   target="_blank"  href="javascript:abrirVideo('h6BiwqCx8KE');" frameborder="0" allowfullscreen><div class="cartelitoLink">Graduación de Ana: dedicatorias de Francis Ford Coppola, Hugh Grant y Julia Roberts </div></a>

		<a   class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/debbie.jpg);"   target="_blank"  href="javascript:abrirVideo('dE_vW3ZeF7s');" frameborder="0" allowfullscreen><div class="cartelitoLink">El Casamiento de Debbie & Eric, contado por su gato </div></a>
		<a   class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/fortu.jpg);"   target="_blank"  href="javascript:abrirVideo('axWnsiY-KyY');" frameborder="0" allowfullscreen><div class="cartelitoLink">Aniversario de Fortu & Ale </div></a>
		<a   class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/ingrid.jpg);"    target="_blank"  href="javascript:abrirVideo('5eV1YKtwf6U');" frameborder="0" allowfullscreen><div class="cartelitoLink">Biografía animada de Ingrid -cumple de 80- </div></a>
		<a   class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/keso.jpg);"    target="_blank"  href="javascript:abrirVideo('S1T9y65oPLk');" frameborder="0" allowfullscreen><div class="cartelitoLink">Qué pasó anoche? Despedida de soltero de Keso </div></a>
		<a  class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/melody.jpg);"    target="_blank"  href="javascript:abrirVideo('tlFj_sv_TDo');" frameborder="0" allowfullscreen><div class="cartelitoLink">Historia de Amor de Melody & Mariano </div></a>
		<a  class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/mora.jpg);"    target="_blank"  href="javascript:abrirVideo('unCVfMxBCpA');" frameborder="0" allowfullscreen><div class="cartelitoLink">Operación Mora: evitar que haga su batmitzva </div></a>
	<!--	<a  class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/nani.jpg);"    target="_blank"  href="javascript:abrirVideo('sJtroCw9NmU');" frameborder="0" allowfullscreen><div class="cartelitoLink">Los 15 de Nani, contado por su perro </div></a> -->
		
		<a  class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/pepe.jpg);"    target="_blank"  href="javascript:abrirVideo('aG_F1UziW2E');" frameborder="0" allowfullscreen><div class="cartelitoLink">Programa especial de Jugando con Pepe -cumple de 1 año- </div></a>
		<a  class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/salem.jpg);"    target="_blank"  href="javascript:abrirVideo('XEwDkoBsI7A');" frameborder="0" allowfullscreen><div class="cartelitoLink">Matrimonio de Lucila & Javier </div></a>
		
				<a  class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/santitume.jpg);"    target="_blank"  href="javascript:abrirVideo('nOt4zasvDCw');" frameborder="0" allowfullscreen><div class="cartelitoLink">biografía animada de Santi para su barmitzva </div></a>
		<a  class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/superuri.jpg);"    target="_blank"  href="javascript:abrirVideo('8H7EyoU012c');" frameborder="0" allowfullscreen><div class="cartelitoLink">Las Aventuras de SuperUri -cumpleaños de 3-</div></a>
		<a  class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/uripercal.jpg);"    target="_blank"  href="javascript:abrirVideo('-IbMMxD5UGo');" frameborder="0" allowfullscreen><div class="cartelitoLink">Dibujo Animado tipo trailer para el Barmitzva de Uri </div></a>
<!-- <a  class="videosHomenajes"  style="background-image:url(img/capturas/fiestas/negro.jpg);"    target="_blank"  href="javascript:abrirVideo('5hgfuXZ_2zM');" frameborder="0" allowfullscreen><div class="cartelitoLink">ajsf adf fddnaljsdad </div></a> -->

	</div>

	
	<br>
<h5 id="stdH5"><?php echo $json['stdH5']; ?>  </h5>


<iframe  id="AVE" width="1280" height="720" src="https://www.youtube.com/embed/4RsTdt27Nvo?showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>



			<a href="#" onClick="scrollear(0);" id="linkScrollUp"><img src="img/arriba.png"></a>

	<br><br><br>

