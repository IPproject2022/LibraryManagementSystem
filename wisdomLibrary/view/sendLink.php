<?php
include('header.php');
include('nav.php');

?>
<title>Forgot Password</title>

<html>
  <body>
    <div class = "container">
    <form method="post">
      <p>Enter Email Address To Send Password Link</p>
      <input type="text" name="email" class = "validate">
      <input type="submit" name="submit_email">
    </form>
</div>
  </body>
</html>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

include('db.php');
if(isset($_POST['submit_email']) && $_POST['email'])
{
  $email = $_POST['email'];
  
  $select = mysqli_query($con,"SELECT `email`, `password`, `firstName` from user where `email`='$email'");
  if(mysqli_num_rows($select)==1)
  {
  $row=mysqli_fetch_array($select);
    
      $email=$row['email'];
      $pass = md5($row['password']);

    
    $link= "<a href='http://localhost/passwordReset/resetPassword.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";

    $update = mysqli_query($con,"UPDATE `user` SET `code` = '$pass' WHERE `email`='$email'");
   
    require 'C:/xampp/composer/vendor/autoload.php';
 $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = FALSE;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   =  'wisdomlibraryy@gmail.com';                   //SMTP username
        $mail->Password   = 'withDOM11@#';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
          //Recipients
    $mail->setFrom('wisdomlibraryy@gmail.com', 'wisdom library');
    $mail->AddAddress($row['email'], $row['firstName']);
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
     $mail->send();
        echo 'Message has been sent';
      
    
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   
     }
  }	
}
include('footer.php');

 
     
        
      
    
       