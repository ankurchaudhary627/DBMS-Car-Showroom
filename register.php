<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Car Showroom</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style_regs.css"/>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>

.modal-confirm {		
	color: #636363;
	width: 325px;
	font-size: 14px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #059142;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #059142;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	
}
</style>

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
				<img src="images/reg.jpg" alt="form">
			</div>
			<form class="form-detail" action="#" method="post" id="myform">
				<h2>Registration Form</h2>
				<div class="form-row">
					<label for="full-name">Full Name:</label>
					<input type="text" name="full_name" id="full_name" class="input-text" placeholder="ex: Lindsey Wilson">
				</div>
				<div class="form-row">
					<label for="your_email">Your Email:</label>
					<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<label for="address">Address:</label>
					<input type="text" name="address" id="address" class="input-text" required>
				</div>
				<div class="form-row">
					<label for="phone">Phone Number:</label>
					<input type="tel" id="phone" name="phone" class="input-text" pattern="[0-9]{10}" required>
				</div>
				<div class="form-row">
					<label for="password">Password:</label>
					<input type="password" id="psw" name="psw" class="input-text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

				</div>
				<div class="form-row">
					<label for="comfirm-password">Confirm Password:</label>
					<input type="password" name="confirm_password" class="input-text" id="confirm_password" class="input-text" required>
				</div>
				<div class="form-row-last">
				<a href="#myModal" class="trigger-btn" data-toggle="modal">
					<input href="login.php" type="submit" name="register" class="register" value="Register">
</a>
</div>


<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">Success!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Your have been registered sucessfully.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal" onclick="window.location.href='login.php'"><h2>LOGIN</h2></button>
			</div>
		</div>
	</div>
</div>
			</form>
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

	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
		    	password: "required",
		    	confirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		full_name: {
		  			required: "Please provide an username"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
				address: {
					required: "Please provide an address"	
				},
				phone: {
					required: "Please provide a phone number"
				},
		  		password: {
	  				required: "Please provide a password"
		  		},
		  		confirm_password: {
		  			required: "Please provide a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


<?php 
$db=mysqli_connect("localhost:3307","root","","car_showroom");

// REGISTER USER
if(isset($_POST['reg'])) 
{
    
    
	// receive all input values from the form
    $username = $_POST['full_name'];
	$useremail = $_POST['your_email'];
	$password = $_POST['psw'];
    $userphone = $_POST['phone'];
    $useraddress = $_POST['address'];
    
    if($useremail!='' || $username!=''|| $password!=''|| $userphone!=''|| $useraddress!='' )
    {
       $query = "CALL register('$username','$useremail','$password','$userphone','$useraddress')";
        
		mysqli_query($db, $query);
        
        $message = "registration done ! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
        
      
    }
	
		

		
	
	
}

 ?>