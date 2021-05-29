<?php
session_start();
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
				  	<script type="text/javascript">
				    $(function() {
				        $('.gallery-grid a').lightBox();
				    });
				    </script>
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
			<?php
			if(isset($_SESSION['s_name'])){
			    echo '<a href="indexlogin.php" class="nav-item nav-link">Home</a>';
			    echo '<a href="services.php" class="nav-item nav-link active">Brands</a>';
                echo '<a href="booking.php" class="nav-item nav-link active">Booking</a>';
                echo '<a href="orders.php" class="nav-item nav-link active">Orders</a>';
                echo '<a href="logout.php" class="nav-item nav-link active">Logout</a>';

			} else {
			                echo '<a href="index.php" class="nav-item nav-link">Home</a>';
            				echo '<a href="about.html" class="nav-item nav-link">About</a>';
            				echo '<a href="services.php" class="nav-item nav-link active">Brands</a>';
            				echo '<a href="contact.php" class="nav-item nav-link">Contact</a>';
            				echo '<a href="login.php" class="nav-item nav-link">LogIn</a>';
            				echo '<a href="register.php" class="nav-item nav-link">Register</a>';
			}
			?>



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
		<div class="main-box">
				<div class="gallery-grids">
		          		<div class="gallery-grid">
							<a href="images/Chevrolet.jpg"><img src="images/Chevrolet.jpg" alt="" style="width: 375px; height: 210px;"></a>
						</div>
						
						<div class="gallery-grid">
							<a href="images/bmw.jpg"><img src="images/bmw.jpg" alt="" style="width: 375px; height: 210px;"></a>
						</div>
						
						<div class="gallery-grid">
							<a href="images/audi.jpg"><img src="images/audi.jpg" alt="" style="width: 375px; height: 210px;"></a>
						</div>
						
						
						
					</div>
					
					
					
					<div class="container">
                          <div class="row"> 

                            <div class="col-sm-4">
                                <a href="chervolet.php"><h3>Chevrolet</h3></a>
                            </div>

                            <div class="col-sm-4">
                                <a href="bmw.php"><h3>BMW</h3></a>
                            </div>

                            <div class="col-sm-4">
                                <a href="audi.php"><h3>Audi</h3></a>     
                            </div>

                          </div>
                    </div>
                    
                    <br><br><br>
					
					
					
					
					
					
					 <div class="gallery-grids">
						<div class="gallery-grid">
							<a href="images/Toyota.jpg"><img src="images/Toyota.jpg" alt="" style="width: 375px; height: 210px;"></a>
						</div>
						
				
						<div class="gallery-grid">
							<a href="images/Aston%20Martin.png"><img src="images/Aston%20Martin.png" alt="" style="width: 375px; height: 210px;"></a>
						</div>
						
						<div class="gallery-grid">
							<a href="images/Mitsubishi.jpg"><img src="images/Mitsubishi.jpg" alt="" style="width: 375px; height: 210px;"></a>
						</div>
						
						
					</div>
					<div class="container">
                          <div class="row"> 

                            <div class="col-sm-4">
                                <a href="toyota.php"><h3>Toyota</h3></a>
                            </div>

                            <div class="col-sm-4">
                                <a href="aston%20martin.php"><h3>Aston Martin</h3></a>
                            </div>

                            <div class="col-sm-4">
                                <a href="mitsubishi.php"><h3>Mitsubishi</h3></a>       
                            </div>

                          </div>
                    </div>
                    
                    <br><br><br>
					
					
					
					 <div class="gallery-grids">
						
						
						
						
						
						<div class="clear"> </div>
					</div>
			</div>
		</div>
</div>

<?php include "./footer.html"?>


</body>
</html>

    	
    	
            