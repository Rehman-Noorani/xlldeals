<?php
if(isset($_POST['send_mail']) && $_POST['email'])
{
  include('phplib/db_config.php');
  $mail=$_POST['email'];
  $select=mysqli_query($con,"select * from xll_user where customer_email='$mail'");
  if(mysqli_num_rows($select)==1)
  {
    while($row=mysqli_fetch_array($select))
    {
      $email=($row['customer_email']);
      $pass=md5($row['password']);
      
    
    $link="<a href='www.xlldeals.000webhostapp.com/reset_pass.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
       require('phplib/class.phpmailer.php');
    require('phplib/class.smtp.php');
    $mail = new PHPMailer();
    $mail->SMTPDebug = 2;
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "hackerspotted97@gmail.com";
    // GMAIL password
    $mail->Password = "rahemannoorani";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    //$mail->From='rehmanoorani@gmail.com';
    $mail->FromName='XLLDEAL';
    $mail->AddAddress($email,$row['customer_name']);
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';
    if($mail->Send())
    {
      header("location:reset_pass.php");
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }

}





    // $to = 'rehmanoorani@gmail.com';
    // $subject = 'Forget Password';
    // $from = 'xllldeal@gmail.com';
    
     
    // // To send HTML mail, the Content-type header must be set
    // $headers  = 'MIME-Version: 1.0' . "\r\n";
    // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     
    // // Create email headers
    // $headers .= 'From: '.$from."\r\n".
    //     'Reply-To: '.$from."\r\n" .
    //     'X-Mailer: PHP/' . phpversion();
     
    // // Compose a simple HTML email message
    // $message = '<html><body>';
    // $message .= '<h1 style="color:#f40;">"Click On This Link to Reset Password "'.$pass.'</h1>';
    // $message .= '</p></body></html>';
     
    // // Sending email
    // if(mail($to, $subject, $message, $headers)){
    //     echo 'Your mail has been sent successfully.';
    // } else{
    //     echo 'Unable to send email. Please try again.';
    // }

    // // this section send mail to customer
    // $mailbody="Dear Customer(s),\n
    // Reset Your Password \n
    // Click On This Link to Reset Password  ".$pass."\n
    // Please log in to www.XLLDeal.com.\n
    // Looking forward to serve you again.\n\n

    // Thanks & Regards,\n
    // XLLDeal Team\n
    // Mumbai\n
    // (+91) 91634 88628\n
    // Look Good! Do Good.'
    // ";

    // $by ='From: xllldeal@gmail.com'."\r\n".
    //      'Reply-To: xllldeal@gmail.com'."\r\n" .
    //       'X-Mailer: PHP/' . phpversion();

    // mail($email, "Thank you", $mailbody, $by);

    //   echo "<script>window.open('reset_pass.php?name=T3JkZXIgU3VjZXNz','_self');</script>";
    
  }	
}
?>