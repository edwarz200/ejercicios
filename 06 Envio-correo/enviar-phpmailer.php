<?php
$de = $_POST["de_txt"];
$para = $_POST["para_txt"];
$asunto = $_POST["asunto_txt"];
$mensaje = $_POST["mensaje_txa"];
$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type: text/html; charset-iso-8859-1\r\n";
$cabeceras .= "From: $de \r\n";

$archivo = $_FILES["archivo_fls"]["tmp_name"];
$destino = $_FILES["archivo_fls"]["name"];

if (move_uploaded_file($archivo,$destino)){
    include_once("PHPMailerFolder/src/PHPMailer.php");
    include_once("PHPMailerFolder/src/SMTP.php");
    include_once("PHPMailerFolder/src/OAuth.php");
    include_once("PHPMailerFolder/src/POP3.php");
    include_once("PHPMailerFolder/src/Exception.php");
    include_once("PHPMailerFolder/language/phpmailer.lang-es.php");
    
    $mail->objMailer = new PHPMailer(); //creo un objeto de tipo PHPMailer
    $mail->objMailer->IsSMPT(); //protocolo SMTP
    $mail->objMailer->SMTPAuth = true; //autentificación de tipo PHPMailer
    $mail->objMailer->SMTPSecuer = "ssl"; //SSL seurity socket layer
    $mail->objMailer->Host = "smtp.gmail.com"; //servidor de SMTP de gmail
    $mail->objMailer->Port = 465; //puerto seguro del servidor SMTP de gmail
    $mail->objMailer->From = $de; //Remitente del correo
    $mail->objMailer->AddAddress($para); //Destinatario
    $mail->objMailer->Username = "earciniegas79@misena.edu.co"; //Aqui mi correo electronico
    $mail->objMailer->Password = "10074239972"; //Aqui tu contraseña de gmail
    $mail->objMailer->Subject = $asunto; //Asunto del correo
    $mail->objMailer->Body = $mensaje; //Contenido del correo
    $mail->objMailer->WordWrap = 50; //No. de columnas
    $mail->objMailer->MsgHTML($mensaje); //Se indica que el cuerpo del correo tendra formato html
    $mail->objMailer->AddAttachment($destino); //accedemos al archivo que se subio al servidor y lo adjuntamos
    if ($mail->objMailer->Send()) {
        $repuesta = "El mensaje ha sido enviado con la clase PHPMailer y tu cuenta de gamil =)";
    } else {
        $repuesta = "El mensaje  no se pudo enviar con la clase PHPMailer y tu cuenta de gamil =(";
        $respuesta .= "Error: ".$mail->ErrorInfo;      
    }
    
}else{
    $respuesta = "Ocurrio un error al subir el archivo adjunto =(";
}
header("Location: formulario-phpmailer.php?respuesta=$respuesta");

?>