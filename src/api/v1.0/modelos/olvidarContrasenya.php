<?php
include_once '../includes/conexion.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../includes/phpmailer/Exception.php';
require '../includes/phpmailer/PHPMailer.php';
require '../includes/phpmailer/SMTP.php';

if (!isset($conn)) $conn = "";

$correo = $_POST["correo"];

$sql = "SELECT correo FROM  usuario WHERE correo='$correo'" ;


$query = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($query);
    $resultado = $res["correo"];




if ($correo == $resultado) {
    $nombre = $_POST["nombre"];
    $mensaje = $_POST["mensaje"];

    $body = "Nombre: " . $nombre . "<br>Correo: " . $correo . "<br>Mensaje: " . $mensaje;


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
        $mail->Subject = 'Formulario de Recuperación de Contraseña | GTI';
        $mail->Body = $body;
        $mail->CharSet = 'UTF-8';
        $mail->send();
        echo '<script>
    alert("El mensaje se envió correctamente");
    window.history.go(-1);
    location = "olvidarContrasenya.php"
    //document.getElementById("formulario_txt").reset();
    </script>
    ';

    } catch (Exception $e) {
        echo '<script>
    alert("El mensaje no se ha podido enviar");
    window.history.go(-1);
    location.reload();
    </script>
    ';

    }
}else{
    echo '<script>
    alert("Aspavila");
    window.history.go(-1);
    location.reload();
    </script>
    ';
}




