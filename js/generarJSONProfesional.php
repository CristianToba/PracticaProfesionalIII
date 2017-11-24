<?php
require_once('../Conexion/Conexion.php');

$seleccion = $_GET['parametro'];
$sql = "select matricula, nombre,apellido from persona where tipoPers=2 and Habilitado=0 and idEspecialidad='$seleccion' order by apellido, nombre asc";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);
$listadoProf = array(); //creamos un array

while ($row = sqlsrv_fetch_array($stmt)) {
    
    $MatriculaProf = $row['matricula'];
    $NombreProf = $row['nombre'];
    $ApellidoProf = $row['apellido'];
    $listadoProf[] = array('Matricula' => $MatriculaProf,'Nombre' => $NombreProf, 'Apellido' => $ApellidoProf);
        
}

//Creamos el JSON

echo json_encode($listadoProf,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>
