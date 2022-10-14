<?php

# ======= Arreglos multidimensional =======

#indexado
$alumnos=[
    ['juan',20,'Mexico'],
    ['Pedro',21,'Peru'],
    ['Jose',22,'Chile']
];

$alumnos=array(
    array('juan',20,'Mexico'),
    array('Pedro',21,'Peru'),
    array('Jose',22,'Chile')
);

echo $alumnos[1][0];
var_dump($alumnos);

#asociativo
$alumnos=array(
    array('nombre'=>'juan','edad'=>20,'pais'=>'Mexico'),
    array('nombre'=>'Pedro','edad'=>21,'pais'=>'Peru'),
    array('nombre'=>'Jose','edad'=>22,'pais'=>'Chile')
);

echo $alumnos[2]['edad'];
var_dump($alumnos);

# agregar elemento al array en una fila especifica
$alumnos[1]['calificacion']=9.5;

?>