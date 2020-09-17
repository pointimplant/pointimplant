<?php

//$destino="brayan201e@gmail.com";

 $visitor_name = $_POST["visitor_name"];
 $visitor_email = $_POST["visitor_email"];
 $visitor_cel = $_POST["visitor_cel"];
 $visitor_dir = $_POST["visitor_dir"];
 $especialidades = $_POST["especialidades"];
 $visitor_message = $_POST["visitor_message"];


$contenido="nombre: " . $visitor_name . "\n correo : " . $visitor_email . "\n celular : " . $visitor_cel . "\n direccion : " . $visitor_dir . "\n especialidades : " . $especialidades . "\n comentario : " . $visitor_message;

//mail($destino, "Solicitud de Información", $contenido);
//header("location:index.html");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'brayan201e@gmail.com';                     // SMTP username
    $mail->Password   = 'amores201';                               // SMTP password
    $mail->SMTPSecure = 'tls';//PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($visitor_email, $visitor_name);
    $mail->addAddress('brayan201e@gmail.com');     // Add a recipient
    //$mail->addAddress('soporte@digident.com.pe');               // Name is optional
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'asunto';
    $mail->Body    = $contenido;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

