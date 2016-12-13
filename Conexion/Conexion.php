<?php

//Conecta con la base de datos
class Conexion {

    function Conectarse() {
        $serverName = "(local)";
        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        if (!($link = $conn)) {
            echo "Error conectando a la base de datos.";
            die(print_r(sqlsrv_errors(), true));
        }
        if (($link = $conn)) {

            $link = $conn;
        }
        return $link;
    }

// consultar la base de datos se utiliza odbc
    function ejecutar($query) {

        $serverName = "(local)";
        $connectionInfo = array("Database" => "DAMSU", "UID" => "DAMSU", "PWD" => "DAMSU");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        $stmt = sqlsrv_query($conn, $query);

        return $stmt;
    }

// cierra una conexion 
    function cerrarConexion($conexion) {
        sqlsrv_close($conexion);
    }

}
?>

