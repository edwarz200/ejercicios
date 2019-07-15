<?php
function borrar_imagenes($ruta,$extension){
    switch ($extension) {
        case '.jpg':
            if(file_exists($ruta."png")){
                unlink($ruta."png");
            };
            if(file_exists($ruta."gif")){
                unlink($ruta."gif");
            };
            break;
        case '.gif':
            if(file_exists($ruta."png")){
                unlink($ruta."png");
            };
            if(file_exists($ruta."jpg")){
                unlink($ruta."jpg");
            };
            break;
        case '.png':
            if(file_exists($ruta."gif")){
                unlink($ruta."gif");
            };
            if(file_exists($ruta."jpg")){
                unlink($ruta."jpg");
            };
            break;
    }
}

//Funcion para subir la imagen del perfil del usuario

function subir_imagen($tipo,$imagen,$email){
    $nombre_img = "../img/fotos".$email;

    if (strstr($tipo,"image")) {
        // Para saber de que tipo de extension es la imagen
        if (strstr($tipo,"jpeg")) {
            $extension = ".jpg";
        } else if (strstr($tipo,"jpeg")) {
            $extension = ".gif";
        }else if (strstr($tipo,"jpeg")) {
            $extension = ".png";
        }
        // Para saber si la imagen tiene el ancho correcto que de 420px
        $tam_img = getimagesize($image);
        $ancho_img = $tam_img[0];
        $alto_img = $tam_img[1];

        $ancho_img_deseado = 420;
        // Si la imagen es mayoe en su ancho que 420px, reajisto su tamaño
        if ($ancho_img>$ancho_img_deseado) {
            // Por una regla de 3 obtengo el alto de la imagen de manera proporcional al ancho nuevo que sera de 420
            $nuevo_ancho_img = $ancho_img_deseado;
            $nuevo_alto_img = ($alto_img/$ancho_img)*$nuevo_ancho_img;

            // Creo una imagen en color real con las nuevas dimensiones
            $img_reajustada = imagecreatetruecolor($nuevo_ancho_img,$nuevo_alto_img);
            // Creo una imagen basada en al original, dependiendo de su extension es el tipo que creare
            switch($extension){
                case ".jpg":
                    $image_original = imagecreateformjpeg($imagen);
                    // Reajusto la imagen nueva con respecto a la original 
                    // imagecopyresample(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h);
                    imagecopyresample($img_reajustada, $image_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
                    // Guardo la imagen reescalada en el servidor
                    imagejpeg($img_reajustada, $nombre_img.$extension,100);
                    borrar_imagenes($nombre_img,".jpg");
                    break;
                case ".gif":
                    $image_original = imagecreateformgif($imagen);
                    // Reajusto la imagen nueva con respecto a la original 
                    // imagecopyresample(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h);
                    imagecopyresample($img_reajustada, $image_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
                    // Guardo la imagen reescalada en el servidor
                    imagegif($img_reajustada, $nombre_img.$extension,100);
                    borrar_imagenes($nombre_img,".gif");
                    break;
                case ".jpg":
                    $image_original = imagecreateformpng($imagen);
                    // Reajusto la imagen nueva con respecto a la original 
                    // imagecopyresample(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h);
                    imagecopyresample($img_reajustada, $image_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
                    // Guardo la imagen reescalada en el servidor
                    imagepng($img_reajustada, $nombre_img.$extension,100);
                    borrar_imagenes($nombre_img,".png");
                    break;
            }
        }else{
            // guardo la ruta que tendra en el servidor la imagen
            $destino= $nombre_img.$email.$extension;

            //Se sube la foto
            move_uploaded_file($image,$destino) or die("No se pudo subir la imagen al servidor");

            // Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
            borrar_imagenes($nombre_img,$extension);
        }
        // Asigno el nombre de la foto que se guardara en la BD como cadena de texto
        $imagen = $email.$extension;
        return $imagen;
    }else{
        return false;
    }
};
?>