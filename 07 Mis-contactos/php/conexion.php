<?php
function conectarse(){
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "mis_contactos";
    $conectar = new mysqli($servidor, $usuario, $password, $bd);
    $conectar->set_charset("utf8");
    
    return $conectar;
}
 $conexion = conectarse();
?>