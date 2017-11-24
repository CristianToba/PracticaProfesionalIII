
<?php
session_start();

if ($_SESSION['login_user'] == '') {
    header('Location: http://localhost/PracticaProfesionalIII/index.php');
}
include_once("../Funciones/Consultas.php");

$parametroA = $_GET['afiliado'];
$parametroF = $_GET['fecha'];
$parametroE = $_GET['esp'];
$parametroP = $_GET['prof'];
$lista = array();
$lista = BuscarDatosParaTurno($parametroA, $parametroE, $parametroP);


foreach ($lista as $valor) {

    echo "
<head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>

        <!-- bootstrp -->
        <link href='../css/bootstrap.min.css' rel='stylesheet'>
        <script src='../css/bootstrap.min.js'></script>
        <!-- jQuery -->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

        <!-- custom scripts --> 
        <script type='text/javascript' src='js/script.js'></script> 

        <!-- bootstrap -->

        <link  href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' rel='stylesheet' >

        <!-- fullcalendar -->
        <link href='../js/libs/fullcalendar/fullcalendar.css' rel='stylesheet' />
        <script src='../js/libs/fullcalendar/lib/jquery-ui.min.js'></script> 
        <link href='../js/libs/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
        <script src='../js/libs/fullcalendar/lib/moment.min.js'></script>
        <script type='text/javascript' src='../js/libs/fullcalendar/fullcalendar.min.js'></script>
        <script src='fullcalendar.js'></script>
        <!-- jquery -->
        <script src='../css/jquery.min.js'></script>
        <link rel='stylesheet' href='//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
        <script src='https://code.jquery.com/jquery-1.12.4.js'></script>
        <script src='https://code.jquery.com/ui/1.12.1/jquery-ui.js'></script>
        <link rel='stylesheet' href='../css/demo.css'>
        <link rel='stylesheet' href='../css/footer-distributed-with-address-and-phones.css'>
        <script src='../js/libs/jquery/jquery.js' type='text/javascript'></script>

        <!-- funciones -->
        <script src='../Funciones/Validaciones.js'></script>
        <script src='../js/funciones.js' type='text/javascript'></script>

        <!-- moment -->
        <script src='../js/libs/moment.js'></script>

        <!-- style -->
        <link rel='stylesheet' href='/resources/demos/style.css'>

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

        <div class='panel panel-primary'>
            <div class='panel-heading'> <b>Gestion de Turno</b> </div>

            <div class='panel panel-default' align='center' style='overflow-x:auto;'>

                <div class='panel-heading'>
                    <h3>Alta de Turno</h3>
                </div>


                <FORM name ='formulario' METHOD='POST' action = ' ACA LA PAGINA DONDE LO GUARDA ' class='form-horizontal' style='margin:0 ' >
                    <div class='panel-body' >
                        <div class='form-group' >
                            <label class='col-lg-1 control-label' name='nombre'>Afiliado: </label>
                            <div>   
                                <INPUT TYPE ='text' NAME='txtIdAfiliado' class='form-control'  onKeyPress='return ValidaCadena(event)' SIZE='MAXLENGTH=30' ID='txtIdAfiliado'  style='display:none''; disabled value =";
                                       echo $parametroA;  echo ">
                            </div> 
                            <div class='col-lg-4'>                                              
                                <INPUT TYPE ='text' NAME='txtNombreAfiliado' class='form-control'  onKeyPress='return ValidaCadena(event)' SIZE='MAXLENGTH=30' ID='txtNombreAfiliado' disabled value =";
                                       echo $valor['apellidoA'];
                                       echo " > 
                            </div>
                            <div class='col-lg-4'>   
                                <INPUT TYPE ='text' NAME='txtApellidoAfiliado' class='form-control'  onKeyPress='return ValidaCadena(event)' SIZE='MAXLENGTH=30' ID='txtApellidoAfiliado' disabled value =";
                                       echo $valor['nombreA'];
                                       echo ">
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='apellido' class='col-lg-1 control-label'>Profesional: </label>
                            <div class='col-lg-4'>                                    
                                <input type ='text' name='txtProfesional' class='form-control' onKeyPress='return ValidaCadena(event)' size='MAXLENGTH=30' id='profesional' disabled value =";
                                       echo $valor['nombreP'];
                                       echo " > </div>

                            <div class='col-lg-4'>   
                                <INPUT TYPE ='text' NAME='txtApellidoProfesional' class='form-control'  onKeyPress='return ValidaCadena(event)' SIZE='MAXLENGTH=30' ID='txtApellidoProfesional' disabled value =";
                                       echo $valor['apellidoP'];

                                       echo ">
                            </div>  
                            <div class='col-lg-4'>   
                                <INPUT TYPE ='text' NAME='matricula' class='form-control'  onKeyPress='return ValidaCadena(event)' SIZE='MAXLENGTH=30' ID='matricula'  style='display:none''; disabled value =";
                                       echo $parametroP;

                                       echo ">
                            </div> 
                        </div>

                        <div class='form-group'>
                            <label class='col-lg-1 control-label' for='especialidad'>Especialidad: </label>
                            <div class='col-lg-4'>
                                <input type ='text' name='txtEspecialidad' class='form-control' onKeyPress='return ValidaCadena(event)' size='MAXLENGTH=30' id='especialidad' disabled value=";
                                       echo $valor['especialidad'];
                                       echo " >
                            </div>                       
                        </div>

                        <div class='form-group'>
                            <label class='col-lg-1 control-label' for='fecha'>Fecha: </label>
                            <div class='col-lg-4' id='divHoraTurno'>
                                <input type ='text' name='txtFecha' class='form-control' onKeyPress='return ValidaCadena(event)' size='MAXLENGTH=30' id='fecha' disabled value=";
                                       echo $parametroF;
                                       echo " >
                            </div>
                        </div>
                        
                         <div class='form-group'>
                         <label class='col-lg-1 control-label' for='fecha'>Horario: </label>
                            <div class='col-lg-1'  id='divHorario'>
                                 
                                    
                            </div>
                        </div>  
                        
                         <div align='left' style='margin-top: 10px;'>
                            <input type='button' name='MostrarHorariosLibres' id='MostrarHorariosLibres' class='btn btn-default' style='margin-left: 09px;' value='Consultar''>
                         </div>
                         
                         

                    </div>
            </div>
        </div>
    </form>

    <div class='row-md-2' align='center' style='margin-top: 10px;'>

        <input type='button' name='generarTurno' id='generarTurno' class='btn btn-default' style='margin-left: 09px;' value='Generar''>
        <button class='btn btn-danger' style='margin-left: 10px;'><a href='../Vista/AdministrarTurno.php'>Volver Menu</a></button>

    </div>

    <footer class='footer-distributed'>

        <div class='footer-left'>

            <h3> <img src='../Imagenes/reserva_ya.JPG' width='100px'> </h3>

            <p class='footer-links'>
                <a href=''>Home</a>
                ·
                <a href='index.php'>Personal</a>					
                ·
                <a href='#'>About</a>
                ·
                <a href='#'>Faq</a>
                ·
                <a href='#'>Contact</a>
            </p>

            <p class='footer-company-name'>RESERVAYA Todos los derechos reservados. Tèrminos y condiciones @ 2016</p>
        </div>

        <div class='footer-center'>

            <div>
                <i class='fa fa-map-marker'></i>
                <p><span>Sin numero</span> Mendoza, Argentina</p>
            </div>

            <div>
                <i class='fa fa-phone'></i>
                <p>0261-156406854</p>
            </div>

            <div>
                <i class='fa fa-envelope'></i>
                <p><a href='mailto:tobares.cristian@gmail.com'>tobares.cristian@gmail.com</a></p>
            </div>

        </div>

        <div class='footer-right'>

            <p class='footer-company-about'>
                <span>About the company</span>
                Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
            </p>

            <div class='footer-icons'>

                <a href='#'><i class='fa fa-facebook'></i></a>
                <a href='#'><i class='fa fa-twitter'></i></a>
                <a href='#'><i class='fa fa-linkedin'></i></a>
                <a href='#'><i class='fa fa-github'></i></a>

            </div>

        </div>

    </footer>

</body>
</html>
";
};
?>


    