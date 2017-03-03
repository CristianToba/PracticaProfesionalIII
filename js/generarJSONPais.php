<?php
require_once('../Conexion/Conexion.php');
$sql = "select * from pais order by descripcionPais asc";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);
$listadoPais = array(); //creamos un array

while ($row = sqlsrv_fetch_array($stmt)) {
    
    $codigo = $row['codigoPais'];
    $descripcion = $row['descripcionPais'];
    $estado = $row['Habilitado'];
   

    $listadoPais[] = array('id' => $codigo, 'descripcion' => $descripcion,'estado' => $estado);
        
}

//Creamos el JSON

echo json_encode($listadoPais,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>