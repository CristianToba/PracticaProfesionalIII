<?php
require_once('../Conexion/Conexion.php');

$seleccion = $_GET['parametro'];
$sql = "SELECT     codigoLocalidad, descripcion FROM         Localidad where idProvincia=  '$seleccion' ORDER BY codigoLocalidad, descripcion";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);
$listadoLoc = array(); //creamos un array

while ($row = sqlsrv_fetch_array($stmt)) {
    
    $codigoLocalidad = $row['codigoLocalidad'];
    $descripcion = $row['descripcion'];
    
    $listadoLoc[] = array('codigoLocalidad' => $codigoLocalidad,'descripcion' => $descripcion);
        
}

//Creamos el JSON

echo json_encode($listadoLoc,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>
