<?php
session_start();
include('localization/localization.php');

?>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />



<div id="SCcontacto" <?php
// if($_SESSION['mobile'] !="computer"){
// 	echo "style=' background-image: url(img/scAlTel.png);
//     background-size: contain;
//     background-repeat: no-repeat;'";
// 	}


?>>

    <?php
    // if($_SESSION['mobile'] =="computer"){
    include("scAlTel.swf.html");
    // }
    ?>

</div>




<h4 class="tituloSeccion" id="tituloContacto"><?php echo $json['tituloContacto']; ?></h4>
<iframe id="phps" style="position:fixed; width:0px; height:0px; display:none;" name="phps"></iframe>

<form id="form1" name="form1" class="queEsSC" method="post" target="phps" action="mandar_mail.php"
    onsubmit="mandaMail();">

    <!-- <div id="nombreFormu" class="titulosFormu"><?php //echo $json['nombreFormu']; ?></div>
    <input name="nombre" id="nombre" type="text" class="required inputsFormu" />

    <div id="telefonoFormu" class="titulosFormu"><?php //echo $json['telefonoFormu']; ?></div>
    <input name="telefono" id="telefono" type="text" class="inputsFormu" />


    <div id="emailFormu" class="titulosFormu">Email:</div>
    <input name="email" id="email" type="text" class="required email inputsFormu" />


    <div id="fechaFormu" class="titulosFormu"><?php //echo $json['fechaFormu']; ?></div>
    <input name="fecha" id="fecha" type="text" class="inputsFormu" />


    <div id="mensajeFormu" class="titulosFormu"><?php //echo $json['mensajeFormu']; ?></div>
    <textarea name="detalle" id="detalle" class="required inputsFormu"></textarea> -->

    <div id="socialLinks">
        
        <a href="http://www.twitter.com/superconejo2D" target="_blank" class="social"><img src="img/tw.png"></a>
        <a href="http://fb.com/superconejoanimaciones" target="_blank" class="social"><img src="img/fb.png"></a>
        <a href="http://www.youtube.com/superconejoanimacion" target="_blank" class="social"><img src="img/yt.png"></a>
        <a href="https://api.whatsapp.com/send?phone=5491132947799" target="_blank" class="social"><img
                src="img/wa.png"></a>
    </div>
    <!-- <input name="Enviar" type="submit" value="Enviar" id="botonEnviar"> -->




</form>

<div id="formu_ok" class="queEsSC"> <?php echo $json['formu_ok']; ?> </div>

<p id="telefonoMail" class="queEsSC" style="  -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;">
    gabrielfreidkes@gmail.com // +54.911.32947799
    <?php
    // if ($_SERVER['HTTP_HOST'] == "superconejo.com.uy" || $_SERVER['HTTP_HOST'] == "www.superconejo.com.uy") {
    //     echo "info@superconejo.com.uy // +598 94 844 545";
    // } else {
    // echo "info@superconejo.com.ar  // +54.911.32947799 ";
    // }
    
    ?>
</p>