<?php

# Arreglos y sus funciones nativas
$cadena="";
$arreglo=[];
$videojuegos= ['FIFA','Fornite','Red Dead','GTA','WARZONE'];

# Array vacio - empty
var_dum(empty($arreglo));
var_dum(empty($videojuegos));

# existe - isset
var_dum(isset($videojuegos[3]));

# contar elementos del arreglo
echo count($videojuegos);

# antepenultimo elemento
$posicion =count($videojuegos)-2;
echo $videojuegos[$posicion];

# ordenar el arreglo de forma alfabética
sort($videojuegos);
var_dum($videojuegos);

# ordenar el arreglo sin perder su indice
asort($videojuegos);
var_dum($videojuegos);

# ordenar el arreglo de forma inversa
rsort($videojuegos);
var_dum($videojuegos);

# ordenar el arreglo de forma inversa sin perder su indice
arsort($videojuegos);
var_dum($videojuegos);

# sumar valores del arreglo
$numeros=[1,20,30,15,5,10];
$suma=array_sum($numeros);
echo "mi suma es ".$suma;

# Encontrar diferencia entre arreglos
$salonA=['a1'=>'Juan','a2'=>'Pedro','a3'=>'sofia'];
$salonA=['a1'=>'Juan','a2'=>'Pedro'];
$diferencia=array_diff($salonA,$salonB);
var_dump($diferencia);

# Dividir un arreglo especificando su tamaño
$videojuegos= ['FIFA','Fornite','Red Dead','GTA','WARZONE'];
$dividir=array_chunk($videojuegos,2);
var_dum($dividir);

# Dividir un arreglo y eliminar los elementos anteriores
var_dum(array_slice($dividir,2));// eliminamos los 2 primeros elementos

#unir arreglos
$frutas=['platano','uva','manzana'];
$verduras=['tomate','lechuga','zanahoria'];
$unir=array_merge($frutas,$verduras);
var_dum($unir);

#eliminar el ultimo elemento de un arreglo
array_pop($videojuegos);
var_dum($videojuegos);

#agregar elementos al final del arreglo
array_push($videojuegos,'PES', 'FORZA');
var_dum($videojuegos);

#Buscar elemento en un arreglo
$calificaciones=array(10,8,10,5,3,6,5);
$buscar=array_search(3,$calificaciones);
var_dum($buscar);



?>