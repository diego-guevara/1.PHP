<?php
// Crear una imagen de 55x30
$im = imagecreatetruecolor(55, 30);
$rojo = imagecolorallocate($im, 255, 0, 0);
$negro = imagecolorallocate($im, 0, 0, 0);// color negro absoluto

// Hacer el fondo transparente
imagecolortransparent($im, $negro);

// Dibujar un rectángulo rojo
imagefilledrectangle($im, 4, 4, 50, 25, $rojo);

// Guardar la imagen
imagepng($im, './imagecolortransparent.png');
imagedestroy($im);
?>