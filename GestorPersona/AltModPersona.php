<?php

include("../Conexion/Conexion.php");
$conectar = new Conexion();
$link = $conectar->Conectarse();
$accion = $_GET['parametroAccion'];
$tipo = $_GET['parametroTipo'];

//Consulta si el registro se desea , Insertar(0), Modificar(1)o Eliminar(2)
//Insertar Registro
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$tipoDoc = $_POST['TipoDoc'];
$nroDoc = $_POST['NroDoc'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$direccion = $_POST['txtDireccion'];
$nroDir = $_POST['NroDir'];
$piso = $_POST['Piso'];
$cP = $_POST['CodigoPostal'];
$fNac = $_POST['fechaNac'];
$localidad = $_POST['Localidad'];
$provincia = $_POST['Provincia'];
$nacionalidad = $_POST['Nacionalidad'];
$cantHijo = $_POST['CantHijo'];
$estCivil = $_POST['EdoCivil'];
$telFijo = $_POST['TelFijo'];
$telMovil = $_POST['TelMovil'];

$telUrg = $_POST['TelUrgencia'];
$sangre = $_POST['GrpSan'];
$grpSan = $_POST['GrpSan'];
$fechamod = date("Ymd H:i", time() - 14400);
$clave = $_POST['txtClave'];
$habilitado = $_POST['habilitado'];
$dpto = $_POST['dpto'];


//Alta Modificacion Afiliado
if ($tipo == 1) {

    $religionAfiliado = $_POST['Religion'];
    $hobbieAfiliado = $_POST['Hobbie'];
    $ocupacionAfiliado = $_POST['Ocupacion'];
    $oSocAfiliado = $_POST['ObraSocial'];


    if ($accion == 0) {
        $codFijo = $_POST['CodAreaFijo'];
        $Fijo = $codFijo . '-' . $telFijo;
        $codTelMovil = $_POST['CodAreaMovil'];
        $Movil = $codTelMovil . '-' . $telMovil;
        $codTelUrg = $_POST['CodAreaUrg'];
        $Urgencia = $codTelUrg . '-' . $telUrg;


        try {

            include("../Funciones/Consultas.php");
            ## Consulta para consultar el ultimo registro

            $numero = ObtenerMaxPersona($tipo);
            $insert = ObtenerMaxDireccion();
            $sql_Consulta_Dir = "INSERT INTO DIRECCION(idDireccion,calle,numero,dpto,piso,codigoPostal,idLocalidad) VALUES ($insert,'$direccion',$numero,$dpto,$piso,$cP,10)";
            $stmtdir = sqlsrv_query($link, $sql_Consulta_Dir);

            if ($stmtdir === false) {

                die(print_r(sqlsrv_errors(), true));
            }
            $numerodir = ObtenerUltDireccion();

            ## Consulta para insertar el nuevo registro con el ultimo codigo de persona mas uno
            $sql_Consulta = "INSERT INTO PERSONA(nroPersona,dni,tipoDni, nombre, apellido, mail, fechaNac, sexo, nacionalidad, estadoCivil, idPersDirec
        , telFijo, alta, baja, celular, Habilitado, usuarioAuditoria, cantHijos, ocupacion, religion, hobbie
        , telUrgencia, obraSocial, tipoPers, tipoSangre) VALUES ($numero,$nroDoc,'$tipoDoc','$nombre','$apellido','$email','$fNac','$sexo','$nacionalidad','$estCivil',$numerodir,'$Fijo','$fechamod','','$Movil',1,'',$cantHijo,'$ocupacionAfiliado','$religionAfiliado','$hobbieAfiliado','$Urgencia','$oSocAfiliado',1,'$sangre')";

            $stmt = sqlsrv_query($link, $sql_Consulta);
            if ($stmt === false) {

                print "<script>alert('Registro ya existente ')</script>";
                die(print_r(sqlsrv_errors(), true));
                //print("<script>window.location.replace('../Vista/AltaPais.html');</script>");
            } else {
                print "<script>alert('Se registro un afiliado nuevo')</script>";

                print("<script>window.location.replace('Alta_Afiliado.php');</script>");
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
//Modificar Registro    
    if ($accion == 1) {

        try {

            include("../Funciones/Consultas.php");
            ## Consulta para insertar el nuevo registro con el ultimo codigo de pais mas uno
            $sql_Consulta = "UPDATE PERSONA SET dni='$nroDoc',nombre='$nombre',apellido='$apellido',mail='$email',fechaNac='$fNac',sexo='$sexo',nacionalidad='$nacionalidad',estadoCivil='$estCivil',clave='$clave',habilitado='$habilitado',cantHijos='$cantHijo',ocupacion='$ocupacionAfiliado',religion='$religionAfiliado', hobbie='$hobbieAfiliado',tipoDni='$tipoDoc',telFijo='$telFijo',telUrgencia='$telUrg',celular='$telMovil',obraSocial='$oSocAfiliado',tipoSangre='$sangre' where dni='$nroDoc'";

            $stmt = sqlsrv_query($link, $sql_Consulta);
            if ($stmt === false) {

                print "<script>alert('Registro no modificado')</script>";
                die(print_r(sqlsrv_errors(), true));
            } else {
                print "<script>alert('Se registro modificacion de persona')</script>";

                print("<script>window.location.replace('../Vista/AdministrarAfiliado.php');</script>");
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
//Eliminar un registro
    if ($accion == 2) {
        
    }
} else


//Alta Modificacion de Medico
if ($tipo == 2) {

    $religionMedico = $_POST['Religion'];
    $hobbieMedico = $_POST['Hobbie'];
    $ocupacionMedico = $_POST['Ocupacion'];
    $oSocMedico = $_POST['ObraSocial'];


    if ($accion == 0) {
        $codFijo = $_POST['CodAreaFijo'];
        $Fijo = $codFijo . '-' . $telFijo;
        $codTelMovil = $_POST['CodAreaMovil'];
        $Movil = $codTelMovil . '-' . $telMovil;
        $codTelUrg = $_POST['CodAreaUrg'];
        $Urgencia = $codTelUrg . '-' . $telUrg;


        try {

            include("../Funciones/Consultas.php");
            ## Consulta para consultar el ultimo registro

            $numero = ObtenerMaxPersona($tipo);
            $insert = ObtenerMaxDireccion();
            $sql_Consulta_Dir = "INSERT INTO DIRECCION(idDireccion,calle,numero,dpto,piso,codigoPostal,idLocalidad) VALUES ($insert,'$direccion',$numero,$dpto,$piso,$cP,10)";
            $stmtdir = sqlsrv_query($link, $sql_Consulta_Dir);

            if ($stmtdir === false) {

                die(print_r(sqlsrv_errors(), true));
            }
            $numerodir = ObtenerUltDireccion();

            ## Consulta para insertar el nuevo registro con el ultimo codigo de persona mas uno
            $sql_Consulta = "INSERT INTO PERSONA(nroPersona,dni,tipoDni, nombre, apellido, mail, fechaNac, sexo, nacionalidad, estadoCivil, idPersDirec
        , telFijo, alta, baja, celular, Habilitado, usuarioAuditoria, cantHijos, ocupacion, religion, hobbie
        , telUrgencia, obraSocial, tipoPers, tipoSangre) VALUES ($numero,$nroDoc,'$tipoDoc','$nombre','$apellido','$email','$fNac','$sexo','$nacionalidad','$estCivil',$numerodir,'$Fijo','$fechamod','','$Movil',1,'',$cantHijo,'$ocupacionMedico','$religionMedico','$hobbieMedico','$Urgencia','$oSocMedico',2,'$sangre')";

            $stmt = sqlsrv_query($link, $sql_Consulta);
            print "<script>alert('" *+$sql_Consulta+"')</script>";
            if ($stmt === false) {

                print "<script>alert('Registro ya existente ')</script>";
                die(print_r(sqlsrv_errors(), true));
                //print("<script>window.location.replace('../Vista/AltaPais.html');</script>");
            } else {
                print "<script>alert('Se registro un afiliado nuevo')</script>";

                print("<script>window.location.replace('Alta_Afiliado.php');</script>");
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
//Modificar Registro    
    if ($accion == 1) {

        try {

            include("../Funciones/Consultas.php");
            ## Consulta para insertar el nuevo registro con el ultimo codigo de pais mas uno
            $sql_Consulta = "UPDATE PERSONA SET dni='$nroDoc',nombre='$nombre',apellido='$apellido',mail='$email',fechaNac='$fNac',sexo='$sexo',nacionalidad='$nacionalidad',estadoCivil='$estCivil',clave='$clave',habilitado='$habilitado',cantHijos='$cantHijo',ocupacion='$ocupacionMedico',religion='$religionMedico', hobbie='$hobbieMedico',tipoDni='$tipoDoc',telFijo='$telFijo',telUrgencia='$telUrg',celular='$telMovil',obraSocial='$oSocMedico',tipoSangre='$sangre' where dni='$nroDoc'";

            $stmt = sqlsrv_query($link, $sql_Consulta);
            if ($stmt === false) {

                print "<script>alert('Registro no modificado')</script>";
                die(print_r(sqlsrv_errors(), true));
            } else {
                print "<script>alert('Se registro modificacion de persona')</script>";

                print("<script>window.location.replace('../Vista/AdministrarAfiliado.php');</script>");
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
//Eliminar un registro
    if ($accion == 2) {
        
    }
}



sqlsrv_close($link);
?>
     

