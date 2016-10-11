
<html>
    <head>
        <!--Cabecera-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../css/jquery.min.js"></script>
        <script src="../css/bootstrap.min.js"></script>
        <script src="../Funciones/Validaciones.js"></script>
        <script src="../Funciones/Funciones.php"></script>
        
    </head>
    <body>
   
    <div class="panel panel-primary">
    <div class="panel-heading"> <b>Administrar Pais</b> </div>
    
    <FORM name ="formulario" METHOD="POST" action = "../GestorPPL/AltaModPais.php" class="form-inline" accept-charset="UTF-8">
        <div class="panel-body">
            <div class="row-md-1" align="center" style="margin-top: 10px;">
                
                <button class="btn btn-default" style="margin-left: 10px;"><a href="../Vista/AltaPais.html">Agregar</a></button>
                
                <b style="margin-left: 15px;">Criterio</b>
                
              
                <button class="btn btn-default" style="margin-left: 10px;"><a href="#"></a>
                    <span></span> Buscar
                </button>
               
            </div>
                       
            <div class="container">
                <div class="row">
                    <div class="panel panel-default" align="center" style="margin-top: 10px;">
                <div class="panel-heading">
                    <h4>
                      Paises 
                    </h4>
                </div>
                        
                <?php  

                    //tomamos los datos del archivo conexion.php  
                    include("../Conexion/Conexion.php");
                    include("../Funciones/Consultas.php"); 
                    $link = Conectarse();  
                    //se envia la consulta  
                    $sql_Consulta=$sql1;
                    $res_Consulta=sqlsrv_query($link,$sql_Consulta);  
                    //se despliega el resultado  
                    echo "<table class='table table-fixed'>";  
                    echo "<thead>";  
                    echo "<tr>";  
                    echo "<th hidden=''> id </th>";  
                    echo "<th>Descripcion</th>";  
                    echo "<th>Eliminar</th>";  
                    echo "<th>Modificar</th>";  
                    echo "<th>Ver</th>";  
                    echo "</tr>";
                    echo "</thead>";  
                    echo "<tbody>";
                    while ($row = sqlsrv_fetch_array($res_Consulta)){ 
                        
                        echo "<tr>";  
                        echo "<td hidden=''>$row[0]</td>";  
                        echo "<td>$row[1]</td>";  
                        echo "<td><span class='glyphicon glyphicon-trash'></span></td>
                        <td><a href='../Vista/ModificarPais.html'><span class='glyphicon glyphicon-pencil'></span></a></td>
                        <td><span>Consultar</span></td>"; 
                        echo "</tr>";  
                    }
                    echo "</tbody>";
                    echo "</table>";  
                   
?>  
                </div>
            </div>
                
            </div>
            
            <div class="row-md-2" align="center" style="margin-top: 10px;">
               
               <input type="button" value="Salir" name="Salir" class="btn btn-danger" style="margin-top: 10px;"> 

            </div>
        </div>
    </form>
      
        
    <div class="panel-footer">
        <footer> @ 2016 Todos los derechos reservados. Tèrminos y condiciones </footer>
    </div>
    </body>
</html>
