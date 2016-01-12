<?php

require '../Fastimage.php';

$uri = "https://dotjpg.co/JVX1.jpg";

$time = microtime(true);
$stream = fopen($uri, 'r');
$image = FastImage::withStream($stream);

list($width, $height) = $image->getSize();
echo "FastImage: <br>";
echo "Width: ". $width . "px<br>Height: ". $height . "px<br>in " . (microtime(true)-$time) . " seconds <br><br>";

$time = microtime(true);
list($width, $height) = getimagesize($uri);
echo "getimagesize: <br>";
echo "Width: ". $width . "px<br>Height: ". $height . "px<br>in " . (microtime(true)-$time) . " seconds <br>";
exit;