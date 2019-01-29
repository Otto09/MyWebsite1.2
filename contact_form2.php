<?php
//PHPMailer contact form
//Import tht PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$msg = '';
//Don't run this, unless we're handling a form submission
if (array_key_exists('Email', $_POST)) {
  date_default_timezone_set('Etc/UTC');

  //Load Composer's autoloader
  require './vendor/autoload.php';

  //Create a new PHPMailer instance
  $mail = new PHPMailer; //Passing true enables exceptions
  //Tell PHPMailer to use SMTP - requires a local mail server
  //Faster and safer than using mail()
  $mail->isSMTP(); //Set mailer to use SMTP
  $mail->Host = 'localhost'; //Use local SMTP server
  $mail->Port = 25; //TCP port to connect to

  //Use a fix address from my own domain as the from address
  //If using the submitter's address here it will be forgery
  //and it will cause my messages to fail SPF checks
  $mail->setFrom('otto2@testdomain.com', 'Otto2');
  //Send the message to myself to receive contact for submission
  $mail->addAddress('otto@testdomain.com', 'Otto');
  //Put the submitter's address in a reply-to header
  //This will fail if the address provided is invalid,
  //in which case we should ignore the whole requst
  if ($mail->addReplyTo($_POST['Email'], $_POST['Name'])) {
  $mail->Subject = 'PHP Mailer contact form';
  //Keeep it simple, don't use HTML
  $mail->isHTML(false);
  //Build a simple message body using heredoc
  $mail->Body = <<<EOT
Name:  {$_POST['Name']}
Email: {$_POST['Email']}
Message: {$_POST['Message']}
EOT;
    //Send the message
    //Send the message, check for errors
    if (!$mail->send()) {
      //The reason for failing to send will be in $mail->ErrorInfo
      $msg = 'Sorry, something went wrong. Please try again later.';
    } else {
      $msg = 'Message sent! Thanks for contacting us';
    }

  } else {
    $msg = 'Invalid email address, message ignored';
  }
}
?>
