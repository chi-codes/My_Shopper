<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<title>ONLINE SHOPPING STORE</title>
		       <!-- My Imported dependency Css Pluggins  -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
											<!-- My Styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/project.css" rel="stylesheet"/>
							<!-- Imported dependency Scripts -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/project.js"></script>
	</head>
    <body>
			<div id="all">
			<div id="top-bar" class="container">
			<div class="row">
			<div class="span4">
				<form action="accessories.php" method="post" class="search_form">
				<input type="text" class="input-block-level search-query" Placeholder="Pls Search & Explore">
    </form>
   	</div>
	  	<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a class='drop' href="register.php">My Account</a>				
								<ul class='content'>
									<!-- <li><a href="./register.php">Logout</a></li>																		 -->
								</ul>
							</li>														
							<a href="cart.php"><img id="cartIcon" style="height:40px;" src="themes/images/cart.jpeg">Your Cart</a>
							<li><a href="checkout.php">CheckOut</a></li>
							<!-- <li><a href="location.php">Location/Address</a></li>						 -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
	<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
						<li><a href="top_seller.php">Top Seller</a></li>
							<li><a href="best_seller.php">Best Seller</a></li>

							<li><a href="sport.php">Sport</a>	
							<ul>									
									<li><a href="./products.php">Gifts and Tech</a></li>
									<li><a href="./products.php">Ties and Hats</a></li>
									<li><a href="./products.php">Cold Weather</a></li>
								</ul>
							</li>	
							<li><a href="solar.php">Solar</a></li>

							<li><a href="products.php">General</a>	
								<ul>
									<li><a href="./products.php">Latino Wears</a></li>									
									<li><a href="./products.php">Elegant Wears</a></li>
									<li><a href="./products.php">Varieties</a></li>									
								</ul>
							</li>		
							<li><a href="accessories.php">Accessories</a></li>
					  	<li><a href="./art.php">Art-Works</a>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-2.jpg"style='height:350px;'  alt="" />
							<!-- <div class="intro">
								<h1>Welcome To Shopper Stores</h1><br/><br/><br/>
								<p><span>Make Your Choice Freely</span></p><br/><br/>
								<p><span>On selected items online and in stores</span></p>
							</div> -->
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				We stand for top quality materials. Our genuine products always optimized items for commercial purposes. 
				<br/>Don't miss to use our cheap, affordable and best products.
			</section>
			<!-- <section class="header_text sub">
			<img class="pageBanner" id='pagec' src="themes/images/carousel/banner-1.jpg" style='width:1000px; height:300px' alt="New products">
      </section>
			<section class="header_text">
				We stand for top quality materials. Our genuine products always optimized items for commercial purposes. 
				<br/>Don't miss to use our cheap, affordable and best products.
			</section> -->
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
							<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<img src="themes/images/ladies/1.jpg" alt="">
														<p>Sliding Skirt & Top</p><br/>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#12,500</p>
														<button id='but' //style='width:50px;'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><img src="themes/images/cloth/Clothings8.jpg" alt=""></p>
														<p>Prada Shirt</p><br/>
														<a href="top_seller.php" class="category">Top Seller</a>
														<p class="price">#35,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
													<img src="themes/images/ART/art3.jpg" alt="">
														<p>Natural Painting</p><br/>
														<a href="products.php" class="category">Best Seller</a>
														<p class="price">#85,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
													<img src="themes/images/cloth/Solar22.jpg" alt="">
														<p>Sunking Solar Lantern</p><br/>
														<a href="top_seller.php" class="category">Top Seller</a>
														<p class="price">#14,500</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
												<img src="themes/images/cloth/Clothings4.jpg" alt="">
														<p>Designer Shirt</p><br/>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#25,500</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<img src="themes/images/ladies/6.jpg" alt="">
														<p>Transparent Long Top</p><br/>
														<a href="top_seller.php" class="category">Top Seller</a>
														<p class="price">#17,500</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
													<img src="themes/images/cloth/handbag3.jpg" alt="">
														<p>Variety Bags</p><br/>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#15,500</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
													<img src="themes/images/cloth/Clothings5.jpg" alt="">
														<p>Prada Shirt</p><br/>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#25,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
													<img src="themes/images/cloth/bootstrap-women-ware2.jpg" alt="">
														<p>Evening Nightie</p><br/>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#10,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
												<img src="themes/images/cloth/Wrist_Watch (5).jpg" alt="">
														<p>Calcio Watch</p><br/>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#35,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
													<img src="themes/images/cloth/Shoe (8).jpg" alt="">
														<p>Sued Shoes</p><br/>
														<a href="top_seller.php" class="category">Top Seller</a>
														<p class="price">#15,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
													<img src="themes/images/cloth/Ear ring (6).jpg" alt="">
														<p>Dangling Ear-ring</p><br/>
														<a href="top_seller.php" class="category">Top Seller</a>
														<p class="price">#5,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
												<img src="themes/images/cloth/handbag4.jpg" alt="">
														<p>Designer Bag</p><br/>
														<a href="top_seller.php" class="category">Top Seller</a>
														<p class="price">#30,500</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware3.jpg" alt="" /></a></p>
														<p>Evening Nightie</p><br/>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#11,500</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
												<img src="themes/images/cloth/wshoe1.jpg" alt="">
														<p>Prada Shoes</p><br/>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#25,500</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>
												</li>
												<li class="span3">
													<div class="product-box">
													<img src="themes/images/cloth/clothings3.jpg" alt="">
														<p>Gucci Shirt</p>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#25,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>	
												<li class="span3">
													<div class="product-box">
												<img src="themes/images/cloth/clothings6.jpg" alt="">
														<p>Gucci Shirt</p>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#15,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>	
												<li class="span3">
													<div class="product-box">
												<img src="themes/images/cloth/wshoe5.jpg" alt="">
														<p>Gucci Shoes</p>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#15,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>		
													<li class="span3">
													<div class="product-box">
												<img src="themes/images/cloth/handbag.jpg" alt="">
														<p>Gucci Handbag</p><br/>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#28,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>
												</li>	
												<li class="span3">
													<div class="product-box">
													<img src="themes/images/cloth/wshoe2.jpg" alt="">
														<p>Prada Shoes</p>
														<a href="best_seller.php" class="category">Best Seller</a>
														<p class="price">#21,000</p>
														<button id='but'><a href='cart.php'><p>Buy</p></a></button>
													</div>																																														
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>SHOPPER <strong>STORE</strong></h4>
										<p>Shopper Store is a Modern store For quality materials</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Terms and Condition Apply.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Reach us at any time to serve you better.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufacturers</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="#">About Us</a></li>
							<li><a href="register.php">Contact Us</a></li>
							<li><a href="./cart.php">Your Cart</a></li>
							<li><a href="./register.php">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Shopper is a standard online shopping site that is at your beck & call, Try us today!!!.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="Instagram" href="#">Instagram</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright @CHIKA 2019 &hearts; All rights reserved.</span>
     </section>
	</div>
			
		<style>
		.product-box:hover{
			background-color: #eb4800;
		}
			/* button{
			position:absolute;
			top: 3%;
		}
      p:hover{
				background-color:black;
			}  */
		</style>

		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>

    </body>
</html>