<?php

session_start();
include('localization/localization.php');




?>

<div id="SCqEs">

<?php

	if($_SESSION['mobile'] =="computer"){
		include("scTomaMate.html");
	}else{
		include("scTomaMate.swf.html");
	}


?>


</div>



<h4 class="tituloSeccion queEs" id="tituloQueEs"><?php echo $json['tituloQueEs']; ?>  </h4>

<p class="queEsSC" id="textoQueEs"><?php echo $json['textoQueEs']; ?> 
</p>