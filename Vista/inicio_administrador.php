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
        <link rel="stylesheet" href="../css/demo.css">
        <link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


        <title>RESERVA YA</title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header"></div>
                <ul class="nav navbar-nav">
                    <li class="active"><a>ADMINISTRADOR</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administracion Personal<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="bg-info"> <a>Administrador</a>
                            <li><a href="../Vista/AdministrarAfiliado.php"> Administrar Afiliado</a></li>

                            <li class="divider"></li>
                            <li class="bg-info"> <a>Medicos</a>
                            <li><a href="../Vista/AdministrarMedico.php"> Administrar Medico</a></li>
                            <li class="divider" ></li>
                            <li class="bg-info"> <a>Empleados</a>
                            <li><a href="#"> Administrar Empleados</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="bg-info"> <a>Listados</a>
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
                        
                        <li class="bg-info"><a href="#">Horarios</a></li>
                        <li><a href="../Vista/AdministrarHorarios.php"> Administracion Horarios</a></li>
                        <li class="divider"></li>
                        <li class="bg-info"><a href="#">Pais</a></li>
                        <li><a href="../Vista/AdministrarPais.php"> Administracion Pais</a></li>
                    </ul>
                <li class="active"><a href="../Funciones/cerrarSession.php">Cerrar Sesion</a></li>

            </div>
        </nav>

        <div class="content">
           
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
    </body>
</html>
