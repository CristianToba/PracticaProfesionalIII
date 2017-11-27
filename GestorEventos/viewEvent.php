<?php
include("../Conexion/Conexion.php");
$conectar = new Conexion();
$link = $conectar->Conectarse();
$prof=$_POST['idMedico'];

if(isset($_GET['view']))    {
        header('Content-Type: application/json');
        //Dependiendo de el horario de inicio y de fin que se quiera consultar es lo que trae para mostrar en  el calendario 
        //$start = sqlsrv_query($link,$_GET["start"]);
        //$end = sqlsrv_query($link,$_GET["end"]);
        try {
         
        $sql_Consulta= "SELECT idagenda, inicio ,fin ,titulo FROM  agenda where idMedico= '$prof' ";
       
        
        $stmt = sqlsrv_query($link, $sql_Consulta);
       
        
        while($row =sql_fetch_assoc($stmt))
        {
            $events[] = $row; 
        }
        echo json_encode($events); 
        exit;
    }
    }
 
    ?>
