<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>Sign up for our newsletter, and Get Offers</h3>
			</div>
			<div class="w3agile_newsletter_right">
			<h4 align="center" id="txtHint"></h4>
					<input type="email" name="Email" id="txtEmail" placeholder="Email For News Letter" required>
					<input type="submit" onclick="showHint()" value="subscribe now">
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
<!-- //newsletter -->
<div class="clearfix"></div>
<footer>
								<div class="container">
									<div class="footer-info w3-agileits-info">
										<div class="col-sm-4 address-right">
											<div class="col-xs-6 footer-grids">
												<h3>Categories</h3>
												<ul>
													<?php
													include('phplib/db_config.php');
													$result=mysqli_query($con,"select * from catrgories");
													while($row=mysqli_fetch_array($result))
													{
														echo "<li><a href='products.php?type=".base64_encode($row['category_id'])."&name=".base64_encode($row['category_name'])."'>".$row['category_name']."</a></li>";	
													}
													?>
												</ul>
											</div>
											<div class="col-xs-6 footer-grids">
												<h3>Quick Links</h3>
												<ul>
													<li>
														<a href="#">Lorem ipsum</a>
													</li>
													<li>
														<a href="#">Lorem ipsum</a>
													</li>
													<li>
														<a href="#">Lorem ipsum</a>
													</li>
													<li>
														<a href="#">Lorem ipsum</a>
													</li>
													<li>
														<a href="#">Lorem ipsum</a>
													</li>
													<li>
														<a href="#">Lorem ipsum</a>
													</li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="col-sm-4 footer-grids  w3l-socialmk">
											<h3>Download the App</h3>
											<div class="agileits_app-devices">
												<a href="#">
													<img src="images/1.png" alt="">
												</a>
												<a href="#">
													<img src="images/2.png" alt="">
												</a>
												<div class="clearfix"> </div>
											</div>
											<div class="social Sc_icon">
												<h5>Follow Us on</h5>
												<ul>
													<li>
														<a class="icon fb" href="#">
															<i class="fa fa-facebook"></i>
														</a>
													</li>
													<li>
														<a class="icon tw" href="#">
															<i class="fa fa-twitter"></i>
														</a>
													</li>
													<li>
														<a class="icon gp" href="#">
															<i class="fa fa-google-plus"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-sm-3 FooterInner">
											<ul class="FooterList">
												<li><span><img src="images/footer/gur.jpg" alt="guarantee"></span> <strong>100% ORIGINAL</strong>  guarantee for all products at XLLDeal.com </li>
												<li><span>	<img src="images/footer/returnpolicy.jpg" alt="guarantee"></span> <strong>Return within 30 days</strong> of receiving your order </li>
												<li><span>	<img src="images/footer/free.jpg" alt="guarantee"></span> <strong>Get free delivery</strong> for every order above Rs. 1000 </li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="agile-sometext">
										<div class="sub-some">
											<h5>Popular Searches</h5>
											<ul>
												<li>
													<a href="#">Aashirvaad</a>
												</li>
												<li>
													<a href="#">Amul</a>
												</li>
												<li>
													<a href="#">Bingo</a>
												</li>
												<li>
													<a href="#">Boost</a>
												</li>
												<li>
													<a href="#">Durex</a>
												</li>
												<li>
													<a href="#"> Maggi</a>
												</li>
												<li>
													<a href="#">Glucon-D</a>
												</li>
												<li>
													<a href="#">Horlicks</a>
												</li>
												<li>
													<a href="#">Head & Shoulders</a>
												</li>
												<li>
													<a href="#">Dove</a>
												</li>
												<li>
													<a href="#">Dettol</a>
												</li>
												<li>
													<a href="#">Dabur</a>
												</li>
												<li>
													<a href="#">Colgate</a>
												</li>
												<li>
													<a href="#">Coca-Cola</a>
												</li>
												<li>
													<a href="#">Closeup</a>
												</li>
												<li>
													<a href="#"> Cinthol</a>
												</li>
												<li>
													<a href="#">Cadbury</a>
												</li>
												<li>
													<a href="#">Bru</a>
												</li>
												<li>
													<a href="#">Bournvita</a>
												</li>
												<li>
													<a href="#">Tang</a>
												</li>
												<li>
													<a href="#">Pears</a>
												</li>
												<li>
													<a href="#">Oreo</a>
												</li>
												<li>
													<a href="#"> Taj Mahal</a>
												</li>
												<li>
													<a href="#">Sprite</a>
												</li>
												<li>
													<a href="#">Thums Up</a>
												</li>
												<li>
													<a href="#">Fair & Lovely</a>
												</li>
												<li>
													<a href="#">Lakme</a>
												</li>
												<li>
													<a href="#">Tata</a>
												</li>
												<li>
													<a href="#">Sunfeast</a>
												</li>
												<li>
													<a href="#">Sunsilk</a>
												</li>
												<li>
													<a href="#">Patanjali</a>
												</li>
												<li>
													<a href="#">MTR</a>
												</li>
												<li>
													<a href="#">Kissan</a>
												</li>
												<li>
													<a href="#"> Lipton</a>
												</li>
											</ul>
											<div class="AnyConcern">
												<p>In case of any concern, <a href="#"> Contact Us </a></p>
											</div>
											<div class="rights">
												<p>©2019 www.XLLDeal.com. All rights reserved.</p>
											</div>
										</div>
										<div class="sub-some">
											<h5>Online Shopping</h5>
											<p>Order online. All your favourite products from the low price online supermarket for grocery home delivery in Delhi,
												Gurgaon, Bengaluru, Mumbai and other cities in India. Lowest prices guaranteed on Patanjali, Aashirvaad, Pampers, Maggi,
												Saffola, Huggies, Fortune, Nestle, Amul, MamyPoko Pants, Surf Excel, Ariel, Vim, Haldiram's and others.</p>
											</div>
											<div class="sub-some">
												<h5>Shop online with the best deals & offers</h5>
												<p>Now Get Upto 40% Off On Everyday Essential Products Shown On The Offer Page. The range includes Grocery, Personal Care,
													Baby Care, Pet Supplies, Healthcare and Other Daily Need Products. Discount May Vary From Product To Product.</p>
												</div>
												<div class="sub-some child-momu">
													<h5>Payment Method</h5>
													<ul>
														<li>
															<img src="images/pay2.png" alt="">
														</li>
														<li>
															<img src="images/pay1.png" alt="">
														</li>
														<li>
															<img src="images/pay4.png" alt="">
														</li>
														<li>
															<img src="images/pay6.png" alt="">
														</li>
														<li>
															<img src="images/pay3.png" alt="">
														</li>
														<li>
															<img src="images/pay7.png" alt="">
														</li>
														<li>
															<img src="images/pay8.png" alt="">
														</li>
													</ul>
												</div>
											</div>
										</div>
									</footer>
<!-- //footer -->
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

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	function showHint() {
		var str=document.getElementById("txtEmail").value;
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "sendnewsletter.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<!--script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script-->
</body>
</html>
