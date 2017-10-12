<?php
header('Content-type:image/jpeg');

$im = imagecreatefromjpeg('flower.jpg');

$color = imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255));

$text = isset($_GET['text']) ? $_GET['text'] : '11111';

$x = imagesx($im)-10*strlen($text);
$y = 300-80;

imagestring($im,22,$x,$y,$text,$color);

imagejpeg($im);

?>
