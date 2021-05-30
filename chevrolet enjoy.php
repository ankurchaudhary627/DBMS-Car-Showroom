<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>enjoy</title>
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
				<div class="box_wrapper"><h1>Chevrolet Enjoy : (Rs  4.99 - 7.3 Lakh*)</h1></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="images/en-1.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/en-2.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/en-3.jpg" alt=" " height=210px width=560px/></a>					
									<a href="#" target="_blank"><img src="images/en-4.jpg" alt=" " height=210px width=560px/></a>
									
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/en-1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/en-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/en-3.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/en-4.jpg" alt=" " /></a></li>
									
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
                                           <td>Mileage	18.20 kmpl</td>
                                           <td>Engine	1248 cc</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Type: Diesel</td>
                                           <td>BHP: 73.74</td>

                                       </tr>
                                       <tr>
                                           <td>Service Cost: Rs 8,453/yr</td>
                                           <td>No. of cylinders : 4</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Tank: 50L</td>
                                           <td>No. of Gears : 5 Speed</td>

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
                                           <td>Transmission : Manual</td>
                                           <td>ABS : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Rear AC vents: Yes</td>
                                           <td>Driver Airbag : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Seating capacity: 7</td>
                                           <td>Parking Sensor : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Bootspace :195L</td>
                                           <td>Air Bag: Yes</td>

                                       </tr>
                                   </tbody>
                            </table>
						</div><div class="clear"></div> 
					</div>
				
                    <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-family: broadway; ">ENJOY highlights</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                    Chevrolet India will discontinue sales of all of its products in India effective December 31, 2017. Its Indian facilities will be utilised for export markets only.
Global NCAP crash tested the Chevrolet Enjoy, which has received an overall safety score of zero stars for adult occupants and two stars for children. The variant tested doesn't get any safety tech like pretensioners in the front seatbelts, ISOFIX anchorages for child booster seats or airbags.
GM India has launched the facelifted version of Chevrolet Enjoy MPV at the price tag of INR 6.24 lacs. The top end variant can be purchased by paying INR 8.79 lacs (ex-showroom, Delhi). The 7-8 seater MPV now comes with subtle exterior changes with major interior modifications. The changes at the outside include chrome accents on the rear license plate and blacked out B-pillars. Interiors are now more opulent with leatherette fabric upholstery, three-spoke steering wheel with mounted audio controls, chrome touches on AC vents and gear knob and a new Chevrolet golden bowtie visible at the center. The car remains unchanged under the hood with the same set of SMARTECH diesel/petrol engines.
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

    	
    	
            