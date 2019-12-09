<?php
include('phplib/db_config.php');
$id=$_GET['id'];
$status="Cancelled";
$result=mysqli_query($con,"update xll_order set current_status='Cancelled' where order_id=".$id."");
   
		header("location:track.php?msg=101");
	
?>