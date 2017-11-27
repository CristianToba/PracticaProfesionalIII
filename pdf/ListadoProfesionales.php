<?php

require_once('class.ezpdf.php');


$sql = "SELECT     P.nombre, P.apellido, P.matricula, E.especialidad, E.orientacion FROM Persona AS P INNER JOIN Especialidad AS E ON P.idEspecialidad = E.idEspecialidad WHERE (P.tipoPers = 2) AND (P.Habilitado = 1)";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$resSql = sqlsrv_query($conn, $sql);

$pdf = new Cezpdf('A4');
$pdf->selectFont('fonts/Helvetica.afm');
$cabecera = array('nombre' => '<b>Nombre</b>', 'apellido' => '<b>Apellido</b>', 'matricula' => '<b>Matricula</b>', 'especialidad' => '<b>Especialidad</b>', 'orientacion' => '<b>Orientacion</b>');
$opcion = array('showHeadings' => 1, 'xOrientation' => 'center', 'width' => 800);

$titulo = 'LISTADO DE ESPECIALIDADES';
while ($row = sqlsrv_fetch_array($resSql)) {
    
    $data[] = array('nombre' => $row[0], 'apellido' => $row[1], 'matricula' => $row[2], 'especialidad' => $row[3], 'orientacion' => $row[4]);
    
}

$pdf->addJpegFromFile($img = '../Imagenes/reserva_ya.JPG',$x=30, $y= $pdf->y-80 ,$w=100,$h=0);
$pdf->ezText("\n\n", 10);
$pdf->ezText("\n\n", 10);
$pdf->ezText("\n\n", 10);
$pdf->ezText($titulo, 16);
$pdf->ezText("\n\n", 10);
$pdf->ezText('FECHA: ' . date("d/m/y"), 10);
$pdf->ezText('HORA: ' . date("H:i", time() - 14400), 10);
$pdf->ezText("\n\n", 10);
$pdf->ezTable($data, $cabecera, '', $opcion);
$pdf->ezStream();
?>