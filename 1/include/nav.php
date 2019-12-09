<body>
	<?php
	include_once('phplib/view.php');
	?>
<!-- header -->
<div class="container inner">
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="offer.php">Special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="search.php" method="get">
				<input type="text" name="search" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<!-- <div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account <span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">

								<?php
								// 	if(isset($_SESSION['UserEmail']) && isset($_SESSION['UserFullName']))
								// 	{
								// 		echo "
								// 			<li><a href='order.php?name=WW91ciBPcmRlciBIaXN0b3J5'>Order History</a></li>
								// 			<li><a href='myaccount.php?name=TXkgQWNjb3VudA=='>Account</a></li>
								// 			<li><a href='order.php?name=WW91ciBPcmRlciBIaXN0b3J5'>Track Order</a></li>
								// 			<li><a href='logout.php'>Log Out</a></li>
								// 		";
								// 	}
								// 	else
								// 	{
								// 		echo "
								// 			<li><a href='login.php?name=".base64_encode('User Login')."'>Login</a></li>
								// <li><a href='register.php?name=".base64_encode('Create New Account')."'>Sign Up</a></li>
								// 		";
									//}
								?>

							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
		 -->
		<div class="w3l_header_right1">
			<h2><a href="contact.php">Contact</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop();
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });

	});
	</script>
<!-- //script-for sticky-nav -->
<header>
<div class="container">
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-2 logo_agile">
				<a href="index.php">
					<img src="images/logo.png" alt="XLLDeal" title="XLLDeal">
				</a>
			</div>
			<!-- header-bot -->
			<div class="col-md-10 header">
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="Search Products..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- header lists -->
					<?php
					if(isset($_SESSION['UserEmail']) && isset($_SESSION['UserFullName']))
						{
						?>
				<ul>
					<li>
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
							<span class="fa fa-map-marker" aria-hidden="true"></span><a href='order.php?name=WW91ciBPcmRlciBIaXN0b3J5'> Deivered </a></a>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal1">
								<span class="fa fa-truck" aria-hidden="true"></span><a href='order.php?name=WW91ciBPcmRlciBIaXN0b3J5'>Track Order</a></a>
							</li>

							<li>
								<a href="#" data-toggle="modal" data-target="#myModal1">
									<span class="fa fa-user-o" aria-hidden="true"></span><a href='logout.php'> Logout</a> </a>
								</li>
								<li>
									<a href="#" data-toggle="modal" data-target="#myModal2">
										<span class="fa fa-pencil-square-o" aria-hidden="true"></span> <a href='myaccount.php?name=TXkgQWNjb3VudA=='>Account</a> </a>
									</li>
									<li>	
									<div class="top_nav_right">
										<div class="wthreecartaits wthreecartaits2 cart cart box_1">
											<form action="cart.php?name=Q2FydA==" method="post" class="last">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="display" value="1">
												<button class="w3view-cart" type="submit" name="submit" value="">
													<i class="fa fa-shopping-cart	" aria-hidden="true" style="color: #ff5722;"></i>

												</button>
												<span class="cart-price-label">
													<div class="Cartinner">
														<img class="rupee-svg-icon img-responsive" src="images/rupees.svg" alt="rupee">
														<span id="header-cart-total"><?php $total=homecart(); echo $total[1]; ?></span>
													</div>
												</span>
											</form>
										</div>
									</div></li>
								</ul>
								<?php
								}
								else 
									{ 
								?>
								<ul>
					<li>
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
							<span class="fa fa-map-marker" aria-hidden="true"></span><a href='login.php'> Deivered </a></a>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal1">
								<span class="fa fa-truck" aria-hidden="true"></span><a href='login.php'>Track Order</a></a>
							</li>

							<li>
								<a href="#" data-toggle="modal" data-target="#myModal1">
									<span class="fa fa-user-o" aria-hidden="true"></span> <a href='login.php'>Sign In </a></a>
								</li>
								<li>
									<a href="#" data-toggle="modal" data-target="#myModal2">
										<span class="fa fa-pencil-square-o" aria-hidden="true"></span><a href='register.php'> Sign Up </a></a>
								</li>
								<li>	
									<div class="top_nav_right">
										<div class="wthreecartaits wthreecartaits2 cart cart box_1">
											<form action="cart.php?name=Q2FydA==" method="post" class="last">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="display" value="1">
												<button class="w3view-cart" type="submit" name="submit" value="">
													<i class="fa fa-shopping-cart	" aria-hidden="true" style="color: #ff5722;"></i>

												</button>
												<span class="cart-price-label">
													<div class="Cartinner">
														<img class="rupee-svg-icon img-responsive" src="images/rupees.svg" alt="rupee">
														<span id="header-cart-total"><?php $total=homecart(); echo $total[1]; ?></span>
													</div>
												</span>
											</form>
										</div>
									</div></li>	
								</ul>
								<?php
								}
								?>

								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</header>


			<div class="ban-top">
							<div class="container">

								<div class="agileits-navi_search">
									<form action="#" method="post">
										<select id="agileinfo-nav_search" name="agileinfo_search" required="">
											<option value="">All Categories</option>
											<option value="Kitchen">Categories 1</option>
											<option value="Household">Categories 2</option>
										</select>
									</form>
								</div>
								<div class="top_nav_left">
									<nav class="navbar navbar-default">
										<div class="container-fluid">
											<!-- Brand and toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
												aria-expanded="false">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>
										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
											<ul class="nav navbar-nav menu__list">
												<li class="active">
													<a class="nav-stylehead" href="index.php">Farmer's Market
														<span class="sr-only">(current)</span>
													</a>
												</li>
												<li class="">
													<a class="nav-stylehead" href="#">Fish & Seafood</a>
												</li>

												<li class="">
													<a class="nav-stylehead" href="#">Poultry</a>
												</li>

												<li class="">
													<a class="nav-stylehead" href="#">Mutton</a>
												</li>
												<li class="">
													<a class="nav-stylehead" href="#">Steaks & Fillet</a>
												</li>
												<li class="">
													<a class="nav-stylehead" href="#">Marinated</a>
												</li>
											</ul>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a></li>
				<li><?php if(isset($_GET['name'])){echo "<span>|</span>".base64_decode($_GET['name']);} ?></li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
