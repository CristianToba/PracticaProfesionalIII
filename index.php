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

        <title>DAMSU</title>
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

            <div class="panel-footer">
                <footer> @ 2016 Todos los derechos reservados. Tèrminos y condiciones </footer>
            </div>

        </div>
    </body>
</html>