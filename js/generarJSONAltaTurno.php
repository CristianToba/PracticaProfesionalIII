<?php
require_once('../Conexion/Conexion.php');
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    $nombreA = $_GET['parametroNA'];
    $apellidoA = $_GET['parametroAA'];
    $nombreP = $_GET['parametroNP'];
    $apellidoP = $_GET['parametroAP'];
    $esp = $_GET['parametroE'];
    $fecha = $_GET['parametroF'];
    $horario = $_GET['parametroH'];
    $matricula = $_GET['parametroMP'];
    $title = $apellidoP.', '.$nombreP;
    
     try {

        ## Consulta para insertar el nuevo turno con el ultimo codigo de horario mas uno
        $sql = " insert into Turno(nroturno,start,idMedico,idHorario, idPersona,title, habilitado) values ((select MAX(t.nroTurno)+1 from Turno as t), ('$fecha'+' '+(select substring(CONVERT(char(19),h.start,114),1,5)  from horarios as h where h.idhorarios='$horario')),(select nroPersona from persona where matricula='$matricula'), '$horario',1, '$title', 1)";
            
          $stmt = sqlsrv_query($conn, $sql);
        if ($stmt === false) {

            print "<script>alert('Registro ya existente ')</script>";
            die(print_r(sqlsrv_errors(), true));
        } else {
            print "<script>alert('Se registro un turno nuevo')</script>";

            
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
    
   
  
    

//Creamos el JSON

echo json_encode($arr,false);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>