<!--?php @session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?-->
<!--?php if ( is_front_page() ) { get_includes('middle'); }?-->
<!DOCTYPE html>
<!--[if lt IE 10]>      <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 10]>         <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 11]>         <html class="no-js lt-ie11"> <![endif]-->
<!--[if gt IE 11]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

	<title><?php //echo get_bloginfo('name');?></title>

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/hamburgers.min.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/rslides.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/skitter.styles.min.css" type="text/css" media="all"  >
	<link rel="stylesheet" href="css/animate.min.css">

	<!--?php if ( is_user_logged_in() ) { ?-->
		<!-- <style>
			@media only screen
			and (max-width : 800px) {
				nav.toggle_right_style{top:32px;}
			}
			@media only screen
			and (max-width : 782px) {
				nav.toggle_right_style{top:46px;}
			}
		</style> -->
	<!--?php }?-->

	<!--?php wp_head(); ?-->
</head>
	<body>
		<div class="protect-me">
		<div class="clearfix">

<!-- Header -->
<!-- <header>
	<div class="wrapper">
		<div class="header_con">
			<div class="main_logo">
			  <a href="<?php //echo get_home_url(); ?>"><figure><img src="images/main-logo.png" alt="<?php //echo get_bloginfo('name');?>"></figure></a>
			</div>

			<div class="head_info">
				<div class="header_info">
					<ul>
						<li><h2>Phone Number:  <span><mark>725-251-3854</mark></span></h2></li>
						<li>Email Address: <span><a href="mailto:admin@creekviewhh.com">admin@creekviewhh.com</a></span></li>
					</ul>
					
				</div>
				<div class="social_media">
					<ul>
						<li><a href="https://www.facebook.com" target="_blank"><figure><img src="images/icons/fb-icon.png" alt="facebook"></figure></a></li>
						<li><a href="https://www.twitter.com" target="_blank"><figure><img src="images/icons/twitter-icon.png" alt="twitter"></figure></a></li>
					</ul>
				</div>
				<div class="addional_logo">
					<ul>
						<li><a href=""><figure><img src="images/header-btn-logo.png" alt="greek view kids"></figure></a></li>
					</ul>
				</div>
			</div>
		</div>
	  <div class="clearfix"></div>
	</div>
</header> -->
<!-- End Header -->

<!-- Navigation -->
<div id="nav_area">
	<div class="nav_toggle_button">
	<div class="logo_wrap"></div>
		<div class="toggle_holder">
			<div class="hamburger hamburger--spin-r">
			  <div class="hamburger-box">
				<div class="hamburger-inner"></div>
			  </div>
			</div>
			<small>Menu</small>
		</div>
	<div class="clearfix"></div>
	</div>

	<div class="toggle_right_nav">
	  <nav class="page_nav">
			<div class="menu_slide_right">
				<a href="<?php //echo get_home_url(); ?>" class="logo_slide_right"><figure><img src="images/main-logo.png" alt="<?php //echo get_bloginfo('name');?>"></figure></a>
				<div class="toggle_holder">
					<div class="hamburger hamburger--spin-r">
					  <div class="hamburger-box">
						<div class="hamburger-inner"></div>
					  </div>
					</div>
					<small>Close</small>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="wrapper">
				<!--?php wp_nav_menu( array( 'container_class' => 'nav-menu', 'theme_location' => 'primary', 'after' => '<span><i class="fa fa-2x">&nbsp;&nbsp;&nbsp;&nbsp;</i></span>') ); ?-->
				<ul>
					<li class="current_page_item"><a href="">Home</a></li>
					<li><a href="">About Us</a></li>
					<li><a href="">Services</a></li>
					<li><a href="">Careers</a></li>
					<li><a href="">Resources</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
			</div>
	  </nav>
		<div class="toggle_nav_close"></div>
	</div>
</div>
<!-- End Navigation -->

<!-- Banner -->
<div id="banner">
	<div class="wrapper">
		<div class="bnr_con">

			<div class="slider">
				<ul class="rslides">
					<li><figure><img src="images/slider/1.jpg" alt=""></figure></li>
					<li><figure><img src="images/slider/2.jpg" alt=""></figure></li>
					<li><figure><img src="images/slider/3.jpg" alt=""></figure></li>
				</ul>
				<div class="box_skitter box_skitter_large">
					<ul>
						<li><figure><img src="images/slider/1.jpg" alt="" class="random"></figure></li>
						<li><figure><img src="images/slider/2.jpg" alt="" class="random"></figure></li>
						<li><figure><img src="images/slider/3.jpg" alt="" class="random"></figure></li>
					</ul>
				</div>
			</div>

			<!-- <video loop muted autoplay playsinline>
				<source src="movie.mp4" type="video/mp4">
				<source src="movie.ogg" type="video/ogg">
				Your browser does not support the video tag.
			</video>  -->

			<div class="bnr_info radial-gradient">
				<h2 class="heading2"><small class="subHead2">We Will Replace This With a </small>Powerful Slogan<span></span></h2>
				<p>This space is reserved for more information about the company. These dummy text is intended to show you the volume of content.</p>
				<a href="#" class="btnStyle1">Find out More</a>
			</div>

		</div>
	</div>
