<?php

require_once('../Conexion/Conexion.php');
$sql = "SELECT nroPersona , dni ,matricula, nombre , apellido ,mail ,  CONVERT(VARCHAR(12),day(fechaNac))+'/'+CONVERT(VARCHAR(12),MONTH(fechaNac))+'/'+CONVERT(VARCHAR(12),YEAR(fechaNac))as fechaNac , nacionalidad ,estadoCivil ,
B.calle+' '+CONVERT(VARCHAR(12),B.numero)as direccion,
 L.descripcion as localidad,
 P.descripcion as provincia,telUrgencia , celular ,e.especialidad , e.orientacion ,A.Habilitado  FROM PERSONA AS A INNER JOIN Direccion AS B ON
A.idPersDirec=B.idDireccion INNER JOIN ESPECIALIDAD AS E ON A.idEspeciAlidad=E.idEspecialidad INNER JOIN Localidad AS L ON B.idLocalidad=L.codigoLocalidad INNER JOIN Provincia AS P ON L.idProvincia=P.codigoProvincia WHERE A.tipoPers=2
";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);
$medico = array();

while ($row = sqlsrv_fetch_array($stmt)) {
    
    $id = $row['nroPersona'];
    $matricula = $row['matricula'];
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
    $especialidad = $row['especialidad'];
    $orientacion = $row['orientacion'];
    $habilitado = $row['Habilitado'];
   

    $medico[] = array('id' => $id, 'matricula' => $matricula,'dni' => $Dni,'nombre' => $Nombre, 'apellido' => $Apellido,'mail' => $Email, 
        'fechaNac' => $FNac, 'nacionalidad' => $Nacionalidad,'EstCivil' => $ECivil, 'direccion' => $direccion,      
        'telUrgencia' => $telurgencia,
        'celular' => $celular,'especialidad' => $especialidad, 'orientacion' => $orientacion,
        'Habilitado' => $habilitado);
        
}

//Creamos el JSON

echo json_encode($medico,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>