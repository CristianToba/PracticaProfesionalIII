<?php
require_once('../Conexion/Conexion.php');

$sql = "SELECT  codigoPais, descripcionPais FROM  Pais WHERE  (Habilitado = 0) ORDER BY codigoPais, descripcionPais";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);
$listadoPais = array(); //creamos un array

while ($row = sqlsrv_fetch_array($stmt)) {
    
    $codigoPais = $row['codigoPais'];
    $descripcionPais = $row['descripcionPais'];
    
    $listadoPais[] = array('codigoPais' => $codigoPais,'descripcionPais' => $descripcionPais);
        
}

//Creamos el JSON

echo json_encode($listadoPais,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>