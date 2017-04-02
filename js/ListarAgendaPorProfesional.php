<?php

require_once('../Conexion/Conexion.php');
$valorIdProf=$_GET['idProf'];
$sqlAgenda = "SELECT T.idTurno, T.fechaTurno, T.nroTurno, C.nombreconsultorio, CL.nombre,CL.direccion, C.idMedico, H.HorarioInicio,H.HorarioFin,T.baja,T.Habilitado, P.nombre, P.apellido,E.especialidad,PE.nombre,PE.apellido
FROM turno AS T INNER JOIN CONSULTORIO AS C ON
T.idconsultorio=C.idConsultorio INNER JOIN Clinica AS CL ON
C.idClinica=CL.cuil INNER JOIN Persona AS P ON
C.idMedico=P.nroPersona AND P.tipoPers=2 INNER JOIN Especialidad AS E ON
P.idEspecialidad=E.idEspecialidad
INNER JOIN Horarios AS H ON 
T.idHorario= H.idhorarios
INNER JOIN Persona AS PE ON
T.idPersona=PE.nroPersona
 WHERE T.idMedico=$valorIdProf";
echo ($sql);
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$stmt = sqlsrv_query($conn, $sqlAgenda);
$agendaMedico = array(); //creamos un array
                                                                           
while ($row = sqlsrv_fetch_array($stmt)) {
    
    $idTurno = $row['idTurno'];
    $fechaTurno = $row['fechaTurno'];
    $nroturno = $row['nroTurno'];
    $consultorio = $row['nombreconsultorio'];
    $clinicaNombre = $row['nombreClinica']; 
    $clinicaDir = $row['direccionClinica']; 
    $matriculaMed= $row['idMedico'];
    $horarioI= $row['HorarioInicio'];
    $horarioF = $row['HorarioFinal'];
    $bajaTurno = $row['baja'];    
    $estadoTurno = $row['Habilitado'];
    $nombreMed = $row['nombreMedico'];
    $apellidoMed = $row['apellidoMedico'];
    $especialidadMed = $row['especialidad'];
    $nombrePers = $row['nombrePersona'];
    $apellidoPers = $row['apellidoPersona'];

    $agendaMedico[] = array('idTurno' => $idTurno, 'fechaTurno' => $fechaTurno,'nroTurno' => $nroturno, 'consultorio' => $consultorio,'clinicaNombre' => $clinicaNombre,'clinicaDir' => $clinicaDir , 
        'matriculaMed' => $matriculaMed, 'horarioI' => $horarioI, 'horarioF' => $horarioF, 'bajaTurno' => $bajaTurno, 'estadoTurno' => $estadoTurno,  'nombreMed' => $nombreMed , 'apellidoMed' => $apellidoMed,
        'especialidadMed' => $especialidadMed, 'nombrePers' => $nombrePers, 'apeliidoPers' => $apellidoPers);
        
}

//Creamos el JSON

echo json_encode($agendaMedico,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>