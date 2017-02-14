<?php

require_once('../Conexion/Conexion.php');
$sql = "SELECT * FROM Persona";
$serverName = "(local)";
echo hola;
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sql);

$afiliado = array(); //creamos un array

while ($row = mysqli_fetch_array($result)) {

    $id = $row['nroPersona'];
    $Dni = $row['dni'];
    $Nombre = $row['nombre'];
    $Apellido = $row['apellido'];
    $Email = $row['mail'];
    $FNac = $row['fechaNac'];
    $Nacionalidad = $row['nacionalidad'];
    $ECivil = $row['estadoCivil'];
    $direccion = 'Calle';
    $telurgencia = $row['telUrgencia'];
    $celular = $row['celular'];
    $oSocial = $row['oSocial'];
    $habilitado = $row['habilitado'];

    $afiliado[] = array('id' => $id, 'dni' => $Dni,'nombre' => $nombre, 'apellido' => $Apellido,'mail' => $Email, 'FNac' => $FNac,'nacionalidad' => $Nacionalidad,
                        'EstCivil' => $ECivil,'direccion' => $direccion,'telUrgencia' => $telurgencia,'celular' => $celular,'oSocial' => $oSocial,
                        'habilitado' => $habilitado
       );
}

//desconectamos la base de datos
$close = mysqli_close($conexion)
        or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


//Creamos el JSON
$json_string = json_encode($afiliado);


//Si queremos crear un archivo json, sería de esta forma:
/*
  $file = 'clientes . json';
  file_put_contents($file, $json_string);
 */
?>