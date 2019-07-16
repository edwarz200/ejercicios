<?php
// DELETE FROM nombre_tabla WHERE campo= valor
// $consulta = "SELECT * FROM contactos WHERE email = '$email'";
// while($registro = $ejecutar_consulta->fetch_object($consulta)){
    //     echo "<br><br>".$registro->email." - ".$registro->nombre." - ".$registro->sexo." - ".$registro->nacimiento." - ".$registro->telefono." - ".$registro->pais." - ".$registro->imagen."<br/>";
// }
    include("conexion.php");
    $email = $_POST['email_slc'];
    $consulta = "DELETE FROM contactos WHERE email = '$email'";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se han eliminado los datos del contacto <b>$email</b> :(";
    } else {
        $mensaje= "No se pudo eliminta el contacto con el email <b>$email</b> :/ debido al siguiente error :". $conexion->error."";
    }
    header("Location: ../index.php?op=baja&mensaje=$mensaje");  
    include("conexion-cerrar.php");
?>