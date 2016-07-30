<?php

setcookie('usuario', $_POST['txtUsuario'], time() + 604800);
session_start();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<?php
 
## conexion a sql...
$serverName="(local)";;
$connectionInfo =  array("Database"=>"DAMSU", "UID"=>"DAMSU","PWD"=>"DAMSU");
$conn= sqlsrv_connect($serverName, $connectionInfo);
	## generamos el query
 if($conn){
     ECHO "Se establecio conexion con el servidor";
     
     
     
     
     
     
     
 }ELSE{
        echo "No es posible conectarse al servidor.</br>";
        die( print_r( sqlsrv_errors(), true));
}
 
 //Comprobacion del envio del nombre de usuario y password
 $username=$_POST['txtUsuario'];
 $password=$_POST['txtclave'];
 $usu=$_COOKIE['usuario'];
 $query = mysql_query("SELECT dni,clave FROM afiliado WHERE dni = '$usu' and dni = '$password'") or die(mysql_error());
 
       $data = mysql_fetch_array($query);
 
        if($data['clave'] != $password) {
            ?>
            <script>
            alert("Login incorrecto");
            </script>
  
       <?php
        }else{
            if($data['dni']== $username && $data['clave']==$password){

              //comprobamos si existe la cookie
              if(isset($_COOKIE['usuario'])) {
              //como no existe le enviamos la cookie y ala vez asignamos un valor a la cookie
              
              $_COOKIE['usuario'] = $_POST['txtUsuario'];
                mysql_close();
              }
            ?>

            <script>
                alert("Usuario correcto");
                actualizaPagina();
            </script>
             
            <?php

            }
        }
   

 mysql_close();

 ?> 
<body>
</body>
</html>
