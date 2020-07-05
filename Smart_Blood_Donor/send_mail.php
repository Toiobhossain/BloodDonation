<?php
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'tls';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "toiob.hossain67@gmail.com";
   $mail ->Password = "toiob1261";
   //$mail ->SetFrom("yourmail@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
    ?>
    <script type="text/javascript">
        alert("Mail not Sent")
      </script> 
      <?php
      header ("refresh:0; url=Admin.php");
      
   }
   else
   {
       ?>
    <script type="text/javascript">
        alert("Mail Sent")
      </script> 
      <?php
      header ("refresh:0; url=Admin.php");
   }





   

