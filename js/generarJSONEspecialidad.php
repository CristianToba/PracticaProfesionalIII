<?php
require_once('../Conexion/Conexion.php');

$sql = "select idespecialidad, especialidad,orientacion from especialidad where  Habilitado=1  order by especialidad, orientacion asc";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);
$listadoEspecialidad = array(); //creamos un array

while ($row = sqlsrv_fetch_array($stmt)) {
    
    $NroEspecialidad = $row['idespecialidad'];
    $DescEsp = $row['especialidad'];
    $DescOrientacion= $row['orientacion'];
    $listadoEspecialidad[] = array('NroEspecialidad' => $NroEspecialidad,'DescEsp' => $DescEsp, 'DescOrientacion' => $DescOrientacion);
        
}

//Creamos el JSON

echo json_encode($listadoEspecialidad,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>
