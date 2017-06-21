<!DOCTYPE html>

<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->



<!-- Mirrored from www.vasterad.com/themes/reneva/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2017 23:07:56 GMT -->

<head>



<!-- Basic Page Needs

	================================================== -->

	<meta charset="utf-8">

	<title>Services</title>



<!-- Mobile Specific Metas

	================================================== -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



<!-- CSS

	================================================== -->

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/colors/blue.css" id="colors">

	<link rel="stylesheet" href="css/main.css">





<!--[if lt IE 9]>

	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

	<![endif]-->
	<style type="text/css">
	
		.available-slot {
			cursor: pointer!important;
		}		
		.available-slot:hover{
			background: #000;
			color: #fff;
		}
		.booked-slot {
			background: #d31b1b ;
			color: #fff;
			cursor: default!important;
			text-decoration: line-through;
		}

		.selected-slot {
			background: #5f8c21;
			color: #fff;
		}
		.error {
			color: #d50000;
		}

	</style>


</head>



<body>



	<!-- Wrapper -->

	<div id="wrapper">



<!-- Header

	================================================== -->



	<div class="container">



		<div class="row">

			<div class="header">



				<div class="col-md-3 col-sm-12">

					<div id="logo">

						<a href="index.html"><img src="images/logo.png" alt=""></a>

					</div>

				</div>



				<div class="col-md-9 col-sm-12">

					<ul class="header-widget">

						<li>

							<i class="sl sl-icon-call-in"></i>

							<div class="widget-content">

								<span class="title">Questions?</span>

								<span class="data">0300 2498447 </span>

							</div>

						</li>



						<li>

							<i class="sl sl-icon-location"></i>

							<div class="widget-content">

								<span class="title">Our Office</span>

								<span class="data">1102 Park Avenue, Shahrah-E-Faisal</span>

							</div>

						</li>



						<li class="with-btn"><a href="wizard.php" class="button border medium">Request Service</a></li>

					</ul>

				</div>

				<div class="clearfix"></div>

			</div>

		</div>



	</div>





<!-- Navigation

	================================================== -->

	<div class="container">

		<div class="row">

			<div class="col-md-12">



				<!-- Mobile Navigation -->

				<div class="menu-responsive">

					<i class="fa fa-reorder menu-trigger"></i>

					<i class="fa fa-search search-trigger"></i>

					<form action="#" method="get" class="responsive-search">

						<input type="text" onblur="if(this.value=='')this.value='to search type and hit enter';" onfocus="if(this.value=='to search type and hit enter')this.value='';" value="to search type and hit enter" />

					</form>

				</div>



				<!-- Main Navigation -->

				<nav id="navigation">



					<!-- Search Form -->

					<div class="search-container">

						<form action="#" method="get">

							<input type="text" name="s" id="s" onblur="if(this.value=='')this.value='to search type and hit enter';" onfocus="if(this.value=='to search type and hit enter')this.value='';" value="to search type and hit enter" />

						</form>

						<div class="close-search"><a class="fa fa-times" href="#"></a></div>

					</div>



					<ul class="menu" id="responsive">



						<li class="dropdown" >

							<a href="index.html" class="current">Home</a>



						</li>





						<li class="dropdown" >

							<a href="#">Services</a>

							<ul>

								<li><a href="services-1.html">Services List 1</a></li>

								<li><a href="services-2.html">Services List 2</a></li>

								<li><a href="single-service-1.html">Single Service Page 1</a></li>

								<li><a href="single-service-2.html">Single Service Page 2</a></li>

							</ul>

						</li>





						<li class="dropdown" >

							<a href="blog.html">Blog</a>

						</li>



						<li><a href="contact.html">Contact uS</a></li>



						<li><a href="about.html">About Us</a></li>



				<!-- Search Icon

				<li class="search"><a href="#"><i class="fa fa-search"></i></a></li> -->



				<!-- Cart Icon

				<li class="cart-icon"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i><span class="cart-counter">1</span></a></li> -->



			</ul>

		</nav>

	</div>

</div>

</div>

<div class="clearfix"></div>





<!-- Slider

	================================================== -->







