
<?php

if (isset($POST['funcion']) && isset($POST['direccion'])) {

    $action = $_GET['funcion'];
    $codDireccion = $_GET['direccion'];
    if ($action == 'dir') {
        $domicilio = ObtenerDireccion($codDireccion);
        echo $domicilio;
    } else {
        echo"hola" + $action;
        echo"entro" + $codDireccion;
    }
}

function ListarPaises() {
    $sql = "SELECT * FROM Pais";
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $stmt = sqlsrv_query($conn, $sql);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    while ($row = sqlsrv_fetch_array($stmt)) {

        echo "<tr>";
        echo "<td>" + $row[0] + "</td>";
        echo "<td>" + $row[1] + "</td>";
        echo "</tr>";
    }
}

function ObtenerDireccion($codDireccion) {

    $sql = "SELECT calle+' '+cast(numero as varchar(6)) as direccion FROM DIRECCION WHERE idDireccion='$codDireccion'";

    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $res_Consulta = sqlsrv_query($conn, $sql);
    $row = sqlsrv_fetch_array($res_Consulta);
    $direccion = $row['direccion'];
    sqlsrv_close($conn);

    echo $direccion;
}

function ObtenerTodosPaises() {

    $sql = "SELECT * FROM Pais";
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $stmt = sqlsrv_query($conn, $sql);
    sqlsrv_close($conn);
    return $stmt;
}

function ObtenerMaxPais() {
    $sql = "SELECT MAX(codigoPais) as codigo FROM PAIS";
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $res_Consulta = sqlsrv_query($conn, $sql);
    $row = sqlsrv_fetch_array($res_Consulta);
    $MaximoCodigo = $row["codigo"];
    $MaximoCodigo++;
    sqlsrv_close($conn);
    return $MaximoCodigo;
}

function ObtenerMaxHorario() {
    $sql = "SELECT MAX(idHorario) as codigo FROM Horarios";
    //$result = $this->objeto->ejecutar($sql);
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $res_Consulta = sqlsrv_query($conn, $sql);
    $row = sqlsrv_fetch_array($res_Consulta);
    $MaximoCodigo = $row["codigo"];
    $MaximoCodigo++;
    sqlsrv_close($conn);
    return $MaximoCodigo;
}

function ObtenerMaxPersona($tipoPerParametro) {
    $sql1 = "SELECT MAX(nroPersona) as codigo FROM Persona where tipoPers='1'";
    $sql2 = "SELECT MAX(nroPersona) as codigo FROM Persona where tipoPers='2'";
    $sql3 = "SELECT MAX(nroPersona) as codigo FROM Persona where tipoPers='3'";
    $sqlFinal = "";
    $parametro = $tipoPerParametro;
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if ($parametro == 1) {
        $sqlFinal = $sql1;
    } elseif ($parametro == 2) {
        $sqlFinal = $sql2;
    } elseif ($parametro == 3) {
        $sqlFinal = $sql3;
    }

    $res_Consulta = sqlsrv_query($conn, $sqlFinal);

    $row = sqlsrv_fetch_array($res_Consulta);
    $MaximoCodigo = $row["codigo"];
    $MaximoCodigo++;
    sqlsrv_close($conn);
    return $MaximoCodigo;
}

function ObtenerMaxDireccion() {

    $sqlFinal = "SELECT MAX(idDireccion) as codigo FROM DIRECCION";


    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    $res_Consulta = sqlsrv_query($conn, $sqlFinal);
    $row = sqlsrv_fetch_array($res_Consulta);
    $MaximoCodigo = $row["codigo"];
    $MaximoCodigo++;
    sqlsrv_close($conn);
    return $MaximoCodigo;
}

function ObtenerUltDireccion() {

    $sqlFinal = "SELECT MAX(idDireccion) as codigo FROM DIRECCION";


    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    $res_Consulta = sqlsrv_query($conn, $sqlFinal);
    $row = sqlsrv_fetch_array($res_Consulta);
    $MaximoCodigo = $row["codigo"];
    sqlsrv_close($conn);
    return $MaximoCodigo;
}

function ObtenerPersona($dni) {
    require_once('../Conexion/Conexion.php');
    $sql = "SELECT * FROM Persona where dni='$dni'";
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $stmt = sqlsrv_query($conn, $sql);
    sqlsrv_close($conn);
}

