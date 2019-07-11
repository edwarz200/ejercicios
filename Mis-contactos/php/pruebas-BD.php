<?php
// Pasos para conectarme a una BD MySQL con PHP
// 1)Conectarme al BD, mysql_connect necesita 3 datos:
    //1)Servidor
    //2)Usuario de la BD
    // Ppassword del usuario de la BD
    
// 2)Seleccionar la base de datos con la que vamos a trabajar
$conexion = new mysqli('localhost', 'root', '', 'mis_contactos') or die("<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>");
$conexion->set_charset("utf8");
echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
echo "<h2>Base de datos: 'mis_contactos'</h2>";
// 3)Crear una consulta
// 4)Ejecutar la consulta SQL
$consulta = $conexion->query("SELECT * FROM pais");
// 5)Mostrar el resultado de ejecutar la consulta, dentro de un ciclo y en una variable voy a ingresar la funcion mysql_fetch_array
while($registro = $consulta->fetch_object()){
    echo $registro->id_pais."-".$registro->pais.' <br/>';
}
// 6)Cerrar la conexion a la bd

mysqli_close($conexion);
echo "<h3>Conexión cerrada</h3><hr><br>";

?>