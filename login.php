<?php
session_start();

if(isset($_POST["login"])){

if(!empty($_POST['useremail']) && !empty($_POST['pass'])) {
    
	$useremail=$_POST['useremail'];
	$pass=$_POST['pass'];
    $db = mysqli_connect("localhost","root","root","car_showroom");
    
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












<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free Website Template" name="keywords">
	<meta content="Free Website Template" name="description">

	<!-- Template Stylesheet -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/header.css" rel="stylesheet" type="text/css" media="all" />

	<!-- CSS Libraries -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="navbar navbar-expand-lg bg-dark navbar-dark">
	<div class="container-fluid">
		<a href="index.php" class="navbar-brand">Auto Express</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
			<div class="navbar-nav ml-auto">
				<a href="index.php" class="nav-item nav-link">Home</a>
				<a href="about.html" class="nav-item nav-link">About</a>
				<a href="services.php" class="nav-item nav-link">Brands</a>
				<a href="contact.php" class="nav-item nav-link">Contact</a>
				<a href="login.php" class="nav-item nav-link active">LogIn</a>
				<a href="register.php" class="nav-item nav-link">Register</a>

			</div>
		</div>
	</div>
</div>
<div class="main">
	<div class="content-box1">
		<div class="wrap">
			<div class="banner2">

			</div>
		</div>
	</div>
</div>
<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
		<div class="text-center">
          <h2>SIGN IN
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
        <form class="text-center" action="login.php" method="post" >            
            <div ><br/>
               <label>Email</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="YOUR EMAIL" name="useremail" required >
             </div>
 
            <div ><br/>
               <label>PASSWORD</label>
      <input type="password" class="form-control transparent-input" size="50" placeholder="PASSWORD PLEASE" name="pass" required >
             </div> 
            <div><br/>
                <button type="submit" class="btn btn-warning" value="login" name="login">Sign in</button>
             </div>
         </form>     
          </div>
          
            <div class="col-md-3"></div>
        
        </div> 
		</div>
	</div>
</div>













<?php include "./footer.html"?>

</body>
</html>

    	
    	
            