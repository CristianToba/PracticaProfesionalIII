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
            <div class="panel-heading"> <b>Administrar Pais</b> </div>

            <FORM name ="formulario" class="form-inline" accept-charset="UTF-8">
                <div class="panel-body">
                    <div class="row-md-1" align="center" style="margin-top: 10px;">

                        <button class="btn btn-default" style="margin-left: 10px;"><a href="../Funciones/ValidarOpcion.php?parametro=0">Agregar</a></button>

                        
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="panel panel-default" align="center" style="margin-top: 10px;">
                                <div class="panel-heading">
                                    <h4>
                                        Paises 
                                    </h4>
                                </div>
                                <div class="col-sm-12" >
                                    <table id="tablaPais" table class="table table-fixed" >
                                        <?php
                                        require_once('../Conexion/Conexion.php');
                                        $sql = "SELECT * FROM Pais ORDER BY DESCRIPCIONPAIS ASC";
                                        $serverName = "(local)";
                                        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
                                        $conn = sqlsrv_connect($serverName, $connectionInfo);
                                        $stmt = sqlsrv_query($conn, $sql);
                                        echo "<thead>";
                                        echo "<tr>";
                                        echo "<th hidden=''> id </th>";
                                        echo "<th>Descripcion</th>";
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

                                            echo "<td>$row[1]</td>";
                                            if ($row[4]==0) {
                                                $hab='No';
                                            }  else {
                                                $hab='Si';
                                            }
                                            echo "<td>$hab</td>";  
                                            echo "<td><a href='../Funciones/ValidarOpcion.php?parametro=2&codPais=$row[0]&txtPais=$row[1]'><span class='glyphicon glyphicon-trash'></span>
                                                </td>
     <td><a href='../Funciones/ValidarOpcion.php?parametro=1&codPais=$row[0]&txtPais=$row[1]&estadoPais=$row[4]'><span class='glyphicon glyphicon-pencil'></span></a></td>";
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
