<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>lancer</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
   
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
</head>
<body>
<?php include 'header.php';?>

<div class="header-bottom">
	<div class="wrap">
		<div class="single">
				<div class="box_wrapper"><h1>Mitsubishi Lancer : (Rs  6.97 Lakh*)</h1></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="images/l-1.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/l-2.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/l-3.jpg" alt=" " height=210px width=560px/></a>					
									<a href="#" target="_blank"><img src="images/l-4.jpg" alt=" " height=210px width=560px/></a>
									
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/l-1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/l-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/l-3.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/l-4.jpg" alt=" " /></a></li>
									
								</ul>
							</div>
						</div>
					   </div>
					</div>
						<div class="grid span_2_of_3">
							<table class="table table-responsive table-striped table-hover table-condensed">
                                   <thead>
                                       <tr>
                                           <th class="text-center" style="font-family: broadway; ">Economy</th>
                                           <th class="text-center" style="font-family: broadway; ">Performance</th>
                                       </tr>
                                   </thead>

                                   <tbody class="text-center">
                                       <tr>
                                           <td>Mileage	11.49 kmpl</td>
                                           <td>Engine	1998 cc</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Type: Petrol</td>
                                           <td>BHP: 114.5</td>

                                       </tr>
                                       <tr>
                                           <td>Service Cost: Rs 13,973/yr</td>
                                           <td>No. of cylinders : 4</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Tank: 59L</td>
                                           <td>No. of Gears : 5 Speed</td>

                                       </tr>
                                   </tbody>
                            </table>
                            
                            <table class="table  table-responsive table-striped table-hover table-condensed">
                                   <thead>
                                       <tr>
                                           <th class="text-center" style="font-family: broadway; ">Comfort</th>
                                           <th class="text-center" style="font-family: broadway; ">Safety</th>
                                       </tr>
                                   </thead>

                                   <tbody class="text-center">
                                       <tr>
                                           <td>Transmission : Manual</td>
                                           <td>ABS : No</td>

                                       </tr>
                                       <tr>
                                           <td>Rear AC vents: No</td>
                                           <td>Driver Airbag : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Seating capacity: 4</td>
                                           <td>Parking Sensor : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Bootspace :230</td>
                                           <td>Air Bag: No</td>

                                       </tr>
                                   </tbody>
                            </table>
						</div><div class="clear"></div> 
					</div>
				
                    <table class="table  table-responsive table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-family: broadway; ">LANCER highlights</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                     
Japanese Auto manufacturer Mitsubishi Motors has launched its popular mid segment sedan model Mitsubishi Lancer in Indian market, as a joint venture with leading Indian auto maker Hindustan Motors. Mitsubishi Lancer is a luxurious sedan model which is packed with an array of advanced features. Mitsubishi Lancer is a stylish car which is loaded with lots of styling features at both exteriors and interiors of the car. Mitsubishi Lancer is available in Indian market with two variants – one with petrol engine and another one is packed with diesel engine. All variants of Mitsubishi Lancer are available in the price range of Rs 7.33 lacs to Rs 8.11 lacs (as ex-showroom prices). This price range is looking competitive for this segment but still Mitsubishi Lancer is facing tough competition with other cars of this segment like Honda City, Fiat Linea and Maruti SX4.
                                </td>
                            </tr>
                        </tbody>
            </table>
            <div class="container">
                          <div class="row"> 

                            <div class="col-sm-4">
                            </div>

                            <div class="col-sm-4">
                               <?php
                                if(isset($_SESSION['s_name']))
                                {
                                echo '<a href="booking.php" class="btn btn-primary" style =" padding-left: 10px;"><h3>BOOK THE CAR</h3> </a>';
                                }else
                                {
                                  echo '<a href="login.php" class="btn btn-primary" style =" padding-left: 10px;"><h3>BOOK THE CAR</h3> </a>';
                                }
                                ?>
                            </div>

                            <div class="col-sm-4">       
                            </div>

                          </div>
                    </div>	
		</div>
	</div>
</div>
<?php include "./footer.html"?>

</body>
</html>

    	
    	
            