<?php
require_once('../Conexion/Conexion.php');

$seleccion = $_GET['parametro'];
$sql = "SELECT     codigoProvincia, descripcion FROM         Provincia WHERE     (idPais = '$seleccion') ORDER BY codigoProvincia, descripcion";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);
$listadoProv = array(); //creamos un array

while ($row = sqlsrv_fetch_array($stmt)) {
    
    $codigoProvincia = $row['codigoProvincia'];
    $descripcion = $row['descripcion'];
    
    $listadoProv[] = array('codigoProvincia' => $codigoProvincia,'descripcion' => $descripcion);
        
}

//Creamos el JSON

echo json_encode($listadoProv,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>
