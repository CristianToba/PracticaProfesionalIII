<?php
include("../Conexion/Conexion.php");
$conectar = new Conexion();
$link = $conectar->Conectarse();
$prof=$_POST['idMedico'];
$titulo=$_POST['titulo'];
$hinicio=$_POST['inicio'];
$hfin=$_POST['fin'];
     
if($_POST['action'] == "add") // agregar un nuevo evento
    {   
    
     try {
         
        $sql_Consulta= "INSERT INTO agenda (
                 idMedico,
                    titulo ,
                    inicio ,
                    fin )  VALUES (  '$prof', '$titulo', '$hinicio', '$hfin' )";
            $stmt = sqlsrv_query($link, $sql_Consulta);
        if ($stmt === false) {

            print "<script>alert('Registro no modificado')</script>";
            die(print_r(sqlsrv_errors(), true));
           
        } else {
            print "<script>alert('Se registro modificacion de pais')</script>";
      
            print("<script>window.location.replace('../Vista/AdministrarPais.php');</script>");
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }            
        header('Content-Type: application/json');
        exit;
    }
    
?>

