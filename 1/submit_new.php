<?php
include('phplib/db_config.php');
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  
  $select=mysql_query("update xll_user set password='$pass' where customer_email='$email'");
}
?>