<!-- Footer

	================================================== -->

	<div class="margin-top-35"></div>

	<section id="request-service">

		<h2 class="text-center">

			Request a Service

		</h2>

		<div class="container">
			<form id="ser_form">
				<div class="row">

					<div class="col-md-6">
					<span class="error" id="select-ser-error" style="display: none">Please select a service</span>
						<select class="form-control" name="Select a Service" placeholder="Please select a service" id="ser_form_service">

							<option class="num" value="">Please select a Service</option>

							<optgroup label="Services">

								<option class="num" value="all_residential">Bike/Car tune-ups</option>

								<option class="num" value="10">Beauty Services</option>

								<option class="num" value="11">AC Services</option>

								<option class="num" value="12">Electrician Services</option>

								<option class="num" value="13">Plumber Services</option>

								<option class="num" value="14">Cab Services</option>

								<option class="num" value="15">Groccery Services</option>

							</optgroup>

						</select>

						<select class="form-control" id="ser_form_city" name="Select a Service" placeholder="Enter Your City">

							<option class="num" value="">-All-</option>

							<optgroup label="City">

								<option class="num" value="all_residential">Karachi</option>

								<option class="num" value="10">Lahore</option>

								<option class="num" value="11">Islamabad</option>

							</optgroup>

						</select>

					</div>

					<div class="col-md-6">

						<input type="text" name="" id="ser_form_address" placeholder="Enter Your Address (example : A-123,Block-12,F.B.Area,Gulberg)">

						<input type="text" name="" id="ser_form_coupon" placeholder="Add Coupon ( if any )">

					</div>

				</div>

				<div class="row">

					<div class="col-md-6">

						<label class="text-center" for=""><h4>Pick a date</h4></label>

						<div id="datepicker" class="custom-datepicker"></div>

					</div>

					<div class="col-md-6" id="demo2">

						<label class="text-center" for=""><h4>Available Time Slots</h4></label>

						<div class="view--block-tablet">

							<div class="timepicker block-center">

								<input type="hidden" name="timeSlotsData" class="timeslots-data"/>

								<h4>Morning</h4>

								<ul class="slots" id="slots">

									<li>

										<!-- <inp" value="1" type="radio" name="timeSlot"/> -->

										<label for="startdate-0" class="time_slot available-slot" id="time_slot_1">07:00 - 08:00</label>

									</li>

									<li>

										<!-- <input type="radio" name="timeSlot" value="2"/> -->

										<label for="startdate-1" class="time_slot available-slot" id="time_slot_2">08:00 - 09:00</label>

									</li>

									<li>

										<!-- <input type="radio" name="timeSlot" value="3"/> -->
										<label for="startdate-1" id="time_slot_3" class="time_slot available-slot">08:00 - 09:00</label>

									</li>

									<li>
										<!-- <input type="radio" name="timeSlot" value="4"/> -->

										<label for="startdate-3" class="time_slot available-slot" id="time_slot_4">10:00 - 11:00</label>

									</li>

									<li>

										<!-- <input type="radio" name="timeSlot" value="5"/> -->

										<label for="startdate-4" id="time_slot_5" class="time_slot available-slot">11:00 - 12:00</label>

									</li>

								</ul>

							</div>

							<div class="timepicker block-center">

								<h4>Afternoon</h4>

								<ul class="slots">

									<li>

										<!-- <input type="radio" name="timeSlot" value="6"/> -->

										<label for="startdate-0" class="time_slot available-slot" id="time_slot_6">12:00 - 13:00</label>

									</li>

									<li>

										<!-- <input type="radio" name="timeSlot" value="7"/> -->

										<label for="startdate-1" id="time_slot_7" class="time_slot available-slot">13:00 - 14:00</label>

									</li>

									<li>

										<!-- <input type="radio" name="timeSlot" value="8"/> -->

										<label for="startdate-2" class="time_slot available-slot" id="time_slot_8">14:00 - 15:00</label>

									</li>

									<li>

										<!-- <input type="radio" name="timeSlot" value="9"/> -->

										<label for="startdate-3" id="time_slot_9" class="time_slot available-slot">15:00 - 16:00</label>

									</li>

									<li>

										<!-- <input type="radio" name="timeSlot" value="10"/> -->

										<label for="startdate-4" class="time_slot available-slot" id="time_slot_10">16:00 - 17:00</label>

									</li>

								</ul>

							</div>

							<div class="timepicker block-center">

								<h4>Evening</h4>

								<ul class="slots">

									<li>

										<!-- <input type="radio" name="timeSlot" value="11"/> -->

										<label for="startdate-0" id="time_slot_11" class="time_slot available-slot">17:00 - 18:00</label>

									</li>

									<li>

										<!-- <input type="radio" name="timeSlot" value="12"/> -->

										<label for="startdate-1" class="time_slot available-slot" id="time_slot_12">18:00 - 19:00</label>

									</li>

									<li>

										<!-- <input type="radio" name="timeSlot" value="13"/> -->

										<label for="startdate-2" id="time_slot_13" class="time_slot available-slot">19:00 - 20:00</label>

									</li>

									<li>

										<!-- <input type="radio" name="timeSlot" value="14"/> -->

										<label for="startdate-3" class="time_slot available-slot" id="time_slot_14">20:00 - 21:00</label>

									</li>

									<li>

										<!-- <input type="radio" name="timeSlot" value="15"/> -->

										<label for="startdate-4" id="time_slot_15" class="time_slot available-slot">21:00 - 22:00</label>

									</li>

								</ul>

							</div>

							<div class="row">

								<span class="align--center pbm" id="timeslot-notavailable-text">

									<i class="glyphicon glyphicon-info-sign"></i>

									<a data-toggle="modal" data-target=".timeslot-modal" href="#" title="If you can't find the suitable timeslot, Click here">If you can't find the suitable timeslot, Click here</a>

								</span>

							</div>

						</div>

					</div>

				</div>

				<div class="row">

				<button type="button" class="btn btn-success text-center custom" id="ser_form_sub">Submit</button>

				</div>
			</form>

		</section>



		<div id="footer">

			<!-- Main -->

			<div class="container">

				<div class="row">

					<div class="col-md-5 col-sm-6">

						<h4>About</h4>

						<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>

						<a href="#" class="button social-btn"><i class="fa fa-facebook-official"></i> Like Us on Facebook</a>

					</div>



					<div class="col-md-4  col-sm-6">

						<h4>Helpful Links</h4>

						<ul class="footer-links">

							<li><a href="#">About Us</a></li>

							<li><a href="#">Press Releases</a></li>

							<li><a href="#">Careers</a></li>

							<li><a href="#">Services</a></li>

							<li><a href="#">Projects</a></li>

						</ul>



						<ul class="footer-links">

							<li><a href="#">In the News</a></li>

							<li><a href="#">Our Blog</a></li>

							<li><a href="#">Testimonials</a></li>

							<li><a href="#">Contact</a></li>

						</ul>

					</div>		



					<div class="col-md-3  col-sm-12">

						<h4>Contact Us</h4>

						<div class="text-widget">

							<span>12345 Little Lonsdale St, Melbourne</span> <br>

							Phone: <span>(123) 123-456 </span><br>

							Fax: <span>(123) 123-456</span> <br>

							E-Mail:<span> <a class="__cf_email__" href="http://www.vasterad.com/cdn-cgi/l/email-protection" data-cfemail="3f505959565c5a7f5a475e524f535a115c5052">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script> </span><br>

						</div>

					</div>



				</div>



				<!-- Copyright -->

				<div class="row">

					<div class="col-md-12">

						<div class="copyrights">©  Copyright 2016 by <a href="#">Reneva</a>. All Rights Reserved.</div>

					</div>

				</div>



			</div>



		</div>



		<!-- Back To Top Button -->

		<div id="backtotop"><a href="#"></a></div>


		<button id="demo">Cick here to see the action</button>
		<span id="demo3" class="demo3">hello world</span>
