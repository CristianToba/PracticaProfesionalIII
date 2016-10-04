
<?php
require_once('../Conexion/Conexion.php');
$sql1="SELECT * FROM PAIS";
$sql2="SELECT MAX(codigoPais) as codigo FROM PAIS";
$sql3="SELECT codigoPais,descripcionPais FROM PAIS";
class Consulta{
 private $objeto = NULL;
   
 
//instancio la calse de conexion y la llamo this para poderla utilizar en este archivo  
public function __construct(){ //ceo un cosnturctor para preparar la consulta
 $this->objeto = new Conexion();
 $this->objeto->conectar();    
}
 
public function ObtenerTodosPaises(){
 $sql = "SELECT * FROM Pais ";
 $result = $this->objeto->ejecutar($sql);
 return $result;
}

public function ObtenerMaxPais($param) {
    $sql = "SELECT MAX(codigoPais) as codigo FROM PAIS";
    $result = $this->objeto->ejecutar($sql);
    return $result;
}
 
function saca_menu_desplegable($sql){ 
 
       //tomamos los datos del archivo conexion.php  
        include("../Conexion/Conexion.php");
        include("../Funciones/Consultas.php"); 
        $link = Conectarse();  
        //se envia la consulta  
      
        $resultado=sqlsrv_query($link,$sql);  
  	echo "<select name='cbmCriterio'>"; 
  	
  	while ($fila=sqlsrv_fetch_array($resultado)){ 
    	
      	echo "<option selected value='$fila[0]'>$fila[1]";	
    	
    	
      	echo "<option value='$fila[0]'>$fila[1]";	
    	 
  } 
  	echo "</select>";	
}
}
?>