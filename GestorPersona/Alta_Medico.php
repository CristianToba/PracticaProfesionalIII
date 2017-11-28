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

        <title>ALTA MEDICO</title>
    </head>

    <body text=#000000  link=#000000  vlink=#FF0000>
        <div class="panel panel-primary">
            <div class="panel-heading"> <b>DATOS PERSONALES</b> </div>
            <FORM name ="formulario" METHOD="POST" action = "../GestorPersona/AltModPersona.php?parametroAccion=0&parametroTipo=2" class="form-inline" >
                <div class="panel-body" >
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="nombre" class="col-lg-2 control-label">Nombre: </label>
                        <INPUT TYPE ="text" NAME="txtNombre" class="form-control"  onKeyPress="return ValidaCadena(event)" SIZE="MAXLENGTH=30" ID="nombre" placeholder="Ingrese su nombre" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="apellido" class="col-lg-2 control-label">Apellido: </label>
                        <input type ="text" name="txtApellido" class="form-control" onKeyPress="return ValidaCadena(event)" size="MAXLENGTH=30" id="apellido" placeholder="Ingrese su apellido" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="clave" class="col-lg-2 control-label">Password: </label>
                        <input type ="text" name="txtClave" class="form-control"  size="MAXLENGTH=30" id="clave" placeholder="Ingrese su clave" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Matricula" class="col-lg-2 control-label">Matricula: </label>
                        <INPUT type="text" NAME="NroMat" MAXLENGTH="5" onKeyPress="return ValidaNumero(event)" ID="nrocalle" class="form-control" placeholder="Ingrese Nro Matricula" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="habilitado" class="col-lg-2 control-label">Estado:</label>
                        <input checked name="habilitado" type="radio" value='true'>
                        Habilitado
                        <input name="habilitado" type="radio" value="false">
                        Deshabilitado<br>
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Tipo" class="col-lg-2 control-label" >Tipo/Nro: </label>
                        <select Name=TipoDoc class="form-control">
                            <option value='Ninguno' selected>Seleccione una opcion</option>
                            <option value='C.I.'>C.I.</option>
                            <option value='D.N.I.'>D.N.I.</option>
                            <option value='L.C.'>L.C.</option>
                            <option value='L.E.'>L.E.</option>
                            <option value='Pasaporte'>Pasaporte</option>
                        </select>
                        <INPUT TYPE="text" NAME="NroDoc" MAXLENGTH="8" onKeyPress="return ValidaNumero(event)" SIZE=12 ID="nrodni" class="form-control" placeholder="Ingrese Nro DNI" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Direccion" class="col-lg-2 control-label">Direccion: </label>
                        <INPUT type="text" NAME="txtDireccion"  ID="direccion" Size=40 class="form-control" placeholder="Ingrese direccion" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Numero" class="col-lg-2 control-label">Numero: </label>
                        <INPUT type="text" NAME="NroDir" MAXLENGTH="5" onKeyPress="return ValidaNumero(event)" ID="nrocalle" class="form-control" placeholder="Ingrese Nro Dir." required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="dpto" class="col-lg-2 control-label">Dpto: </label>
                        <INPUT type="text" NAME="dpto" MAXLENGTH="6" onKeyPress="return ValidaNumero(event)" ID="dpto" class="form-control" placeholder="Ingrese Nro dpto." required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Piso" class="col-lg-2 control-label">Piso: </label>
                        <INPUT type="text" NAME="Piso" MAXLENGTH="3" onKeyPress="return ValidaNumero(event)" ID="nroPiso" class="form-control" placeholder="Ingrese Piso" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Codigo Postal" class="col-lg-2 control-label">C.P.: </label>
                        <INPUT type="text" NAME="CodigoPostal" MAXLENGTH="4" onKeyPress="return ValidaNumero(event)" ID="Codigo Postal" class="form-control" placeholder="Ingrese C.Postal" required >
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
                        <input checked name="sexo" type="radio" value="Masculino">
                        Masculino
                        <input name="sexo" type="radio" value="Femenino">
                        Femenino<br>
                    </div>

                    <div id="divlocalidad" class="col-md-6" style="margin-top: 10px;">
                        <label for="Localidad" class="col-lg-2 control-label">Localidad: </label>
                        <select name="Localidad" id="cmbLocalidad"></select>

                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Email" class="col-lg-2 control-label">Email: </label>
                        <INPUT type="email" NAME="email" Size=40 ONBLUR=" validarEmail(correo);" ID="email" class="form-control" placeholder="Ingrese email" required>
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="CantHijos" class="col-lg-2 control-label">Cantidad Hijos: </label>
                        <INPUT type="text" NAME="CantHijo" MAXLENGTH="5" onKeyPress="return ValidaNumero(event)" ID="CantHijo" class="form-control" placeholder="Ingrese Cant. Hijos" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Estado Civil" class="col-lg-2 control-label" style="margin-top: 10px;">Estado Civil: </label>
                        <select Name="EdoCivil" class="form-control" >
                            <option value='Ninguno' selected>Seleccione una opcion</option>
                            <option value='Soltero'>Soltero/a</option>
                            <option value='Separado/a'>Separado/a</option>
                            <option value='Casado/a'>Casado/a</option>
                            <option value='Viudo/a'>Viudo/a</option>
                        </select>
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Fecha de Nacimiento" class="col-lg-2 control-label" style="margin-top: 10px;">Fecha Nac.: </label>
                        <INPUT TYPE="date" NAME="fechaNac" class="form-control" ID="fechaNacimiento" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="GrupoSanguineo" style="margin-top: 10px;">Grupo Sanguineo: </label>
                        <select Name="GrpSan" class="form-control" >
                            <option value='Ninguno' selected>Seleccione una opcion</option>
                            <option value='O+'>O+</option>
                            <option value='O-'>O-</option>
                            <option value='A-'>A-</option>
                            <option value='A+'>A+</option>
                            <option value='B-'>B-</option>
                            <option value='B+'>B+</option>
                            <option value='AB-'>AB-</option>
                            <option value='AB+'>AB+</option>
                        </select>
                    </div>


                    <div id="divespecialidad" style="margin-top: 10px;">
                        <label for="especialidad" class="col-lg-1.5 control-label">Especialidad: </label>
                        <select name=" especialidad" id="cmbEspecialidad"></select>

                    </div >

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="TelFijo" class="col-lg-2 control-label">Tel.Fijo: </label>
                        <INPUT type="tel" NAME="CodAreaFijo" MAXLENGTH="5" size="5" onKeyPress="return ValidaNumero(event)" ID="CodAreaFijo" class="form-control" placeholder="Cod.Area" required >
                        -
                        <INPUT type="tel" NAME="TelFijo" MAXLENGTH="7" onKeyPress="return ValidaNumero(event)" ID="TelFijo" class="form-control" placeholder="Ingrese Telefono Fijo" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="TelCel" class="col-lg-2 control-label">Celular: </label>
                        <INPUT type="tel" NAME="CodAreaMovil" MAXLENGTH="5" size="5" onKeyPress="return ValidaNumero(event)" ID="CodAreaMovil" class="form-control" placeholder="Cod.Area" required >
                        -
                        <INPUT type="tel" NAME="TelMovil" MAXLENGTH="9" onKeyPress="return ValidaNumero(event)" ID="TelMovil" class="form-control" placeholder="Ingrese Telefono Celular" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="TelUrgencia">Tel.Urgencia: </label>
                        <INPUT type="tel" NAME="CodAreaUrg" MAXLENGTH="5" size="5" onKeyPress="return ValidaNumero(event)" ID="CodAreaUrg" class="form-control" placeholder="Cod.Area" required >
                        -
                        <INPUT type="tel" NAME="TelUrgencia" MAXLENGTH="7" onKeyPress="return ValidaNumero(event)" ID="TelUrgencia" class="form-control" placeholder="Ingrese Telefono Urgencia" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Religion" class="col-lg-2 control-label">Religion: </label>
                        <INPUT type="text" NAME="Religion"  ID="Religion" Size=40 class="form-control" placeholder="Ingrese religion" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Hobbie" class="col-lg-2 control-label">Hobbie: </label>
                        <INPUT type="text" NAME="Hobbie"  ID="Hobbie" Size=40 class="form-control" placeholder="Ingrese Hobbie" required >
                    </div>

                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="Ocupacion" class="col-lg-2 control-label">Ocupacion: </label>
                        <INPUT type="text" NAME="Ocupacion"  ID="Ocupacion" Size=40 class="form-control" placeholder="Ingrese ocupacion" required >
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <label for="ObraSocial" class="col-lg-2 control-label">Obra Social: </label>
                        <INPUT type="text" NAME="ObraSocial"  ID="ObraSocial" Size=40 class="form-control" placeholder="Ingrese Obra Social" required >
                    </div>
                    <div class="col-md-10" style="margin-top: 10px;">
                        <input type="submit" class="btn btn-default" style="margin-top: 10px;">
                        <input type="reset" value="Borrar" class="btn btn-danger" style="margin-top: 10px;">
                        <input type="button" value="Salir" onclick = "location = '../Vista/AdministrarMedico.php'" name="Salir" class="btn btn-danger" style="margin-top: 10px;"> 
                    </div>
            </FORM>
        </div>
    </div>
    <div class="panel-footer">
        <footer> @2016 Todos los derechos reservados. Tèrminos y condiciones </footer>
    </div>
</body>
</html>