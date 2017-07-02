<?php
    if ($_POST)
    { 
        
        require '../phpmailer/class.phpmailer.php';
        require '../phpmailer/class.phpmaileroauth.php';
        require '../phpmailer/class.smtp.php';
        require '../phpmailer/PHPMailerAutoload.php';
        
        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                                                                                   // Enable verbose debug output

        $mail->isSMTP();                                                                                        // Set mailer to use SMTP
        $mail->Host         = 'smtp-mail.outlook.com';                                                          // Specify main and backup SMTP servers
        $mail->SMTPAuth     = true;                                                                             // Enable SMTP authentication
        $mail->Username     = 'LarkinDuo@outlook.com';                                                          // SMTP username
        $mail->Password     = 'H3rb4L1f3!';                                                                     // SMTP password
        $mail->SMTPSecure   = 'tls';                                                                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port         =  587;                                                                              // TCP port to connect to
        $mail->isHTML(true);                                                                                    // Sets email type to HTML
        
        
        //Sends email to Larkin inbox from customer
        $mail->setFrom('LarkinDuo@outlook.com', '');                                                            // Sending From (LarkinDuo@outlook.ocom)
        $mail->AddAddress('LarkinDuo@outlook.com', '');                                                         // Add a recipient (LarkinDuo@outlook.com) with Customer name
        $mail->Subject      = 'Contact Form Submission - ' . $_POST['name'];                                    // Set email subject
        $mail->Body         = '<u><b>Submitted message:</u></b><br /><br />"' . $_POST['message'] . '"';        // Set email body                 

        if(!$mail->send())                                                                                      // Try to send email, if failure then display error
        {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } 
        
        
        
        //Send email to customer to confirm email submission
        $mail->ClearAllRecipients();                                                                            // Clear all existing recipients
        $mail->AddAddress($_POST['email'], $_POST['name']);                                                     // Add recipient - Customer
        $mail->Subject      = 'Thank you!';                                                                     // Set email subject and body below
        $mail->Body         = '<h2>Hey, ' . $_POST['name'] . '!</h2><p>Thank you for submitting your question: "' . $_POST['message'] . '".<br />We will contact you as soon as we can.<br /><br />Have a wonderful day!<br />S<b>&</b>F x</p>';
            
        if(!$mail->send())                                                                                      // Try to send email, if failure then display error
        {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        
    }
?>