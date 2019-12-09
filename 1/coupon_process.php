 <?php
include 'phplib/db_config.pho';
global $con;
$coupon_code=$_POST['coupon_code'];
$query=mysqli_query($con,"select * from coupons where coupon_name='$coupon_code'");
$row=mysqli_fetch_array($query);
if (mysqli_num_rows($query)>0){
	echo "hello";
}
else{
	echo json_encode(array("statusCode"=>201));
}

?>