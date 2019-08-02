<!-- <!DOCTYPE html>
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
						<input type="text" class="input-block-level search-query" Placeholder="E.g. Flexing Top">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							//<li><a href="profile.php">Login</a></li>
							<li><a href="register.php">My Account</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="checkout.php">CheckOut</a></li>
						//	<li><a href="location.php">Location/Address</a></li>							
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
							<li><a href="./products.php">General Products</a>					
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
			<img class="pageBanner" id='pagech' src="themes/images/carousel/City.jpg" style='width:1000px; height:200px' alt="New products" >
				<h4 id='if'>Location Details<span></span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
								</div>
              
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" style='color:brown; font-size:16px;'>Location/Address Details</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Your Personal Details</h4>
												<div class="control-group">
												<form action='#' method='POST'>
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Email Address</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Telephone</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"></label>
													<div class="controls">
													//<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
											</div>
											<div class="span6">
												<h4>Your Address</h4>
												<div class="control-group">
													<label class="control-label">Company</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"></label>
													<div class="controls">
												//		<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Address:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"></label>
													<div class="controls">
													//	<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> City:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Postal Code:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span>Country:</label>
													<div class="controls">
														<select class="input-xlarge">
															<option value="1">Nigeria</option>
															<option value="2">Ghana</option>
															<option value="3">Cameroun</option>
															<option value="4">South_Africa</option>
															<option value="5">Uganda</option>
															<option value="6">Egypt</option>
														</select>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Region / State:</label>
													<div class="controls">
														<select name="zone_id" class="input-xlarge">
															<option value=""> --- Please Select --- </option>
															<option value="+234">Abuja</option>
															<option value="+233">Accra</option>
															<option value="+232">Yahonde</option>
															<option value="+231">Suncity</option>
															<option value="+235">Alexander</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
              </div>
              
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="control-group">
												<label for="textarea" class="control-label">Comments</label>
												<div class="controls">
													<textarea rows="3" id="textarea" class="span12"></textarea>
												</div>
											</div>									
											<button id='check' class="btn btn-inverse pull-right">Confirm order</button>
										</div>
									</div>
								</div>
							</div>
						</div>				
					</div>
				</div>
				</form>
      </section>
      			
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
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright @CHIKA 2019 with &hearts; All rights reserved.</span>
			</section>
		</div>
<style>
  #pagech{
		border-radius:20px 20px 20px 20px;
    opacity:0.7;
	}

	#if{
		position: relative;
	  bottom: 5rem;
	 text-align: center;
		color: white;
		font-size: 30px;
	}
</style>
<script>
      $('#check').click(function(e) {
				alert('Order Successful')
			}
			)
</Script>
    </body>
</html> -->