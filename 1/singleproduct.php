  
<?php
//session_start();
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');

$product_details=getproductdetailsbyid(base64_decode($_GET['id']));
?>

<title>XLLDeal| <?php echo base64_decode($_GET['name']); ?> </title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //font-awesome icons -->

<!-- //js -->
 <script src='js/okzoom.js'></script>
  <script>
    $(function(){
      $('#example').okzoom({
        width: 175,
        height: 175,
        border: "1px solid black",
        shadow: "0 0 5px #000"
      });
    });
  </script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<link href="single/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--flex slider-->
<script defer src="single/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="single/css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->
<script src="single/js/imagezoom.js"></script>
<!-- //js -->

<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {

		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
		};

		$().UItoTop({ easingType: 'easeOutQuart' });

	});
</script>
<!-- //smooth-scrolling-of-move-up -->



<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div>
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<?php
							viewcategories();
						?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<div  class="w3l_banner_nav_right_banner3"
			style="background:url(images/16.jpg) no-repeat 0px 0px;
						background-size:cover;
	                    background-size:cover;
	                    -moz-background-size:cover;
	                   -o-background-size:cover;
	                   -ms-background-size:cover;">

			</div>

		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<!-- products -->
	<div class="products singleppt">	 
		<div class="container ">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<?php viewproductimagebyid(base64_decode($_GET['id'])); ?>
							</ul>
							<ol class="flex-control-nav flex-control-thumbs">
								
				
								<?php viewproductimg(base64_decode($_GET['id'])); ?>
								
							</ol>
						</div>
					</div>
					
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"><?php echo $product_details['product_name']; ?></h3>
						<p>Processing Time: Item will be shipped out within 2-3 working days. </p>
						<p><strong>Product Code</strong> :<?php echo $product_details['SKU']; ?></p>
						
						<p><strong>Stock Left:-</strong>
						<p><strong> <?php if($product_details['product_qty']>0)
						                    {
						                        echo "<font color='green' size='5'>In Stock</font>"; 
						                       
						                    }
						                    else
						                    {
						                        echo "<font color='red' size='5'>Out Of Stock</font>";
						                    }
						
						
						?></strong></p> 
						

						<!--div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 reviews</li>
								<li><a href="#">Add your review</a></li>
							</ul> 
						</div-->
						<div class="single-price">
							<ul>
								<li>Rs. <?php echo $product_details['selling']; ?>/- </li>  
								<li><del>Rs. <?php echo $product_details['price']; ?>/-</del></li> 
								<li><!--span class="w3off">10% OFF</span--></li> 
								<li><!--Ends on: June,5th--></li>
								<li><!--a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a--></li>
							</ul>	
							<ul>
							<!-- <input type="hidden" id="total_price" value='<?php echo $product_details['selling']?>' name="total_price">
							 -->
							 
								<div class="form-group">
							     
							     
																	      
								  <b><span id="message" style="color:green;"></span></b>
							    </div>
							    
								<button id="edit" class="btn btn-default" style="display:none;">Edit</button>
								

								
							</form>
							</ul>
						</div> 
						<p class="single-price-text"><?php echo $product_details['description']; ?></p>
						

						<form action="javascript:void(0);" method="post">
								<fieldset>
									<input type="hidden" name="amount" id="total_price" value="<?php echo $product_details['selling']; ?>" />
									<input type="hidden" name="productid" id="productid" value="<?php echo $product_details['product_id']; ?>" />

									<button type="submit" onclick="AddToCart()" name="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									<span id="txtStatus"></span>	
								
								</fieldset>
							</form>
						
					</div>
					
				   <div class="clearfix"> </div>  
				</div>
			</div> 
			
		</div>
	</div>
<!--//products--> 



<!-- brands -->
	<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
		<div class="container">
			<h3>You may also like</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<?php viewhomeproduct();  ?>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //brands -->

<?php
include_once('include/footer.php');
?>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>

<script>
function AddToCart()
{
	var a=document.getElementById("total_price").value;
	var b=document.getElementById("productid").value;
 	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtStatus").innerHTML = this.responseText;
            
        }
    };
    var url="addtocart.php?productid="+b+"&price="+a;
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}


 // function applycoupons($coupon_name,$id)
// {
// 	<?php
// 	global $con;
// 	$result=mysqli_query($con,"select * from coupons where coupon_name='$coupon_name'");
// 	while($row=mysqli_fetch_array($con))
// 	{
// 		$ccategory_id=$row['category_id'];
// 		$result1=mysqli_query($con,"select * from product_category");
// 		while($row1=mysqli_fetch_array($con))
// 		{
// 			$pcategory=$row1['category_id'];
// 			if($ccategory_id==$pcategory)
// 			{
// 				echo "Hello";
// 			}
// 			else
// 			{
// 				echo "Not Hello";
// 			}
// 		}
// 	}	
// 	?>
// } -->
</script>
</body>
</html>
