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
        <link rel="stylesheet" href="../css/demo.css">
        <link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">




    </head>
    <body>

        <div class="panel panel-primary">
            <div class="panel-heading"> <b>Administrar Afiliado</b> </div>

            <form class="form-inline" accept-charset="UTF-8">
                <div class="panel-body">

                    <div class="panel panel-default" align="center" style="overflow-x:auto;">
                        <div class="panel-heading" >
                            <h4>
                                Afiliados 
                            </h4>
                        </div>

                        <div id="divAfiliado"> </div>


                        <table id="tbAfiliado" class="table" table class="table table-fixed" style="font-size: 11">

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

                            <tbody id="tbcuerpoAfiliado"></tbody>

                        </table>


                    </div>

                </div>
            </form>
            <div class="row-md-1" align="center" style="margin-top: 10px;">


                <button class="btn btn-default" style="margin-left: 10px;"><a href="../Funciones/ValidarOpcion.php?parametro=6">Agregar Afiliado</a></button>

                <button class="btn btn-danger" style="margin-left: 10px;"><a href="Inicio_Administrador.php">Volver Menu</a></button>
            </div>


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
        </div>

    </body>
</html>


<!--
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
-->

