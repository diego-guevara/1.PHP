<?php

include 'barcode.php';
$generator = new barcode_generator();
/* Output directly to standard output. */

$format="png";
$symbology="ean-13-nopad";
$data="1234567890123";
$options= array("sx" => 2);
$name="imagen.png";
$orientation="vertical";// dejar vacio para horizontal
$generator->output_image($format, $symbology, $data, $options, $name, $orientation);


/* ======== Create bitmap image. ========== */
/*
$image = $generator->render_image($symbology, $data, $options);
imagepng($image);
imagedestroy($image); 
*/

/* ======== Generate SVG markup. ======== */
/*
$svg = $generator->render_svg($symbology, $data, $options);
echo $svg;
*/


?>