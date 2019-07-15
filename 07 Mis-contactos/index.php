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
    case 'altaimg':
        $contenido = "php/alta_contactos.php";
        include("php/archivo.php");
        $titulo = "Alta de Contactos";
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f462888101.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    !window.jQuery && document.write("<script src='Js/jquery.min.js'><\/script>")
    </script>
    <script src="Js/mis-contactos.js"></script>
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
            <?php $mensaje= $_GET['mensaje']; echo"<span>$mensaje</span>";?>
        </section>
    </section>
</body>

</html>