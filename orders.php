<?php 
session_start();
if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}
?>







<!DOCTYPE HTML>
<html>
<head>
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

                			<a href="indexlogin.php" class="nav-item nav-link ">Home</a>
                			<a href="services.php" class="nav-item nav-link ">Brands</a>
                            <a href="booking.php" class="nav-item nav-link active">Booking</a>
                            <a href="orders.php" class="nav-item nav-link">Orders</a>
                            <a href="logout.php" class="nav-item nav-link">Logout</a>
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
          <h2>Your order details
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
         
         
         
          <div class="s">
                 
                 
                  <table class="table table-bordered table-responsive table-striped table-hover table-condensed text-center " >
                    <tr>
                        <th class = "text-center">SALE ID</th>
                        <th class = "text-center">CUSTOMER ID</th>
                        <th class = "text-center">CAR  MODEL</th>
                        <th class = "text-center">DATE-TIME-OF-BOOK</th>
                        
                       </tr>
                              <?php
                                    $db=mysqli_connect("localhost","root","","car_showroom");
                                    $cname = $_SESSION["s_name"];

                                    // to get the customerid from his name  
                                   $getuserid= mysqli_query($db, "SELECT c_id from customer where name = '".$cname."'");
                                    $numrows =mysqli_num_rows($getuserid);
                                    if($numrows !=0)
                                    {
                                        while($row=mysqli_fetch_assoc($getuserid))
                                        {
                                            $dbuserid=$row['c_id'];
                                        }
                                    }
                      
                                    //to get his orders    
                                    $getorders= mysqli_query($db, "SELECT * from sale2 where customer_id = '".$dbuserid."'");
                                    $numrows3 =mysqli_num_rows($getorders);
                                    if($numrows3 !=0)
                                    {
                                        while($row3=mysqli_fetch_assoc($getorders))
                                        {
                                                        $dbsaleid=$row3['sale_id'];
                                                         $dbcustomerid=$row3['customer_id'];
                                                        $carnumber =$row3['carmodel'];
                                                        $date=$row3['ordertime'];
                                                
                                              // get his car model name
                                                $getusercarname = mysqli_query($db, "SELECT name from model where model = '".$carnumber."'");
                                                $numrows2 =mysqli_num_rows($getusercarname);
                                                if($numrows2 !=0)
                                                {
                                                    while($row2=mysqli_fetch_assoc($getusercarname))
                                                    {
                                                        $dbusercarname=$row2['name'];
                                                    }
                                                }

                                                        echo "<tr>" ;
                                                            echo "<td>$dbsaleid</td>";
                                                           echo "<td>$dbcustomerid</td>";
                                                           echo "<td>$dbusercarname</td>";  
                                                             echo "<td>$date</td>";
                                                            echo" </tr>";
                                        }
                                    }
                      else
                      {
                         $message = "You have no orders in your name yet ! !";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                      }
                                      
                            ?>
                   </table>

          </div>
          
         
          
          
          
          
          
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>







<?php include "./footer.html"?>

</body>
</html>






        
        
       
    	
    	
            