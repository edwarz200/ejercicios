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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (move_uploaded_file($archivo,$destino)){
    require("PHPMailer_master/src/PHPMailer.php");
    require("PHPMailer_master/src/SMTP.php");
    require("PHPMailer_master/src/Exception.php");
    $mail = new  PHPMailer(true); //creo un objeto de tipo PHPMailer

    try {
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->isSMTP(); //protocolo SMTP
    $mail->Host = "smtp.gmail.com"; //servidor de SMTP de gmail
    $mail->SMTPAuth = true; //autentificación de tipo PHPMailer
    $mail->Username = "earciniegas79@misena.edu.co"; //Aqui mi correo electronico
    $mail->Password = "10074239972"; //Aqui tu contraseña de gmail
    $mail->SMTPSecure = "tls"; //SSL seurity socket layer
    $mail->Port = 465; //puerto seguro del servidor SMTP de gmail
    $mail->setFrom($de,'Edi') ; //Remitente del correo
    $mail->AddAddress($para); //Destinatario
    $mail->addAttachment($destino); //accedemos al archivo que se subio al servidor y lo adjuntamos
    $mail->IsHTML(true);
    $mail->Subject = $asunto; //Asunto del correo
    $mail->Body = $mensaje; //Contenido del correo
    $mail->MsgHTML($mensaje); //Se indica que el cuerpo del correo tendra formato html
    // $mail->WordWrap = 50; //No. de columnas
    echo("entro");
    $mail->Send();
    $repuesta = "El mensaje ha sido enviado con la clase PHPMailer y tu cuenta de gamil =)";
} catch (Exception $e) {
    $repuesta = "El mensaje  no se pudo enviar con la clase PHPMailer y tu cuenta de gamil =(";
    $respuesta .= "Error: ".$mail->ErrorInfo;   
}
    
}else{
    $respuesta = "Ocurrio un error al subir el archivo adjunto =(";
}
header("Location: formulario-phpmailer.php?respuesta=$respuesta");

?>