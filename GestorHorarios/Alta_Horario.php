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

        <div class="panel panel-primary">
            <div class="panel-heading"> <b>Alta Horario</b> </div>
            
            <FORM name ="formulario" METHOD="POST" action = "../GestorHorarios/AltModHorario.php?valor=0" class="form-inline">
                <div class="panel-body">
                    <div class="row-md-1" align="center" style="margin-top: 10px;">

                        Nombre del Horario: <input TYPE ="text" NAME="txtHorario" class="form-control"  onKeyPress="return ValidaCadena(event)" ID="DH" placeholder="Ingresar Nombre Horario" required>    
                        Horario Inicio: <input TYPE ="time" NAME="HorarioInicio" class="form-control"   ID="HI" placeholder="Ingresar Horario Inicio" required>    
                        Horario Fin: <input TYPE ="time" NAME="HorarioFin" class="form-control"  ID="HF" placeholder="Ingresar Horario Fin" required>    

                    </div>

                    <div class="row-md-2" align="center" style="margin-top: 10px;">
                       
                        <input type="submit"  value="Guardar" class="btn btn-default" style="margin-top: 10px;">

                        <input type="button" value="Salir" onclick = "location = '../Vista/AdministrarHorarios.php'" name="Salir" class="btn btn-danger" style="margin-top: 10px;"> 

                    </div>
                </div>
            </form>

        </div>
        <div class="panel-footer">
            <footer> @ 2016 Todos los derechos reservados. Tèrminos y condiciones </footer>
        </div>
    </body>
</html>
