
<?php
        session_start();
       
        if ($_SESSION['login_user'] == '') {
            header("Location: http://localhost/PracticaProfesionalIII/index.php");
        }
        ?>
        <!DOCTYPE html>
<html>
<head>
<!--Cabecera-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<script src="css/jquery.min.js"></script>
<script src="css/bootstrap.min.js"></script>
<title>RESERVA YA</title>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header"> <a class="navbar-brand" href="#">DAMSU</a> </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">EMPLEADO</a></li>
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reserva de Turno <span class="caret"></span></a>
      <ul class="dropdown-menu">
                <li class="bg-success"> <a>Turno</a>
                <li class="divider"></li>
                <li><a href="GestorTurno/Solicitar_Turno.html"> Solicitar Turno</a></li>
                <li><a href="GestorTurno/Baja_Turno.html"> Baja de Turno</a></li>
      </ul>
      </li>
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informes<span class="caret"></span></a>
            <ul class="dropdown-menu">
                            <li class="divider" ></li>
                                <li><a href="#">Listar Clinicas</a></li>
                                <li><a href="#">Listar Medicos</a></li>
                                <li><a href="#">Listar Horarios</a></li>
                                <li><a href="#">Listar Turnos Solicitados</a></li>
                                
                        </li> 
                  </li>
             </ul>
      
      
             </ul>
      
      </ul>    
      
  </div>
</nav>
<div class="panel-footer">
  <footer> © 2016 Todos los derechos reservados. Términos y condiciones </footer>
</div>
</body>
</html>
