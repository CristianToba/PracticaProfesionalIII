<?php

require_once('../Conexion/Conexion.php');
$parametro = $_GET['esp'];
$parametro2 = $_GET['prof'];
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$sql = "select nroTurno,af.dni as dni,af.nombre, af.apellido, title,CONVERT(char(19),start,120) as start  
from turno as t inner join persona as p on t.idMedico=p.nroPersona inner join Persona as af on t.idPersona= af.nroPersona and t.habilitado= 0 where p.matricula='$parametro2'";
$stmt = sqlsrv_query($conn, $sql);
$arr = array();
while ($row = sqlsrv_fetch_array($stmt)) {
    
    $title = 'NroTurno: '.$row['nroTurno'];
    $start = $row['start'];
   
    $arr[] = array('title' => $title, 'start' => $start);
}
echo json_encode($arr);
?>