<?php
include('phplib/db_config.php');
if($_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];

  $select=mysql_query("select  customer_email,password from xll_user where md5(email)='$email' and md5(password)='$pass'");
  if(mysql_num_rows($select)==1)
  {
    ?>
    <form method="post" action="submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
?>