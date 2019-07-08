<?php
    if (isset($_GET["enviar_btn"])) {
        echo("<h1>Metodo: GET</h1><br/><p>El nombre es: ".$_GET['nombre_txt']."</p><br/><p> La contraseña es ".$_GET['password_txt']."</p>");
    }else if(isset($_POST["enviar_btn"])){
        echo("<h1>Metodo: POST</h1><br/><p>El nombre es: ".$_POST['nombre_txt']."</p><br/><p> La contraseña es ".$_POST['password_txt']."</p>");
    }
?>
    <a href="http://localhost/ejercicio01/">Volver</a>