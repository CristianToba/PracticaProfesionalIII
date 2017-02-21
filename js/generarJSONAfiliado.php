<?php

require_once('../Conexion/Conexion.php');
$sql = "SELECT nroPersona , dni ,nombre , apellido ,mail , CONVERT(VARCHAR(12),day(fechaNac))+'/'+CONVERT(VARCHAR(12),MONTH(fechaNac))+'/'+CONVERT(VARCHAR(12),YEAR(fechaNac)) as fechaNac , nacionalidad ,estadoCivil ,
B.calle+' '+CONVERT(VARCHAR(12),B.numero) as direccion,telUrgencia , celular ,obraSocial ,Habilitado  FROM PERSONA AS A INNER JOIN Direccion AS B ON
A.idPersDirec=B.idDireccion";
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
    $direccion = $row['direccion'];
    $telurgencia = $row['telUrgencia'];
    $celular = $row['celular'];
    $oSocial = $row['obraSocial'];
    $habilitado = $row['Habilitado'];

    $persona[] = array('id' => $id, 'dni' => $Dni,'nombre' => $Nombre, 'apellido' => $Apellido,'mail' => $Email, 'fechaNac' => $FNac,
        'nacionalidad' => $Nacionalidad,'EstCivil' => $ECivil,'direccion' => $direccion,'telUrgencia' => $telurgencia,
        'celular' => $celular,'obraSocial' => $oSocial,'Habilitado' => $habilitado
        );
        
}

//Creamos el JSON

echo json_encode($persona,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>