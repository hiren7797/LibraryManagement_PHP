<?php
session_start();
header("Content-type: image/png");

$text = rand(10000,99999); 
$_SESSION["vercode"] = $text; 
$font  = 12;
$width  = imagefontwidth($font) * strlen($text);
$height = imagefontheight($font);

$image = imagecreatetruecolor ($width,$height);
$green = imagecolorallocate ($image,187,215,224);
$white = imagecolorallocate ($image,62,71,74);
imagefill($image,0,0,$green);

imagestring ($image,$font,0,0,$text,$white);

imagepng ($image);

?>

