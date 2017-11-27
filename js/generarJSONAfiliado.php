<?php

require_once('../Conexion/Conexion.php');
$sql = "SELECT     A.nroPersona, A.dni, A.nombre, A.apellido, A.mail, CONVERT(VARCHAR(12), DAY(A.fechaNac)) + '/' + CONVERT(VARCHAR(12), MONTH(A.fechaNac)) + '/' + CONVERT(VARCHAR(12), YEAR(A.fechaNac)) AS fechaNac, A.nacionalidad, C.descripcion AS descLocalidad, D.descripcion AS descProvincia, A.estadoCivil, 
                      B.calle + ' ' + CONVERT(VARCHAR(12), B.numero) AS direccion, A.telUrgencia, A.celular, A.obraSocial, A.Habilitado FROM  Persona AS A INNER JOIN
                      Direccion AS B ON A.idPersDirec = B.idDireccion INNER JOIN Localidad AS C ON B.idLocalidad = C.codigoLocalidad INNER JOIN Provincia AS D ON C.idProvincia = D.codigoProvincia
WHERE     (A.tipoPers <> 2)";
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
    $DescLocalidad = $row['descLocalidad'];
    $DescProvincia = $row['descProvincia'];
    $ECivil = $row['estadoCivil'];
    $direccion = $row['direccion'];
    $telurgencia = $row['telUrgencia'];
    $celular = $row['celular'];
    $oSocial = $row['obraSocial'];
    $habilitado = $row['Habilitado'];

    $persona[] = array('id' => $id, 'dni' => $Dni,'nombre' => $Nombre, 'apellido' => $Apellido,'mail' => $Email, 'fechaNac' => $FNac,
        'nacionalidad' => $Nacionalidad, 'provincia' => $DescProvincia, 'localidad' => $DescLocalidad, 'EstCivil' => $ECivil,'direccion' => $direccion,'telUrgencia' => $telurgencia,
        'celular' => $celular,'obraSocial' => $oSocial,'Habilitado' => $habilitado);
        
}

//Creamos el JSON

echo json_encode($persona,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>