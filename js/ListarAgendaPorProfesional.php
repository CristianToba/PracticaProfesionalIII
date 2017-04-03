<?php

require_once('../Conexion/Conexion.php');
$valorIdProf=$_GET['idProf'];
$sql = "SELECT T.idTurno, CONVERT(VARCHAR(12),day(T.fechaTurno))+'/'+CONVERT(VARCHAR(12),MONTH(T.fechaTurno))+'/'+CONVERT(VARCHAR(12),YEAR(T.fechaTurno)) as fechaTurno,
    T.nroTurno, C.nombreconsultorio, CL.nombre as nombreClinica,CL.direccion as direccionClinica, C.idMedico, CONVERT(VARCHAR(12),datepart(HOUR,H.HorarioInicio))+':'+CONVERT(VARCHAR(12),datepart(MINUTE,H.HorarioInicio)) as HorarioInicio,
    CONVERT(VARCHAR(12),datepart(HOUR,H.HorarioFin))+':'+CONVERT(VARCHAR(12),datepart(MINUTE,H.HorarioFin)) as HorarioFin,
    T.baja,T.Habilitado, P.nombre as nombreMedico, P.apellido as apellidoMedico,E.especialidad,PE.nombre as nombrePaciente,PE.apellido as apellidoPaciente
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
$stmt = sqlsrv_query($conn, $sql);
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
    $horarioF = $row['HorarioFin'];
    $bajaTurno = $row['baja'];    
    $estadoTurno = $row['Habilitado'];
    $nombreMed = $row['nombreMedico'];
    $apellidoMed = $row['apellidoMedico'];
    $especialidadMed = $row['especialidad'];
    $nombrePaciente = $row['nombrePaciente'];
    $apellidoPaciente = $row['apellidoPaciente'];

    $agendaMedico[] = array('idTurno' => $idTurno, 'fechaTurno' => $fechaTurno,'nroTurno' => $nroturno, 'consultorio' => $consultorio,'clinicaNombre' => $clinicaNombre,'clinicaDir' => $clinicaDir , 
        'matriculaMed' => $matriculaMed, 'horarioI' => $horarioI, 'horarioF' => $horarioF, 'bajaTurno' => $bajaTurno, 'estadoTurno' => $estadoTurno,  'nombreMed' => $nombreMed , 'apellidoMed' => $apellidoMed,
        'especialidadMed' => $especialidadMed, 'nombrePaciente' => $nombrePaciente, 'apellidoPaciente' => $apellidoPaciente);
        
}

//Creamos el JSON

echo json_encode($agendaMedico,true);

//desconectamos la base de datos
sqlsrv_close($conn) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


?>