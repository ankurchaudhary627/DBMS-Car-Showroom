<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>beat</title>
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
				<div class="box_wrapper"><h1>Chevrolet Beat : (Rs  3.92 - 5.88 Lakh*)</h1></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="images/b-1.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/b-2.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/b-3.jpg" alt=" " height=210px width=560px/></a>					
									<a href="#" target="_blank"><img src="images/b-4.jpg" alt=" " height=210px width=560px/></a>
									
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/b-1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/b-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/b-3.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/b-4.jpg" alt=" " /></a></li>
									
								</ul>
							</div>
						</div>
					   </div>
					</div>
						<div class="grid span_2_of_3">
							<table class="table  table-responsive table-striped table-hover table-condensed">
                                   <thead>
                                       <tr>
                                           <th class="text-center" style="font-family: broadway; ">Economy</th>
                                           <th class="text-center" style="font-family: broadway; ">Performance</th>
                                       </tr>
                                   </thead>

                                   <tbody class="text-center">
                                       <tr>
                                           <td>Mileage	25.40 kmpl</td>
                                           <td>Engine	936 cc</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Type: Diesel</td>
                                           <td>BHP: 56.74</td>

                                       </tr>
                                       <tr>
                                           <td>Service Cost: Rs 7,453/yr</td>
                                           <td>No. of cylinders : 4</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Tank: 35L</td>
                                           <td>No. of Gears : 5 Speed</td>

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
                                           <td>Transmission : Manual</td>
                                           <td>ABS : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Rear AC vents: No</td>
                                           <td>Driver Airbag : No</td>

                                       </tr>
                                       <tr>
                                           <td>Seating capacity: 5</td>
                                           <td>Parking Sensor : No</td>

                                       </tr>
                                       <tr>
                                           <td>Bootspace :170L</td>
                                           <td>Air Bag: Yes</td>

                                       </tr>
                                   </tbody>
                            </table>
						</div><div class="clear"></div> 
					</div>
				
                    <table class="table table-responsive table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-family: broadway; ">BEAT highlights</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                    Chevrolet India will discontinue sales of all of its products in India effective December 31, 2017. Its Indian facilities will be utilised for export markets only.
Chevrolet will launch the updated Beat hatchback in India in July 2017. Once launched, it will renew its rivalry with the Ford Figo, Hyundai Grand i10, Tata Tiago and the Maruti Suzuki Ignis. In January this year, we spied the upcoming 2017 Beat, completely undisguised, inside-out. The thoroughly updated hatch will share the platform and a few of its body panels with the current Beat. The dashboard is also borrowed with subtle changes and features a dual-tone layout – black and beige with silver and chrome accents – unlike the current all-black layout. The highlight on the inside is the addition of Chevrolet's latest MyLink infotainment system, which supports both Apple CarPlay and Google Android Auto (probably a seven-inch unit).  We expect the automaker to launch the 2017 Beat clan, which include the Beat Essentia (compact sedan), Beat and the Beat Activ (cross hatch) in the first half of 2017. Also, these cars are expected carry over the current set of engines, likely with a slight retune. 
The outgoing Beat is available with two engine options – 1.2-litre petrol (four-cylinder) and 1.0-litre diesel (three-cylinder). The petrol puts out 77.9PS/ 106.5Nm (ARAI certified fuel efficiency of 17.8kmpl) and the diesel churns out 57.1PS and 142.5Nm (ARAI certified fuel efficiency of 25.44kmpl). Both the engines come mated to a five-speed manual transmission. 
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

    	
    	
            