<?php

include('localization/localization.php');

?>

<iframe id="reelNoSoc" width="1280" height="720" src="//www.youtube.com/embed/nu0obQgHnoQ?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

<br>
<h5 id="empresasDibujitos"> <?php echo $json['empresasDibujitos']; ?>  </h5>
<p class="subtitulo" id="tenemosOtros"><?php echo $json['tenemosOtros']; ?> </p>
<br>

<ul id="itemsComunicacion">
	<li>
	<div class="iconosComu"><img src="img/comu1.png?sdf=4" alt="<?php echo $json['investigacion']; ?> "></div>
	<h6 class="tituloComu" id="investigacion"><?php echo $json['investigacion']; ?> </h6>
<p id="investigacionTexto"><?php echo $json['investigacionTexto']; ?> .</p>
	</li>

	<li>
	<div class="iconosComu"><img src="img/comu2.png?sdf=4" alt="<?php echo $json['indentificacion']; ?> "></div>
		<h6 class="tituloComu"  id="indentificacion"><?php echo $json['indentificacion']; ?> </h6>
<p id="involucramientoTexto"><?php echo $json['involucramientoTexto']; ?>  </p>

	</li>

	<li>
	<div class="iconosComu"><img src="img/comu3.png?sdf=4" alt="<?php echo $json['ideas']; ?> "></div>
		<h6 class="tituloComu" id="ideas"><?php echo $json['ideas']; ?> </h6>
<p id="ideasTexto"><?php echo $json['ideasTexto']; ?> 
</p>

	</li>
</ul>
<h5 id="marcasTitulo"> <?php echo $json['marcasTitulo']; ?> </h5>

<ul id="marcas">
<?php
	 $marcas = glob('img/marcas/' . '*.{jpg,jpeg,png,gif,JPG,JPEG,JPE}', GLOB_BRACE);
	 for($i=0;$i<count($marcas);$i++){
		echo "<li style='background-image:url(".$marcas[$i].")'> </li>";
	 }
	 
	 ?>

</ul>
	<br>
