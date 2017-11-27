<?php
session_start();

if ($_SESSION['login_user'] == '') {
    header("Location: http://localhost/PracticaProfesionalIII/index.php");
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <!-- bootstrp -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../css/bootstrap.min.js"></script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <!-- custom scripts --> 
        <script type="text/javascript" src="js/script.js"></script> 

        <!-- bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" >

        <!-- fullcalendar -->
        <link href="../js/libs/fullcalendar/fullcalendar.css" rel="stylesheet" />
        <script src="../js/libs/fullcalendar/lib/jquery-ui.min.js"></script> 
        <link href="../js/libs/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />
        <script src="../js/libs/fullcalendar/lib/moment.min.js"></script>
        <script type="text/javascript" src="../js/libs/fullcalendar/fullcalendar.min.js"></script>
        <script src="fullcalendar.js"></script>
        <!-- jquery -->
        <script src="../css/jquery.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="../css/demo.css">
        <link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
        <script src="../js/libs/jquery/jquery.js" type="text/javascript"></script>

        <!-- funciones -->
        <script src="../Funciones/Validaciones.js"></script>
        <script src="../js/funciones.js" type="text/javascript"></script>

        <!-- moment -->
        <script src="../js/libs/moment.js"></script>

    </head>
    <body>
        <?php
        $nroDoc = $_GET['dniPersona'];
        include_once("../Funciones/Consultas.php");
        //$afiliado = ObtenerPersona($nroDoc);
        require_once('../Conexion/Conexion.php');
        $sql = "SELECT CONVERT(VARCHAR(2), DAY(A.fechaNac)) + '/' + CONVERT(VARCHAR(2), MONTH(A.fechaNac)) + '/' + CONVERT(VARCHAR(4), YEAR(A.fechaNac)) AS fechaNac, * FROM PERSONA AS A INNER JOIN DIRECCION AS B ON A.IDPERSDIREC=B.IDDIRECCION INNER JOIN LOCALIDAD AS C ON B.IDLOCALIDAD=C.CODIGOlOCALIDAD INNER JOIN PROVINCIA AS D ON C.idProvincia=D.codigoProvincia where dni='$nroDoc' ";
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
            $departamento = $row[34];
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
            $religionAfiliado = $row[18];
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
                        <label for="dpto" class="col-lg-2 control-label">Dpto: </label>
                        <INPUT type="text" NAME="dpto" MAXLENGTH="5" value="<?php echo $departamento; ?>" onKeyPress="return ValidaNumero(event)" ID="dpto" class="form-control" placeholder="Ingrese Nro dpto." required >
                    </div>

                    <div id="divnacionalidad" class="col-md-6" style="margin-top: 10px;">
                        <label for="Nacionalidad" class="col-lg-2 control-label">Pais: </label>
                        <select name="Nacionalidad" id="cmbNacionalidad"></select>

                    </div>

                    <div id="divprovincia" class="col-md-6" style="margin-top: 10px;">
                        <label for="Provincia" class="col-lg-2 control-label">Provincia: </label>
                        <select name="Provincia" id="cmbProvincia"></select>
                        

                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="sexo" class="col-lg-2 control-label">Sexo:</label>
                        <?php echo mostrarSexo($sexo); ?>
                    </div>


                    <div id="divlocalidad" class="col-md-6" style="margin-top: 10px;">
                        <label for="Localidad" class="col-lg-2 control-label">Localidad: </label>
                        <select name="Localidad" id="cmbLocalidad"></select>

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
                        <INPUT TYPE="date" NAME="fechaNac" value="<?php echo date('Y-d-m', strtotime($fNac)); ?>" class="form-control" ID="fechaNacimiento" required >
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
                        <label for="Religion" class="col-lg-2 control-label">Religion: </label>
                        <INPUT type="text" NAME="Religion"  ID="Religion" value= "<?php echo $religionAfiliado; ?>" Size=40 class="form-control" placeholder="Ingrese religion" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Ocupacion" class="col-lg-2 control-label">Ocupacion: </label>
                        <INPUT type="text" NAME="Ocupacion"  ID="Ocupacion" Size=40 value="<?php echo $ocupacionAfiliado; ?>" class="form-control" placeholder="Ingrese ocupacion" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="ObraSocial" class="col-lg-2 control-label">Obra Social: </label>
                        <INPUT type="text" NAME="ObraSocial"  ID="ObraSocial" Size=40 value="<?php echo $oSocAfiliado; ?>" class="form-control" placeholder="Ingrese Obra Social" required >
                    </div>
                </div>

                <div class="row-md-2" align="center" style="margin-top: 10px;">

                    <input type="submit"  value="Guardar" class="btn btn-default" style="margin-top: 10px;">

                    <input type="button" value="Salir" name="Salir" onclick = "location = '../Vista/AdministrarAfiliado.php'" class="btn btn-danger" style="margin-top: 10px;"> 

                </div>
        </div>
    </form>



    <footer class="footer-distributed">

        <div class="footer-left">

            <h3> <img src="../Imagenes/reserva_ya.JPG" width="100px"> </h3>

            <p class="footer-links">
                <a href="">Home</a>
                ·
                <a href="index.php">Personal</a>					
                ·
                <a href="#">About</a>
                ·
                <a href="#">Faq</a>
                ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">RESERVAYA Todos los derechos reservados. Tèrminos y condiciones @ 2016</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Sin numero</span> Mendoza, Argentina</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>0261-156406854</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:tobares.cristian@gmail.com">tobares.cristian@gmail.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer>
</body>
</html>