<!-- Scripts

	================================================== -->

	<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script type="text/javascript" src="scripts/superfish.js"></script>

	<script type="text/javascript" src="scripts/hoverIntent.js"></script>

	<script type="text/javascript" src="scripts/jquery.flexslider-min.js"></script>

	<script type="text/javascript" src="scripts/owl.carousel.min.js"></script>

	<script type="text/javascript" src="scripts/counterup.min.js"></script>

	<script type="text/javascript" src="scripts/waypoints.min.js"></script>

	<script type="text/javascript" src="scripts/jquery.themepunch.tools.min.js"></script>

	<script type="text/javascript" src="scripts/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="scripts/jquery.isotope.min.js"></script>

	<script type="text/javascript" src="scripts/jquery.magnific-popup.min.js"></script>

	<script type="text/javascript" src="scripts/jquery.sticky-kit.min.js"></script>

	<script type="text/javascript" src="scripts/jquery.twentytwenty.js"></script>

	<script type="text/javascript" src="scripts/jquery.event.move.js"></script>

	<script type="text/javascript" src="scripts/jquery.photogrid.js"></script>

	<script type="text/javascript" src="scripts/jquery.tooltips.min.js"></script>

	<script type="text/javascript" src="scripts/jquery.pricefilter.js"></script>

	<script type="text/javascript" src="scripts/jquery.stacktable.js"></script>

	<script type="text/javascript" src="scripts/jquery.contact-form.js"></script>

	<script type="text/javascript" src="scripts/jquery.jpanelmenu.js"></script>

	<script type="text/javascript" src="scripts/custom.js"></script>





	<!-- REVOLUTION SLIDER SCRIPT -->

	<script type="text/javascript">

		$( function() {

			$( "#datepicker" ).datepicker();

			autoSize: true;

			showAnim: "fold"



		} );

		var tpj=jQuery;			

		var revapi4;

		tpj(document).ready(function() {

			if(tpj("#rev_slider_4_1").revolution == undefined){

				revslider_showDoubleJqueryError("#rev_slider_4_1");

			}else{

				revapi4 = tpj("#rev_slider_4_1").show().revolution({

					sliderType:"standard",

					jsFileLocation:"scripts/",

					sliderLayout:"auto",

					dottedOverlay:"none",

					delay:9000,

					navigation: {

						keyboardNavigation:"off",

						keyboard_direction: "horizontal",

						mouseScrollNavigation:"off",

						onHoverStop:"on",

						touch:{

							touchenabled:"on",

							swipe_threshold: 75,

							swipe_min_touches: 1,

							swipe_direction: "horizontal",

							drag_block_vertical: false

						}

						,

						arrows: {

							style:"zeus",

							enable:true,

							hide_onmobile:true,

							hide_under:600,

							hide_onleave:true,

							hide_delay:200,

							hide_delay_mobile:1200,

							tmp:'<div class="tp-title-wrap"></div>',

							left: {

								h_align:"left",

								v_align:"center",

								h_offset:00,

								v_offset:0

							},

							right: {

								h_align:"right",

								v_align:"center",

								h_offset:00,

								v_offset:0

							}

						}

						,

						bullets: {

							enable:true,

							hide_onmobile:true,

							hide_under:600,

							style:"hermes",

							hide_onleave:true,

							hide_delay:200,

							hide_delay_mobile:1200,

							direction:"horizontal",

							h_align:"center",

							v_align:"bottom",

							h_offset:0,

							v_offset:32,

							space:5,

							tmp:''

						}

					},

					viewPort: {

						enable:true,

						outof:"pause",

						visible_area:"80%"

					},

					responsiveLevels:[1200,992,768,480],

					visibilityLevels:[1200,992,768,480],

					gridwidth:[1180,1024,778,480],

					gridheight:[590,500,400,300],

					lazyType:"none",

					parallax: {

						type:"mouse",

						origo:"slidercenter",

						speed:2000,

						levels:[2,3,4,5,6,7,12,16,10,25,47,48,49,50,51,55],

						type:"mouse",

					},

					shadow:0,

					spinner:"off",

					stopLoop:"off",

					stopAfterLoops:-1,

					stopAtSlide:-1,

					shuffle:"off",

					autoHeight:"off",

					hideThumbsOnMobile:"off",

					hideSliderAtLimit:0,

					hideCaptionAtLimit:0,

					hideAllCaptionAtLilmit:0,

					debugMode:false,

					fallbacks: {

						simplifyAll:"off",

						nextSlideOnWindowFocus:"off",

						disableFocusListener:false,

					}

				});

			}

		});	




