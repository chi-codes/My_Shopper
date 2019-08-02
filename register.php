<?php 
require('connect.php');

if(isset($_POST['log'])){

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



if( isset( $_POST['reg']) ){

	 $fname =  $_POST['fname'];
	 $lname =  $_POST['lname'];
   $email =  $_POST['email'];
   $password =  $_POST['password'];
   $address = $_POST['address'];
   $phone =  $_POST['phone'];


	 $fname_s =  addslashes( htmlentities( $fname) );
	 $lname_s =  addslashes( htmlentities( $lname) );
   $email_s =  addslashes( htmlentities( $email) );
   $password_s =  addslashes( htmlentities( $password) );
   $address_s =  addslashes( htmlentities( $address) );
   $phone_s =  addslashes( htmlentities( $phone) );

 $query_save_rec ="insert into customer_info (First_Name, Last_Name, Email, Telephone, Address, Customer_Id, Password)
 values('$fname_s','$lname_s', '$email_s','$phone_s','$address_s','null','$password_s' )
 ";
 if( $query_run = $connect->query( $query_save_rec) ){
   

        echo "<script> alert(' REGISTERD SUCCESSFULLY! '); </script>";
    }else{

        echo "<script> alert('TRY AGAIN! '); </script>"; 
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
					<form action="products.php" method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="Eg. SatireT-sirt">
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
			<img class="pageBanner" id='regl' src="themes/images/carousel/banner-2.jpg" style='width:1000px; height:200px' alt="New products" >
				<h4 id='regO'><span>Register/Login</span></h4>
      </section>
      			
					<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong></span></h4>
						<form action="#" method="post">
							<input type="hidden" name="next" value="/">
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">
										<input type="text" placeholder="Enter your email" name='email'/ id="" required="required." class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" name='password'/ required="required."
										id="pwd" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" id='ok' name="log" value="Sign into your account">
									<hr>
									<p><a href="#" style='color:#eb4800;'>Recover Your Password?</a></p>
								</div>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Register</strong></span></h4>

						<form action="register.php" method="POST" class="form-stacked">

						<div class="control-group">
									<label class="control-label">First Name:</label>
									<div class="controls">
										<input type="text" placeholder="" name='fname' required='required.' class="input-xlarge">
									</div>
								</div>
						<div class="control-group">
									<label class="control-label">Last Name:</label>
									<div class="controls">
										<input type="text" placeholder="" name='lname' required='required.' class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email address:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your email" name='email' required='required.' class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" name='password' required='required.' class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Address/Location:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your address" name='address' required='required.' class="input-xlarge">
									</div>
									<div class="control-group">
									<label class="control-label">Phone:</label>
									<div class="controls">
										<input type="number" placeholder="Enter your phone_number" name='phone' required='required.' class="input-xlarge">
									</div>							                            
								<div class="control-group">
									<p>Please do provide valid details</p>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" id="yes" name='reg' class="btn btn-inverse large" type="submit" value="Create your account"></div>
						</form>					
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
		#regl {
				border-radius:20px 20px 20px 20px;
				opacity:0.9;
			}

			#regO {
				position: relative;
				/* bottom: 5rem; */
        text-align: center;
				color:#eb4800;
				font-size:30px;
			}
</style>

    </body>
</html>