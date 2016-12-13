
<?php

/*
  include("../Conexion/Conexion.php");
  $conectar= new Conexion();
  $link = $conectar->Conectarse();
  $parametro = $_GET['valor'];
  $pais = $_POST['txtPais'];
  $alta = "2016-12-06 00:00:00";
  print ''+$parametro;

  //Consulta si el registro se desea , Insertar(0), Modificar(1)o Eliminar(2)
  //Insertar Registro
  if ($parametro == 0) {

  try {

  include("../Funciones/Consultas.php");
  ## Consulta para consultar el ultimo registro
  $ultimoCod = new Consulta();
  //Casteo el objeto Consulta(ultimoCod) como Integer para poder insertar el registro nuevo en la posicion max devuelta por ObtenerMaxPais
  $numero = (Integer) $ultimoCod->ObtenerMaxPais();

  ## Consulta para insertar el nuevo registro con el ultimo codigo de pais mas uno
  $sql_Consulta = "INSERT INTO PAIS(codigoPais,descripcionPais, alta, baja, habilitado,usuarioAuditoria) VALUES ('$numero','$pais','$alta','',1,'')";

  $stmt = sqlsrv_query($link, $sql_Consulta);
  if ($stmt === false) {

  print "<script>alert('Registro ya existente ')</script>";
  die(print_r(sqlsrv_errors(), true));
  //print("<script>window.location.replace('../Vista/AltaPais.html');</script>");
  } else {
  print "<script>alert('Se registro un pais nuevo')</script>";

  print("<script>window.location.replace('../Vista/AltaPais.html');</script>");
  }
  } catch (Exception $exc) {
  echo $exc->getTraceAsString();
  }
  }
  //Modificar Registro
  if ($parametro == 1) {
  print_r("Hola estas modificando");
  }
  //Eliminar un registro
  if ($parametro == 2) {

  }


  sqlsrv_close($link);
 */


include("../Conexion/Conexion.php");
$conectar = new Conexion();
$link = $conectar->Conectarse();
$parametro = $_GET['valor'];
$pais = $_POST['txtPais'];
$codigoPais= $_POST['codPais'];
$alta = "2016-12-06 00:00:00";


//Consulta si el registro se desea , Insertar(0), Modificar(1)o Eliminar(2)
//Insertar Registro
if ($parametro == 0) {

    try {

        include("../Funciones/Consultas.php");
        ## Consulta para consultar el ultimo registro
        $numero=ObtenerMaxPais();
        
        ## Consulta para insertar el nuevo registro con el ultimo codigo de pais mas uno
        $sql_Consulta = "INSERT INTO PAIS(codigoPais,descripcionPais, alta, baja, habilitado,usuarioAuditoria) VALUES ('$numero','$pais','$alta','',1,'')";

        $stmt = sqlsrv_query($link, $sql_Consulta);
        if ($stmt === false) {

            print "<script>alert('Registro ya existente ')</script>";
            die(print_r(sqlsrv_errors(), true));
            //print("<script>window.location.replace('../Vista/AltaPais.html');</script>");
        } else {
            print "<script>alert('Se registro un pais nuevo')</script>";

            print("<script>window.location.replace('../Vista/AltaPais.html');</script>");
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}
//Modificar Registro    
if ($parametro == 1) {
    
     try {

        include("../Funciones/Consultas.php");
        //$codigoPais=(Integer)$codigoPais;
        //$pais=(String)$pais;
        echo 'pais'+$codigoPais;
        ## Consulta para insertar el nuevo registro con el ultimo codigo de pais mas uno
        $sql_Consulta = "UPDATE PAIS SET descripcionPais='$pais' where codigoPais='$codigoPais'";
      
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
     
