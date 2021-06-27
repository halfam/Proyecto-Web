<?php
//include_once './../includes/conexion.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './includes/phpmailer/Exception.php';
require './includes/phpmailer/PHPMailer.php';
require './includes/phpmailer/SMTP.php';

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


if (!isset($conn)) $conn = "";

$correo = $_POST["correo"];
$idUsuario = $_POST['idUsuario'];

$token = generateRandomString(10);


$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'formulariosgti@gmail.com';                     //SMTP username
    $mail->Password = 'formularios04';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('formulariosgti@gmail.com', 'GTI');     //Add a recipient
    $mail->addAddress($correo);


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Formularioss de Recuperación de Contraseña | GTI';
    $mail->Body = $mail->Body = '<span>Hemos recibido tu solicitud de restablecimineto de contraseña: puedes hacerlo desde </span><a href="http://localhost/Proyecto-Web-main/src/recuperar.php?token=' . $token . '">aquí</a>';
    $mail->CharSet = 'UTF-8';
    $mail->send();

    $sql = "INSERT into recuperar_contrasenya values ('$idUsuario', '$token')";
//        echo $sql;

    $result = mysqli_query($conn, $sql);
    if (!$result){
        $sql = "UPDATE recuperar_contrasenya set token='$token' where idUsuario = '$idUsuario'";
        $result = mysqli_query($conn, $sql);
    }
    http_response_code(200);

} catch (Exception $e) {
    http_response_code(403);
    echo 'El mensaje no se ha podido enviar';
}

//http_response_code(404);
//echo 'El correo introducido no es correcto, vuelve a intentarlo!';




