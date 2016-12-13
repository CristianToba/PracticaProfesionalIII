
<?php

require_once('../Conexion/Conexion.php');

/*
 class Consulta {
 

    private $objeto=NULL;

//instancio la calse de conexion y la llamo this para poderla utilizar en este archivo  
    public function __construct() { //ceo un cosnturctor para preparar la consulta
        $this->objeto = new Conexion();
        $this->objeto->Conectarse();
    }
    
    public function ListarPaises() {
    /*
     //tomamos los datos del archivo conexion.php  
     include("../Conexion/Conexion.php");
     include("../Funciones/Consultas.php");
     //$link = new Consulta();
     //$link->ObtenerTodosPaises();
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
     
     $sql = "SELECT * FROM Pais";
     $serverName = "(local)";
     $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
     $conn = sqlsrv_connect($serverName, $connectionInfo);
     $stmt = sqlsrv_query($conn, $sql);
     
     if ($stmt === false) {
     die(print_r(sqlsrv_errors(), true));
     }
     
     while ($row = sqlsrv_fetch_array($stmt)) {
     //echo $row['codigoPais'] . ", " . $row['descripcion'] . "<br />";
     
     echo "<tr>";
     echo "<td hidden=''>$row[0]</td>";
     echo "<td>$row[1]</td>";
     echo "<td><a href='../Funciones/ValidarOpcion.php?parametro=2'><span class='glyphicon glyphicon-trash'></span></td>
     <td><a href='../Funciones/ValidarOpcion.php?parametro=1&idPais=$row[0]'><span class='glyphicon glyphicon-pencil'></span></a></td>
     <td><span>Consultar</span></td>";
     echo "</tr>";
     }
     
     echo "</tbody>";
     echo "</table>";
     ?>  
     
    require_once('../Conexion/Conexion.php');
    $sql = "SELECT * FROM Pais";
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $stmt = sqlsrv_query($conn, $sql);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    while ($row = sqlsrv_fetch_array($stmt)) {
       
        echo "<tr>"; 
        echo "<td>"+$row[0]+"</td>"; 
        echo "<td>"+$row[1]+"</td>";
        echo "</tr>";
        
        
    }
    
}

    public function ObtenerTodosPaises() {
        
        $sql = "SELECT * FROM Pais";
        $serverName = "(local)";
        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        $stmt = sqlsrv_query($conn, $sql);
        sqlsrv_close($conn);
        return $stmt;
        
    }

    public function ObtenerMaxPais() {
        $sql = "SELECT MAX(codigoPais) as codigo FROM PAIS";
        //$result = $this->objeto->ejecutar($sql);
        $serverName = "(local)";
        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        $res_Consulta = sqlsrv_query($conn, $sql);
        $row = sqlsrv_fetch_array($res_Consulta);
        $MaximoCodigo = $row["codigo"];
        $MaximoCodigo++;
        sqlsrv_close($conn);
        return $MaximoCodigo;
    }

    function saca_menu_desplegable($sql) {

        //tomamos los datos del archivo conexion.php  
        include("../Conexion/Conexion.php");
        include("../Funciones/Consultas.php");
        $link = Conectarse();
        //se envia la consulta  

        $resultado = sqlsrv_query($link, $sql);
        echo "<select name='cbmCriterio'>";

        while ($fila = sqlsrv_fetch_array($resultado)) {

            echo "<option selected value='$fila[0]'>$fila[1]";


            echo "<option value='$fila[0]'>$fila[1]";
        }
        echo "</select>";
        sqlsrv_close($conn);
    }
    
    function EliminarPais($param) {
        $sql="";
        $serverName = "(local)";
        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        $stmt = sqlsrv_query($conn, $sql);
    }

}*/

    
    function ListarPaises() {
    
    require_once('../Conexion/Conexion.php');
    $sql = "SELECT * FROM Pais";
    $serverName = "(local)";
    $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $stmt = sqlsrv_query($conn, $sql);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    while ($row = sqlsrv_fetch_array($stmt)) {
       
        echo "<tr>"; 
        echo "<td>"+$row[0]+"</td>"; 
        echo "<td>"+$row[1]+"</td>";
        echo "</tr>";
        
        
    }
    
}

     function ObtenerTodosPaises() {
        
        $sql = "SELECT * FROM Pais";
        $serverName = "(local)";
        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        $stmt = sqlsrv_query($conn, $sql);
        sqlsrv_close($conn);
        return $stmt;
        
    }

     function ObtenerMaxPais() {
        $sql = "SELECT MAX(codigoPais) as codigo FROM PAIS";
        //$result = $this->objeto->ejecutar($sql);
        $serverName = "(local)";
        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        $res_Consulta = sqlsrv_query($conn, $sql);
        $row = sqlsrv_fetch_array($res_Consulta);
        $MaximoCodigo = $row["codigo"];
        $MaximoCodigo++;
        sqlsrv_close($conn);
        return $MaximoCodigo;
    }

    function saca_menu_desplegable($sql) {

        //tomamos los datos del archivo conexion.php  
        include("../Conexion/Conexion.php");
        include("../Funciones/Consultas.php");
        $link = Conectarse();
        //se envia la consulta  

        $resultado = sqlsrv_query($link, $sql);
        echo "<select name='cbmCriterio'>";

        while ($fila = sqlsrv_fetch_array($resultado)) {

            echo "<option selected value='$fila[0]'>$fila[1]";


            echo "<option value='$fila[0]'>$fila[1]";
        }
        echo "</select>";
        sqlsrv_close($conn);
    }
    
    function EliminarPais($param) {
        $sql="";
        $serverName = "(local)";
        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        $stmt = sqlsrv_query($conn, $sql);
    }


?>