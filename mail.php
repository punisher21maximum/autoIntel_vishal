<?php







require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'autointellservices@gmail.com';
$mail->Password = 'Auto@123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('autointellservices@gmail.com', 'Autointell services');
$mail->addReplyTo('autointellservices@gmail.com', 'Autointell services');

// Add a recipient
$mail->addAddress('ruchira265@gmail.com');

// Add cc or bcc 


// Email subject
$mail->Subject = 'new customer notification';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = "<h1>Send HTML Email using SMTP in PHP</h1>
    <p>This is a test email has sent using SMTP mail server with PHPMailer.</p>";
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}
?>
