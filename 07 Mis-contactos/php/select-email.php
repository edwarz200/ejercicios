<?php
    include("conexion.php");
    $consulta = "SELECT * FROM contactos ORDER BY email";
    $ejecutar_consulta = $conexion->query($consulta);
    while($registro = $ejecutar_consulta->fetch_object()){
        $dato = $registro->email;
        echo "<option value=\"".$registro->email."\">".$registro->email."<h1> - ".$registro->nombre." - ".$registro->sexo." - ".$registro->nacimiento." - ".$registro->telefono." - ".$registro->pais."</h1></option><br/>";
    }
    include("cerrar_conexion.php");
?>