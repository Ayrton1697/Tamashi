<?php 


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';



if(isset($_POST['submit'])){
   session_start();
require 'config.php';

// Instantiation and passing `true` enables exceptions
  try {
    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $email;                     // SMTP username
    $mail->Password   = $pass;                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for 
    $mail->setFrom($_POST['email'], $_POST['nombre']);
    $mail->addAddress('tamashiresto@gmail.com', 'TAMASHI WEB');     // Add a recipient  
    $mail->addReplyTo($_POST['email'], $_POST['nombre']);
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'TAMASHI WEB CONSULTAS';
    $mail->Body    = $_POST['mensaje'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
      );

    $mail->send();

    $_SESSION['result']='El mensaje ha sido enviado correctamente';

}catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    $_SESSION['result']='Error al enviar el mensaje';
}

header('Location:index.php#contact');
}



?>