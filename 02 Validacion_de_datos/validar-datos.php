<?php
    $nombre="123";
    $password="123";
    if (isset($_GET["enviar_hdn"])) {
        if ($nombre == $_GET["nombre_txt"] && $password == $_GET["password_txt"]) {
            echo "El nombre que ingresaste por GET es: ".$_GET["nombre_txt"].".<br> El password que ingresaste por GET es: ".$_GET["password_txt"].". <br> El sexo que seleccionaste por GET es: ".$_GET["sexo_rdo"].".";
    }else {
        header("Location: formulario.php?error=si");
    }
    }
    if (isset($_POST["enviar_hdn"])) {
        if ($nombre == $_POST["nombre_txt"] && $password == $_POST["password_txt"]) {
            echo "El nombre que ingresaste por POST es: ".$_POST["nombre_txt"].".<br> El password que ingresaste por POST es: ".$_POST["password_txt"].". <br> El sexo que seleccionaste por POST es: ".$_POST["sexo_rdo"].".";
    }else {
        header("Location: formulario.php?error=si");
    }
    }
?>
<a href="http://localhost/ejercicio01/">Volver</a>