<?php 
$retorno = array(
    array('id' => 1, 'nombre' => 'Esteban Antonio', 'apellido' => 'Santill&aacute;n'),
    array('id' => 2, 'nombre' => 'Juan', 'apellido' => 'Perez'),
    array('id' => 3, 'nombre' => 'Carlos', 'apellido' => 'Aguinaga'),
    array('id' => 4, 'nombre' => 'Jesus', 'apellido' => 'Sosa')
);

$retorno = json_encode($retorno);

header('Content-type: application/json; charset=utf-8');
echo $retorno;



?>