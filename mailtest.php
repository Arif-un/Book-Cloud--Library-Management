<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

 function mailSend() {
     $mail = new PHPMailer(true);     // Passing `true` enables exceptions

    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';
        // Specify main and backup SMTP servers
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'ai3482507@gmail.com';                 // SMTP username
        $mail->Password = '00112233';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('arifoverclocker0@gmail.com', 'Mailer');
        $mail->addAddress('arifoverclocker0@gmail.com', 'Joe User');     // Add a recipient
        // Name is optional
        $mail->addReplyTo('arifoverclocker0@gmail.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        //Attachments
        /* $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
         $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Book-Cloud Login ID';
        $mail->Body    = 'Your Registration has been Successfully
                        <img src="resource/images/book-cloud.png" style="height: 70px;width: auto">
                        <br>
                        
                        ';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
        echo "<script>
    
        setTimeout(function () {
            Materialize.toast('<span>Mail Sent</span>',10000);
        }, 1500);
</script>";
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

}
 mailSend();
