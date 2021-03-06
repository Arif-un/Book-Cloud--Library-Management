<?php
/**
 * Copyright (c) arifunctg@gmail.com
 */

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

//Load Composer's autoloader
require '../vendor/autoload.php';

function regMailSend($to, $subject,$name, $id,$pass)
{
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
        $mail->setFrom($to, 'Book-Cloud');
        $mail->addAddress($to, 'Library User');     // Add a recipient
        // Name is optional
        $mail->addReplyTo('noreply0@gmail.com', 'NoAnswer');
        // $mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        /* $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
         $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = '
        <!DOCTYPE html>
<!--
  ~ Copyright (c) arifunctg@gmail.com
  -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
        }

        .wrapper div {
            background-color: white;
            padding-top: 10px;
            padding: 15px;
            margin-top:10px;
        }

        .code {
            font-family: "Courier New", Courier, monospace;
            border: 0.5px solid gray;
            border-radius: 5px;
            background-color:aliceblue;
            padding: 2px;
        }
    </style>

</head>

<body>

    <div class="wrapper" style="width: 100%;background-color: #1E88E5;padding: 10px;margin-top: 10px;margin-bottom: 10px">
        <img src="../resource/images/book-cloud.png" style="height: 70px;width: auto;margin-left: auto;margin-right: auto;display: block">
        <div>
            <h2 style="margin: auto;text-align: center">Your Registration has been Successfully</h2>
            <h3>Hi '.$name.',</h6>
                <br>
                <p>
                    Thanks for Registration in Book-Cloud. Your ID is
                    <span class="code">'.$id.'</span>
                    and Password 
                    <span class="code">'.$pass.'</span>
                </p>
        </div>

    </div>
    <br>

</body>

</html>
        ';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';

    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

}
?>

