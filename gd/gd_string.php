<?php
    header('content-type:image/png');
    $code = '123456789abcdefghijklmnpqrstuvwxvz';
    $length = strlen($code);
    $print = '';
    for($i=0; $i<4; $i++){
        $print.=$code[mt_rand(0,$length-1)];
    }
//    echo $print;
    $img = imagecreatefrompng('./str.png');
    $color = mt_rand(0,1)==1?imagecolorallocate($img,0,0,0):imagecolorallocate($img,255,255,255);
    //图片大小
    $img_width = imagesx($img);
    $img_height = imagesy($img);
    //字体大小
    $font = 5;
    $font_width = imagefontwidth($font);
    $font_height = imagefontheight($font);
    
    $fin_w = ($img_width-$font_width*4)/2;
    $fin_h = ($img_height-$font_height)/2;

    imagestring($img,$font,$fin_w,$fin_h,$print,$color);
    imagepng($img);
    imagedestroy($img);
?>