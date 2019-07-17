<?php
    // include("conexion.php");
    $consulta = "SELECT * FROM contactos ORDER BY email";
    $ejecutar_consulta = $conexion->query($consulta);
    while($registro = $ejecutar_consulta->fetch_object()){
        $dato = $registro->email;
        echo "<option value='$registro->email'";
           if ($_GET["contacto_slc"]==$registro->email) {
               echo " selected";
           } 
        echo ">$registro->email</option>";
        // echo ">$registro->email<h1> - $registro->nombre - $registro->sexo - $registro->nacimiento - $registro->telefono - $registro->pais </h1></option><br/>";
    }
    // $conexion->close();
?>