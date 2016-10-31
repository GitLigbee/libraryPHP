<?php
header('content-type:image/png');
$img = imagecreate(300,300);
$color = imagecolorallocate($img,223,22,44);
imagefill($img,3,3,$color);
imagepng($img);
imagedestroy();
?>