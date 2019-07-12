<?php
$conexion = new mysqli('localhost', 'root', '', 'mis_contactos') or die("<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>");
$conexion->set_charset("utf8");
// DELETE FROM nombre_tabla WHERE campo= valor
    $email = $_POST['email_slt'];
    $consulta = $conexion->query("SELECT * FROM contactos WHERE email = '$email'");
    while($registro = $consulta->fetch_object()){
        echo "<br><br>".$registro->email." - ".$registro->nombre." - ".$registro->sexo." - ".$registro->nacimiento." - ".$registro->telefono." - ".$registro->pais." - ".$registro->imagen."<br/>";
    }
    $sql = "DELETE FROM contactos WHERE email = '$email'";
    if ($conexion->query($sql) === TRUE) {
        $respuesta = "Se han eliminado los datos =)";
        header("Location: operaciones_basicas_bd.php?respuesta1=$respuesta");  
    } else {
        $respuesta= "\"Error:". $sql . "<br>". $conexion->error."\"";
        header("Location: operaciones_basicas_bd.php?respuesta2=$respuesta"); 
    }
?>