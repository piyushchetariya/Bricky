<?php
session_start();
   if(!isset($_SESSION['name']))
   {
      header("location:login.php");
   }
else{
	
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css"> 
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="resource/css/style.css">
        <link rel="stylesheet" type="text/css" href="resource/css/query.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="resource/css/logincss.css">
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"> </script>
        <title>BRICKY</title>
        <script type="text/javascript">
			$(document).ready(function(){
            $(".mobile-nav").click(function(){
            $(".main-nav").toggle(200);
               });
              });
		</script>
    </head>
    <body>
        <nav>
            <div class="row">
                 <img src="resource/img/lg2.JPG" alt="Bricky.com" class="logo">
                 <ul class="main-nav">
                    <li><a  href="index.php">HOME</a></li>
                    <li><a  href="allproducts.php">ALL PRODUCTS</a></li>
                    <li><a  href="order.php">MY ORDER</a></li>
                    <li><a  href="cart.php">CART</a></li>
                    <li><a  href="myaccount.php">MY ACCOUNT</a></li>
					 <li><a  href="#">WELCOME <?php
					 echo $_SESSION['name'];
					 ?></a></li>
					 
					 <li><a  href="logout.php">LOGOUT</a></li>
                 </ul>
				<a class="mobile-nav js--mobile-nav"><i class="fa fa-bars"></i></a>
            </div>
        </nav>
        <header>
			<section class="login-form">
				<div class="login-box2">
					<h3 align="center">POST  MATERIAL</h3>
					<form name="eqptreg form" action="postmat2.php" method="post">
					<div class="textbox">
						<i class="fa fa-user"></i>
						<input type="text" placeholder="Full Name" id="fullname" name="fullname">
					</div>
					<div class="textbox">
						<i class="fa fa-phone">></i>
						<input type="number" placeholder="Mobile Number" id="number" name="number" maxlength="10">
					</div>
					<div class="textbox">
						<i class="fa fa-envelope"></i>
						<input type="email" placeholder="Email Address" id="email" name="email">
					</div>
					<div class="textbox">
						<i class="fa fa-envelope"></i>
						<select id="mattype" name="mattype" >
							<option selected disabled>Material Type</option>
							<option value="Bricksandblock">Bricks & Blocks</option>
							<option value="Cement">Cement</option>
							<option value="Ceramics">Ceramics</option>
							<option value="Concret">Concret</option>
							<option value="chemical">chemical</option>
							<option value="glasshardware">Glass Hardware</option>
							<option value="plumbing">Plumbing</option>
							<option value="sand">Sand</option>
							<option value="steelbars">Steel Bars</option>
							<option value="wood">Wood</option>
							<option value="stone">Stone</option>
						</select>	
					</div>
					<div class="textbox">
						<i class="fa fa-table"></i>
						<input type="textbox" placeholder="Material Name" id="mattname" name="matname">
					</div>
					<div>
						<i class="fa fa-venus-mars"></i>
						<input type="number" placeholder="Make Year" name="year"  id="year" min="1990" max="2020">
					</div>
					<br>
					<br>
					<input class="loginbtn" type="submit" value="Sign up" name="submit">
						</form>
				</div>
			</section>
			
		</header>	
        <footer class="js==footer">
            <div class="row">
                <div class="col span-1-of-3">
                    <h3>USEFUL LINKS</h3>
                    <ul class="footer-nav">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="allproducts.php">ALL PRODUCTS</a></li>
                        <li><a href="order.php">MY ORDER</a></li>
                        <li><a href="cart.php">CART</a></li>
                        <li><a href="myaccount.php">MY ACCOUNT</a></li>
                        <li><a href="allproducts.php">HIRE SERVICE</a></li>
                      <li><a href="#">POST SERVICE</a></li> 
                    </ul>
                    
                </div>
                <div class="col span-1-of-3">
                    <h3>ABOUT US</h3>
                    <p class="about">Bricky is a online platform which aims to create fair priced,Transparent and User Friendly construction equipment renting ecosystem,It facilate the equipment rental across india with the equipment base spred over 30,000+ equipments. </p>
                    
                </div>
                <div class="col span-1-of-3">
                   <h3>CONTACT US</h3>
                    <ul class="social">
                    <li><a href="#"><i class="fa fa-phone">  +91-8264197211</i></a></li>
                    <li><a href="#"><i class="fa fa-envelope"> Hackerahir@gmail.com</i></a></li>
                    </ul>    
                    <br>
                    <ul class="social2">
                    <li><a href="https://www.facebook.com/HACKERAHIR"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="https://twitter.com/hacker_ahir"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/hacker__ahir/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/piyush-chetariya-21a3a3193/"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    

                </div>
                
            </div>

        </footer>
		<script type="text/javascript" >
			$(window).on("scroll",function(){
				if($(window).scrollTop()){
					$('nav').addClass('sticky');
				}
				else{
					$('nav').removeClass('sticky');
				}
			})
		</script>
       
    </body>


</html>


