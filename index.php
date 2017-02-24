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

        <title>RESERVA YA</title>
    </head>
    <body>
        <div class="panel-primary" >
            <div class="panel-heading"> <b>Ingreso al Sistema</b> </div>

            <FORM name ="formulario" METHOD="POST" action = "Funciones/Validausuario.php" class="form-inline">
                <div class="panel-body">

                    <div class="row-md-1" align="center" style="margin-top: 10px;">
                        <label for="usuario" class="row-lg-2 control-label">Usuario: </label>
                        <INPUT TYPE ="text" NAME="txtUsuario" size="20"  class="form-control" id="txtnombre" placeholder="Ingrese su usuario" required>

                    </div>
                    <div class="row-md-1" align="center" style="margin-top: 10px;">
                        <label for="clave" class="row-lg-2 control-label" >Clave:</label>
                        <input type ="password" name="txtclave" class="form-control" size="30" id="apellido" placeholder="Ingrese su clave" required >
                    </div>

                    <div class="row-md-1" align="center" style="margin-top: 10px;">
                        <input type="submit" class="btn btn-default" style="margin-top: 10px;">
                        <input type="reset" value="Cancelar"  class="btn btn-danger" style="margin-top: 10px;">
                    </div>
                </div>

            </FORM>

            <!--<div class="panel-footer">
                <footer> @ 2016 Todos los derechos reservados. Tèrminos y condiciones </footer>
            </div>
            -->
            
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
        </div>
    </body>
</html>
