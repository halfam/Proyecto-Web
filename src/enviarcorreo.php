<?php

//variable para guardar los datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje= $_POST["mensaje"];

$body = "Nombre: " . $nombre . "<br>Correo: " . $email . "<br>Mensaje: " . $mensaje;
//librerias
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'api/v1.0/includes/phpmailer/Exception.php';
require 'api/v1.0/includes/phpmailer/PHPMailer.php';
require 'api/v1.0/includes/phpmailer/SMTP.php';
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug =0 ;                      //Errores
    $mail->isSMTP();                                            //Envair mediante smtp
    $mail->Host       = 'smtp.gmail.com';                     //Servidor de gmail
    $mail->SMTPAuth   = true;                                   //Autentificacion SMTP
    $mail->Username   = 'formulariosgti@gmail.com';                     //SMTP nombre
    $mail->Password   = 'formularios04';                               //SMTP contraseña
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Encriptacion
    $mail->Port       = 587;                                    //Puerto

    //Recipients
    $mail->setFrom('formulariosgti@gmail.com', 'GTI');     //Correo que recibe
    $mail->addAddress('tucampogti@gmail.com');


    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Formulario de contacto | GTI' ;  //Asunto
    $mail->Body    = $body;   //Se envia lo que ponga el usuario
    $mail->CharSet= 'UTF-8';
    $mail->send();

    //mensajes del servidor

    echo '<script>
    alert("El mensaje se envió correctamente");   
    //window.history.go(-1);
    location = "contacto.php"
    //document.getElementById("formulario_txt").reset();
    </script>
    ';

} catch (Exception $e) {
    echo '<script>
    alert("El mensaje no se ha podido envair");
    window.history.go(-1);
    location.reload();
    </script>
    ';

}