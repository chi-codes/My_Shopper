<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>ONLINE SHOPPING STORE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/project.css" rel="stylesheet"/> 
		<script src="themes/js/project.js"></script>
	</head>
    <body>
		<div class="all">		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				<form action="index.php" method="post" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="E.g. Prada T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<!-- <li><a href="profile.php">Login</a></li> -->
							<li><a href="register.php">My Account</a></li>
							<a href="cart.php"><img id="cartIcon" style="height:40px;" src="themes/images/cart.jpeg">Your Cart</a>
							<li><a href="checkout.php">CheckOut</a></li>
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
							<li><a href="solar.php">Solar</a></li>
							<li><a href="products.php">General</a>
							<li><a href="accessories.php">Accessories</a></li>
					  	<li><a href="./art.php">Art-Works</a>
						</ul>
					</nav>
				</div>
      </section>
      	
			<section class="header_text sub">
			<img class="pageBanner" id='pageac' src="themes/images/carousel/banner-2.jpg" style='width:1000px; height:200px' alt="New products" >
				<h4 id="acce" style="color:#eb4800;font-size:30px;">Accessories</h4>
</section>
			<section class="main-content">
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.php"><img alt="" src="themes/images/cloth/wshoe1.jpg"></a><br/>
									<a href="product_detail.php" class="title">Gucci shoes</a><br/>
									<a href="#" class="category">Best Seller</a>
									<p class="price">#30,500</p>
									<button id='but'><a href='cart.php'><p>Buy</p></a></button>
								</div>
              </li> 
                    
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/cloth/Ear ring (6).jpg"></a><br/>
									<a href="product_detail.php" class="title">Simple Ear-ring</a><br/>
									<a href="#" class="category">Best Seller</a>
									<p class="price">#5,000</p>
									<button id='but'><a href='cart.php'><p>Buy</p></a></button>
								</div>
              </li>
              
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.php"><img alt="" src="themes/images/cloth/handbag2.jpg"></a><br/>
									<a href="product_detail.php" class="title">Nike bag</a><br/>
									<a href="#" class="category">Top Seller</a>
									<p class="price">#15,000</p>
									<button id='but'><a href='cart.php'><p>Buy</p></a></button>
								</div>
              </li>
              
							<li class="span3">
								<div class="product-box">												
									<span class="sale_tag"></span>
									<a href="product_detail.php"><img alt="" src="themes/images/cloth/handbag5.jpg"></a><br/>
									<a href="product_detail.php" class="title">Prada bag</a><br/>
									<a href="#" class="category">Top Seller</a>
									<p class="price">#25,000</p>
									<button id='but'><a href='cart.php'><p>Buy</p></a></button>
								</div>
              </li>
							<li class="span3">
								<div class="product-box">                                        												
									<a href="product_detail.php"><img alt="" src="themes/images/cloth/Glasses (1).png"></a><br/>
									<a href="product_detail.php" class="title">Simple Glasses</a><br/>
									<a href="#" class="category">Best Seller</a>
									<p class="price">#7,500</p>
									<button id='but'><a href='cart.php'><p>Buy</p></a></button>
								</div>
              </li>  
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/cloth/wshoe3.jpg"></a><br/>
									<a href="product_detail.php" class="title">Satire Shoes</a><br/>
									<a href="#" class="category">Best Seller</a>
									<p class="price">#20,000</p>
									<button id='but'><a href='cart.php'><p>Buy</p></a></button>
								</div>
              </li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/cloth/Shoe (1).jpg"></a><br/>
									<a href="product_detail.php" class="title">Sneakers</a><br/>
									<a href="#" class="category">Best Seller</a>
									<p class="price">#10,000</p>
									<button id='but'><a href='cart.php'><p>Buy</p></a></button>
								</div>
              </li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/cloth/Cap (2).jpg"></a><br/>
									<a href="product_detail.php" class="title">Nike Cap</a><br/>
									<a href="#" class="category">Top Seller</a>
									<p class="price">#10,800</p>
									<button id='but'><a href='cart.php'><p>Buy</p></a></button>
								</div>
              </li>
              
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/cloth/wshoe2.jpg"></a><br/>
									<a href="product_detail.php" class="title">Prada Shoes</a><br/>
									<a href="#" class="category">Best Seller</a>
									<p class="price">#25,000</p>
									<button id='but'><a href='cart.php'><p>Buy</p></a></button>
								</div>
							</li>
						</ul>								
            <hr>
            
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
          </div>
					<div class="span3 col" iframe='20px;30px'>
						<div class="block" id='fancybox-wrap'>	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.php">Satire Products</a></li>
								<li class="active"><a href="products.html">Solar Products</a></li>
								<li><a href="products.php">Gucci expendables</a></li>
								<li><a href="products.php">Prada Products</a></li>
								<li><a href="products.php">Calcio Underlisted</a></li>
								<li><a href="products.php">Home-Made</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURERS</li>
								<li><a href="products.php">Adidas</a></li>
								<li><a href="products.php">Nike</a></li>
								<li><a href="products.php">Home_Made</a></li>
								<li><a href="products.php">Sunking</a></li>
							</ul>
            </div>
						<div class="block" id='fancybox-wrap'>
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<img alt="" src="themes/images/cloth/wshoe4.jpg"><br/>
													<a href="product_detail.php" class="title">gucci Shoes</a><br/>
													<a href="#" class="category">Top Seller</a>
													<p class="price">#15,000</p>
													<button id='but'><a href='cart.php'><p>Buy</p></a></button>
												</div>
											</li>
										</ul>
                  </div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<img alt="" src="themes/images/cloth/handbag4.jpg"><br/>
													<a href="product_detail.php" class="title"> Gucci bag</a><br/>
													<a href="#" class="category">Best Seller</a>
													<p class="price">#17,500</p>
													<button id='but'><a href='cart.php'><p>Buy</p></a></button>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
            </div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<li>
									<a href="#" title="Best Seller Category">
										<img src="themes/images/cloth/Wrist Watch (4).jpg" alt="Best Category">
									</a>
									<a href="#">Calcio Watch</a>
                </li>
                
								<li>
									<a href="#" title="Top Seller Category">
										<img src="themes/images/cloth/handbag5.jpg" alt="Top Seller Category">
									</a>
									<a href="#">Prada Satire</a>
								</li>
								<li>
									<a href="#" title="Best Seller Category">
										<img src="themes/images/cloth/wshoe5.jpg" alt="Best Seller Category">
									</a>
									<a href="#">Sneakers</a>
								</li>   
							</ul>
						</div>
					</div>
				</div>
      </section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./about.php">About Us</a></li>
							<li><a href="./register.php.php">Contac Us</a></li>
							<li><a href="./cart.php">Your Cart</a></li>
							<li><a href="./profile.php">Login</a></li>							
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
						<p>Shopper is a standard online shopping site that is at your beck & call, Try us today!!!</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Instagram</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright @CHIKA 2019 with &hearts; All rights reserved.</span>
			</section>
		</div>
		</div>
		<style>
			.product-box:hover{
		background-color: #eb4800;
	}
	p:hover{
			background-color:black;
		}
		#ok{
		position:absolute;
		top: -3%;
	}
		#pageac {
			border-radius:20px 20px 20px 20px;
			opacity:0.9;
		}
		</style>
</body>
</html>