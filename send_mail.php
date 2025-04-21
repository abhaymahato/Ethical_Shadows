<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                    
    $mail->Host       = 'smtp.gmail.com';               
    $mail->SMTPAuth   = true;                           
    $mail->Username   = 'shadowsethical@gmail.com';         
    $mail->Password   = 'fwdcqbysrxavcxwl';            
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;                            

    // Recipients
    $mail->setFrom('your_email@gmail.com', 'ECHO Support');
    $mail->addAddress('receiver@example.com', 'User');  

    // Content
    $mail->isHTML(true);                                
    $mail->Subject = 'Welcome to ECHO';
    $mail->Body    = 'Thanks for logging in. This is a test email from XAMPP server.';

    $mail->send();
    echo '✅ Email has been sent successfully.';
} catch (Exception $e) {
    echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
