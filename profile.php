<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>ONLINE SHOPPING STORE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
	
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/flexslider.css" rel="stylesheet"/>		
	
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/style.css" rel="stylesheet"/>
		<link href="themes/css/bootstrap.css" rel="stylesheet"/>

		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="E.g. Gucci Wears">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							//<li><a href="profile.php">Login</a></li>
							<li><a href="register.php">My Account</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="checkout.php">CheckOut</a></li>
							<li><a href="location.php">location/Address</a></li>					
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
							<li><a href="./products.php">General Prodcuts</a>					
								<ul>
									<li><a href="./products.php">Latino Wears</a></li>									
									<li><a href="./products.php">Elegant Wears</a></li>
									<li><a href="./products.php">Varieties</a></li>									
								</ul>
							</li>															
							<li><a href="./accessories.php">Accessories</a></li>			
							<li><a href="./sport.php">Sport</a>
								<ul>									
									<li><a href="./products.php">Gifts and Tech</a></li>
									<li><a href="./products.php">Ties and Hats</a></li>
									<li><a href="./products.php">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./solar.php">Solar Products</a></li>
							<li><a href="./best_seller.php">Best Seller</a></li>
							<li><a href="./top_seller.php">Top Seller</a></li>
						</ul>
					</nav>
				</div>
      </section>

			<section class="header_text sub">
			<img class="pageBanner" id='cont' src="themes/images/carousel/City.jpg" style='width:1000px; height:200px' alt="New products" >
			//	<h4><span>Account-Info</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" style='text-align:center; color:brown; font-size:24px;'>Login Options</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>New Customer</h4>
												<p>By creating an account you will be able to shop faster, be up to date on an order's status and keep track of the orders you have previously made.</p>
												<form action="#" method="post">
														<label class="radio" for="register">
															<input type="radio" name="account" value="register" id="register" checked="checked">Register Account
														</label>
														<label class="radio" for="guest">
															<input type="radio" name="account" value="guest" id="guest">Guest Checkout
														</label>
														<br>
														<button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2" id= 'cret'>Continue</button>
                       </div>
                       
											 <div class="span6">
												<h4>Returning Customer</h4>
												<p>I am a returning customer</p>
												<form action="#" method="post">
													<div class="control-group">
															<label class="control-label"></label>
															<div class="controls">
															//	<input type="file" placeholder="please upload your image" id="username" class="input-xlarge">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Email</label>
															<div class="controls">
																<input type="text" placeholder="Enter your Email" id="username" require='require' class="input-xlarge">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Password</label>
															<div class="controls">
															<input type="password" placeholder="Enter your password" id="password" require='require' class="input-xlarge">
															</div>
														</div>
														<button id='continue' class="btn btn-inverse">Continue</button>
												</form>
											</div>
										</div>
									</div>
								</div>
              </div>
      			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./about.php">About Us</a></li>
							<li><a href="./register.php">Contact Us</a></li>
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
		<style>
      #cont {
				border-radius:20px 20px 20px 20px;
				opacity:0.7;
			}
			</style>
			<script>
				$('#cret').click(function () {
					document.location.href = "register.php";
				});

				$('#continue').click(function () {
					alert('Login Successful')
				})

				$('#continue').click(function (e) {
					e.preventDefault();
					document.location.href = "cart.php";
				});
		</script>	
    </body>
</html>