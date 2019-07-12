<?php
error_reporting(E_ALL ^ E_NOTICE);
$op = $_GET["op"];
switch ($op) {
    case 'alta':
        $contenido = "php/alta_contactos.php";
        $titulo = "Alta de Contactos";
        break;
    case 'baja':
        $contenido = "php/baja_contactos.php";
        $titulo = "Baja de Contactos";
        break;
    case 'cambios':
        $contenido = "php/cambios_contacto.php";
        $titulo = "Cambios a Contactos";
        break;
    case 'consultas':
        $contenido = "php/consultas_contactos.php";
        $titulo = "Consultas a Contactos";
        break;
    
    default:
        $contenido = "php/home.php";
        $titulo = "Mis Contactos v1";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $titulo; ?> </title>
    <link rel="stylesheet" href="css/mis_contactos.css">
    <script src="js/mis-contactos"></script>
</head>

<body>
    <section id="contenido">
        <nav>
            <ul>
                <li><a class="cambio" href="index.php">Home</a></li>
                <li><a class="cambio" href="?op=alta">Alta de Contacto</a></li>
                <li><a class="cambio" href="?op=baja">Baja de Contacto</a></li>
                <li><a class="cambio" href="?op=cambios">Cambios de Contacto</a></li>
                <li><a class="cambio" href="?op=consultas">Consultas de Contacto</a></li>
            </ul>
        </nav>
        <section id="principal">
            <?php include($contenido);?>
        </section>
    </section>
</body>

</html>