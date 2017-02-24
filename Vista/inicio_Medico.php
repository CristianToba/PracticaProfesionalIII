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
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-theme.min.css" rel="stylesheet">
<script src="../css/jquery.min.js"></script>
<script src="../css/bootstrap.min.js"></script>
<title>RESERVA YA</title>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header"> <a class="navbar-brand" href="#">RESERVA YA</a> </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">MEDICO</a></li>
      
      
  </div>
</nav>
<div class="panel-footer">
  <footer> © 2016 Todos los derechos reservados. Términos y condiciones </footer>
</div>
</body>
</html>
