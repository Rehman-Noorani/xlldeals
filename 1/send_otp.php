<?php
require "phplib/db_config.php";
$phno=$_POST['phno'];
$result1=mysqli_query($con,"select * from xll_user where customer_number=".$phno."");

	
	while($row=mysqli_fetch_assoc($result1))
	{
			$f=1;
			session_start();
			//$mno=$row['customer_number'];
			$_SESSION['txtEmail']=$row['customer_email'];
			$_SESSION['txtPassword']=$row['password'];
			$name=$row['customer_name'];
	}


$otp="";
		for($i=0;$i<5;$i++)
		{
				$otp.=rand(0,9);
		}
		
		setcookie("otp",$otp,time()+120);
		//echo "Hello,".$row['first_name']."Your On Time OTP is".$otp;
		//exit(0);
		//echo $mno;
		//exit(0);
		//sendSMS("9979202104","ganesh148",$mno,"Hello ,".$name." Your One Time OTP is ".$otp);
	

$url="https://www.way2sms.com/api/v1/sendCampaign";
$message = urlencode(" Your One Time OTP is $otp");// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=LMC8GDPG8R6HPE35PT3SS53MGVMGFYV1&secret=XFFU8JAGLE6TCSDZ&usetype=stage&phone=$phno&senderid=+918155091802&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//echo $result;



		header("location:otp_html.php?otp=".$otp);
?>