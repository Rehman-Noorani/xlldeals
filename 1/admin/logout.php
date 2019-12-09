<?php
session_start();
unset($_SESSION['xllAdmin']);
header('Location:adminlogin.php?logout');

?>