function saca_menu_desplegable($sql) {

    //tomamos los datos del archivo conexion.php  
    include("../Conexion/Conexion.php");
    include("../Funciones/Consultas.php");
    $link = Conectarse();
    //se envia la consulta  

    $resultado = sqlsrv_query($link, $sql);
    echo "<select name='cbmCriterio'>";

    while ($fila = sqlsrv_fetch_array($resultado)) {

        echo "<option selected value='$fila[0]'>$fila[1]";


        echo "<option value='$fila[0]'>$fila[1]";
    }
    echo "</select>";
    sqlsrv_close($conn);
}

function EliminarDato($param, $tipo) {
    $datoElim = $tipo;
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $stmt = sqlsrv_query($conn, $param);
    if ($stmt === false) {

        print "<script>alert('Registro no se Elimino Registro')</script>";
        //die(print_r(sqlsrv_errors(), true));
    } else {

        if ($datoElim == 'pais') {

            print("<script>window.location.replace('../Vista/AdministrarPais.php');</script>");
        } elseif ($datoElim == 'horarios') {

            print("<script>window.location.replace('../Vista/AdministrarHorarios.php');</script>");
        } elseif ($datoElim == 'Afiliado') {

            print("<script>window.location.replace('../Vista/AdministrarAfiliado.php');</script>");
        }
    }
    sqlsrv_close($conn);
}

function mostrarGSan($tipoSangre) {

    $sangre = $tipoSangre;



    if ($sangre == 'O-') {

        $GSangre = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                                echo '<option value='O+' selected>O+</option>';
                                echo '<option value='O-'>O-</option>'';
                                echo '<option value='A-'>A-</option>';
                                echo '<option value='A+'>A+</option>';
                                echo '<option value='B-'>B-</option>'';
                                echo '<option value='B+'>B+</option>';
                                echo '<option value='AB-'>AB-</option>';
                                echo '<option value='AB+'>AB+</option>'';";
    }

    if ($sangre == 'O+') {
        $GSangre = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                                echo '<option value='O+'>O+</option>';
                                echo '<option value='O-' selected>O-</option>'';
                                echo '<option value='A-'>A-</option>';
                                echo '<option value='A+'>A+</option>';
                                echo '<option value='B-'>B-</option>'';
                                echo '<option value='B+'>B+</option>';
                                echo '<option value='AB-'>AB-</option>';
                                echo '<option value='AB+'>AB+</option>'';";
    }

    if ($sangre == 'A+') {
        $GSangre = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                                echo '<option value='O+'>O+</option>';
                                echo '<option value='O-'>O-</option>'';
                                echo '<option value='A-'>A-</option>';
                                echo '<option value='A+' selected>A+</option>';
                                echo '<option value='B-'>B-</option>'';
                                echo '<option value='B+'>B+</option>';
                                echo '<option value='AB-'>AB-</option>';
                                echo '<option value='AB+'>AB+</option>'';";
    }

    if ($sangre == 'A-') {
        $GSangre = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                                echo '<option value='O+'>O+</option>';
                                echo '<option value='O-'>O-</option>'';
                                echo '<option value='A-' selected>A-</option>';
                                echo '<option value='A+'>A+</option>';
                                echo '<option value='B-'>B-</option>'';
                                echo '<option value='B+'>B+</option>';
                                echo '<option value='AB-'>AB-</option>';
                                echo '<option value='AB+'>AB+</option>'';";
    }

    if ($sangre == 'B+') {
        $GSangre = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                                echo '<option value='O+'>O+</option>';
                                echo '<option value='O-'>O-</option>'';
                                echo '<option value='A-'>A-</option>';
                                echo '<option value='A+'>A+</option>';
                                echo '<option value='B-'>B-</option>'';
                                echo '<option value='B+' selected>B+</option>';
                                echo '<option value='AB-'>AB-</option>';
                                echo '<option value='AB+'>AB+</option>'';";
    }

    if ($sangre == 'B-') {
        $GSangre = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                                echo '<option value='O+'>O+</option>';
                                echo '<option value='O-'>O-</option>'';
                                echo '<option value='A-'>A-</option>';
                                echo '<option value='A+'>A+</option>';
                                echo '<option value='B-' selected>B-</option>'';
                                echo '<option value='B+'>B+</option>';
                                echo '<option value='AB-'>AB-</option>';
                                echo '<option value='AB+'>AB+</option>'';";
    }

    if ($sangre == 'AB+') {
        $GSangre = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                                echo '<option value='O+'>O+</option>';
                                echo '<option value='O-'>O-</option>'';
                                echo '<option value='A-'>A-</option>';
                                echo '<option value='A+'>A+</option>';
                                echo '<option value='B-'>B-</option>'';
                                echo '<option value='B+'>B+</option>';
                                echo '<option value='AB-'>AB-</option>';
                                echo '<option value='AB+' selected>AB+</option>'';";
    }

    if ($sangre == 'AB-') {
        $GSangre = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                                echo '<option value='O+'>O+</option>';
                                echo '<option value='O-'>O-</option>'';
                                echo '<option value='A->A-</option>';
                                echo '<option value='A+>A+</option>';
                                echo '<option value='B-'>B-</option>'';
                                echo '<option value='B+'>B+</option>';
                                echo '<option value='AB-' selected>AB-</option>';
                                echo '<option value='AB+'>AB+</option>'';";
    }
    sqlsrv_close($conn);
    return $GSangre;
}

