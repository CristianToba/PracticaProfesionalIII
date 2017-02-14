<?php

require_once('class.ezpdf.php');


$sql = "SELECT * FROM horarios";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$resSql = sqlsrv_query($conn, $sql);

$pdf = new Cezpdf('A4');
$pdf->selectFont('fonts/Helvetica.afm');
$cabecera = array('Descripcion' => '<b>DESCRIPCION</b>', 'HorarioInicio' => '<b>HORARIO INICIO</b>', 'HorarioFin' => '<b>HORARIO FIN</b>', 'Habilitado' => '<b>HABILITADO</b>');
$opcion = array('showHeadings' => 1, 'xOrientation' => 'center', 'width' => 800);

$titulo = 'LISTADO DE HORARIOS';
while ($row = sqlsrv_fetch_array($resSql)) {
    if ($row[5]==1) {
        $hab='Si';
    }  else {
        $hab='No';
    }
    $data[] = array('Descripcion' => $row[7], 'HorarioInicio' => date_format($row[1], 'H:i '), 'HorarioFin' => date_format($row[2], 'H:i '), 'Habilitado' => $hab);
}

$pdf->ezText($titulo, 16);
$pdf->ezText("\n\n", 10);
$pdf->ezText('Fecha: ' . date("d/m/y"), 10);
$pdf->ezText('Hora: ' . date("H:i", time() - 14400), 10);
$pdf->ezText("\n\n", 10);
$pdf->ezTable($data, $cabecera, '', $opcion);
$pdf->ezStream();
?>