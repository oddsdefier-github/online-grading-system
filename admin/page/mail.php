<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer-master/src/Exception.php';
  require 'PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/src/SMTP.php';

function send_mail($recipient,$subject,$message)
{
  $mail = new PHPMailer(true);
  $mail->IsSMTP();
  $mail->Host  = "mail.icst-itdept.com";
  
  $mail->IsHTML(true);
  $mail->AddAddress($recipient);
  $mail->SetFrom('info@icst-itdept.com','ICST GRADING SYSTEM HIGH SCHOOL');


  $mail->Subject = $subject;
  $content = $message;

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    //echo "Error while sending Email.";
    //echo "<pre>";
    //var_dump($mail);
    return false;
  } else {
    //echo "Email sent successfully";
    return true;
  }

}

?>

 <!-- $mail = new PHPMailer(true);
  $mail->IsSMTP();
  $mail->Host  = "mail.icst-itdept.com";
  
  $mail->IsHTML(true);
  $mail->AddAddress($recipient);
  $mail->SetFrom('info@icst-itdept.com','ICST GRADING SYSTEM HIGH SCHOOL'); -->