<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación de Datos con PHP</title>
    <script>
    function validarDatosGET() {
        var verificar = true;
        if (!document.valida_datos_get_frm.nombre_txt.value) {
            alert("El nombre es requerido");
            document.valida_datos_get_frm.nombre_txt.focus();
            verificar = false;
        } else if (!document.valida_datos_get_frm.password_txt.value) {
            alert("La contraseña es requerida");
            document.valida_datos_get_frm.password_txt.focus();
            verificar = false;
        } else if (!document.valida_datos_get_frm.sexo_rdo[0].checked && !document.valida_datos_get_frm.sexo_rdo[1]
            .checked) {
            alert("El campo sexo es requerido");
            document.valida_datos_get_frm.sexo_rdo[0].focus();
            verificar = false;
        }

        if (verificar) {
            document.valida_datos_get_frm.submit();
        }
    }

    function validarDatosPOST() {
        var verificar = true;
        if (!document.valida_datos_post_frm.nombre_txt.value) {
            alert("El nombre es requerido");
            document.valida_datos_post_frm.nombre_txt.focus();
            verificar = false;
        } else if (!document.valida_datos_post_frm.password_txt.value) {
            alert("La contraseña es requerida");
            document.valida_datos_post_frm.password_txt.focus();
            verificar = false;
        } else if (!document.valida_datos_post_frm.sexo_rdo[0].checked && !document.valida_datos_post_frm.sexo_rdo[1]
            .checked) {
            alert("El campo sexo es requerido");
            document.valida_datos_post_frm.sexo_rdo[0].focus();
            verificar = false;
        }

        if (verificar) {
            document.valida_datos_post_frm.submit();
        }
    }
    window.onload = function() {
        document.getElementById("enviar-get").onclick = validarDatosGET;
        document.getElementById("enviar-post").onclick = validarDatosPOST;
    }
    </script>
</head>

<body>
    <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    if ($_GET["error"]=="si") {
        echo "<span style='color:#F00;font-size:2em;'>Verifica tus datos</span>";
    }
?>
    <hgroup>
        <h1>Formulario de datos GET</h1>
    </hgroup>
    <form name="valida_datos_get_frm" action="validar-datos.php" method="get"
        enctype="application/x-www-form-urlencode">
        <label>Ingresa un nombre:</label>
        <input type="text" name="nombre_txt" require>
        <br><br>
        <label>Ingresa tu contraseña:</label>
        <br><br>
        <input type="password" name="password_txt">
        <br><br>
        <input type="radio" name="sexo_rdo" value="M"><label>Masculino</label>
        <input type="radio" name="sexo_rdo" value="F"><label>Femenino</label>
        <br><br>
        <input type="hidden" name="enviar_hdn" value="get">
        <input type="button" name="enviar_btn" value="Enviar por GET" id="enviar-get">
    </form>

    <hgroup>
        <h1>Formulario de datos POST</h1>
    </hgroup>
    <form name="valida_datos_post_frm" action="validar-datos.php" method="post"
        enctype="application/x-www-form-urlencode">
        <label>Ingresa un nombre:</label>
        <input type="text" name="nombre_txt" require>
        <br><br>
        <label>Ingresa tu contraseña:</label>
        <br><br>
        <input type="password" name="password_txt">
        <br><br>
        <input type="radio" name="sexo_rdo" value="M"><label>Masculino</label>
        <input type="radio" name="sexo_rdo" value="F"><label>Femenino</label>
        <br><br>
        <input type="hidden" name="enviar_hdn" value="post">
        <input type="button" name="enviar_btn" value="Enviar por POST" id="enviar-post">
    </form>
    <a href="http://localhost/ejercicio01/">Volver</a>
</body>

</html>