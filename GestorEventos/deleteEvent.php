<?php

$prof=$_POST['idMedico'];
$titulo=$_POST['titulo'];
$idagenda = $_POST['idagenda'];
if($_POST['action'] == "delete")  // remove event
    {
    
     try {
         
        $sql_Consulta= "DELETE from agenda where idagenda = '$idagenda' and idmedico='$prof' ";
      
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
        exit;
    }
    
    ?>

