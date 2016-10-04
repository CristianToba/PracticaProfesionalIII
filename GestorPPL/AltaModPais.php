

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

    
<?php
    
    $pais=($_POST["txtPais"]);
    $alta= "20160926 20:39";
 
        $serverName="(local)";;
        $connectionInfo =  array("Database"=>"DAMSU", "UID"=>"DAMSU","PWD"=>"DAMSU");
        $conn= sqlsrv_connect($serverName, $connectionInfo);
try {
    
    include("../Funciones/Consultas.php"); 
	## Consulta para consultar el ultimo registro
        $sql_ultimoCod= sqlsrv_query("$conn",$sql2);
        while($row=sqlsrv_fetch_array($sql_ultimoCod)) {
         $codigo=$row['codigo'];
         $codigo=$codigo+1;
        echo $codigo;  
        }
        
        ## Consulta para insertar el nuevo registro con el ultimo codigo de pais mas uno
	$sql_Consulta="INSERT INTO PAIS(codigoPais,descripcionPais, alta, baja, estado) VALUES ('$codigo','$pais','$alta','',1)";
        
        $stmt = sqlsrv_query( $conn, $sql_Consulta);
        if( $stmt === false ) {
             die( print_r( sqlsrv_errors(), true));
        }  else {
             print "<script>alert('Se registro un pais nuevo')</script>";
             print("<script>window.location.replace('../Vista/AltaPais.html');</script>"); 

        }      
        
	
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
sqlsrv_close( $conn );
?>
<body>
</body>
</html>