// Datepicker code
    var fullDate;
    var time_slot_id;
    $('#datepicker').datepicker({
    	dateFormat: 'yy-mm-d',
    	inline: true,
    	minDate: new Date(2017, 1 - 1, 1),
    	maxDate:new Date(2017, 12 - 1, 31),
    	altField: '#datepicker_value',
    	onSelect: function(){
    		$('.time_slot').removeClass('booked-slot');
    		var day = $("#datepicker").datepicker('getDate').getDate();                 
    		var month = $("#datepicker").datepicker('getDate').getMonth() + 1;             
    		var year = $("#datepicker").datepicker('getDate').getFullYear();

    		fullDate = year + "-" + month + "-" + day;
    		console.log(fullDate.toString())
    		$.ajax({
    			type: 'post',
    			url: 'availableTimeSlots.php',
    			data: {
    				date: fullDate,
    			},
    			success: function( result ) { 
    				$(".time-slot").removeClass("booked-slot");
    				$(".available-slot").removeClass("selected-slot");
    				console.log(fullDate)
    				console.log(result);
    				var time_slot_ids = [result.split("|")]
    				console.log(time_slot_ids)
    				var newArr = time_slot_ids[0]
    				console.log(newArr);	
    				for (var i = 0; i < newArr.length; i++) {
    					if(newArr[i] != "") {
    						console.log(newArr[i])
    						$("#" + newArr[i]).removeClass('available-slot');
    						$("#" + newArr[i]).addClass('booked-slot');
    					}
    				}	
    			}
    		});        
    	}
    });