function mostrarEstCivil($estCivil) {
    $Tipo = $estCivil;

    if ($Tipo == 'Soltero') {
        $mostrar = "echo '<option value='Ninguno'>Seleccione una opcion</option>
                            echo '<option value='Soltero' selected>Soltero/a</option>
                            echo '<option value='Separado/a'>Separado/a</option>
                            echo '<option value='Casado/a'>Casado/a</option>
                            echo '<option value='Viudo/a'>Viudo/a</option>';";
    }
    if ($Tipo == 'Separado/a') {
        $mostrar = "echo '<option value='Ninguno'>Seleccione una opcion</option>
                            echo '<option value='Soltero'>Soltero/a</option>
                            echo '<option value='Separado/a' selected>Separado/a</option>
                            echo '<option value='Casado/a'>Casado/a</option>
                            echo '<option value='Viudo/a'>Viudo/a</option>';";
    }
    if ($Tipo == 'Casado/a') {
        $mostrar = "echo '<option value='Ninguno'>Seleccione una opcion</option>
                            echo '<option value='Soltero'>Soltero/a</option>
                            echo '<option value='Separado/a'>Separado/a</option>
                            echo '<option value='Casado/a' selected>Casado/a</option>
                            echo '<option value='Viudo/a'>Viudo/a</option>';";
    }
    if ($Tipo == 'Viudo/a') {
        $mostrar = "echo '<option value='Ninguno' selected>Seleccione una opcion</option>
                            echo '<option value='Soltero'>Soltero/a</option>
                            echo '<option value='Separado/a'>Separado/a</option>
                            echo '<option value='Casado/a'>Casado/a</option>
                            echo '<option value='Viudo/a' selected>Viudo/a</option>';";
    }
    sqlsrv_close($conn);
    return $mostrar;
}

function mostrarTDoc($tipoDoc) {
    $tipo = $tipoDoc;

    if ($tipo == 'C.I.') {
        $mostrar = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                            echo '<option value='C.I.' selected>C.I.</option>';
                            echo '<option value='D.N.I.'>D.N.I.</option>';
                            echo '<option value='L.C.'>L.C.</option>';
                            echo '<option value='L.E.'>L.E.</option>';
                            echo '<option value='Pasaporte'>Pasaporte</option>';";
    }
    if ($tipo == 'D.N.I.') {
        $mostrar = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                            echo '<option value='C.I.'>C.I.</option>';
                            echo '<option value='D.N.I.' selected>D.N.I.</option>';
                            echo '<option value='L.C.'>L.C.</option>';
                            echo '<option value='L.E.'>L.E.</option>';
                            echo '<option value='Pasaporte'>Pasaporte</option>';";
    }
    if ($tipo == 'L.C.') {
        $mostrar = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                            echo '<option value='C.I.'>C.I.</option>';
                            echo '<option value='D.N.I.'>D.N.I.</option>';
                            echo '<option value='L.C.' selected>L.C.</option>';
                            echo '<option value='L.E.'>L.E.</option>';
                            echo '<option value='Pasaporte'>Pasaporte</option>';";
    }
    if ($tipo == 'L.E.') {
        $mostrar = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                            echo '<option value='C.I.'>C.I.</option>';
                            echo '<option value='D.N.I.'>D.N.I.</option>';
                            echo '<option value='L.C.'>L.C.</option>';
                            echo '<option value='L.E.' selected>L.E.</option>';
                            echo '<option value='Pasaporte'>Pasaporte</option>';";
    }
    if ($tipo == 'Pasaporte') {
        $mostrar = "echo '<option value='Ninguno'>Seleccione una opcion</option>';
                            echo '<option value='C.I.'>C.I.</option>';
                            echo '<option value='D.N.I.'>D.N.I.</option>';
                            echo '<option value='L.C.'>L.C.</option>';
                            echo '<option value='L.E.'>L.E.</option>';
                            echo '<option value='Pasaporte' selected>Pasaporte</option>';";
    }
    sqlsrv_close($conn);
    return $mostrar;
}

