<?php

require_once('../Conexion/Conexion.php');
$sql = "SELECT idhorarios, descripcion, CONVERT(char(19),start,108) as HorarioI, CONVERT(char(19),[end],108) as HorarioF, Habilitado FROM Horarios 
";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);
$horarios = array();

while ($row = sqlsrv_fetch_array($stmt)) {
    $id = $row['idhorarios'];
    $descripcionH = $row['descripcion'];
    $HI = $row['HorarioI'];
    $HF = $row['HorarioF'];
    $estadoH = $row['Habilitado'];
    
    $horarios [] = array ('id'=> $id, 'descripcion'=>$descripcionH, 'HorarioInicio'=>$HI, 'HorarioFin'=>$HF, 'Habilitado'=>$estadoH);
    
}

//Creamos el JSON

echo json_encode($horarios,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

?>