// getting value of time slot
$('.available-slot').click(function () {
	if(fullDate == undefined) {
		alert('please select date')
	}
	if($(this).hasClass("booked-slot")) {
		alert("please select available slot");
	}
	else if((this).className == "booked-slot") {
		alert('please select availabe time slot');
	}
	else {
    		$(".available-slot").removeClass("selected-slot");
			time_slot_id =  $(this).attr('id');
			$(this).addClass('selected-slot')
			console.log(time_slot_id);
	}
});




// submission of form
$('#ser_form_sub').click(function (event) {
	event.preventDefault();
	var service = $('#ser_form_service').find(":selected").text();
	var city = $('#ser_form_city').find(":selected").text();
	var address = $("#ser_form_address").val();
	var coupon = $("#ser_form_coupon").val();
	var serDate = fullDate;
	var serTime = time_slot_id;
	console.log(service, city, address, coupon, serDate, serTime + " All are succes")
	if (serTime == undefined) {
		alert('please select time');
		// $('#select-ser-error').text('please select a service');
		// $("#select-ser-error").show();
		// setTimeout(function() { $("#myElem").hide(); }, 100);
	}
	else if(serDate == undefined) {
		alert('please select date');
	}
	else if(service == "Please select a Service") {
		alert('please select service');
	}
	else {
			 $.ajax({
        url: "service_sub.php",
        type: "post",
        // async: false,
        data: {
        	data_service: service,
        	data_city: city,
        	data_address: address,
        	data_coupon: coupon,
        	data_serDate: serDate,
        	data_serTime: serTime,
        },        

        success: function (response) {
           // you will get response from your php page (what you echo or print)           
           // console.log(response)      
           // console.log('data sent successfully');
           alert('Your form has been submitted successfully');
           $('.time_slot').removeClass('booked-slot');
           $('.time_slot').removeClass('selected-slot');
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }       
    });
	}	
})


</script>	






<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  

	(Load Extensions only on Local File Systems ! 

	The following part can be removed on Server for On Demand Loading) -->	

	<script type="text/javascript" src="scripts/extensions/revolution.extension.actions.min.js"></script>

	<script type="text/javascript" src="scripts/extensions/revolution.extension.carousel.min.js"></script>

	<script type="text/javascript" src="scripts/extensions/revolution.extension.kenburn.min.js"></script>

	<script type="text/javascript" src="scripts/extensions/revolution.extension.layeranimation.min.js"></script>

	<script type="text/javascript" src="scripts/extensions/revolution.extension.migration.min.js"></script>

	<script type="text/javascript" src="scripts/extensions/revolution.extension.navigation.min.js"></script>

	<script type="text/javascript" src="scripts/extensions/revolution.extension.parallax.min.js"></script>

	<script type="text/javascript" src="scripts/extensions/revolution.extension.slideanims.min.js"></script>

	<script type="text/javascript" src="scripts/extensions/revolution.extension.video.min.js"></script>





