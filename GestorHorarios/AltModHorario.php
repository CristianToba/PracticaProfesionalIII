
<?php


include("../Conexion/Conexion.php");
$conectar = new Conexion();
$link = $conectar->Conectarse();
$parametro = $_GET['valor'];
$codigoHorario= $_POST['codigoHorario'];
$descHorario= $_POST['descripcionHorario'];
$estadoHorario=  $_POST['habilitado'];

$alta = "2016-12-06 00:00:00";


//Consulta si el registro se desea , Insertar(0), Modificar(1)o Eliminar(2)
//Insertar Registro
if ($parametro == 0) {
$horaInicio = $_POST['HorarioInicio'];
$horaFin= $_POST['HorarioFin'];
    try {

        include("../Funciones/Consultas.php");
        ## Consulta para consultar el ultimo registro
        $numero=  ObtenerMaxHorario();
        
        ## Consulta para insertar el nuevo registro con el ultimo codigo de pais mas uno
        $sql_Consulta = "INSERT INTO Horarios(HorarioInicio, HorarioFin, alta, baja, Habilitado, usuarioAuditoria, descripcion) VALUES ('$horaInicio','$horaFin','$alta','',1,'','$descHorario')";

        $stmt = sqlsrv_query($link, $sql_Consulta);
        if ($stmt === false) {

            print "<script>alert('Registro ya existente ')</script>";
            die(print_r(sqlsrv_errors(), true));
            //print("<script>window.location.replace('../Vista/AltaPais.html');</script>");
        } else {
            print "<script>alert('Se registro un horario nuevo')</script>";

            print("<script>window.location.replace('Alta_Horario.php');</script>");
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}
//Modificar Registro    
if ($parametro == 1) {
    
     try {

        include("../Funciones/Consultas.php");
            
        ## Consulta para insertar el nuevo registro con el ultimo codigo de pais mas uno
        $sql_Consulta = "UPDATE HORARIOS SET descripcion='$descHorario', habilitado='$estadoHorario' where idHorarios='$codigoHorario'";
      
        $stmt = sqlsrv_query($link, $sql_Consulta);
        if ($stmt === false) {

            print "<script>alert('Registro no modificado')</script>";
            die(print_r(sqlsrv_errors(), true));
           
        } else {
            print "<script>alert('Se registro modificacion de horario solicitado')</script>";

            print("<script>window.location.replace('../Vista/AdministrarHorarios.php');</script>");
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
     