<h5 id="ultimosComunicacionTextos"> <?php echo $json['ultimosComunicacionTextos']; ?> </h5>
	

	<div id="masVideos">
		

		
				<a  class="videosHomenajes" style="background-image:url(http://img.youtube.com/vi/7LDYhNV4mWg/0.jpg);"  target="_blank" href="javascript:abrirVideo('7LDYhNV4mWg');" frameborder="0" allowfullscreen><div class="cartelitoLink"> Hombres en su mundo Trailer</div></a>
				
						<a  class="videosHomenajes" style="background-image:url(http://img.youtube.com/vi/dCnFid1frtc/0.jpg);"  target="_blank" href="javascript:abrirVideo('dCnFid1frtc');" frameborder="0" allowfullscreen><div class="cartelitoLink"> Bidi - Biblioteca Digital</div></a>
				
		<a  class="videosHomenajes" style="background-image:url(http://img.youtube.com/vi/wuq5xGqGYjs/0.jpg);"  target="_blank" href="javascript:abrirVideo('wuq5xGqGYjs');" frameborder="0" allowfullscreen><div class="cartelitoLink"> Publicidad animada para DeDuenos.com</div></a>
		
				
		<a  class="videosHomenajes" style="background-image:url(http://img.youtube.com/vi/8a5XG_2TIw8/0.jpg);"  target="_blank" href="javascript:abrirVideo('8a5XG_2TIw8');" frameborder="0" allowfullscreen><div class="cartelitoLink"> Prueba de Animación, convocatoria Animate INCAA</div></a>
		
				
		<a  class="videosHomenajes" style="background-image:url(http://img.youtube.com/vi/c7dL_1kdJsI/0.jpg);"  target="_blank" href="javascript:abrirVideo('c7dL_1kdJsI');" frameborder="0" allowfullscreen><div class="cartelitoLink"> Video Animado Explicativo. Plataforma KIDIS</div></a>
		
		<a    class="videosHomenajes"   style="background-image:url(img/capturas/insti/ecolin.jpg);"   target="_blank"  href="javascript:abrirVideo('3ersjFSIxfM');" frameborder="0" allowfullscreen><div class="cartelitoLink">Piloto para serie animada educativa Ecolín: El guardián de la Ecología </div></a>
				<a   class="videosHomenajes"  style="background-image:url(img/capturas/insti/imedicos.jpg);"   target="_blank"  href="javascript:abrirVideo('oKJhbEdICk4');" frameborder="0" allowfullscreen><div class="cartelitoLink">Video promocional para la aplicación I-Médicos </div></a>
				<a  class="videosHomenajes"  style="background-image:url(img/capturas/insti/viraco.jpg);"    target="_blank"  href="javascript:abrirVideo('mqeNwSMkVZg');" frameborder="0" allowfullscreen><div class="cartelitoLink">Introducción animada para el documental Viracocha: Dios Aymara </div></a>

		
		<a   class="videosHomenajes"  style="background-image:url(img/capturas/insti/januka.jpg);"   target="_blank"  href="javascript:abrirVideo('149edESDjec');" frameborder="0" allowfullscreen><div class="cartelitoLink">Video educativo sobre la festividad de Januka </div></a>
		<a   class="videosHomenajes"  style="background-image:url(img/capturas/insti/lengua.jpg);"   target="_blank"  href="javascript:abrirVideo('kqMcUWKLitw');" frameborder="0" allowfullscreen><div class="cartelitoLink">La historia de la "lengua blanca": causas y soluciones de la halitosis </div></a>
		<a   class="videosHomenajes"  style="background-image:url(img/capturas/insti/maraton.jpg);"    target="_blank"  href="javascript:abrirVideo('eGc4fxyIW3c');" frameborder="0" allowfullscreen><div class="cartelitoLink">Video publicitario para Mundial Race: Maratón en la ciudad de Buenos Aires. </div></a>
		<a   class="videosHomenajes"  style="background-image:url(img/capturas/insti/poker.jpg);"    target="_blank"  href="javascript:abrirVideo('jW5wb7FzTFo');" frameborder="0" allowfullscreen><div class="cartelitoLink">Video promocional para la aplicación Poker Day </div></a>
		<a  class="videosHomenajes"  style="background-image:url(img/capturas/insti/srt1.jpg);"    target="_blank"  href="javascript:abrirVideo('_6fdzJteq90');" frameborder="0" allowfullscreen><div class="cartelitoLink">Video educativo sobre los riesgos en los trabajos de altura </div></a>
		<a  class="videosHomenajes"  style="background-image:url(img/capturas/insti/srt2.jpg);"    target="_blank"  href="javascript:abrirVideo('uNL0kgquUo4');" frameborder="0" allowfullscreen><div class="cartelitoLink">Video educativo sobre los riesgos ocular en la construcción </div></a>
		<a  class="videosHomenajes"  style="background-image:url(img/capturas/insti/trisquel.jpg);"    target="_blank"  href="javascript:abrirVideo('FuXM8tsbheQ');" frameborder="0" allowfullscreen><div class="cartelitoLink">Publicidad congreso de software libre </div></a>
		
		<a  class="videosHomenajes"  style="background-image:url(img/capturas/insti/pp.jpg);"  target="_blank"  href="javascript:abrirVideo('2PpIkkengo0');" frameborder="0" allowfullscreen><div class="cartelitoLink">Trailer animado para el juego Press Pup</div></a>
		
		<a  class="videosHomenajes" style="background-image:url(img/capturas/insti/5ta.jpg);"  target="_blank" href="javascript:abrirVideo('WwgySSkZd9A');" frameborder="0" allowfullscreen><div class="cartelitoLink"> Videoclip animado para la banda de rock La 5ta Pata</div></a>
		
		
		<!-- -->
		
				
		

	</div>


			<a href="#" onClick="scrollear(0);" id="linkScrollUp"><img src="img/arriba.png" alt="scroll to top"></a>
	<br><br><br>