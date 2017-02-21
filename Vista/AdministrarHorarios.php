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
        <script src="../js/funciones.js" type="text/javascript"></script>    
        <script src="../js/libs/jquery/jquery.js" type="text/javascript"></script>
        <script src="../Funciones/Validaciones.js"></script>
        <script src="../Funciones/Funciones.php"></script>
        <script src="../js/funciones.js" type="text/javascript"></script>

    </head>
    <body>

        <div class="panel panel-primary">
            <div class="panel-heading"> <b>Administrar Horarios</b> </div>

            <FORM name ="formulario" class="form-inline" accept-charset="UTF-8">
                <div class="panel-body">

                    <div class="container">
                        <div class="row">
                            <div class="panel panel-default" align="center" style="margin-top: 10px;">
                                <div class="panel-heading">
                                    <h4>
                                        Panel de Horarios 
                                    </h4>
                                </div>
                                <div id="divHorario"></div>

                                 <table id="tbHorario" class="table" table class="table table-fixed" style="font-size: 11">
                                    
                                    <thead>
                                        <tr>
                                            <th hidden=''> id </th>
                                            <th>Descripcion</th>
                                            <th>Hora Inicio</th>
                                            <th>Hora Fin</th>
                                            <th>Habilitado</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>
                                        </tr>

                                    </thead>

                                    <tbody id="tbcuerpoHorario"></tbody>

                                </table>


                            </div>

                        </div>

                        <div class="row-md-2" align="center" style="margin-top: 10px;">

                            <button class="btn btn-default" style="margin-left: 10px;"><a href="../Funciones/ValidarOpcion.php?parametro=3">Agregar Horario</a></button>

                            <button class="btn btn-danger" style="margin-left: 10px;"><a href="Inicio_Administrador.php">Volver Menu</a></button>

                        </div>
                    </div>
            </form>


            <div class="panel-footer">
                <footer> @ 2016 Todos los derechos reservados. Tèrminos y condiciones </footer>
            </div>
    </body>
</html>

