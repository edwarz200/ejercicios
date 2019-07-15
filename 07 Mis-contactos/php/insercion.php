<?php
    // INSERT INTO nombre_tabla (campos_tabla) VALUES(valores_campos)
    $conexion = new mysqli("localhost", "root", "", "mis_contactos") or die("<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>");
    $conexion->set_charset("utf8");
    $email = $_POST['email_txt'];
    $nombre = $_POST['nombre_txt'];
    $sexo = $_POST['sexo_rdo'];
    $nacimiento = $_POST['nacimiento_txt'];
    $telefono = $_POST['telefono_txt'];
    $pais = $_POST['pais_slt'];
    $imagen = $_POST['imagen_fls'];
    $imagen_generica= ($sexo === "M")?"img/fotos/amigo.png":"img/fotos/amiga.png";

    include("conexion.php");

    $consulta = "SELECT * FROM contactos WHERE email = '$email'";
    $ejecutar_consulta = $conexion->query($consulta);
    $num_regs = $ejecutar_consulta->num_rows;

    if ($num_regs == 0) {
        //se ejecuta la funcion para subir la imagen
        include("funciones.php");
        $tipo = $_FILES["foto_fls"]["type"];
        $archivo = $_FILES["foto_fls"]["tmp_name"];
        $se_subio_imagen = subir_imagen($tipo,$archivo,$email);

        //Si la foto en el formulario viene vacia le asigno el valor de la imagen generica, sino entonce el nombre de la foto que se subio
        if (empty($archivo)) {
            $imagen = $imagen_generica;
        }else{

            $imagen = $se_subio_imagen;
        }

        $consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES('$email','$nombre','$sexo','$nacimiento','$telefono','$pais','$imagen')";
        $ejecutar_consulta = $conexion->query($consulta);
        if ($ejecutar_consulta) {
            $mensaje = "Se ha dado de alta al contacto con el email $email =)";
        } else {
            $mensaje = 'No se pudo dar de alta al contacto con el email $email Error:'. $conexion->error;
        }
    }else{
        $mensaje = "No se pudo dar de alta al contacto con el email $email porque ya existe :/";
    }
    include("cerrar_conexion.php");
    header("Location: ../index.php?op=alta&mensaje=$mensaje");
    
?>