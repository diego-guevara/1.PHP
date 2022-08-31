<?php

# ======= Arreglos indexados =======
$dias=['lunes','Martes','Miercoles','Jueves','Viernes'];
$dias=array('lunes','Martes','Miercoles','Jueves','Viernes');

var_dump($dias);
print_r($dias);

# mostrar un elemento del arreglo 
echo $dias[2];

# agregar elemento al array en una posicion vacia
$dias[]="Sabádo";

# agregar elemento al array en una posicion fija
$dias[15]="Dia libre";



?>