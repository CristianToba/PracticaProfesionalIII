<?php
        session_start();
       
        if ($_SESSION['login_user'] == '') {
            header("Location: http://localhost/PracticaProfesionalIII/index.php");
        }
        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!--Cabecera-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="../css/jquery.min.js"></script>
        <script src="../css/bootstrap.min.js"></script>
        
    </head>
    <body>
    <div class="panel panel-primary">
    <div class="panel-heading"> <b>Alta de Provincia</b> </div>
    
    <FORM name ="formulario" METHOD="POST" action = "../GestorPPL/AltaProvincia.php" class="form-inline">
        <div class="panel-body">
            <div class="row-md-1" align="center" style="margin-top: 10px;">
                
                Nombre del Pais: 
                <select Name=txtPais class="form-control">
                  <option value='0' selected>Seleccione una opcion</option>
                  <option value=4>Mendoza</option>
                  <option value=1>San Juan</option>
                  <option value=3>etc</option>
                  
                </select>
                               
                Nombre de Provincia: <input type="text" name="Pais" value="" />       
      
            </div>
     
            <div class="row-md-2" align="center" style="margin-top: 10px;">
                <input type="submit"  value="Guardar" class="btn btn-default" style="margin-top: 10px;">
               
               <input type="button" value="Salir" name="Salir" class="btn btn-danger" style="margin-top: 10px;"> 

            </div>
        </div>
    </form>
      
        
    <div class="panel-footer">
        <footer> @ 2016 Todos los derechos reservados. Tèrminos y condiciones </footer>
    </div>
    </body>
</html>
