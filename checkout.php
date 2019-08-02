<?php 
require('connect.php');

if(isset($_POST['sub'])){

    $email=  addslashes(htmlentities( $_POST['email']));
    $password = addslashes(htmlentities( $_POST['password']));
    
    $pw_enc = md5($password);

    $query =" select * from customer_info where Email='$email' and Password ='$password' ";

    $query_check = $connect->query($query);

    $num_row = $query_check->rowCount();

    if( $num_row == 1){
        $result = $query_check->fetch(PDO::FETCH_BOTH);
        $email =  $result['Email'];     
        $_SESSION['user_id'] =  $email;

        echo "<script> 
        alert('Login Successful !');
       window.location.replace('index.php');
         </script>";

    }else{

        echo "<script>  alert('Invalid Email OR Password');</script>";
    }
}

?>




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
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				<form action="best_seller.php" method="post" class="search_form">
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
			<img class="pageBanner" id='pagech' src="themes/images/carousel/banner-2.jpg" style='width:1000px; height:200px' alt="New products" >
				<h4 id='if'>CheckOut</h4>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">
										<div class="row-fluid">
											<div class="span6">
												<h4>New Customer</h4>
												<p>By creating an account you will be able to shop faster, be up to date on an order's status and keep track of the orders you have previously made.</p>
												<form action="register.php" method="post">
														<label class="radio" for="register">
															<input type="radio" name="account" value="register" id="register" checked="checked">Register Account
														</label>
														<br>
														<button id="you" class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">Continue</button>
												</form>
											 </div>
											 <div class="span6">
												<h4>Returning Customer</h4>
												<form action="#" method="post">
														<div class="control-group">
															<label class="control-label">Email</label>
															<div class="controls">
																<input type="text" name='email' required='required.' placeholder="Enter your username" id="username" class="input-xlarge">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Password</label>
															<div class="controls">
															<input type="password" name='password' required='required.' placeholder="Enter your password" id="password" class="input-xlarge">
															</div>
														</div>
														<button id='succ' name='sub' class="btn btn-inverse">Continue</button>
														<div //style='float:right; /margin-right:2rem;' class='money'>
														<label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="e.g- Chika">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="e.g- 1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="e.g- September">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="e.g- 2020">
                <label for="cvv">CVV</label>
								<input type="text" id="cvv" name="cvv" placeholder="e.g -352">
								<button id="hey" class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">Submit</button>
										</div>
							<h3 style='text-align:center;'>Payment!!!!!!!</h3>
            <label for="fname"style='text-align:center;font-size:30px;'>Accepted Cards</label>
						<img style='padding-left:2rem;'src="themes/images/payment1.png">
												</form>
											</div>
										</div>
									</div>
								</div>
              </div>
  <section style='margin-left:4.5rem; margin-right:4.5rem;' id="footer-bar">
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
    opacity:0.9;
  }
  
      #if{
		position: relative;
	  /* bottom: 5rem; */
	 text-align: center;
		color: #eb4800;
		font-size: 30px;
	}
	.money{
		float: right;
		margin-right: 3rem;
		margin-top:8rem;
    font-size: 24px;
	}
	 </style>
	 <script>
	 $("#hey").click(function(e){
  alert('Purchase Successful')
})
</script>
	
</body>
</html>      