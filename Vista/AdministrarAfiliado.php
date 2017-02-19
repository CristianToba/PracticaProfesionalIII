<?php
session_start();

if ($_SESSION['login_user'] == '') {
    header("Location: http://localhost/PracticaProfesionalIII/index.php");
}
?>


<html>

    <head>
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
            <div class="panel-heading"> <b>Administrar Afiliado</b> </div>

            <FORM class="form-inline" accept-charset="UTF-8">
                <div class="panel-body">
                    <div class="row-md-1" align="center" style="margin-top: 10px;">

                        <button class="btn btn-default" style="margin-left: 10px;"><a href="../Funciones/ValidarOpcion.php?parametro=6">Agregar</a></button>

                    </div>
                    
                            <div class="panel panel-default" align="center" style="overflow-x:auto;">
                                <div class="panel-heading" >
                                    <h4>
                                        Afiliados 
                                    </h4>
                                </div>
                                

                                    <table id="tablaAfiliado" class="table" table class="table table-fixed" style="font-size: 11" >
                                       
                                        <!--

                                        <?php
                                        require_once('../Conexion/Conexion.php');
                                        $sql = "SELECT * FROM Persona";
                                        $serverName = "(local)";
                                        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
                                        $conn = sqlsrv_connect($serverName, $connectionInfo);
                                        $stmt = sqlsrv_query($conn, $sql);

                                        echo "<thead>";
                                        echo "<tr>";
                                        echo "<th>Afiliado</th>";
                                        echo "<th>DNI</th>";
                                        echo "<th>Nombre</th>";
                                        echo "<th>Apellido</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Fecha Nac.</th>";
                                        echo "<th>Nacionalidad</th>";
                                        echo "<th>Est. Civil</th>";
                                        echo "<th>Direccion</th>";
                                        echo "<th>Tel.Urgencia</th>";
                                        echo "<th>Celular</th>";
                                        echo "<th>O.Social</th>";
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
                                            echo "<td>$row[0]</td>";
                                            echo "<td>$row[1]</td>";
                                            echo "<td>$row[2]</td>";
                                            echo "<td>$row[3]</td>";
                                            echo "<td>$row[4]</td>";
                                            $fNac = date_format($row[5], 'd-m-Y');
                                            echo "<td>$fNac</td>";
                                            echo "<td>$row[7]</td>";
                                            echo "<td>$row[8]</td>";
                                            include_once ("../Funciones/Consultas.php");
                                            $direccion = ObtenerDireccion($row[9]);
                                            echo "<td>$direccion</td>";
                                            echo "<td>$row[26]</td>";
                                            echo "<td>$row[27]</td>";
                                            echo "<td>$row[28]</td>";
                                            if ($row[13] == 0) {
                                                $hab = 'No';
                                            } else {
                                                $hab = 'Si';
                                            }
                                            echo "<td>$hab</td>";
                                            echo "<td><a href='../Funciones/ValidarOpcion.php?parametro=7&dniAfiliado=$row[1]'><span class='glyphicon glyphicon-trash'></span>
                                                </td>
     <td><a href='../Funciones/ValidarOpcion.php?parametro=8&dniAfiliado=$row[1]'><span class='glyphicon glyphicon-pencil'></span></a></td>";
                                            echo "</tr>";


                                            echo "</tbody>";
                                        }
                                        ?>
                                       -->
                                       
                                        <thead>
                                            
                                                <th>Afiliado</th>
                                                <th>DNI</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Email</th>
                                                <th>Fecha Nac.</th>
                                                <th>Nacionalidad</th>
                                                <th>Est. Civil</th>
                                                <th>Direccion</th>
                                                <th>Tel.Urgencia</th>
                                                <th>Celular</th>
                                                <th>O.Social</th>
                                                <th>Habilitado</th>
                                                <th>Eliminar</th>
                                                <th>Modificar</th>

                                           
                                        </thead>
                                        <tbody id="cuerpoTabla"></tbody>

                                    </table>
                                    

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
