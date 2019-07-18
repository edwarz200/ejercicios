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
    <!-- <script src="Js/load.js"></script> -->
    <script src="https://kit.fontawesome.com/f462888101.js" async="async"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" async="async"></script>
    <script>
    !window.jQuery && document.write("<script src='Js/jquery.min.js'><\/script>")
    </script>
    <script src="Js/mis-contactos.js" async="async"></script>
</head>

<body>
    <section id="contenido">
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link cambio text-warning <?php if(!$_GET['op']){ echo "active";}?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cambio text-warning <?php if($_GET['op']=="alta"){ echo "active";}?>" href="?op=alta">Agregar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cambio text-warning <?php if($_GET['op']=="baja"){ echo "active";}?>" href="?op=baja">Eliminar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cambio text-warning <?php if($_GET['op']=="cambios"){ echo "active";}?>" href="?op=cambios">Modificar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cambio text-warning <?php if($_GET['op']=="consultas"){ echo "active";}?>" href="?op=consultas">Buscar</a>
                </li>
            </ul>
        </nav>
        <section class="loaderp">
            <img src="img/loaderp.gif" alt="">
        </section>
        <section id="principal">
            <?php include($contenido);?>
        </section>

    </section>
</body>

</html>