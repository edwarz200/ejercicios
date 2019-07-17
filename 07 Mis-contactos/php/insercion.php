<?php
    // INSERT INTO nombre_tabla (campos_tabla) VALUES(valores_campos)
    $email = $_POST['email_txt'];
    $nombre = $_POST['nombre_txt'];
    $sexo = $_POST['sexo_rdo'];
    $nacimiento = $_POST['nacimiento_txt'];
    $telefono = $_POST['telefono_txt'];
    $pais = $_POST['pais_slt'];
    // $imagen = $_FILES['archivo_fls'];
    $imagen_generica= ($sexo === "M")?"amigo.png":"amiga.png";

    include("conexion.php");

    $consulta = "SELECT * FROM contactos WHERE email = '$email'";
    $ejecutar_consulta = $conexion->query($consulta);
    $num_regs = $ejecutar_consulta->num_rows;

    if ($num_regs == 0) {
        //se ejecuta la funcion para subir la imagen
        include("funciones.php");
        $tipo = $_FILES['archivo_fls']['type'];
        $archivo = $_FILES['archivo_fls']['tmp_name'];
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
    // echo $imagen;
    header("Location: ../index.php?op=alta&mensaje=$mensaje");
    include("php/cerrar_conexion.php");
    
?> 