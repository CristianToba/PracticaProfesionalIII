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
        <script src="../Funciones/Funciones.php"></script>
        <script src="../Conexion/Conexion.php"></script>
        <script src="../Funciones/Validaciones.js"></script>



        <title>DAMSU</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"> <a class="navbar-brand" href="#">DAMSU</a> </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">ADMINISTRADOR</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administracion Personal<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="bg-success"> <a>Afiliados</a>
                            <li><a href="../Vista/AdministrarAfiliado.php"> Administrar Afiliado</a></li>

                            <li class="divider"></li>
                            <li class="bg-success"> <a>Medicos</a>
                            <li><a href="#"> Administrar Medico</a></li>
                            <li class="divider" ></li>
                            <li class="bg-success"> <a>Empleados</a>
                            <li><a href="#"> Administrar Empleados</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="divider" ></li>

                            <li><a href="../pdf/ListadoAfiliados.php">Listar Afiliados</a></li>
                            <li><a href="../pdf/ListarHorarios.php">Listar Horarios</a></li>
                            <!--<li><a href="#">Listar Turnos</a></li>
                            <li><a href="#">Listar Clinicas</a></li>
                            <li><a href="#">Listar Empleados</a></li>
                            <li><a href="#">Listar Medicos</a></li>-->
                    </li>
                </ul>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Parametros<span class="caret"></span></a>

                    <!--
                    <li class="dropdown">
                    <li class="bg-success"><a href="#">Turnos</a></li>
                    <li><a href="#"> Administracion Turno</a></li>
                    <li class="divider"></li>
                    <li class="bg-success"><a href="#">Clinicas</a></li>
                    <li class="divider" ></li>
                    <li><a href="#"> Alta Clinicas</a></li>
                    <li><a href="#"> Modificacion Clinicas</a></li>
                    <li><a href="#"> Baja Clinicas</a></li>
                    
                    
                    <li class="divider"></li>
                    <li class="bg-success"><a href="#">Clinica</a></li>
                    <li><a href="#"> Administrar Clinica</a></li>
                    -->
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li class="bg-success"><a href="#">Horarios</a></li>
                        <li><a href="../Vista/AdministrarHorarios.php"> Administracion Horarios</a></li>
                        <li class="divider"></li>
                        <li class="bg-success"><a href="#">Pais</a></li>
                        <li><a href="../Vista/AdministrarPais.php"> Administracion Pais</a></li>
                    </ul>
                <li class="active"><a href="../Funciones/cerrarSession.php">Cerrar Sesion</a></li>

            </div>
        </nav>

        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
        <div class="panel-footer">
            <footer> © 2016 Todos los derechos reservados. Términos y condiciones </footer>
        </div>
    </body>
</html>
