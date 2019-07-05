<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Archivos al servidor</title>
    <script src="https://kit.fontawesome.com/f462888101.js"></script>
</head>

<body>

    <form name="enviar_archivo_frm" method="post" action="subir-archivo.php" enctype="multipart/form-data">
        <input type="file" name="archivo_fls">
        <input type="submit" name="subir_btn" value="Subir Archivo">
    </form>

    <a href="http://localhost/ejercicio01/" title="Volver a http://localhost/ejercicio01/"
        style="position: fixed; bottom: 0; text-decoration: none; color: white; background-color: black; padding:5px 20px; border-radius: 3px;"
        ;><i class="fas fa-chevron-left"></i></a>
</body>

</html>