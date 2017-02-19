<?php

require_once('../Conexion/Conexion.php');
$sql = "SELECT * FROM Persona";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);
$persona = array(); //creamos un array

while ($row = sqlsrv_fetch_array($stmt)) {
    
    $id = $row['nroPersona'];
    $Dni = $row['dni'];
    $Nombre = $row['nombre'];
    $Apellido = $row['apellido'];
    $Email = $row['mail'];
    $FNac = $row['fechaNac']; 
    
    $Nacionalidad = $row['nacionalidad'];
    $ECivil = $row['estadoCivil'];
    $direccion = $row['idPersDirec'];
    $telurgencia = $row['telUrgencia'];
    $celular = $row['celular'];
    $oSocial = $row['obraSocial'];
    $habilitado = $row['Habilitado'];

    $persona[] = array('id' => $id, 'dni' => $Dni,'nombre' => $Nombre, 'apellido' => $Apellido,'mail' => $Email, 'FNac' => $FNac,
        'nacionalidad' => $Nacionalidad,'EstCivil' => $ECivil,'direccion' => $direccion,'telUrgencia' => $telurgencia,
        'celular' => $celular,'obraSocial' => $oSocial,'Habilitado' => $habilitado
        );
        
}

//Creamos el JSON

echo json_encode($persona,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>