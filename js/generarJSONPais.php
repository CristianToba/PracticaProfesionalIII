<?php

require_once('../Conexion/Conexion.php');
$sql = "select codigoPais,descripcionPais,Habilitado from pais where Habilitado= 0 order by descripcionPais asc";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);
$listadoPais = array(); //creamos un array


while ($row = sqlsrv_fetch_array($stmt)) {
    
    $codigoPais = $row['codigoPais'];
    $descripcionPais = $row['descripcionPais'];
    $estadoPais = $row['Habilitado'];
   

    $listadoPais[] = array('Codigo' => $codigoPais, 'Descripcion' => $descripcionPais,'Habilitado' => $estadoPais);
        
}

//Creamos el JSON

echo json_encode($listadoPais,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>