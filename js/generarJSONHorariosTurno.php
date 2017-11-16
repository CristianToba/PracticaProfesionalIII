<?php
require_once('../Conexion/Conexion.php');
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $fecha = $_GET['parametroF'];
    $sql = "SELECT H.idhorarios as id, CONVERT(char(19), H.start,108) as start FROM Horarios AS H WHERE not exists (SELECT * FROM Turno AS T WHERE T.idHorario=H.idhorarios AND CONVERT(char(17),T.start,103)='$fecha')";
    $stmt = sqlsrv_query($conn, $sql);
    $arr = array();
    
while ($row = sqlsrv_fetch_array($stmt)) {
    
    $idHorario = $row['id'];
    $hora = $row['start'];
    $arr[] = array('id' => $idHorario, 'hora' => $hora);
        
}

//Creamos el JSON

echo json_encode($arr,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>