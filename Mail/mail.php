
<?php
  $mail=$_GET["email"];
  $nachricht=$_GET["text"];


  // Import PHPMailer classes into the global namespace
  // These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  //Load composer's autoloader
  require 'vendor/autoload.php';

  $mail = new PHPMailer(true);
      //Server settings
      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'mail.simple-crypto.net';                   // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'no-reply@simple-crypto.net';                 // SMTP username
      $mail->Password = 'lodiahma92';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to
                              // Passing `true` enables exceptions
  try {

      //Recipients
      $mail->setFrom('no-reply@simple-crypto.net', 'BoomBoxBeilstein');
      $mail->addAddress('info@boombox-beilstein.de ', 'Joe User');     // Add a recipient
      //$mail->addAddress('contact@example.com');               // Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'BoomBox Notifications';
      $mail->Body    = $nachricht;
      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  }

?>
