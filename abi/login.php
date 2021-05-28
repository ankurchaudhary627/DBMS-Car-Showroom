<?php
session_start();

if(isset($_POST["login"])){

if(!empty($_POST['your_email']) && !empty($_POST['psw'])) {
    
	$useremail=$_POST['your_email'];
	$pass=$_POST['psw'];
    $db = mysqli_connect("localhost:3307","root","","car_showroom");
    
	$query=mysqli_query($db,"SELECT * FROM customer WHERE email= '".$useremail."' AND pass='".$pass."'");
    
   	$numrows=mysqli_num_rows($query);
    
	if($numrows !=0)
	{
        while($row=mysqli_fetch_assoc($query))
        {
            $dbuseremail=$row['email'];
            $dbpass=$row['pass'];
            $dbusername=$row['name'];    
	    }

        
        if($useremail == $dbuseremail && $pass == $dbpass)
        {

            $_SESSION['s_name']= $dbusername;

            /* Redirect browser */
            header("Location: indexlogin.php");
        }
	} 
    else 
    {
	   $message = "Invalid credentials !";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}

} 
    else {
	echo "All fields are required!";
        }
}
?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v2 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style1.css"/>
</head>
<body class="form-v2">
	<div class="header">	
		<div class="wrap"> 
			<div class="header-bot">
				 <div class="logo">
					 <a href="index.html"><img src="images/logo.png" alt="" style="width:450px; height: 160px;"></a>
				 </div>
				 
				 
				 <div class="cart">
					
					
					<div class="menu-main">
					
					   <ul class="dc_css3_menu">
							 <li class="active"><a href="index.php">Home</a></li>
							 <li><a href="about.html">About</a></li>
							 <li><a href="services.php">Brands</a></li>
							 <li><a href="contact.php">Contact</a></li>
							 <li><a href="login.php">Login</a></li>
							 <li><a href="register.php">Signup</a></li>
						 </ul>
						
					 <div class="clear"></div>
					</div>	
								
				</div>	
				
				
				<div class="clear"></div> 
			   </div>
			  </div>	
		</div>

	<div class="page-content">
		<div class="form-v2-content">
			<div class="form-left">
				<img src="images/login.jpg" alt="form">
			</div>
			<form class="form-detail" action="#" method="post" id="myform">
				<h2>SIGN IN</h2>
				
				<div class="form-row">
					<label for="your_email">Your Email:</label>
					<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
								
				<div class="form-row">
					<label for="password">Password:</label>
					<input type="password" id="psw" name="psw" class="input-text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

				
				<div class="form-row-last">
					<input href="home.php" type="submit" name="login" class="register" value="Sign In">
				</div>
			</form>
		</div>
	</div>
    </div>
	
	
    <div class="footer">
	<div class="wrap">
	   <div class="footer-top">				
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
					<h3>Our Company</h3>
						<div class="f_menu">
							 <ul>
						          <li>This is a CAR selling dealer</li>
						     	  <li>Please read our Terms and Conditions </li>
						     </ul>
						</div>
				   </div>
				</div>
				
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Get in touch</h3>
						<ul class="follow_icon">
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon1.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon2.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon3.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon4.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon5.png" alt=""></a></li>
						</ul>
						<p>+1 111-111-1111</p>
						<span>support@autoexpress.com</span>
					</div>
				</div>
				<div class="clear"></div>
		</div>
	</div>
</div>		


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
    	
    	
            