<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="css/jquery.min.js"></script>
        <script src="css/bootstrap.min.js"></script>
        <script src="js/libs/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/demo.css">
        <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <title>RESERVA YA</title>
    </head>
    
    <body>
        
            <nav class="navbar navbar-default navbar-inverse" role="navigation">


                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><p class="navbar-text">ReserveYa!!</p></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Informacion <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a target="_blank" href="pdf/ListarHorarios.php">Horarios</a></li>
                                <li><a target="_blank" href="pdf/ListadoProfesionales.php">Profesionales</a></li>
                                <li><a target="_blank" href="pdf/ListadoEspecialidades.php">Especialidades</a></li>
                            </ul>
                        </li>
                        
                                <li><a  href="GestorPersona/Alta_Afiliado.php">Date de Alta</a></li>
                                
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="col-md-14">
                                        <div  class="col-md-12">

                                            <form class="form" role="form" method="post" accept-charset="UTF-8" id="formulario" action = "Funciones/Validausuario.php">
                                                <div class="row-md-1" align="center" style="margin-bottom: 12px;">
                                                    <input TYPE ="text" NAME="txtUsuario" size="20" class="form-control" id="txtnombre" placeholder="Usuario" required>
                                                </div>
                                                <div class="row-md-1" align="center" style="margin-bottom: 10px;">
                                                    <input type ="password" name="txtclave" class="form-control" size="30" id="apellido" placeholder="Contraseña" required >
                                                </div>
                                                <div class="row-md-1" align="center" style="margin-top: 10px;">
                                                    <input type="submit" value="Ingresar" class="btn btn-default" style="margin-top: 10px;">
                                                    <input type="reset" value="Salir"  class="btn btn-danger" style="margin-top: 10px;">
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3> <img src="Imagenes/reserva_ya.JPG" width="100px"> </h3>

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
