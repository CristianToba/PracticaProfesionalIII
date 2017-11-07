<?php
$prof=$_POST['idMedico'];
$titulo=$_POST['titulo'];
$hinicio=$_POST['inicio'];
$hfin=$_POST['fin'];
$idagenda = $_POST['idagenda'];
if($_POST['action'] == "update")  // update event
    {
     try {
         
        $sql_Consulta= "UPDATE agenda set 
            inicio = '$hinicio', 
            fin = '$hfin,
            titulo = '$titulo
            where idmedico = '$prof'  and  idagenda = '$idagenda' ";
        
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

