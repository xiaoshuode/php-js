<?php
session_start();
$image =imagecreatetruecolor(100, 30);
$bgcolor = imagecolorallocate($image, 255, 255 , 255);
imagefill($image, 0, 0, $bgcolor);
$captch_code = '';
for($i = 0;$i<4;$i++){
    $fontsize = 10;
    $fontcolor =imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
    $str = '3456789abcdefghijkmnpqrstuvwxy';
    $fontcontent = substr($str,rand(0,strlen($str)),1);
    $captch_code .= $fontcontent;
    $x = ($i*100/4)+rand(5,10);
    $y = rand(5,10);

    imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);
    //echo '1<br/>';
}

for ($i=0; $i<200 ; $i++) {
    # code...
    $pointcolor = imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
    imagesetpixel($image, rand(1,99), rand(1,29), $pointcolor);
}
for ($i=0; $i < 4; $i++) {
    # code...
    $linecolor = imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
    imageline($image, rand(1,99), rand(1,29), rand(30,99), rand(10,29), $linecolor);
}
header('content-type:image/png');
imagepng($image);
$_SESSION['authcode'] = $captch_code;

?>