<?php

if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $visitor_cel = "";
    $visitor_dir = "";
    $especialidades = "";
    $date = "";
    $time = "";
    $visitor_message = "";
     
    if(isset($_POST['visitor_name'])) {
      $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
     
     if(isset($_POST['visitor_cel'])) {
        $visitor_cel = filter_var($_POST['visitor_cel'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['visitor_dir'])) {
        $visitor_dir = filter_var($_POST['visitor_dir'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['especialidades'])) {
        $especialidades = filter_var($_POST['especialidades'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['date'])) {
        $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['time'])) {
        $time = filter_var($_POST['time'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
    }
     
    if($especialidades == "Odontologia General") {
        //$recipient = "brayan201e@gmail.com";
    }
    else if($especialidades == "Odontopediatria") {
        //$recipient = "brayan201e@gmail.com";
    }
    else if($especialidades == "Ortodoncia") {
        //$recipient = "brayan201e@gmail.com";
    }
    else if($especialidades == "Estetica Dental") {
        //$recipient = "brayan201e@gmail.com";
    }
    else if($especialidades == "Cirujia Bucal") {
        //$recipient = "brayan201e@gmail.com";
    }
    else if($especialidades == "Implantes Dentales") {
        //$recipient = "brayan201e@gmail.com";
    }
    else if($especialidades == "Endodoncia") {
        //$recipient = "brayan201e@gmail.com";
    }
    else if($especialidades == "Blanqueamiento Dental") {
        //$recipient = "brayan201e@gmail.com";
    }
    else if($especialidades == "Reabilitacion Oral") {
        //$recipient = "brayan201e@gmail.com";
    }
    else {
        //$recipient = "brayan201e@gmail.com";
    }
     
    $headers  = 'Nombre: ' . $visitor_name . 
    "<br/> E-mail: " . $visitor_email . 
    "<br/> Celular: " . $visitor_cel .
    "<br/> Dirección: " . $visitor_dir . 
    "<br/> Especialidad: " . $especialidades . 
    "<br/> Fecha: " . $date .
    "<br/> Hora: ". $time .
    "<br/> Mensaje: " . $visitor_message;
     
    //if(mail($recipient, $visitor_message, $headers)) {
        
        //echo '<script>
        //alert("El mensaje se envio correctamente");
        //window.history.go(-1);
        //</script>';

        #"<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    //} else {
        //echo '<p>We are sorry but the email did not go through.</p>';
    //}
     
//} else {
    //echo '<p>Something went wrong</p>';

}

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
    $mail->Username   = 'info@digident.com.pe';                     // SMTP username
    $mail->Password   = 'pointimplant2020';                               // SMTP password
    $mail->SMTPSecure = 'tls';//PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($visitor_email, $visitor_name);
    $mail->addAddress('info@digident.com.pe');
    //$mail->addAddress('soporte@digident.com.pe');      // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Reservacion De Cita';
    $mail->Body    = $headers;

    $mail->send();
    echo '<script>
        alert("Gracias por contactarnos. Recibirá una respuesta dentro de las 24 horas.");
        window.history.go(-1);
        </script>';

} catch (Exception $e) {
    echo "El mensaje no pudo ser enviado. Error de envío: {$mail->ErrorInfo}";
}
?>


<!--
//Please do not remove the following lines.
// echo base64_decode("PHA+Q29udGFjdCBGb3JtIFNjcmlwdCBieSA8YSBocmVmPSJodHRwOi8vd3d3Lmphc29uZ2lsbHlvbi5jby51ay8iPkphc29uIEdpbGx5b248L2E+PC9wPg==");
ob_end_flush();
//If you wish to remove them, please contact me via http://www.jasongillyon.co.uk/ and we can come to an arrangement.
//Thank you.
//- End Output \\
$vaa="</div></div>--><!-- aaa -->
<!-- <div class='ladocont'> -->

     <!-- img src='imagenes/contactenos.jpg' width='200' height='432' -->
<!-- 
</div></div>";
echo "".$vaa;
echo $contenido2;
?>
-->
<!-- 
<?php
//exit();
?>
-->