<!-- Style Switcher

==================================================

<script src="scripts/switcher.js"></script>



<div id="style-switcher">

	



	

	<div>

		<h3>Predefined Colors</h3>

		<ul class="colors" id="color1">

			<li><a href="#" class="blue" title="Blue"></a></li>

			<li><a href="#" class="green" title="Green"></a></li>

			<li><a href="#" class="orange" title="Orange"></a></li>

			<li><a href="#" class="navy" title="Navy"></a></li>

			<li><a href="#" class="yellow" title="Yellow"></a></li>

			<li><a href="#" class="peach" title="Peach"></a></li>

			<li><a href="#" class="beige" title="Beige"></a></li>

			<li><a href="#" class="purple" title="Purple"></a></li>

			<li><a href="#" class="celadon" title="Celadon"></a></li>

			<li><a href="#" class="pink" title="Pink"></a></li>

			<li><a href="#" class="red" title="Red"></a></li>

			<li><a href="#" class="brown" title="Brown"></a></li>

			<li><a href="#" class="cherry" title="Cherry"></a></li>

			<li><a href="#" class="cyan" title="Cyan"></a></li>

			<li><a href="#" class="gray" title="Gray"></a></li>

			<li><a href="#" class="olive" title="Olive"></a></li>

		</ul>

		

		<h3>Layout Style</h3>

		<div class="layout-style">

			<select id="layout-style"> 

				<option value="2">Wide</option>

				<option value="1">Boxed</option>

			</select>

		</div>

	

		<h3>Background Image</h3>

		<ul class="colors bg" id="bg">

			<li><a href="#" class="bg1"></a></li>

			<li><a href="#" class="bg2"></a></li>

			<li><a href="#" class="bg3"></a></li>

			<li><a href="#" class="bg4"></a></li>

			<li><a href="#" class="bg5"></a></li>

			<li><a href="#" class="bg6"></a></li>

			<li><a href="#" class="bg7"></a></li>

			<li><a href="#" class="bg8"></a></li>

			<li><a href="#" class="bg9"></a></li>

			<li><a href="#" class="bg10"></a></li>

			<li><a href="#" class="bg11"></a></li>

			<li><a href="#" class="bg12"></a></li>

			<li><a href="#" class="bg13"></a></li>

			<li><a href="#" class="bg14"></a></li>

			<li><a href="#" class="bg15"></a></li>

			<li><a href="#" class="bg16"></a></li>

		</ul>

		

		<h3>Background Color</h3>

		<ul class="colors bgsolid" id="bgsolid">

			<li><a href="#" class="green-bg" title="Green"></a></li>

			<li><a href="#" class="blue-bg" title="Blue"></a></li>

			<li><a href="#" class="orange-bg" title="Orange"></a></li>

			<li><a href="#" class="navy-bg" title="Navy"></a></li>

			<li><a href="#" class="yellow-bg" title="Yellow"></a></li>

			<li><a href="#" class="peach-bg" title="Peach"></a></li>

			<li><a href="#" class="beige-bg" title="Beige"></a></li>

			<li><a href="#" class="purple-bg" title="Purple"></a></li>

			<li><a href="#" class="red-bg" title="Red"></a></li>

			<li><a href="#" class="pink-bg" title="Pink"></a></li>

			<li><a href="#" class="celadon-bg" title="Celadon"></a></li>

			<li><a href="#" class="brown-bg" title="Brown"></a></li>

			<li><a href="#" class="cherry-bg" title="Cherry"></a></li>

			<li><a href="#" class="cyan-bg" title="Cyan"></a></li>

			<li><a href="#" class="gray-bg" title="Gray"></a></li>

			<li><a href="#" class="olive-bg" title="Olive"></a></li>

		</ul>

	</div>

	

	<div id="reset"><a href="#" class="button color">Reset</a></div>

		

</div>        -->

<!-- Style Switcher / End -->





</div>

<!-- Wrapper / End -->



</body>



</html>