<?php

require_once('class.ezpdf.php');


$sql = "SELECT  especialidad, orientacion FROM Especialidad";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$resSql = sqlsrv_query($conn, $sql);

$pdf = new Cezpdf('A4');
$pdf->selectFont('fonts/Helvetica.afm');
$cabecera = array('especialidad' => '<b>Especialidad</b>', 'orientacion' => '<b>Orientacion</b>');
$opcion = array('showHeadings' => 1, 'xOrientation' => 'center', 'width' => 800);

$titulo = 'LISTADO DE ESPECIALIDADES';
while ($row = sqlsrv_fetch_array($resSql)) {
    
    $data[] = array('especialidad' => $row[0], 'orientacion' => $row[1]);
    
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