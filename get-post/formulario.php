<!DOCTYPE html>
<html lang="es">
<head>
    <title>Env&iacute;o de datos por GET Y POST</title>
    <meta charset="utf-8">
</head>
<body>
    <hgroup><h1>Formulario enviado por el m&eacute;todo Get</h1></hgroup>
    <form name="enviar-get_frm" action="envia-datos.php" method="get" enctype="application/x-www-form-urlencoded">
        <label>Ingresa tu nombre</label>
        <input type="text" name="nombre_txt"/>
        <br/> <br/>
        <label>Ingresa tu contraseña</label>
        <input type="password" name="password_txt"/>
        <br/><br/>
        <input type="submit" name="enviar_btn" value="Enviar_GET">
    </form>
    <hgroup><h1>Formulario enviado por el m&eacute;todo POST</h1></hgroup>
    <form name="enviar-post_frm" action="envia-datos.php" method="post" enctype="application/x-www-form-urlencoded">
        <label>Ingresa tu nombre</label>
        <input type="text" name="nombre_txt"/>
        <br/> <br/>
        <label>Ingresa tu contraseña</label>
        <input type="password" name="password_txt"/>
        <br/><br/>
        <input type="submit" name="enviar_btn" value="Enviar_post">
    </form>

    <a href="http://localhost/ejercicio01/">Volver</a>
</body>
</html>