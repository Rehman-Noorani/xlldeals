<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
include_once('phplib/controler.php');
?>s
<!-- //header -->


<!-- login -->
		<div class="w3_login">
			<h3>Login</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				 	<div class="form">
					<h2>Login to your account</h2>
					<form action="send_link.php" method="post">
					  <input type="text" name="email" placeholder="Email Address" required=" ">
					  <input type="submit" value="Send OTP" name="btnLogin">
					</form>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="send_link.php" method="post">
					  <input type="text" name="email" placeholder="Email Address" required=" ">
					 
					  <input type="submit" value="Send OTP"  name="send_mail">
					</form>
				  </div>
				 
				</div>
			</div>
		</div>
<!-- //login -->
<?php
include_once('include/footer.php');
?>