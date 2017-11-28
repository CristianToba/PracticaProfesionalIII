<?php
require_once('class.ezpdf.php');


$sql = "SELECT * FROM Persona";
$serverName = "(local)";
$connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
$conn = sqlsrv_connect($serverName, $connectionInfo);
$resSql = sqlsrv_query($conn, $sql);

$pdf = new Cezpdf('A4');
$pdf->selectFont('fonts/Helvetica.afm');
$cabecera = array('Codigo Afiliado' => '<b>COD.AFILIADO</b>', 'DNI' => '<b>DNI</b>', 'Nombre' => '<b>NOMBRE</b>', 'Apellido' => '<b>APELLIDO</b>', 'mail' => '<b>EMAIL</b>', 'Sexo' => '<b>SEXO</b>', 'Nacionalidad' => '<b>NACIONALIDAD</b>', 'Estado Civil' => '<b>EST.CIVIL</b>', 'Habilitado' => '<b>HABILITADO</b>', 'Tel. Urgencia' => '<b>TEL.URGENCIA</b>');
$opcion = array('showHeadings' => 1, 'xOrientation' => 'center', 'width' => 800);
$titulo = 'LISTADO DE AFILIADOS';
while ($row = sqlsrv_fetch_array($resSql)) {
    
       if ($row[13]==1) {
        $estado='No';
    }  else {
        $estado='Si';
    }
    
    $data[] = array('Codigo Afiliado' => $row[0], 'DNI' => $row[1], 'Nombre' => $row[2], 'Apellido' => $row[3], 'mail' => $row[4], 'Sexo' => $row[6], 'Nacionalidad' => $row[7], 'Estado Civil' => $row[8], 'Habilitado' => $estado, 'Tel. Urgencia' => $row[26]);
}

$pdf->addJpegFromFile($img = '../Imagenes/reserva_ya.JPG', $x = 30, $y = $pdf->y - 80, $w = 100, $h = 0);
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