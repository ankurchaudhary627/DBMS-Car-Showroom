<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>m3</title>
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
				<div class="box_wrapper"><h1>BMW M Series M3 Coupe : (Rs 1.26 Cr*)</h1></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="images/m3-1.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/m3-2.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/m3-3.jpg" alt=" " height=210px width=560px/></a>					
									<a href="#" target="_blank"><img src="images/m3-4.jpg" alt=" " height=210px width=560px/></a>
									
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/m3-1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/m3-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/m3-3.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/m3-4.jpg" alt=" " /></a></li>
									
								</ul>
							</div>
						</div>
					   </div>
					</div>
						<div class="grid span_2_of_3">
							<table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                                   <thead>
                                       <tr>
                                           <th class="text-center" style="font-family: broadway; ">Economy</th>
                                           <th class="text-center" style="font-family: broadway; ">Performance</th>
                                       </tr>
                                   </thead>

                                   <tbody class="text-center">
                                       <tr>
                                           <td>Mileage	10.8 kmpl</td>
                                           <td>Engine	2979 cc</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Type: Petrol</td>
                                           <td>BHP: 429</td>

                                       </tr>
                                       <tr>
                                           <td>Service Cost: Rs 55,973/yr</td>
                                           <td>No. of cylinders : 6</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Tank: 60L</td>
                                           <td>No. of Gears : 7 Speed</td>

                                       </tr>
                                   </tbody>
                            </table>
                            
                            <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
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
                                           <td>Seating capacity: 5</td>
                                           <td>Parking Sensor : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Bootspace :480L</td>
                                           <td>Air Bag: Yes</td>

                                       </tr>
                                   </tbody>
                            </table>
						</div><div class="clear"></div> 
					</div>
				
                    <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-family: broadway; ">M3 highlights</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                    BMW is an iconic luxury car maker head-quartered in Germany, who has a large fleet of models in India. Recently it also added two new variants in its popular M series. Among those two, BMW M Series M3 Sedan is the four door variant, which is powered by a 3.0-litre petrol engine under the hood. The manufacturer claims that the vehicle can break the 100 Kmph speed mark in breathtaking 4.1 seconds, which is impressive. One of the most important aspect of this vehicle is its astounding external appearance owing to its sleek body structure, which is highlighted by aggressive cosmetics. Its roof along with B pillars and its alloy wheels have black accents, which further emphasizes its sporty stance. This highly efficient sedan has a slew of advanced features including BMW head-up display with 'M-Specific' views for gear indicator, engine revolution and shift light. At the same time, it is also blessed with features like a sophisticated infotainment system including an iDrive touch controller and park distance control function. This luxury sedan looks compact from its outside, there is an ample space available inside that can provide seating to at least five occupants. There is an extensive use of leather and metallic accents given inside the cabin that further adds to its majestic stance. Currently, it is positioned against the likes of Audi S4 and Mercedes Benz CLA 45 AMG in the Indian automobile market.
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
                                echo '<a href="booking.php" class="btn btn-primary" style =" padding-left: 110px;"><h3>BOOK THE CAR</h3> </a>';
                                }else
                                {
                                  echo '<a href="login.php" class="btn btn-primary" style =" padding-left: 110px;"><h3>BOOK THE CAR</h3> </a>';  
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

    	
    	
            