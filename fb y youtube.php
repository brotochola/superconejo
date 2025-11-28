<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
</head>

<body>
<?php
//el id del album es este: 
//https://www.facebook.com/media/set/?set=a.215794988540412.47481.189091634544081&type=3
//lo q está despues de a. y antes del siguiente .
//en este caso es 215794988540412
$idAlbum='215794988540412';
//yo decido limitarle la cantidad de fotos a 20.
$json = file_get_contents("http://graph.facebook.com/".$idAlbum."/photos?fields=id,source&limit=20");
$json = utf8_encode($json); 
$json_output = json_decode($json, true);
$arrayFotos = array();
for($i=0; $i<count($json_output['data']); $i++){
	array_push($arrayFotos, $json_output['data'][$i]['source']);	
}
///////////////////////////////////////////////////////////////
// aca termina el codigo para sacar las fotos de facebook
// el array llamado $arrayFotos tiene todas las fotos en tamaño real
// se podrian sacar tambien los thumbnails q genera fb
////////////////////////////////////////////////////////////////




$usuarioYouTube='superconejoanimacion';
$feedURL = 'http://gdata.youtube.com/feeds/api/users/'.$usuarioYouTube.'/uploads?max-results=5';
$sxml = simplexml_load_file($feedURL);
$i=0;
foreach ($sxml->entry as $entry) {
      $media = $entry->children('media', true);
      $watch = (string)$media->group->player->attributes()->url;
      $thumbnail = (string)$media->group->thumbnail[0]->attributes()->url;

		$str = strtok($watch,'&');
		$str = explode( 'v=', $str );
		$codigoYouTube = $str[1];
	  
	  echo '<iframe width="512" height="288" src="//www.youtube.com/embed/'.$codigoYouTube.'" frameborder="0" allowfullscreen></iframe>
';
	  
      ?>
      <div class="videoitem">
        <div class="videothumb"><a href="<?php echo $watch; ?>" class="watchvideo"><img src="<?php echo $thumbnail;?>" alt="<?php echo $media->group->title; ?>"  style="width:266px; height:200px; border:5px solid white; box-shadow:2px 2px 7px rgba(0,0,0,0.5);"" /></a></div>
        <div class="videotitle">
            <h3><a href="<?php echo $watch; ?>" class="watchvideo"><?php echo $media->group->title; ?></a></h3>
            <p><?php echo $media->group->description; ?></p>
        </div>
      </div>      
<?php $i++; if($i==3) { echo '<div class="clear small_v_margin"></div>'; $i=0; } } ?>





<br /><br /><br /><br />
<hr />

<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="NGLUJP62DZ2RA">
<input type="image"
src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"
border="0" name="submit" alt="PayPal - The safer, easier way to pay
online!">
<img alt="" border="0"
src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1"
height="1">
</form>

</body>
</html>