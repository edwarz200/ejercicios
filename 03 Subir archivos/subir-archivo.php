<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <script src="https://kit.fontawesome.com/f462888101.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <section id="mos">
        <section id="in" onclick="">
            <i class="fas fa-info"></i>
        </section>
        <ul id="mostrar">
            <?php
            foreach($_FILES["archivo_fls"]as $clave=> $valor){
                echo"<li>Propiedad: $clave --- Valor: $valor </li>";
            }
        ?>
        </ul>
    </section>
    <?php

    $archivo = $_FILES["archivo_fls"]["tmp_name"];
    $destino = "archivos/".$_FILES["archivo_fls"]["name"];
    $tipo = $_FILES["archivo_fls"]["type"];
    
    
    if ($tipo == "image/jpeg"|| $tipo == "image/png" || $tipo == "image/wbpm" ) {
        move_uploaded_file($archivo,$destino);
        echo '<script>swal({
            title: "Archivo Subido!",
            icon: "success",
            button: false,
            timer: 1000,
          });</script>'; 
        echo("<img id=\"img\" src='archivos/".$_FILES["archivo_fls"]["name"]."'>");
    }else{
        echo("<script>
        swal({
            title: \"Tipo de archivo incorrecto\",
            text: \"solo se adminten archivos de imagen(png,jpg,jpeg,wbpm)\",
            icon: \"warning\",
            dangerMode: true,
        }
    )
    .then((willDelete) => {
    if (willDelete) {
    swal(\"Redirecionando\", { icon: \"success\",});
    location.href = \"index.php\"
    } else {
    }
    }); </script>");
    }

    ?>

</body>

</html>
<script>
var m = 1;

function mostrar() {
    var mos = document.getElementById("mostrar");
    if (m == 1) {
        mos.style.visibility = "visible";
        mos.style.transform = "translateX(10px)";
        m = 2;
    } else {
        mos.style.transform = "translateX(-10px)";
        mos.style.visibility = "hidden";
        m = 1;
    }

}
</script>
<style>
* {
    margin: 0;
    padding: 0;
}

li {
    list-style: none;
}

#img {
    position: absolute;
    width: 100%;
    z-index: 0;
}

#in {
    position: absolute;
    border-radius: 11px;
    background-color: rgba(255, 255, 255, 0.5);
    width: 20px;
    height: 20px;
    padding: 10px;
    margin: 10px;
    text-align: center;
    z-index: 1;
}

#mos:hover #mostrar {
    visibility: visible;
    transform: translateX(10px);
}

#mostrar {
    position: absolute;
    padding: 6px;
    top: 10px;
    left: 55px;
    background-color: rgba(255, 255, 255, 0.5);
    transform: translateX(-10px);
    visibility: hidden;
    overflow: hidden;
    z-index: 1;
    transition-property: visibility, transform;
    transition-delay: 0s, 0s;
    transition-duration: .05s, .35s;
}
</style>


<a href="http://localhost/ejercicio01/" title="Volver a http://localhost/ejercicio01/"
    style="position: fixed; bottom: 0; text-decoration: none; color: white; background-color: black; padding:5px 20px; border-radius: 3px;"
    ;><i class="fas fa-chevron-left"></i></a>