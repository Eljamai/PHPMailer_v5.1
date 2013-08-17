//C:\wamp\bin\php\php5.3.13\php.ini
//replace
//;extension=php_openssl.dll
//to
//extension=php_openssl.dll


<?php
require("PHPMailer_v5.1\class.phpmailer.php");
    $mail             = new PHPMailer();

$body             = file_get_contents('welcom.php');


$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier tls or ssl 
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "xxxxxxx@gmail.com";  // GMAIL username
$mail->Password   = "xxxxx";            // GMAIL password

$mail->SetFrom('mounssif.eiljami@gmail.com', 'First Last');

$mail->AddReplyTo("xxxxx@gmail.com","First Last");

$mail->Subject    = "xxxxxx";

$mail->AltBody    = "xxxxxx"

$mail->MsgHTML($body);

$address = "xxxxxxx@gmail.com"; //To
$mail->AddAddress($address, "Name");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
    
?>
