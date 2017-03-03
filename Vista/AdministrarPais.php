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
        <link rel="stylesheet" href="../css/demo.css">
        <link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">

    </head>
    <body>

        <div class="panel panel-primary">
            <div class="panel-heading"> <b>Administrar Pais</b> </div>

            <FORM name ="formulario" class="form-inline" accept-charset="UTF-8">
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="panel panel-default" align="center" style="margin-top: 10px;">
                                <div class="panel-heading">
                                    <h4>
                                        Paises 
                                    </h4>
                                </div>
                                <div id="divPais"></div>
                                
                                    <table id="tbPais" class="table" table class="table table-fixed" style="font-size: 11">
                                        <thead>
                                            <tr>
                                                <th hidden=''> id </th>
                                                <th>Descripcion</th>
                                                <th>Habilitado</th>
                                                <th>Eliminar</th>
                                                <th>Modificar</th>
                                            </tr>

                                        </thead>

                                        <tbody id="tbcuerpoPais"></tbody>
                                        
                                    </table>

                                
                            </div>

                        </div>
                    </div>
                </div>
            </form>

            <div class="row-md-2" align="center" style="margin-top: 10px;">

                <button class="btn btn-default" style="margin-left: 10px;"><a href="../Funciones/ValidarOpcion.php?parametro=0">Agregar</a></button>
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


