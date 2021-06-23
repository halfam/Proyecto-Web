<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje= $_POST["mensaje"];

$body = "Nombre: " . $nombre . "<br>Correo: " . $email . "<br>Mensaje: " . $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'api/v1.0/includes/phpmailer/Exception.php';
require 'api/v1.0/includes/phpmailer/PHPMailer.php';
require 'api/v1.0/includes/phpmailer/SMTP.php';
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'formulariosgti@gmail.com';                     //SMTP username
    $mail->Password   = 'formularios04';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('formulariosgti@gmail.com', 'GTI');     //Add a recipient
    $mail->addAddress('tucampogti@gmail.com');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Formulario de contacto | GTI' ;
    $mail->Body    = $body;
    $mail->CharSet= 'UTF-8';
    $mail->send();
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