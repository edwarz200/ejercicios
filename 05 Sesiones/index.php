<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones con PHP</title>
    <style>
        form{
            margin: 0 auto;
            text-align: center;
            width: 400px;
        }
        span{
            color: #f00;
            font-size: 2em;
        }
    </style>
</head>

<body>
    <form name="autentificacion_frm" action="control.php" method="post" enctype="application/x-www-form-urlencoded">
        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            if ($_GET["error"]== "si") {
                echo "<span>Verifica tus datos</span>";
            }else{
                echo "<h1>Introduce tus Datos</h1>";
            }
        ?>
        <br><br>
        Usuario: <input type="text" name="usuario_txt">
        <br><br>
        Password: <input type="password" name="password_txt">
        <br><br>
        <input type="submit" name="entrar_btn" value="Entrar">
    </form>

    <a href="http://localhost/ejercicio01/" title="Volver a http://localhost/ejercicio01/"
        style="position: fixed; bottom: 0; text-decoration: none; color: white; background-color: black; padding:5px 20px; border-radius: 3px;"
        ;><i class="fas fa-chevron-left"></i></a>
</body>

</html>