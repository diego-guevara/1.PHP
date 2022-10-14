<?php


/*================ Variables: Pueden cambiar de tipo de dato o valor segun se requiera ================*/

$variable = "valor";
$variable = 1;

echo $variable."<br>";

/* Sensibles a mayusculas */
$color="Amarillo";
$Color="Azul";
$COLOR="verde";
echo $color."-".$Color."-".$COLOR."<br>";


/* Tipos de datos */
$entero=123;
$negativo=-1000;
$flotante=13.1416;
echo $entero."-".$negativo."-".$flotante."<br>";

$octal=0755; //493
$hexadecimal=0xC4E; //3150
$binario=0b1010;//10
echo $octal."-".$hexadecimal."-".$binario."<br>";

/* saber tipo de dato */

$nombre="Juan";
$edad=20;
$soltero=true;

echo gettype($nombre)."-".gettype($edad)."-".gettype($soltero)."<br>";

var_dump ($nombre)."<br>";

/*================ Constantes: No puede cambiar ================*/

//define(constante, valor);
define("PI",3.141612);
define("URL","https://ed.team");

echo URL;

?>