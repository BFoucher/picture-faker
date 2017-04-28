<?php

$w = $_GET['w'] ? $_GET['w'] : 640;
$h = $_GET['h'] ? $_GET['h'] : 480;
$ext = $_GET['ext'] ? $_GET['ext'] : 'jpeg';

header("Content-Type: image/".$ext);
$im = @imagecreate($w, $h)
or die("Impossible d'initialiser la bibliothèque GD");
$background_color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
$text_color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
imagestring($im, 5, 5, 5,  "TROOPERS - ".strtoupper($ext), $text_color);

switch ($ext) {
    case 'png' :
        imagepng($im);
        break;
    case 'jpeg' :
        imagejpeg($im);
        break;
    case 'gif' :
        imagegif($im);
        break;
    default:
        imagejpeg($im);
}

imagepng($im);
imagedestroy($im);
?>