<?php
  
//Conecta con la base de datos
 
function Conectarse()  
{  
    $serverName="(local)";
    $connectionInfo =  array("Database"=>"DAMSU", "UID"=>"DAMSU","PWD"=>"DAMSU");
    $conn= sqlsrv_connect($serverName, $connectionInfo);
   if (!($link=$conn))  
   {  
      echo "Error conectando a la base de datos.";  
      exit();  
   }  
   if (($link=$conn))  
   {  
    
       
   }  
   return $link;  
}  

// consultar la base de datos se utiliza odbc
function ejecutar($query){
 return odbc_exec($this->conn, $query);
 $this->cerrarConexion() ;
}
 
// cierra una conexion 
function cerrarConexion(){
 odbc_close($this->conn) ;
}
 


?>

