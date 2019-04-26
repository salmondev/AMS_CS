<?php

$text = $_GET['qr'];
$textfile = $_POST['qrpic'];

// Set the content-type
header('Content-Type: image/png');

$main = imagecreatetruecolor(150, 180);
$qr = imagecreatefrompng("http://www.amsapp.net/images/format=png&margin=5&data=$textfile");
// Create the image
$im = imagecreatetruecolor(150, 30);
// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 29, $black);
// Font path
$font = realpath('images/Sarabun-Regular.ttf');
// Add the text
imagettftext($im, 20, 0, 5, 25, $white, $font, $text);
imagecopymerge_alpha($main, $qr, 0, 0, 0, 0, 150, 150, 100);
imagecopymerge_alpha($main, $im, 0, 150, 0, 0, 150, 30, 100);
imagepng($main);
imagedestroy($main);

function imagecopymerge_alpha($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct){
    // creating a cut resource
    $cut = imagecreatetruecolor($src_w, $src_h);

    // copying relevant section from background to the cut resource
    imagecopy($cut, $dst_im, 0, 0, $dst_x, $dst_y, $src_w, $src_h);

    // copying relevant section from watermark to the cut resource
    imagecopy($cut, $src_im, 0, 0, $src_x, $src_y, $src_w, $src_h);

    // insert cut resource to destination image
    imagecopymerge($dst_im, $cut, $dst_x, $dst_y, 0, 0, $src_w, $src_h, $pct);
}


?>
