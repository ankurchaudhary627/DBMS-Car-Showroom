<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>RS7</title>
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
				<div class="box_wrapper"><h1>Audi RS7 : (Rs  1.52 Cr*)</h1></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="images/rs7-1.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/rs7-2.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/rs7-3.jpg" alt=" " height=210px width=560px/></a>				
									<a href="#" target="_blank"><img src="images/rs7-4.jpg" alt=" " height=210px width=560px/></a>
									
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/rs7-1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/rs7-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/rs7-3.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/rs7-4.jpg" alt=" " /></a></li>
									
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
                                           <td>Mileage	13.30 kmpl</td>
                                           <td>Engine	3993 cc</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Type: Petrol</td>
                                           <td>BHP: 603</td>

                                       </tr>
                                       <tr>
                                           <td>Service Cost: Rs 40,975/yr</td>
                                           <td>No. of cylinders : 8</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Tank: 75L</td>
                                           <td>No. of Gears : 8 Speed</td>

                                       </tr>
                                   </tbody>
                            </table>
                            
                            <table class="table table-responsive table-striped table-hover table-condensed">
                                   <thead>
                                       <tr>
                                           <th class="text-center" style="font-family: broadway; ">Comfort</th>
                                           <th class="text-center" style="font-family: broadway; ">Safety</th>
                                       </tr>
                                   </thead>

                                   <tbody class="text-center">
                                       <tr>
                                           <td>Transmission : Automatic</td>
                                           <td>ABS : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Rear AC vents: Yes</td>
                                           <td>Driver Airbag : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Seating capacity: 4</td>
                                           <td>Parking Sensor : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Bootspace :538L</td>
                                           <td>Air Bag: Yes</td>

                                       </tr>
                                   </tbody>
                            </table>
						</div><div class="clear"></div> 
					</div>
				
                    <table class="table  table-responsive table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-family: broadway; ">RS7 highlights</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                    The RS 7 performance sportback features a bi-turbo 4.0-litre V8 that has been tweaked to produce 560PS and 700Nm of torque. The engine comes mated to an eight-speed automatic gearbox. The car is one of the most powerful models in Audi's range and has a 0-100kmph time of just 3.9 seconds. If blistering performance isn’t enough, Audi has just launched the RS 7 ‘Performance’! The sportback uses the same 4.0-litre TFSI bi-turbo V8 engine as the standard RS 7, but bumps the power output up from 560PS to 605PS, while the torque output goes up by a full 50Nm to 750Nm through the ‘Overboost’ torque-on-demand function. The result? While the standard RS 7 does the 0-100kmph sprint in 3.9 seconds, the Performance pack shaves it down to 3.7 seconds. Even the top speed isn’t limited to 250kmph and goes up to 305kmph.
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

    	
    	
            