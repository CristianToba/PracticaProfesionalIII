
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
        include_once("../Funciones/Consultas.php");
        $CodHorario = $_GET['codigoHorario'];
        $DescHorario = $_GET['DescHorario'];
        $estadoHorario = $_GET['estado'];
        ?>
        <div class="panel panel-primary">
            <div class="panel-heading"> <b>Modificar Pais</b> </div>
            <FORM name ="formulario" method="POST" action = "../GestorHorarios/AltModHorario.php?valor=1" class="form-inline">
                <div class="panel-body">
                    
                        <div>
                            <label for="CodHorario">Codigo de Horario: </label> <input NAME="codigoHorario" class="form-control"  ID="CodPais" value="<?php echo $CodHorario ?>" readonly="true"></p> 
                        </div>
                        <div>
                            <label for="NombreHorario" > Nombre del Horario: </label> <input TYPE ="text" NAME="descripcionHorario" class="form-control"  onKeyPress="return ValidaCadena(event)" ID="Pais" value="<?php echo $DescHorario ?>"></p>     
                        </div>

                        <div>
                            <label for="habilitado" >Estado: </label>

                            <?php echo mostrarHab($estadoHorario); ?>


                        </div>

                        <div class="row-md-2" align="center" style="margin-top: 10px;">

                            <input type="submit"  value="Guardar" class="btn btn-default" style="margin-top: 10px;">

                            <input type="button" value="Salir" name="Salir" onclick = "location = '../Vista/AdministrarPais.php'" class="btn btn-danger" style="margin-top: 10px;"> 

                        </div>
                    </div>
            </form>

        </div>

        <div class="panel-footer">
            <footer> @ 2016 Todos los derechos reservados. Tèrminos y condiciones </footer>
        </div>

    </body>
</html>
