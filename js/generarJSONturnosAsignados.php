<?php
session_start();

require_once('../Conexion/Conexion.php');

$parametroIA = $_GET['afiliado'];
$sql = "SELECT  T.nroTurno as nroTurno, P.nombre as nombreA, P.apellido as apellidoA, E.especialidad, PR.nombre as nombreM, PR.apellido as apellidoM, CONVERT(char(20),start,120)  AS start, T.Habilitado as habilitado FROM  TURNO AS T INNER JOIN PERSONA AS P ON T.idPersona= P.nroPersona INNER JOIN PERSONA AS PR ON PR.nroPersona=T.idMedico  INNER JOIN ESPECIALIDAD AS E ON PR.idEspecialidad = E.idEspecialidad WHERE T.habilitado= 1 and idPersona = '$parametroIA' ";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);
$turnosAsignados = array();

while ($row = sqlsrv_fetch_array($stmt)) {
    $nroTurno = $row['nroTurno'];
    $nombreA = $row['nombreA'];
    $apellidoA = $row['apellidoA'];
    $especialidad = $row['especialidad'];
    $nombreM = $row['nombreM'];
    $apellidoM = $row['apellidoM'];
    $start = $row['start'];
    $habilitado = $row['habilitado'];
    
    $turnosAsignados [] = array ('nroTurno'=> $nroTurno, 'nombreA'=>$nombreA, 'apellidoA'=>$apellidoA,  'especialidad'=>$especialidad, 'nombreM'=>$nombreM, 'apellidoM'=>$apellidoM, 'start'=>$start, 'habilitado'=>$habilitado);
    
}

//Creamos el JSON

echo json_encode($turnosAsignados,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

?>