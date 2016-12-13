<?php
$parametro = $_GET['parametro'];
$paisModificar = $_GET['codPais'];
$nombrePaisModificar = $_GET['txtPais'];

if ($parametro == 0) {
               
        print("<script>window.location.replace('../Vista/AltaPais.html');</script>");
    }
    //Modificar Registro    
    if ($parametro == 1) {
               
        print("<script>window.location.replace('../Vista/ModificarPais.php?codigoPais=$paisModificar&txtPais=$nombrePaisModificar');</script>");
    }
    //Eliminar un registro
    if ($parametro == 2) {
        include("../Funciones/Consultas.php");
        $eliminar= new Consulta();
        $eliminar->EliminarPais($paisEliminar);
    }
    
    ?>
