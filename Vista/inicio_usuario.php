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
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="../css/jquery.min.js"></script>
        <script src="../css/bootstrap.min.js"></script>
        <script src="../Funciones/Funciones.php"></script>

        <title>DAMSU</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"> <a class="navbar-brand" href="#">DAMSU</a> </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">AFILIADO</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reserva de Turno <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="bg-success"> <a>Turno</a>
                            <li class="divider"></li>
                            <li><a href="../GestorTurno/Solicitar_Turno.html"> Solicitar Turno</a></li>
                            <li><a href="../GestorTurno/Baja_Turno.html"> Baja de Turno</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="divider" ></li>

                            <li><a href="../pdf/ListadoAfiliados.php">Listar Afiliados</a></li>
                            <li><a href="../pdf/ListarHorarios.php">Listar Horarios</a></li>
                            <!--<li><a href="#">Listar Turnos Solicitados</a></li>
                                <li><a href="#">Listar Clinicas</a></li>
                                <li><a href="#">Listar Medicos</a></li>-->

                    </li> 
                    </li>
                </ul>
                <li class="active"><a href="../Funciones/cerrarSession.php">Cerrar Sesion</a></li>

                </ul>

                </ul>    

            </div>
        </nav>

        <div class="container" id="marco">
            <div class="row">
                <div class="col-md-8" id="contenido">
                    <p>
                    </p>


                    <div class="row marginbottom20">
                        <div class="col-md-6">
                            <div class="post post-principal">
                                <p class="post_imagen"><a href="http://www.damsu.uncuyo.edu.ar/los-ojos-en-verano-merecen-un-mayor-cuidado" title="Los ojos en verano merecen un mayor cuidado">
                                        <img src="http://www.damsu.uncuyo.edu.ar/upload/indice.jpg" alt="Los ojos en verano merecen un mayor cuidado" class="img-responsive">
                                    </a></p>
                                <div class="post_textos">
                                    <h5 class="post_subtitulo">
                                        <a href="http://www.damsu.uncuyo.edu.ar/categorias/index/noticias-saludables">
                                            Noticias					</a>
                                    </h5>
                                    <h4 class="post_titulo">
                                        <a href="http://www.damsu.uncuyo.edu.ar/los-ojos-en-verano-merecen-un-mayor-cuidado" title="Los ojos en verano merecen un mayor cuidado">
                                            Los ojos en verano merecen un mayor cuidado		            </a>
                                    </h4>
                                    <h6 class="post_fecha">21 DIC 2016</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post post-principal">
                                <p class="post_imagen"><a href="http://www.damsu.uncuyo.edu.ar/las-claves-para-cuidar-a-las-mascotas-en-las-fiestas" title="Las claves para cuidar a las mascotas en las fiestas">
                                        <img src="http://www.damsu.uncuyo.edu.ar/cache/553e4b4cc2a93324x215_200_360_c.jpg" alt="Las claves para cuidar a las mascotas en las fiestas" class="img-responsive">
                                    </a></p>
                                <div class="post_textos">
                                    <h5 class="post_subtitulo">
                                        <a href="http://www.damsu.uncuyo.edu.ar/categorias/index/noticias-saludables">
                                            Noticias					</a>
                                    </h5>
                                    <h4 class="post_titulo">
                                        <a href="http://www.damsu.uncuyo.edu.ar/las-claves-para-cuidar-a-las-mascotas-en-las-fiestas" title="Las claves para cuidar a las mascotas en las fiestas">
                                            Las claves para cuidar a las mascotas en las fiestas		            </a>
                                    </h4>
                                    <h6 class="post_fecha">19 DIC 2016</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row marginbottom20">
                        <div class="col-md-6">
                            <div class="post post-principal">
                                <p class="post_imagen"><a href="http://www.damsu.uncuyo.edu.ar/efectos-del-aire-acondicionado-sobre-la-salud" title="EFECTOS DEL AIRE ACONDICIONADO SOBRE LA SALUD">
                                        <img src="http://www.damsu.uncuyo.edu.ar/cache/527a402a853af645x429_200_360_c.jpg" alt="EFECTOS DEL AIRE ACONDICIONADO SOBRE LA SALUD" class="img-responsive">
                                    </a></p>
                                <div class="post_textos">
                                    <h5 class="post_subtitulo">
                                        <a href="http://www.damsu.uncuyo.edu.ar/categorias/index/noticias-saludables">
                                            Noticias					</a>
                                    </h5>
                                    <h4 class="post_titulo">
                                        <a href="http://www.damsu.uncuyo.edu.ar/efectos-del-aire-acondicionado-sobre-la-salud" title="EFECTOS DEL AIRE ACONDICIONADO SOBRE LA SALUD">
                                            EFECTOS DEL AIRE ACONDICIONADO SOBRE LA SALUD		            </a>
                                    </h4>
                                    <h6 class="post_fecha">14 DIC 2016</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post post-principal">
                                <p class="post_imagen"><a href="http://www.damsu.uncuyo.edu.ar/el-vih-en-mendoza" title="El VIH en Mendoza">
                                        <img src="http://www.damsu.uncuyo.edu.ar/upload/descarga2.jpg" alt="El VIH en Mendoza" class="img-responsive">
                                    </a></p>
                                <div class="post_textos">
                                    <h5 class="post_subtitulo">
                                        <a href="http://www.damsu.uncuyo.edu.ar/categorias/index/noticias-saludables">
                                            Noticias					</a>
                                    </h5>
                                    <h4 class="post_titulo">
                                        <a href="http://www.damsu.uncuyo.edu.ar/el-vih-en-mendoza" title="El VIH en Mendoza">
                                            El VIH en Mendoza		            </a>
                                    </h4>
                                    <h6 class="post_fecha">05 DIC 2016</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        
        <div class="panel-footer">
            <footer> © 2016 Todos los derechos reservados. Términos y condiciones </footer>
            
        </div>
    </body>
</html>
