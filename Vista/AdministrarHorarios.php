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
        <script src="../Funciones/Funciones.php"></script>
        
    </head>
    <body>

        <div class="panel panel-primary">
            <div class="panel-heading"> <b>Administrar Horarios</b> </div>

            <FORM name ="formulario" class="form-inline" accept-charset="UTF-8">
                <div class="panel-body">
                    <div class="row-md-1" align="center" style="margin-top: 10px;">

                        <button class="btn btn-default" style="margin-left: 10px;"><a href="../Funciones/ValidarOpcion.php?parametro=3">Agregar</a></button>

                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="panel panel-default" align="center" style="margin-top: 10px;">
                                <div class="panel-heading">
                                    <h4>
                                        Horarios 
                                    </h4>
                                </div>
                                <div class="col-sm-12">
                                    <table class="table table-fixed" style="font-size: 14">
                                        <?php
                                        require_once('../Conexion/Conexion.php');
                                        $sql = "SELECT * FROM Horarios";
                                        $serverName = "(local)";
                                        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
                                        $conn = sqlsrv_connect($serverName, $connectionInfo);
                                        $stmt = sqlsrv_query($conn, $sql);
                                        echo "<thead>";
                                        echo "<tr>";
                                        echo "<th hidden=''> id </th>";
                                        echo "<th>Descripcion</th>";
                                        echo "<th>Fecha Inicio</th>";
                                        echo "<th>Fecha Fin</th>";
                                        echo "<th>Habilitado</th>";
                                        echo "<th>Eliminar</th>";
                                        echo "<th>Modificar</th>";
                                        echo "</tr>";
                                        echo "</thead>";
                                        echo "<tbody>";
                                        if ($stmt === false) {
                                            die(print_r(sqlsrv_errors(), true));
                                        }
                                        while ($row = sqlsrv_fetch_array($stmt)) {

                                            echo "<tr>";
                                            echo "<td hidden=''>$row[0]</td>";
                                            echo "<td>$row[7]</td>";
                                            $horai=date_format($row[1], 'H:i ');
                                            echo "<td>$horai</td>";
                                            $horaf=date_format($row[2], 'H:i ');
                                            echo "<td>$horaf</td>";
                                            if ($row[5]==0) {
                                                $hab='No';
                                            }  else {
                                                $hab='Si';
                                            }
                                            echo "<td>$hab</td>";                                          

                                            echo "<td><a href='../Funciones/ValidarOpcion.php?parametro=4&codHorario=$row[0]&txtDescripcion=$row[7]'><span class='glyphicon glyphicon-trash'></span>
                                                </td>
     <td><a href='../Funciones/ValidarOpcion.php?parametro=5&codHorario=$row[0]&txtDescripcion=$row[7]&estadoHorario=$row[5]'><span class='glyphicon glyphicon-pencil'></span></a></td>";
                                            echo "</tr>";


                                            echo "</tbody>";
                                        }
                                        ?>
                                    </table>

                                </div>
                            </div>

                        </div>

                        <div class="row-md-2" align="center" style="margin-top: 10px;">

                            <input type="button" onclick = "location = 'Inicio_Administrador.php'" value="Salir" name="Salir"  class="btn btn-danger" style="margin-top: 10px;"> 

                        </div>
                    </div>
            </form>


            <div class="panel-footer">
                <footer> @ 2016 Todos los derechos reservados. Tèrminos y condiciones </footer>
            </div>
    </body>
</html>