</div>
<!-- End Banner -->

<!-- Middle -->
<div id="middle ">
	<div class="wrapper">
		<div class="middle_con">

			<div class="mid_info">
				<h2 class="heading2"><small class="subHead2">What We Offer </small>Our Available Services<span></span></h2>
				<p>This space is reserved for more information about the company. These dummy text is intended to show you the volume of content that will be used on this particular page. Thank you for visiting our website.</p>
			</div>

			<div class="middle_boxes">

				<section class="mid_box2">
					<figure><img src="images/mid-img1.jpg" alt=""></figure>
					<h2>Skilled <span>Nursing</span></h2>
					<p>These dummy text is intended to show you the volume of content that will be used on this particular page.</p>
					<a href="javascript:;" class="btnStyle1">Click Here</a>
				</section>

				<section class="mid_box2">
					<figure><img src="images/mid-img2.jpg" alt=""></figure>
					<h2>Physical <span>Therapy</span></h2>
					<p>These dummy text is intended to show you the volume of content that will be used on this particular page.</p>
					<a href="javascript:;" class="btnStyle1">Click Here</a>
				</section>

				<section class="mid_box3">
					<figure><img src="images/mid-img3.jpg" alt=""></figure>
					<h2>Occupational <span>Therapy</span></h2>
					<p>These dummy text is intended to show you the volume of content that will be used on this particular page.</p>
					<a href="javascript:;" class="btnStyle1">Click Here</a>
				</section>

				<section class="mid_box4">
					<figure><img src="images/mid-img4.jpg" alt=""></figure>
					<h2>View More <span>Services</span></h2>
					<p>These dummy text is intended to show you the volume of content that will be used on this particular page.</p>
					<a href="javascript:;" class="btnStyle1">Click Here</a>
				</section>

			</div>




		</div>
	</div>
</div>
<!-- End Middle -->

<!-- Main -->
<div id="main_area" class="radial-gradient">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<h1 class="h1_title heading2"><small class="subHead2">Welcome to </small>Company <span>Here LLC </span></h1>
				<p>This space is reserved for more information about the company. You are reading a dummy text.We are excited to post contents on the website. This space is reserved for more information about the company. We are excited to post contents on the website.</p>
				<p>This space is reserved for more information about the company. These dummy text is intended to show you the volume of content that will be used on this particular page. Thank you for visiting our website.</p>
			</main>
			<figure class="main_img"><img src="images/main-img.jpg" alt="images of the elderly woman and the aide"></figure>
			
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->

<!-- Bottom -->
<div id="bottom1">
	<div class="wrapper1">
		<div class="btm1_con">

			<div class="btm1_boxes">

				<section class="btm1_box1">
					<figure><img src="images/btm1-img1.jpg" alt="images of the aide and the elderly patient smiling"></figure>
					<div class="btm1_box_info">
						<h2>Set an  <span>Appointment</span></h2>
						<p>These dummy text is intended to show you the volume of content.</p>
						<a href="javascript:;">CLICK HERE ›</a>
					</div>
				</section>

				<section class="btm1_box2">
					<figure><img src="images/btm1-img2.jpg" alt="images of the aide assistinf senior man"></figure>
					<div class="btm1_box_info">
						<h2>Meet Our <span>Staff</span></h2>
						<p>These dummy text is intended to show you the volume of content.</p>
						<a href="javascript:;">CLICK HERE ›</a>
					</div>
				</section>

				<section class="btm1_box3">
					<figure><img src="images/btm1-img3.jpg" alt="images of the two person, outdoor view"></figure>
					<div class="btm1_box_info">
						<h2>Insurance <span>Accepted</span></h2>
						<p>These dummy text is intended to show you the volume of content.</p>
						<a href="javascript:;">CLICK HERE ›</a>
					</div>
				</section>

			</div>
		</div>
	</div>
</div>

