<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envío de correo con la función mail en PHP</title>
    <style>
        form{
            margin: 1em auto;
            text-align: center;
        }

        span{
            color: #F60;
            font-size: 1.5em;
        }
    </style>
    <script>
        function validarForm(){
            var verificar = true;
            var exRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

            if (!document.mail_frm.de_txt.value) {
                alert("El campo \"De\" es requerido");
                document.mail_frm.de_txt.focus();
                verificar = false;
            }else if(!exRegEmail.exec(document.mail_frm.de_txt.value)){
                alert("El campo \"De\" no es valido");
                document.mail_frm.de_txt.focus();
                verificar = false;
            } else if (!document.mail_frm.para_txt.value) {
                alert("El campo \"Para\" es requerido");
                document.mail_frm.para_txt.focus();
                verificar = false;
            }else if(!exRegEmail.exec(document.mail_frm.para_txt.value)){
                alert("El campo \"Para\" no es valido");
                document.mail_frm.para_txt.focus();
                verificar = false;
            } else if (!document.mail_frm.asunto_txt.value) {
                alert("El campo \"Asunto\" es requerido");
                document.mail_frm.asunto_txt.focus();
                verificar = false;
            } else if (!document.mail_frm.archivo_fls.value) {
                alert("El campo \"Adjuntar archivo\" es requerido");
                document.mail_frm.archivo_fls.focus();
                verificar = false;
            } else if (!document.mail_frm.mensaje_txa.value) {
                alert("El campo \"Mensaje\" es requerido");
                document.mail_frm.mensaje_txa.focus();
                verificar = false;
            }

            if (verificar == true) {
                document.mail_frm.submit();
            }
        }

        window.onload= function(){
            document.mail_frm.enviar_btn.onclick = validarForm;
        }
    </script>
</head>

<body>
    <form name="mail_frm" action="enviar-phpmailer.php" method="post" enctype="multipart/form-data">
        De: <input type="text" name="de_txt"><br><br>
        Para: <input type="text" name="para_txt"><br><br>
        Asunto: <input type="text" name="asunto_txt"><br><br>
        Adjuntar archivo: <input type="file" name="archivo_fls"><br><br>
        Mensaje: <br><textarea name="mensaje_txa" placeholder="Escribe el mensaje que quieras enviar..." style="width:400px; height:100px"></textarea><br><br>
        <input type="button" name="enviar_btn" value="Enviar"><br><br>
        <?php 
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        if (isset($_GET["respuesta"])) {
            echo "<span>".$_GET["respuesta"]."</span>";
        }
        ?>
    </form>

    <a href="http://localhost/ejercicio01/" title="Volver a http://localhost/ejercicio01/"
        style="position: fixed; bottom: 0; text-decoration: none; color: white; background-color: black; padding:5px 20px; border-radius: 3px;"
        ;><i class="fas fa-chevron-left"></i></a>
</body>

</html>