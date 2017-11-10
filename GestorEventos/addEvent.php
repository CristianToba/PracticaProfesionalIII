
<?php
session_start();

if ($_SESSION['login_user'] == '') {
    header("Location: http://localhost/PracticaProfesionalIII/index.php");
}

?>

<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <!-- bootstrp -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../css/bootstrap.min.js"></script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <!-- custom scripts --> 
        <script type="text/javascript" src="js/script.js"></script> 

        <!-- bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" >

        <!-- fullcalendar -->
        <link href="../js/libs/fullcalendar/fullcalendar.css" rel="stylesheet" />
        <script src="../js/libs/fullcalendar/lib/jquery-ui.min.js"></script> 
        <link href="../js/libs/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />
        <script src="../js/libs/fullcalendar/lib/moment.min.js"></script>
        <script type="text/javascript" src="../js/libs/fullcalendar/fullcalendar.min.js"> </script>
        <script src="fullcalendar.js"></script>
        <!-- jquery -->
        <script src="../css/jquery.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="../css/demo.css">
        <link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
        <script src="../js/libs/jquery/jquery.js" type="text/javascript"></script>

        <!-- funciones -->
        <script src="../Funciones/Validaciones.js"></script>
        <script src="../js/funciones.js" type="text/javascript"></script>

        <!-- moment -->
        <script src="../js/libs/moment.js"></script>

        <!-- style -->
        <link rel="stylesheet" href="/resources/demos/style.css">

        <!-- fullcalendar -->
        <link rel='stylesheet' href='../js/libs/fullcalendar/fullcalendar.css' />    
        <script src='../js/libs/fullcalendar/fullcalendar.js'></script>
        <script src='../js/libs/fullcalendar/locale-all.js'></script>

        <!-- scheduler -->
        <link href='.scheduler.css' rel='stylesheet' />

        <!-- script-->
        <script src='moment.js'></script>
        <script src='jquery.js'></script>   
        <script src='fullcalendar.js'></script>
        <script src='scheduler.js'></script>


    </head>
    <body>

        <div class="panel panel-primary">
            <div class="panel-heading"> <b>Gestion de Turno</b> </div>

            <form class="form-inline" accept-charset="UTF-8">
                <div class="panel-body">

                    <div class="panel panel-default" align="center" style="overflow-x:auto;">

                        <div class="panel-heading">
                            <h3>Alta de Turno</h3>
                        </div>

                        
                        <div align="left" style="margin-top: 10px;">
                            <div id="altaturno" style="margin-top: 10px;">
                                <h4>: </h4>
                                <select id="cmbEspecialidad"></select>

                            </div >
                            <div id="divprofesional" style="margin-top: 10px;">
                                <h4>Profesional: </h4>
                                <select id="cmbProfesional"></select>

                            </div>

                            <div align="left" style="margin-top: 10px;">
                                <input type="button" name="btnMostrarTurnosLibres" id="MostrarTurnosLibres" class="btn btn-default" style="margin-left: 09px;" value="Aceptar ">
                            </div>
                        </div>
                        <div class="panel-heading" style="margin-top: 10px;">
                            <h4>
                                Fechas y Horarios Disponibles
                            </h4>
                        </div>
                        <div id="divAgenda"></div>
                        <!--
                                                <table id="tbAgenda" class="table" table class="table table-fixed" style="font-size: 11">
                                                    <thead>
                                                        <tr>
                                                            <th hidden=''> idAgenda </th>
                                                            <th>Descripcion</th>
                                                            <th>Horario Turno</th>
                                                            <th>Fecha Turno</th>                                    
                                                            <th hidden=''>DNI Afiliado</th>
                                                            <th hidden=''>Nombre Afiliado</th>
                                                            <th hidden="">Apellido Afiliado</th>
                                                            <th>Estado</th>
                                                            <th>Seleccionar</th>
                        
                                                        </tr>
                        
                                                    </thead>
                        
                                                    <tbody id="tbcuerpoTurno"></tbody>
                        
                                                </table>
                        -->


                    </div>

                </div>
        </div>
    </div>
</form>

<div class="row-md-2" align="center" style="margin-top: 10px;">

    <button class="btn btn-default" style="margin-left: 10px;"><a href="../Funciones/ValidarOpcion.php?parametro=0">Agregar</a></button>
    <button class="btn btn-danger" style="margin-left: 10px;"><a href="Inicio_usuario.php">Volver Menu</a></button>


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

