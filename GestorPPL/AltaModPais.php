
<?php

include("../Conexion/Conexion.php");
$conectar = new Conexion();
$link = $conectar->Conectarse();
$parametro = $_GET['valor'];
$pais = $_POST['txtPais'];
$alta = "2016-12-06 00:00:00";
$estadoPais= $_POST['habilitado'];

//Consulta si el registro se desea , Insertar(0), Modificar(1)o Eliminar(2)
//Insertar Registro
if ($parametro == 0) {

    try {

        include("../Funciones/Consultas.php");
        ## Consulta para consultar el ultimo registro
        $numero= ObtenerMaxPais();
        
        ## Consulta para insertar el nuevo registro con el ultimo codigo de pais mas uno
        $sql_Consulta = "INSERT INTO PAIS(codigoPais,descripcionPais, alta, baja, habilitado,usuarioAuditoria) VALUES ('$numero','$pais','$alta','','$estadoPais','')";

        $stmt = sqlsrv_query($link, $sql_Consulta);
        if ($stmt === false) {

            print "<script>alert('Registro ya existente ')</script>";
            die(print_r(sqlsrv_errors(), true));
            //print("<script>window.location.replace('../Vista/AltaPais.html');</script>");
        } else {
            print "<script>alert('Se registro un pais nuevo')</script>";

            print("<script>window.location.replace('../GestorPPL/AltaPais.php');</script>");
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}
//Modificar Registro    
if ($parametro == 1) {
    $codigoPais= $_POST['CodPais'];


     try {
         
         include_once("../Funciones/Consultas.php");
        ## Consulta para insertar el nuevo registro con el ultimo codigo de pais mas uno
        $sql_Consulta = "UPDATE PAIS SET descripcionPais='$pais',Habilitado='$estadoPais' where codigoPais='$codigoPais'";
       
       
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
    
}
//Eliminar un registro
if ($parametro == 2) {
    
}


sqlsrv_close($link);
?>
     