function mostrarSexo($sexo) {
    $tipo = $sexo;

    if ($tipo == 'Masculino') {
        $mostrar = "<input checked name='sexo' type='radio' value='Masculino'> Masculino
                  <input name='sexo' type='radio' value='Femenino'> Femenino<br>";
    }
    if ($tipo == 'Femenino') {
        $mostrar = "<input name='sexo' type='radio' value='Masculino'> Masculino
                  <input checked name='sexo' type='radio' value='Femenino'> Femenino<br>";
    }
    return $mostrar;
}

function mostrarHab($hab) {
    $tipo = $hab;

    if ($tipo == 1) {
        $mostrar = "<input  name='habilitado' type='radio' value='False'> Habilitado
                  <input checked name='habilitado' type='radio' value='True'> Deshabilitado";
    }
    if ($tipo == 0) {
        $mostrar = "<input checked name='habilitado' type='radio' value='False'> Habilitado
                  <input  name='habilitado' type='radio' value='True'> Deshabilitado";
    }

    return $mostrar;
}

function BuscarDatosParaTurno($afiliado, $especialidad, $profesional) {
    require_once('../Conexion/Conexion.php');
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $sqlA = "SELECT A.NOMBRE as nombre,A.APELLIDO as apellido,A.DNI as dni FROM Persona AS A WHERE A.nroPersona= '$afiliado'";
    $sqlP = "SELECT P.nombre as nombreP, P.apellido as apellidoP, E.especialidad FROM Persona AS P INNER JOIN Especialidad AS E ON 
E.idEspecialidad=P.idEspecialidad  WHERE P.matricula= '$profesional' AND E.idEspecialidad= '$especialidad' ";
    

    $stmtA = sqlsrv_query($conn, $sqlA);
    $stmtP = sqlsrv_query($conn, $sqlP);
    
    $arr = array();
    
    while ($row = sqlsrv_fetch_array($stmtA)) {

        $nombreA = $row['nombre'];
        $apellidoA = $row['apellido'];
        $dniA = $row['dni'];
        
        while ($rowP = sqlsrv_fetch_array($stmtP)) {
            $nombreP = $rowP['nombreP'];
            $apellidoP = $rowP['apellidoP'];
            $especialidad = $rowP['especialidad'];
            
                
                $arr[] = array('nombreA' => $nombreA, 'apellidoA' => $apellidoA, 'dniA' => $dniA, 'nombreP' => $nombreP, 'apellidoP' => $apellidoP, 'especialidad' => $especialidad);
            
        }
        
    }
    return $arr;
}

function mostrarFechasDisponibles($fecha) {
    require_once('../Conexion/Conexion.php');
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    $sqlF = "SELECT H.idhorarios as id, CONVERT(char(19), H.start,108) as start FROM Horarios AS H WHERE not exists (SELECT * FROM Turno AS T WHERE T.idHorario=H.idhorarios AND CONVERT(char(17),T.start,103)='$fecha')";
    $stmtF = sqlsrv_query($conn, $sqlF);
    $arr = array();
    $parametro = "<option value=0> Seleccione una valor </option>";
   while( $row = sqlsrv_fetch_array( $stmtF, SQLSRV_FETCH_ASSOC) ) {
       $parametro= "<option value=" + $row['id'] + ">" + $row['start'] +"</option>";
       $arr[] = array('fecha'=>$parametro);
}
      echo var_dump($arr);
 
    
    return $cuerpo;
}

?>