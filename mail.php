<?php
    if ($_POST)
    { 
        
        require 'phpmailer/class.phpmailer.php';
        require 'phpmailer/class.phpmaileroauth.php';
        require 'phpmailer/class.smtp.php';
        require 'phpmailer/PHPMailerAutoload.php';
        
        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'ryangillooly@hotmail.co.uk';                 // SMTP username
        $mail->Password = 'H3rb4L1f3!';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('ryangillooly@hotmail.co.uk', 'Mailer');
        $mail->addAddress($_POST['email'], $_POST['name']);     // Add a recipient

        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $_POST['name'];
        $mail->Body    = $_POST['message'];

        if(!$mail->send()) 
        {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } 
        else 
        {
         
        }
    }
?>