<?php

setcookie('usuario', $_POST['txtUsuario'], time() + 604800);
session_start();
?>
    
<?php
    $user=($_POST["txtUsuario"]);
    $pass=($_POST["txtclave"]);
 
try {
        include("../Conexion/Conexion.php"); 
        include("../Funciones/Consultas.php"); 
        $conn=  Conectarse();
        
	## Consulta para verificar el usuario que se desea loguear
	$sql_Consulta="SELECT * FROM persona WHERE dni='$user' and clave='$pass'";
        $res_Consulta=sqlsrv_query($conn,$sql_Consulta);
        
        
        
	## recorremos todos los registros
	while($row=sqlsrv_fetch_array($res_Consulta)) {
                
        if ($row['dni']==$_POST['txtUsuario'] && $row['clave']==$_POST['txtclave']) { 
                
                $tipo=$row['tipo'];
                ## Consulta permisos del usuario que se loguea
                $sql_TipoEmpl="SELECT * FROM TipoEmpl WHERE idTipo='$tipo'";
                $res_TipoEmpl=sqlsrv_query($conn,$sql_TipoEmpl);
                
                while($row=sqlsrv_fetch_array($res_TipoEmpl)) {
                
                ##Verifico el tipo de permisos del empleado
                if($row['permAdm']==0 and $row['idTipo']==1){
                $usr=$_POST['txtUsuario'];
                $_SESSION['txtUsuario']= $usr; 
                $tipo=$row['tipo'];
                
                ##Si el tipo de permisos no es administrador le dirige a la pagina correspondiente para un usuario comun
                header('Location: /PracticaProfesionalIII/Vista/inicio_usuario.html');
                
                }
                
                if($row['permAdm']==0 and $row['idTipo']==2){
                $usr=$_POST['txtUsuario'];
                $_SESSION['txtUsuario']= $usr; 
                $tipo=$row['tipo'];
                
                ##Si el tipo de permisos no es administrador le dirige a la pagina correspondiente para un usuario comun
                header('Location: /PracticaProfesionalIII/Vista/inicio_Medico.html');
                
                }
                
                if($row['permAdm']==1 and $row['idTipo']==3){
                    $usr=$_POST['txtUsuario'];
                    $_SESSION['txtUsuario']= $usr; 
                ##Si el tipo de permisos es administrador le dirige a la pagina correspondiente para un administrador
                    header('Location: /PracticaProfesionalIII/Vista/inicio_administrador.html');
                }
                
                if($row['permAdm']==0 and $row['idTipo']==4){
                $usr=$_POST['txtUsuario'];
                $_SESSION['txtUsuario']= $usr; 
                $tipo=$row['tipo'];
                
                ##Si el tipo de permisos no es administrador le dirige a la pagina correspondiente para un usuario comun
                header('Location: /PracticaProfesionalIII/Vista/inicio_Empleado.html');
                
                }
                
            }
        }else {echo "Datos incorrectos, por favor intente nuevamente";}   
    }
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
?>
