<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Spa Sublime a Beauty and spa Category Bootstrap Responsive Website Template | Home :: W3layouts</title> 
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Spa"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- custom-theme -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all"><!-- bootstrap css -->
<link rel="stylesheet" href="css/jquery-ui.css" /><!-- calender css -->
<link rel="stylesheet" type="text/css" href="css/style11.css" /><!-- menu css -->
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> <!-- css -->
<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'><!-- Light-box css -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->

<!-- web-fonts -->  
<!-- <link href="//fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
<!-- //web-fonts -->
</head>
<body class="bg">
  <?php include('header.php') ?>
  <!-- banner -->
  <?php include('banner.php') ?>
  <!-- //banner -->
  <!-- about -->
  <div class="about" id="about">
  <?php include('about.php') ?>

  <div style="background-color:black;">
    <div class="container">
      <div class="about-top-agileits-w3layouts" style="margin-bottom:5%;">
        <div class="col-md-2">
          <a href="#" class="" data-toggle="modal" data-target="#appointment"><i class="fa fa-circle" style="color:red;" aria-hidden="true"></i> <span style="color:white;text-align:center;">&nbsp;&nbsp;&nbsp;Book Appointment</span></a>
        </div>
        <div class="col-md-2">
          <a href="#" class="" data-toggle="modal" data-target="#our_services"><i class="fa fa-circle" style="color:red;" aria-hidden="true"></i> <span style="color:white;text-align:center;">&nbsp;&nbsp;&nbsp;Our Services</span></a>
        </div>
        <div class="col-md-2">
          <a href="#" class="" data-toggle="modal" data-target="#our_team"><i class="fa fa-circle" style="color:red;" aria-hidden="true"></i> <span style="color:white;text-align:center;">&nbsp;&nbsp;&nbsp;Our Team</span></a>
        </div>
        <div class="col-md-2">
          <a href="#" class="" data-toggle="modal" data-target="#our_gallery"><i class="fa fa-circle" style="color:red;" aria-hidden="true"></i> <span style="color:white;text-align:center;">&nbsp;&nbsp;&nbsp;Gallery</span></a>
        </div>
        <div class="col-md-2">
          <a href="#" class="" data-toggle="modal" data-target="#our_contact"><i class="fa fa-circle" style="color:red;" aria-hidden="true"></i> <span style="color:white;text-align:center;">&nbsp;&nbsp;&nbsp;Contact Us</span></a>
        </div>
      </div>
    </div>
  </div>
  
  <?php include('testimonials.php') ?>

  <div class="modal fade" id="appointment" tabindex="-1" role="dialog">
    <?php include('appointment.php') ?>
  </div>

  <div class="modal fade" id="our_services" tabindex="-1" role="dialog">
    <?php include('services.php') ?>
  </div>

  <div class="modal fade" id="our_team" tabindex="-1" role="dialog">
    <?php include('team.php') ?>
  </div>

  <div class="modal fade" id="our_gallery" tabindex="-1" role="dialog">
    <?php include('gallery.php') ?>
  </div>

  <div class="modal fade" id="our_contact" tabindex="-1" role="dialog">
    <?php include('contact.php') ?>
  </div>



<!-- footer -->
<?php include('footer.php') ?>
<!-- //footer -->
<!-- js -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- //js -->
<!-- Calendar -->
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
			<script>
				$(function(){
					var gallery = $('.agileinfo-gallery-row a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
				});
			</script>  

<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->

<!--responsiveslides js-->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
<!--responsiveslides js-->
<!-- flexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->
<!--menu script-->
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/demo1.js"></script>
<!--//menu script-->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display:block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>