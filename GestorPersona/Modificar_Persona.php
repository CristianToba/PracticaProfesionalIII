<?php
session_start();

if ($_SESSION['login_user'] == '') {
    header("Location: http://localhost/PracticaProfesionalIII/index.php");
}
?>
<html>
    <head>
        <!--Cabecera-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../css/jquery.min.js"></script>
        <script src="../css/bootstrap.min.js"></script>
        <script src="../Funciones/Validaciones.js"></script>

    </head>
    <body>
        <?php
        $nroDoc = $_GET['dniPersona'];
        include_once("../Funciones/Consultas.php");
        //$afiliado = ObtenerPersona($nroDoc);
        require_once('../Conexion/Conexion.php');
        $sql = "SELECT CONVERT(VARCHAR(12),day(fechaNac))+'/'+CONVERT(VARCHAR(12),MONTH(fechaNac))+'/'+CONVERT(VARCHAR(12),YEAR(fechaNac)) as fechaNac,* FROM PERSONA AS A INNER JOIN DIRECCION AS B ON A.IDPERSDIREC=B.IDDIRECCION INNER JOIN LOCALIDAD AS C ON B.IDLOCALIDAD=C.CODIGOlOCALIDAD INNER JOIN PROVINCIA AS D ON C.idProvincia=D.codigoProvincia where dni='$nroDoc' ";
        $serverName = "(local)";
        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        $stmt = sqlsrv_query($conn, $sql);
        while ($row = sqlsrv_fetch_array($stmt)) {
            $nombre = $row[3];
            $apellido = $row[4];
            $email = $row[5];
            $fNac = $row[0];
            $sexo = $row[7];
            $nacionalidad = $row[8];
            $estCivil = $row[9];
            $direccion = $row[32];
            $numeroDirec = $row[33];
            $departamente = $row[34];
            $pisoDir = $row[35];
            $codPostDir = $row[36];
            $localidadDir = $row[39];
            $provinciaDir = $row[46];
            $cantHijo = $row[16];
            $ocupacionAfiliado = $row[17];
            $dni = $row[2];
            $hobbieAfiliado = $row[19];
            $tipoAfiliado = $row[24];
            $tipoDoc = $row[25];
            $Fijo = $row[26];
            $Urgencia = $row[27];
            $Movil = $row[28];
            $oSocAfiliado = $row[29];
            $sangre = $row[30];
            
//$fechamod = date("Ymd H:i", time() - 14400);
            $clave = $row[11];
            $habilitado = $row[14];
            
        }
        
        ?>
        <div class="panel panel-primary">
            <div class="panel-heading"> <b>Modificar Pais</b> </div>
            <FORM name ="formulario" method="POST" action = "../GestorPersona/AltModPersona.php?parametroTipo=1&parametroAccion=1" class="form-inline">

                <div class="panel-body" >
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="nombre" class="col-lg-2 control-label">Nombre: </label>
                        <INPUT TYPE ="text" NAME="txtNombre" class="form-control"  onKeyPress="return ValidaCadena(event)" SIZE="MAXLENGTH=30" ID="nombre" value="<?php echo $nombre; ?>" placeholder="Ingrese su nombre" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="apellido" class="col-lg-2 control-label">Apellido: </label>
                        <input type ="text" name="txtApellido" class="form-control" onKeyPress="return ValidaCadena(event)" size="MAXLENGTH=30" id="apellido" value="<?php echo $apellido; ?>" placeholder="Ingrese su apellido" required >
                    </div>

                    
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Tipo" class="col-lg-2 control-label" >Tipo/Nro: </label>
                        <select Name=TipoDoc  class="form-control">
                            <?php echo mostrarTDoc($tipoDoc); ?>
                        </select>
                        <INPUT TYPE="text" NAME="NroDoc" MAXLENGTH="8" onKeyPress="return ValidaNumero(event)" SIZE=12 ID="nrodni" class="form-control" value="<?php echo $nroDoc; ?>" placeholder="Ingrese Nro DNI" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="clave" class="col-lg-2 control-label">Clave: </label>
                        <INPUT TYPE ="text" NAME="txtClave" class="form-control" SIZE="MAXLENGTH=30" ID="clave" value="<?php echo $clave; ?>" placeholder="Ingrese su clave" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="habilitado" class="col-lg-2 control-label">Estado: </label>

                        <?php echo mostrarHab($habilitado); ?>

                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Direccion" class="col-lg-2 control-label">Direccion: </label>
                        <INPUT type="text" NAME="txtDireccion" value="<?php echo $direccion; ?>" ID="direccion" Size=40 class="form-control" placeholder="Ingrese direccion" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Numero" class="col-lg-2 control-label">Numero: </label>
                        <INPUT type="text" NAME="NroDir" MAXLENGTH="10" value="<?php echo $numeroDirec; ?>" onKeyPress="return ValidaNumero(event)" ID="nrocalle" class="form-control" placeholder="Ingrese Nro Dir." required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Piso" class="col-lg-2 control-label">Piso: </label>
                        <INPUT type="text" NAME="Piso" MAXLENGTH="3" value="<?php echo $pisoDir; ?>" onKeyPress="return ValidaNumero(event)" ID="nroPiso" class="form-control" placeholder="Ingrese Piso" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Codigo Postal" class="col-lg-2 control-label">C.P.: </label>
                        <INPUT type="text" NAME="CodigoPostal" MAXLENGTH="4" value="<?php echo $codPostDir; ?>" onKeyPress="return ValidaNumero(event)" ID="Codigo Postal" class="form-control" placeholder="Ingrese C.Postal" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Localidad" class="col-lg-2 control-label">Localidad: </label>
                        <INPUT type="text" NAME="Localidad" Size=20 value="<?php echo $localidadDir; ?>" onKeyPress="return ValidaCadena(event)" ID="Localidad" class="form-control" placeholder="Ingrese localidad" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Provincia" class="col-lg-2 control-label">Provincia: </label>
                        <INPUT type="text" NAME="Provincia" Size=20 value="<?php echo $provinciaDir; ?>" onKeyPress="return ValidaCadena(event)" ID="Provincia" class="form-control" placeholder="Ingrese provincia" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Nacionalidad" class="col-lg-2.5 control-label">Nacionalidad: </label>
                        <INPUT type="text" NAME="Nacionalidad" Size=20 value="<?php echo $nacionalidad; ?>" onKeyPress="return ValidaCadena(event)" ID="Nacionalidad" class="form-control" placeholder="Ingrese Nacionalidad" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="sexo" class="col-lg-2 control-label">Sexo:</label>
                        <?php echo mostrarSexo($sexo); ?>
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Email" class="col-lg-2 control-label">Email: </label>
                        <INPUT type="email" NAME="email" Size=40 value="<?php echo $email; ?>" ONBLUR=" validarEmail(correo);" ID="email" class="form-control" placeholder="Ingrese email" required>
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="CantHijos" class="col-lg-2 control-label">Cantidad Hijos: </label>
                        <INPUT type="text" NAME="CantHijo" MAXLENGTH="5" value="<?php echo $cantHijo; ?>" onKeyPress="return ValidaNumero(event)" ID="CantHijo" class="form-control" placeholder="Ingrese Cant. Hijos" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Estado Civil" class="col-lg-2 control-label" style="margin-top: 10px;">Estado Civil: </label>
                        <select Name="EdoCivil" class="form-control" >
                            <?php echo mostrarEstCivil($estCivil); ?>
                        </select>
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="TelFijo" class="col-lg-2 control-label">Tel.Fijo: </label>

                        <INPUT type="tel" NAME="TelFijo" MAXLENGTH="12" value="<?php echo $Fijo; ?>" onKeyPress="return ValidaNumero(event)" ID="TelFijo" class="form-control" placeholder="Ingrese Telefono Fijo" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="TelCel" class="col-lg-2 control-label">Celular: </label>

                        <INPUT type="tel" NAME="TelMovil" MAXLENGTH="14" value="<?php echo $Movil; ?>" onKeyPress="return ValidaNumero(event)" ID="TelMovil" class="form-control" placeholder="Ingrese Telefono Celular" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="TelUrgencia" class="col-lg-2 control-label">Tel.Urgencia: </label>

                        <INPUT type="tel" NAME="TelUrgencia" value="<?php echo $Urgencia; ?>" MAXLENGTH="12" onKeyPress="return ValidaNumero(event)" ID="TelUrgencia" class="form-control" placeholder="Ingrese Telefono Urgencia" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Fecha de Nacimiento" class="col-lg-2 control-label" style="margin-top: 10px;">Fecha Nac.: </label>
                        <INPUT TYPE="date" NAME="fechaNac" value="<?php echo date('Y-d-m',strtotime($fNac )); ?>" class="form-control" ID="fechaNacimiento" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="GrupoSanguineo" class="col-lg-2 control-label" style="margin-top: 10px;">Grupo Sanguineo: </label>
                        <select Name="GrpSan" class="form-control" >
                            <?php echo $GSangre = mostrarGSan($sangre); ?>

                        </select>

                    </div>
                    
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Hobbie" class="col-lg-2 control-label">Hobbie: </label>
                        <INPUT type="text" NAME="Hobbie"  ID="Hobbie" value="<?php echo $hobbieAfiliado; ?>" Size=40 class="form-control" placeholder="Ingrese Hobbie" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Ocupacion" class="col-lg-2 control-label">Ocupacion: </label>
                        <INPUT type="text" NAME="Ocupacion"  ID="Ocupacion" Size=40 value="<?php echo $ocupacionAfiliado; ?>" class="form-control" placeholder="Ingrese ocupacion" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="ObraSocial" class="col-lg-2 control-label">Obra Social: </label>
                        <INPUT type="text" NAME="ObraSocial"  ID="ObraSocial" Size=40 value="<?php echo $oSocAfiliado; ?>" class="form-control" placeholder="Ingrese Obra Social" required >
                    </div>

                    <div class="row-md-2" align="center" style="margin-top: 10px;">

                        <input type="submit"  value="Guardar" class="btn btn-default" style="margin-top: 10px;">

                        <input type="button" value="Salir" name="Salir" onclick = "location = '../Vista/AdministrarMedico.php'" class="btn btn-danger" style="margin-top: 10px;"> 

                    </div>
                </div>
            </form>

        </div>

        <div class="panel-footer">
            <footer> @ 2016 Todos los derechos reservados. Tèrminos y condiciones </footer>
        </div>

    </body>
</html>