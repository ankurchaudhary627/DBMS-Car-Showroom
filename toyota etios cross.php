<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>etios</title>
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
				<div class="box_wrapper"><h1>Toyota Etios Cross  : (Rs  6.36 - 8.5 Lakh*)</h1></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="images/e-1.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/e-2.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/e-3.jpg" alt=" " height=210px width=560px/></a>				
									<a href="#" target="_blank"><img src="images/e-4.jpg" alt=" " height=210px width=560px/></a>
									
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/e-1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/e-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/e-3.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/e-4.jpg" alt=" " /></a></li>
									
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
                                           <td>Mileage	23.59 kmpl</td>
                                           <td>Engine	1364 cc</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Type: Diesel</td>
                                           <td>BHP: 67.05</td>

                                       </tr>
                                       <tr>
                                           <td>Service Cost: Rs 3,875/yr</td>
                                           <td>No. of cylinders : 4</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Tank: 45L</td>
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
                                           <td>Transmission : Manual/Automatic</td>
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
                                           <td>Bootspace :251L</td>
                                           <td>Air Bag: Yes</td>

                                       </tr>
                                   </tbody>
                            </table>
						</div><div class="clear"></div> 
					</div>
				
                    <table class="table  table-responsive table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-family: broadway; ">ETIOS CROSS highlights</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                     
Toyota has introduced a limited-run 'X-Edition' of the Etios Cross for the 2017 festive season. It is available in both diesel (1.5-litre) and petrol (1.2-litre only) engine options. The Etios Cross X-Edtion retails at roughly Rs 28,000 more than its respective regular petrol (G) and diesel (VD) variants. Check out more info here. 
The Toyota Etios Cross is priced in the range of Rs 6.36-7.87 lakh (ex-showroom New Delhi). It is available in two trim levels – G and V – and comes in four variants – V and G (petrol models) and GD and VD (diesel models). The highlight of the Etios Cross include standard dual-front airbags, ABS with EBD and front seat belts with pretensioners and force limiters. 
It comes with three engine options: two petrol and one diesel motor. All engines come mated to a 5-speed manual transmission. The Etios Cross delivers a claimed mileage of 18.16kmpl (1.2-litre petrol), 16.78kmpl (1.5-litre petrol) and 23.59kmpl (1.5-litre diesel). The Etios Cross competes with other cross-hatches such as the Hyundai i20 Active, VW Cross Polo, Honda WR-V, and the Fiat Avventura.
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

    	
    	
            