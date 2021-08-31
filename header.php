<?php
include("core/functions/db/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="Aid Amigo is an African for-profit crowdfunding platform that allows people to raise money for events ranging from life events such as celebrations and graduations to challenging circumstances like accidents and illnesses.">
		<meta name="keywords" content="Aid Amigo, African, Crowdfunding, Investment, Money, People, Celebration, Illnesses, Accident, Education, Payment, Graduation">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="assets/img/logo/AIDAMIGO_SVG.svg"/>
		<title>Aid Amigo - #1 Fundraising (<?php echo $web_title; ?>)</title>
		<!-- styles-->
		<link rel="stylesheet" href="assets/css/styles.min.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
		<!-- web-font loader-->
		<script>
			WebFontConfig = {

				google: {

					families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

				}

			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
	</head>

    <body>
<!-- scritpt -->
    </div>
		<div class="page-wrapper">
			<!-- aside dropdown start-->
			<div class="aside-dropdown">
				<div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
				<div class="aside-dropdown__item d-lg-none d-block">
					<ul class="aside-menu">
						<li class="aside-menu__item aside-menu__item--has-child <?php echo $page_def; ?>"><a class="aside-menu__link" href="index.php"><span>Home</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li class="item--active"><a href="index.php"><span>View</span></a></li>
								<!-- <li><a href="front_2.html"> <span>02 Home Color Style</span></a></li> -->
								<!-- <li><a href="front_3.html"><span>03 Home Color Style</span></a></li>
								<li><a href="mono/index.html"><span>04 Home Monochrome</span></a></li>
								<li><a href="mono/front_2.html"><span>05 Home Monochrome</span></a></li>
								<li><a href="mono/front_3.html"><span>06 Home Monochrome</span></a></li> -->
							</ul>
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item aside-menu__item--has-child <?php echo $page_def_about; ?>"><a class="aside-menu__link" href="javascript:void(0);"><span>About</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a class="item--active" href="about-us.php"><span>Aid Amigo</span></a></li>
								<li><a href="about-us.php#team"> <span>Team Members</span></a></li>
								<!-- <li><a href="donors.html"><span>Donors & Partners</span></a></li>
								<li><a href="volunteer.html"><span>Become a Volunteer</span></a></li>
								<li><a href="events.html"><span>Events</span></a></li>
								<li><a href="event-details.html"><span>Event Details</span></a></li>
								<li><a href="stories.html"><span>Stories</span></a></li>
								<li><a href="story-details.html"><span>Story Details</span></a></li>
								<li><a href="blog.html"><span>Blog</span></a></li>
								<li><a href="blog-post.html"><span>Blog Post</span></a></li>
								<li><a href="gallery.html"><span>Gallery</span></a></li>
								<li><a href="pricing.html"><span>Pricing Plans</span></a></li>
								<li><a href="faq.html"><span>FAQ</span></a></li>
								<li><a href="404.html"><span>404 Page</span></a></li> -->
							</ul>
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Community!</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a href="https://join.slack.com/t/newworkspace-hfu7728/shared_invite/zt-uuvk4o1z-eEHy6olgohmLV28shkBPiA"><span>Join Us on Slack</span></a></li>
								<!-- <li><a href="causes_2.html"> <span>Causes 2</span></a></li>
								<li><a href="causes_3.html"><span>Causes 3</span></a></li>
								<li><a href="javascript:void(0);"><span>Cause Details</span></a></li> -->
							</ul>
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item <?php echo $page_def_contact; ?>"><a class="aside-menu__link" href="contacts.php"><span>Contacts</span></a></li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Account</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a href="https://aidamigo.com/core/login.php"><span>Login</span></a></li>
								<li><a href="https://aidamigo.com/core/signup.php"><span>Register</span></a></li>
							</ul>
							<!-- sub menu end-->
						</li>
					</ul>
				</div>
				<div class="aside-dropdown__item">
					<!-- aside menu start-->
					<ul class="aside-menu">
						<li class="aside-menu__item"><a class="aside-menu__link" href="https://aidamigo.com/core/signup.php">Get Started</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="about-us.php">About Us</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="contacts.php">Contacts</a></li>
					</ul>
					<!-- aside menu end-->
					<div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@aidamigo.com">support@aidamigo.com</a></div>
					<div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+2348162399614">+ 234 - 8162 399 614</a><a class="aside-inner__link" href="tel:+2349041215181">+234 - 9041 215 181</a></div>
					<ul class="aside-socials">
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="aside-dropdown__item"><a class="button button--squared" href="https://aidamigo.com/index.php#donatenow"><span>Aid A Friend</span></a></div>
				</div>
			</div>
			<!-- aside dropdown end-->
			<!-- header start-->
			<header class="header header--front">
				<div class="container-fluid">
					<div class="row no-gutters justify-content-between">
						<div class="col-auto d-flex align-items-center">
							<div class="dropdown-trigger d-none d-sm-block">
								<div class="dropdown-trigger__item"></div>
							</div>
							<div class="header-logo"><a class="header-logo__link" href="#"><img class="header-logo__img logo--light" src="assets/img/logo/AIDAMIGO_SVG_DARKMOOD.svg" alt="logo"/><img class="header-logo__img logo--dark" src="assets/img/logo/AIDAMIGO_SVG_BACKGROUNDLESS.svg" alt="logo"/></a></div>
						</div>
						<div class="col-auto">
							<!-- main menu start-->
							<nav>
								<ul class="main-menu">
									<li class="main-menu__item main-menu__item--has-child main-menu__item--active"><a class="main-menu__link" href="index.php"><span>Home</span></a>
										<!-- sub menu start-->
										<ul class="main-menu__sub-list">
											<li class="item--active"><a href="index.php"><span>View</span></a></li>
											<!-- <li><a href="front_2.html"> <span>02 Home Color Style</span></a></li>
											<li><a href="front_3.html"><span>03 Home Color Style</span></a></li>
											<li><a href="mono/index.html"><span>04 Home Monochrome</span></a></li>
											<li><a href="mono/front_2.html"><span>05 Home Monochrome</span></a></li>
											<li><a href="mono/front_3.html"><span>06 Home Monochrome</span></a></li> -->
										</ul>
										<!-- sub menu end-->
									</li>
									<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>About</span></a>
										<!-- sub menu start-->
										<ul class="main-menu__sub-list sub-list--style-2">
											<li><a href="about-us.php"><span>Aid Amigo</span></a></li>
											<li><a href="about-us.php#team"> <span>Team</span></a></li>
											<!-- <li><a href="donors.html"><span>Donors & Partners</span></a></li>
											<li><a href="volunteer.html"><span>Become a Volunteer</span></a></li>
											<li><a href="team-member.html"><span>Team Member</span></a></li>
											<li><a href="events.html"><span>Events</span></a></li>
											<li><a href="event-details.html"><span>Event Details</span></a></li>
											<li><a href="stories.html"><span>Stories</span></a></li>
											<li><a href="story-details.html"><span>Story Details</span></a></li>
											<li><a href="blog.html"><span>Blog</span></a></li>
											<li><a href="blog-post.html"><span>Blog Post</span></a></li>
											<li><a href="gallery.html"><span>Gallery</span></a></li>
											<li><a href="pricing.html"><span>Pricing Plans</span></a></li>
											<li><a href="faq.html"><span>FAQ</span></a></li>
											<li><a href="404.html"><span>404 Page</span></a></li> -->
										</ul>
										<!-- sub menu end-->
									</li>
									<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>Community!</span></a>
										<!-- sub menu start-->
										<ul class="main-menu__sub-list">
											<li><a href="https://join.slack.com/t/newworkspace-hfu7728/shared_invite/zt-uuvk4o1z-eEHy6olgohmLV28shkBPiA"><span>Join Us on Slack</span></a></li>
											<!-- <li><a href="causes_2.html"> <span>Causes 2</span></a></li>
											<li><a href="causes_3.html"><span>Causes 3</span></a></li>
											<li><a href="javascript:void(0);"><span>Cause Details</span></a></li> -->
										</ul>
										<!-- sub menu end-->
									</li>
									<li class="main-menu__item"><a class="main-menu__link" href="contacts.php"><span>Contacts</span></a></li>
									<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>User Account</span></a>
										<!-- sub menu start-->
										<ul class="main-menu__sub-list">
											<li><a href="https://aidamigo.com/core/login.php"><span>Login</span></a></li>
											<li><a href="https://aidamigo.com/core/signup.php"><span>Register</span></a></li>
											<!-- <li><a href="testimonials.html"><span>Testimonials</span></a></li>
											<li><a href="accordion.html"><span>Accordion</span></a></li>
											<li><a href="tabs.html"><span>Tabs</span></a></li>
											<li><a href="pricing-plan.html"><span>Pricing Plan</span></a></li>
											<li><a href="counters.html"><span>Counters</span></a></li>
											<li><a href="icons.html"><span>Icons</span></a></li> -->
										</ul>
										<!-- sub menu end-->
									</li>
								</ul>
							</nav>
							<!-- main menu end-->
						</div>
						<div class="col-auto d-flex align-items-center">
							<!-- lang select start-->
							<ul class="lang-select">
								<li class="lang-select__item lang-select__item--active"><span>En</span>
									<ul class="lang-select__sub-list">
										<li><a href="#">English</a></li>
										<!-- <li><a href="#">Spanish</a></li>
										<li><a href="#">Deutsch</a></li>
										<li><a href="#">Russian</a></li> -->
									</ul>
								</li>
							</ul>
							<!-- lang select end-->
							<div class="dropdown-trigger d-block d-sm-none">
								<div class="dropdown-trigger__item"></div>
							</div><a class="button button--squared" href="https://aidamigo.com/index.php#donatenow"><span>Donate Aid A Friend</span></a>
						</div>
					</div>
				</div>
			</header>
			<!-- header end-->