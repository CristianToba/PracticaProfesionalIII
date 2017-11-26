<?php
require_once('../Conexion/Conexion.php');
require_once('class.ezpdf.php');
$parametroIA = 1;
$parametroAA = $_GET['parametroAA'];
$parametroNA = $_GET['parametroNA'];
$parametroNP = $_GET['parametroNP'];
$parametroAP = $_GET['parametroAP'];
$parametroE = $_GET['parametroE'];
$parametroF = $_GET['parametroF'];
$parametroH = $_GET['parametroH'];
$parametroMP = $_GET['parametroMP'];

$sql = "SELECT  T.nroTurno, P.nombre, P.apellido, E.especialidad, PR.nombre as nombreM, PR.apellido as apellidoM, CONVERT(char(20),start,120)  AS START   FROM  TURNO AS T INNER JOIN PERSONA AS P ON T.idPersona= P.nroPersona INNER JOIN PERSONA AS PR ON PR.nroPersona=T.idMedico  INNER JOIN ESPECIALIDAD AS E ON PR.idEspecialidad = E.idEspecialidad WHERE idHorario= '$parametroH' AND idMedico = 3 AND idPersona = '$parametroIA' AND CONVERT(char(17),start,103) = '$parametroF' and T.habilitado= 0 ";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$resSql = sqlsrv_query($conn, $sql);

$pdf = new Cezpdf('A4');
$pdf->selectFont('fonts/Helvetica.afm');
$cabecera = array('nroTurno' => '<b>NRO. TURNO</b>', 'nombre' => '<b>NOMBRE SOLICITANTE</b>', 'apellido' => '<b>APELLIDO SOLICITANTE</b>',  'especialidad' => '<b>ESPECIALIDAD</b>',  'nombreM' => '<b>NOMBRE MEDICO</b>',  'apellidoM' => '<b>APELLIDO MEDICO</b>', 'start' => '<b>FECHA Y HORA DE TURNO</b>');
$opcion = array('showHeadings' => 1, 'xOrientation' => 'center', 'width' => 800);

$titulo = 'IMPRESION TURNO';
while ($row = sqlsrv_fetch_array($resSql)) {
    
   
    $data[] = array('nroTurno' => $row[0], 'nombre' => $row[1], 'apellido' => $row[2], 'especialidad' => $row[3], 'nombreM' => $row[4], 'apellidoM' => $row[5], 'start' => $row[6]);
    
}

$pdf->addJpegFromFile($img = '../Imagenes/reserva_ya.JPG',$x=30, $y= $pdf->y-80 ,$w=100,$h=0);
$pdf->ezText("\n\n", 10);
$pdf->ezText("\n\n", 10);
$pdf->ezText("\n\n", 10);
$pdf->ezText($titulo, 16);
$pdf->ezText("\n\n", 10);
$pdf->ezText('FECHA IMPRESION: ' . date("d/m/y"), 10);
$pdf->ezText('HORA IMPRESION: ' . date("H:i", time() - 14400), 10);
$pdf->ezText("\n\n", 10);

$pdf->ezTable($data, $cabecera, '', $opcion);
$pdf->ezStream();
$pdf->Output();
?>