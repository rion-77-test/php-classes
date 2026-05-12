<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST["send-mail"])) {
    $to_email = trim($_POST['to-email']);
    $message_body = trim($_POST['message-body']);
    $email_subject = isset($_POST['email-subject']) ? $_POST['email-subject'] : "No subject";

    if (empty($to_email)) {
        $msg = '<p class="text-danger">Email is empty</p>';
    } elseif (empty($message_body)) {
        $msg = '<p class="text-danger">Message is empty</p>';
    } else {
        // mailer 
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'testmailrion77@gmail.com';             //SMTP username
            $mail->Password   = 'dummy torm idwm uwhc';                  //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('rion77@gmail.com', 'Rion');
            // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            $mail->addAddress($to_email);               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $email_subject;
            $mail->Body    = $message_body;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            $msg =  '<p class="text-success">Message has been sent</p>';
        } catch (Exception $e) {
            $msg = '<p class="text-success">Message could not be sent. Mailer Error: {$mail->ErrorInfo}"</p>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <!-- To email -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="to-email" placeholder="name@example.com">
            </div>

            <!-- Email Subject -->
            <div class="mb-3">
                <label for="email-subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="email-subject" name="email-subject" placeholder="add subject here">
            </div>

            <!-- Message -->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message Body</label>
                <textarea class="form-control" name="message-body" id="exampleFormControlTextarea1" rows="3" placeholder="type your message here"></textarea>
            </div>

            <div class="mb-3">
                <button type="submit" name="send-mail" class="btn btn-primary mb-3">Send Mail</button>
            </div>

        </form>
        <?= $msg ?? ""; ?>
    </div>

</body>

</html>