<div class="bottom2_holder">
<div id="bottom2">
	<div class="wrapper">
		<div class="btm2_con">
		
			<div class="btm2_info" id="bottom2_innner">
				<h2 class="heading2"><small class="subHead2">Our Service Promise to You </small>OUR MISSION STATEMENT <span></span></h2>
				<p>This space is reserved for more information about the company. You are reading a dummy text.We are excited to post contents on the website. This space is reserved for more information about the company. We are excited to post contents on the website.</p>
				<a href="#" class="btnStyle1">ABOUT US</a>
			</div>
			
		</div>
	</div>
</div>
</div>

<div id="bottom3" class="radial-gradient">
	<div class="wrapper">
		<div class="btm3_con">
		
			<div class="btm3_info">
				<h2 class="heading2"><small class="subHead2">Reach Out to Us </small>SEND US A MESSAGE <span></span></h2>
				<p>This space is reserved for more information about the company. You are reading a dummy text.We are excited to post contents.</p>
			</div>

			<div class="btm_form">
				<form class="form" id="submit_formmessage" action="#bottom3" method="post">
					<div id="invalid-msg"></div>
					<div class="btm_formFlex">
						<div class="btm_formFlex_inner">
							<input class="form_fullname btm_input1" type="text" name="Full_Name" value="" placeholder="*Full Name " required="">
							<input class="form_email btm_input2" type="email" name="Email_Address" value="" placeholder="*Email Address " required="">
						</div>
						<textarea class="btm_input3" name="Question_or_Comment" placeholder="Message (s)"></textarea>
						<div class="btn_submit">
							<div class="captcha-box"><div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_sitekey; ?>"></div></div>
							<button type="submit" name="submit_info" class="form_btn btnStyle1">Submit </button>
						</div>
					</div>
					
				</form>
			</div>
			
		</div>
	</div>
</div>

<div id="bottom4">
	<div class="btm4_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.101183815632!2d-115.11307772326691!3d36.11539257245035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c52740799d1f%3A0x3f230224a05cebc3!2sParking%20lot%2C%202950%20E%20Flamingo%20Rd%20%23%20H%2C%20Las%20Vegas%2C%20NV%2089121%2C%20USA!5e0!3m2!1sen!2sph!4v1688442344869!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>
<!-- End Bottom -->

<!--Footer -->
<footer>
<div class="footer_top">
	<div class="wrapper">
		<div class="footer_top_con">

			<div class="contact_info">
				<!-- <div class="footer_logo">
					<a href="<?php //echo get_home_url(); ?>"><figure><img src="images/footer-logo.png" alt="<?php //echo get_bloginfo('name');?>"></figure></a>
				</div> -->
				<div class="contact_info_list">
					<ul>
						<li><address>2950 E Flamingo Rd., Ste. H 
							<span>Las Vegas, Nevada 89121-5208</span></address></li>
						<li>Phone Number: <mark>725-251-3854</mark> <q>/</q>  <mark>Fax: 725-780-1114</mark>
						<span>Email Address: <a href="mailto:admin@creekviewhh.com">admin@creekviewhh.com</a></span></li>
					</ul>
				</div>
			</div>

			<div class="footer_info">
				<ul>
					<li><span>Service Areas Covered:</span> Las Vegas, Henderson, North Las Vegas Green Valley, Summerlin, Pahrump, Sandy Valley, Boulder City</li>
					<li><span>Hours of Operation:</span> Office Hours: Monday - Friday (08:30 A.M to 05:00 P.M) Skilled Nursing on-call 24 hours a day, 7 days a week</li>
				</ul>
			</div>

			
		</div>
	</div>
</div>

<div class="footer_btm">
  <div class="wrapper">
			<div class="footer_btm_con">
				<div class="footer_nav">
					<ul>
						<li class="current_page_item"><a href="index.php">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Resources</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>

				<div class="copyright">
				  &copy; Copyright 2023
						<?php
						$start_year = '2023';
						$current_year = date('Y');
						$copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
						echo $copyright;
						?>
				  <span class="footer_comp"><?php //echo get_bloginfo('name');?></span>
				  <a class="copyrigh_text">Designed by</a> <a href="http://proweaver.com" target="_blank" rel="nofollow">Proweaver</a>
				</div>
			</div>
		</div>
</div>
</footer>

	<span class="back_top"></span>

  </div> <!-- End Clearfix -->
  </div> <!-- End Protect Me -->

  <!--?php get_includes('ie');?-->

  <!--
  Solved HTML5 & CSS IE Issues
  -->
  <script src="js/modernizr-custom-v2.7.1.min.js"></script>
  <script src="js/jquery-3.5.0.min.js"></script>
  <script src="js/jquery-migrate-1.4.1.min.js"></script>

  <!--
  Solved Psuedo Elements IE Issues
  -->
  <script src="js/calcheight.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.skitter.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/wow.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!--?php wp_footer(); ?-->
</body>
</html>
<!-- End Footer -->
