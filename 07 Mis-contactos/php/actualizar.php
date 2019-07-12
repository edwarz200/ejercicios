<?php
// UPDATE nombre_tela SET nombre_campo = valor_campo, otro_campo = otro_valor WHERE campo = valor
$conexion = new mysqli('localhost', 'root', '', 'mis_contactos') or die("<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>");
$conexion->set_charset("utf8");
$email = $_POST['email_slt'];
$emailm = $_POST['email_txt'];
$nombre = $_POST['nombre_txt'];
$sexo = $_POST['sexo_txt'];
$nacimiento = $_POST['nacimiento_txt'];
$telefono = $_POST['telefono_txt'];
$pais = $_POST['pais_slt'];
$imagen = $_POST['imagen_txt'];
$sql = "UPDATE contactos SET email = '$emailm', nombre = '$nombre', sexo = '$sexo', nacimiento = '$telefono', pais = '$pais' WHERE email = '$email' ";
if ($conexion->query($sql) === TRUE) {
    $respuesta = "Se han Modificado los datos en la Base de Datos =)";
    header('Location: operaciones_basicas_bd.php?respuesta1='.$respuesta); 
} else {
    $respuesta= "\"Error:". $conexion->error."\"";
    header('Location: operaciones_basicas_bd.php?respuesta2='.$respuesta); 
    }
?>