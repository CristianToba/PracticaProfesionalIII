<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<?php
 
## conexion a sql...
	$conexion = mysql_connect("localhost", "root", "") or die(mysql_error());
	## seleccionamos la base de datos
    mysql_select_db("supermercado", $conexion);
	## generamos el query
 
if ($_POST['Nombre']) {
  
 //Comprobacion del envio del nombre de usuario y password
 $username=$_POST['Nombre'];
 $password=$_POST['Pass'];

     if ($password==NULL) {
        echo "La password no fue enviada";
     }else{

       $usu=$_COOKIE['usuario'];
       $query = mysql_query("SELECT usuario,pass FROM cliente WHERE usuario = '$usu'") or die(mysql_error());
 
       $data = mysql_fetch_array($query);
 
        if($data['pass'] != $password) {
            ?>
            <script>
            alert("Login incorrecto");
            actualiza();
            </script>
  
       <?php
        }else{
            if($data['usuario']== $username && $data['pass']==$password){

              //comprobamos si existe la cookie
              if(isset($_COOKIE['usuario'])) {
              //como no existe le enviamos la cookie y ala vez asignamos un valor a la cookie
              
              $_COOKIE['usuario'] = $_POST['Nombre'];
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
   }
 }
 mysql_close();

 ?> 
<body>
</body>
</html>