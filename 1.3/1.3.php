<?php
header( "Content-type: image/png" );
$myImg = imagecreate( 240, 70);
$background = imagecolorallocate( $myImg, 0, 255, 0 );
$textColor = imagecolorallocate( $myImg, 255, 0, 255 );
imagestring($myImg, 4, 30, 25, date("M,d,Y h:i:s A"), $textColor );
imagepng($myImg);
imagecolordeallocate( $textColor );
imagecolordeallocate( $background );
imagedestroy( $myImg );
?>