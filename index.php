<?php
include('header.php');
?>
	<body>
		<div class="page-wrapper">
			<!-- aside dropdown start-->
			<div class="aside-dropdown">
				<div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
				<div class="aside-dropdown__item d-lg-none d-block">
					<ul class="aside-menu">
						<li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active"><a class="aside-menu__link" href="index.php"><span>Home</span></a>
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
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>About</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a href="about-us.php"><span>Aid Amigo</span></a></li>
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
						<li class="aside-menu__item"><a class="aside-menu__link" href="contacts.php"><span>Contacts</span></a></li>
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
				<div class="aside-dropdown__item"><a class="button button--squared" href="#donatenow"><span>Aid A Friend</span></a></div>
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
							<div class="header-logo"><a class="header-logo__link" href="#"><img class="header-logo__img logo--light" src="assets/img/logo/AIDAMIGO_SVG_DARKMOOD.svg" alt="logo"/><img class="header-logo__img logo--dark" src="assets/img/logo/AIDAMIGO_SVG_DARKMOOD.svg" alt="logo"/></a></div>
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
							</div><a class="button button--squared" href="#donatenow"><span>Donate Aid A Friend</span></a>
						</div>
					</div>
				</div>
			</header>
			<!-- header end-->
			<main class="main">
				<!-- promo start-->
				<section class="promo">
					<div class="promo-slider">
						<div class="promo-slider__item promo-slider__item--style-1">
							<picture>
								<source srcset="assets/img/mine/kids_holding.jpg" media="(min-width: 835px)"/>
								<source srcset="assets/img/mine/kids_holding.jpg" media="(min-width: 376px)"/><img class="img--bg" src="assets/img/mine/kids_holding.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>We help all people in need</span> <span>around the world.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">Fundraising for the people and causes you care about, raise money for events ranging from life events such as celebrations and graduations to challenging circumstances.</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#donatenow">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="promo-slider__item promo-slider__item--style-2">
							<picture>
								<source srcset="assets/img/mine/landing_image1.jpg" media="(min-width: 835px)"/>
								<source srcset="assets/img/mine/landing_image1.jpg" media="(min-width: 376px)"/><img class="img--bg" src="assets/img/mine/landing_image1.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-xl-7">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Our Helping</span><br/><span>around the world.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">You can also Aid Amigo by helping them raise funds for a cause, click button below to get started</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="https://aidamigo.com/core/signup.php">Get Started</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="promo-slider__item promo-slider__item--style-3">
							<picture>
								<source srcset="assets/img/mine/graduation_landing.jpg" media="(min-width: 835px)"/>
								<source srcset="assets/img/mine/graduation_landing.jpg" media="(min-width: 376px)"/><img class="img--bg" src="assets/img/mine/graduation_landing.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-xl-8 offset-xl-2">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Dream Big</span><br/><span>With Aid Amigo.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">Raise Fund for your school, business & many more! </p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="https://aidamigo.com/core/signup.php">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- promo socials start-->
					<ul class="promo-socials">
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
					<!-- promo socials end-->
					<!-- promo pannel start-->
					<div class="promo-pannel"><a class="anchor promo-pannel__anchor" href="#about"> <span>Scroll Down</span></a>
						<div class="promo-pannel__video"><img class="img--bg" src="assets/img/video_block.jpg" alt="image"/><a class="video-trigger" href="#"><span>Watch our video</span><i class="fa fa-play" aria-hidden="true"></i></a></div>
						<div class="promo-pannel__phones">
							<p class="promo-pannel__title">Phone numbers</p><a class="promo-pannel__link" href="tel:+2348162399614">+ 234 - 816 2399 614</a><a class="promo-pannel__link" href="tel:+2349041215181">+ 234 - 904 121 5181</a>
						</div>
						<div class="promo-pannel__email">
							<p class="promo-pannel__title">Email</p><a class="promo-pannel__link" href="mailto:support@aidamigo.com">support@aidamigo.com</a>
						</div>
					</div>
					<!-- promo pannel end-->
					<!-- slider nav start-->
					<div class="slider__nav slider__nav--promo">
						<div class="promo-slider__count"></div>
						<div class="slider__arrows">
							<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
							</div>
							<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<!-- slider nav end-->
				</section>
				<!-- promo end-->
				<!-- about us start-->
				<section class="section about-us" id="about">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
									<h2 class="heading__title"><span>Aid Amigo</span> <span>Main Goal</span></h2>
								</div>
								<p><strong>Aid Amigo - Aid A Friend" we aid your fund rasing campaign get to it goal</strong></p>
								<p>Fundraising for the people and causes you care about, raise money for events ranging from life events such as celebrations and graduations to challenging circumstances</p>
								<p>Aid Amigo is a company that is almost close to non-profit, we care about your cause and we are ready to serve you to your goal</p><a class="button button--primary" href="about.html">More About</a>
							</div>
							<div class="col-lg-6 col-xl-5 offset-xl-1">
								<div class="info-box"><img class="img--layout" src="assets/img/about_layout.png" alt="img"/><img class="img--bg" src="https://images.unsplash.com/photo-1480506132288-68f7705954bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1093&q=80" alt="img"/>
									<h4 class="info-box__title">We are Awesome Volounteer Team</h4>
									<p>Are you a skilled person, join Aid Amigo community to help move it to the next level. join the slack community!</p><a class="info-box__link" href="https://join.slack.com/t/newworkspace-hfu7728/shared_invite/zt-uuvk4o1z-eEHy6olgohmLV28shkBPiA">Become a volounteer</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- about us end-->
				<!-- icons section start-->
				<section class="section icons-section no-padding-top">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--center"><span class="heading__pre-title">Services</span>
									<h2 class="heading__title"><span>What we do</span> <span>for all people</span></h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="assets/img/icon_1-1.png" alt="img"/>
										<svg class="icon icon-item__icon icon--red">
											<use xlink:href="#donation"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Medicine Help</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="assets/img/icon_2-2.png" alt="img"/>
										<svg class="icon icon-item__icon icon--orange">
											<use xlink:href="#church"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>We Build and Create</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="assets/img/icon_3-3.png" alt="img"/>
										<svg class="icon icon-item__icon icon--green">
											<use xlink:href="#blood"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Water Delivery</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="assets/img/icon_4-4.png" alt="img"/>
										<svg class="icon icon-item__icon icon--blue">
											<use xlink:href="#charity"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Global Fundraising</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- icons section end-->
				<!-- causes start-->
				<section id="donatenow" class="section causes"><img class="causes__bg" src="assets/img/causes_img.png" alt="img"/>
					<div class="container">
						<div class="row align-items-end">
							<div class="col-xl-5">
								<div class="heading heading--primary"><span class="heading__pre-title">What we Do</span>
									<h2 class="heading__title"><span>Aid Amigo</span> <span>Causes</span></h2>
									<p>Medical, Memorial, Emergency, Nonprofit, Education, Animals, Environment, Environment,
									Community, Competition, Creative, Event, Faith, Family, Sports, Travel, Volunteer & Wishes
									</p>
								</div>
							</div>
							<div class="col-xl-6 offset-xl-1 d-none d-xl-block">
								<div class="row offset-margin">
									<div class="col-6">
										<div class="counter-item counter-item--style-3">
											<div class="counter-item__top">
												<h6 class="counter-item__title">People We Helped on 2021</h6>
											</div>
											<div class="counter-item__lower"><span class="js-counter">458</span>
											<!-- <span>k</span> -->
										</div>
										</div>
									</div>
									<div class="col-6">
										<div class="counter-item counter-item--style-3">
											<div class="counter-item__top">
												<h6 class="counter-item__title">Naira We Collected</h6>
											</div>
											<div class="counter-item__lower"><span class="js-counter">20</span><span>mil</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row align-items-end margin-bottom">
							<div class="col-sm-6"><a class="button button--primary" href="#donatenow">More Causes</a></div>
							<div class="col-sm-6 d-flex justify-content-sm-end">
								<!-- slider nav start-->
								<div class="slider__nav causes-slider__nav">
									<div class="slider__arrows">
										<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
										</div>
										<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								<!-- slider nav end-->
							</div>
						</div>
					</div>

					<div class="causes-holder offset-margin">
						<div class="causes-holder__wrapper">
							<div class="causes-slider offset-margin">
								<!-- start0 -->
								<?php
								$current_date = date('Y-m-d H:i:s');
								$current_date_x = date('Y-m-d').' 00:00:00';
								$query_get_fund = mysqli_query($connection, "SELECT * FROM `fund_raise` WHERE (due_date >= '$current_date' AND is_withdrawn = '0' AND amount_raised > 0) AND is_active = '1' ORDER BY id DESC LIMIT 8");

								if (mysqli_num_rows($query_get_fund) > 0) {
									while ($row = mysqli_fetch_array($query_get_fund)) {
									$public_link = $row["public_link"];
									// check percentage
									$goal_amount = $row["goal_amount"];
									$amount_raised = $row["amount_raised"];
									$percentage = round(($amount_raised/$goal_amount) * 100);
									if ($percentage > 100) {
										$percentage = 100;
									}
								?>
								<div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="fund.php?public-link=<?php echo $public_link; ?>"><?php echo $row["campaign_title"]; ?></a></h6>
												<p><?php echo  substr($row["story_body"], -40).' ..read more'; ?></p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge" style="background-color: #49C2DF"><?php echo $row["category"] ?></div><img class="img--bg" src="<?php echo $row["image_base64"]; ?>" alt="img"/>
											</div>
											<div class="causes-item__lower">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: <?php echo $percentage; ?>%;">
														<div class="progress-bar__value"><?php echo $percentage; ?>%</div>
													</div>
												</div>
												<div class="causes-item__details-holder">
													<div class="causes-item__details-item"><span>Goal: </span><span><?php echo number_format($goal_amount, 2); ?>₦</span></div>
													<div class="causes-item__details-item text-right"><span>Pledged: </span><span><?php echo number_format($amount_raised, 2); ?>₦</span></div>
												</div>
											</div>
										</div><a class="button causes-item__button button--primary" href="fund.php?public-link=<?php echo $public_link; ?>">+ Donate</a>
									</div>
								</div>
								<?php
								}
									} else {
										?>
										<!-- HTML CONTENT HERE -->
										<center>
										<div class="project-box">
											<h6>Start A Fund Raise Campaign</h6>
											<div class="media">
											</div>
											<p>CLICK BELOW TO GET STARTED</p>
											<!-- Action button -->
											<div class="customers mt-4">
											<a class="btn btn-pill btn-success btn-air-success" href="core/signup.php" type="button">Create FundRaise</a>
											</div>
										</div>
										</center>
										 <?php
											}
										?>
								
								<!-- <div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="javascript:void(0);">Health in other Countries</a></h6>
												<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge" style="background-color: #F36F8F">Medicine</div><img class="img--bg" src="assets/img/causes_2.jpg" alt="img"/>
											</div>
											<div class="causes-item__lower">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: 23%;">
														<div class="progress-bar__value">23%</div>
													</div>
												</div>
												<div class="causes-item__details-holder">
													<div class="causes-item__details-item"><span>Goal: </span><span>14 000$</span></div>
													<div class="causes-item__details-item text-right"><span>Pledged: </span><span>6 098$</span></div>
												</div>
											</div>
										</div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
									</div>
								</div> -->
								<!-- <div class="causes-slider__item">
									<div class="causes-item causes-item--primary">
										<div class="causes-item__body">
											<div class="causes-item__top">
												<h6 class="causes-item__title"> <a href="javascript:void(0);">We Build and Create</a></h6>
												<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
											</div>
											<div class="causes-item__img">
												<div class="causes-item__badge" style="background-color: #2EC774">Education</div><img class="img--bg" src="assets/img/causes_3.jpg" alt="img"/>
											</div>
											<div class="causes-item__lower">
												<div class="progress-bar">
													<div class="progress-bar__inner" style="width: 51%;">
														<div class="progress-bar__value">51%</div>
													</div>
												</div>
												<div class="causes-item__details-holder">
													<div class="causes-item__details-item"><span>Goal: </span><span>150 000$</span></div>
													<div class="causes-item__details-item text-right"><span>Pledged: </span><span>76 500$</span></div>
												</div>
											</div>
										</div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</section>
				<!-- causes end-->
				<!-- projects start-->
				<section class="section projects no-padding-top no-padding-bottom">
					<div class="container">
						<div class="row align-items-end margin-bottom">
							<div class="col-lg-9">
								<div class="heading heading--primary"><span class="heading__pre-title">What we Did</span>
									<h2 class="heading__title"><span>Aid Amigo</span> <span>Projects</span></h2>
									<p class="no-margin-bottom">We will be launching a fund raising campaign soon, which will be hosted by Aid Amigo to help across different countries </p>
								</div>
							</div>
						</div>
					</div>
					<div class="row no-gutters projects-masonry">
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-1 projects-masonry__item--vertical">
							<div class="projects-masonry__img"><img class="img--bg" src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80" alt="img"/></div>
							<div class="projects-masonry__text" style="background-color: #2EC774;">
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #49C2DF;">Water Delivery</span>
									<h3 class="projects-masonry__title"> <a href="javascript:void(0);">More than One Life Can be Changed</a></h3>
									<p>We mapping out areas that lack water in Nigeria, Ghana & Kenya. we will raise a fund to accomplish this cause </p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>₦ 20,000,000.00</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'24</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
							<div class="projects-masonry__img"><img class="img--bg" src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" alt="img"/></div>
							<div class="projects-masonry__text" style="background-color: #9BC35E;">
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F36F8F;">Medicine</span>
									<h3 class="projects-masonry__title"> <a href="javascript:void(0);">Aid Amigo</a></h3>
									<p>Launching a Med Fair, Raising funds to provied free medical care for 3 months in different states in Nigeria</p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>₦ 15,000,000.00</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'22</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-1 projects-masonry__item--primary">
							<div class="projects-masonry__img"><img class="img--bg" src="https://images.unsplash.com/photo-1589010588553-46e8e7c21788?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2027&q=80" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F8AC3A;">Food</span>
									<h3 class="projects-masonry__title"> <a href="javascript:void(0);">Help for Children of the East</a></h3>
									<p>Raising funds to Help children in the East have food to Eat</p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>₦ 10,000,000.00</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>17 Apr'24</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
							<div class="projects-masonry__img"><img class="img--bg" src="https://images.unsplash.com/photo-1581078426770-6d336e5de7bf?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #2EC774;">Education</span>
									<h3 class="projects-masonry__title"> <a href="javascript:void(0);">Quality Education for the Poor</a></h3>
									<p>We are raising funds for children above 5 and below 18 whose parent cant afford quality education, we will sponsort this kids with the fund raised so far.</p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>₦ 200,000,000.00</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>02 Jan'25</span></div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
							<div class="projects-masonry__img"><img class="img--bg" src="assets/img/projects_5.jpg" alt="img"/></div>
							<div class="projects-masonry__text" style="background-color: #E78F51;">
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #2EC774;">Education</span>
									<h3 class="projects-masonry__title"> <a href="javascript:void(0);">Help for Children of the East</a></h3>
									<p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish, pelican eel. Spinefoot coelacanth eagle ray </p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
							<div class="projects-masonry__img"><img class="img--bg" src="assets/img/projects_6.jpg" alt="img"/>
								<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F36F8F;">Medicine</span>
									<h3 class="projects-masonry__title"> <a href="javascript:void(0);">Helpo for Help</a></h3>
									<p>Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp</p>
									<div class="projects-masonry__details-holder">
										<div class="projects-masonry__details-item"><span>Goal: </span><span>25 000$</span></div>
										<div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</section>
				<!-- projects end-->
				<!-- events start-->
				<section class="section events"><img class="events__bg" src="assets/img/events_bg.png" alt="img"/>
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">Events</span>
									<h2 class="heading__title"><span>Aid Amigo</span> <span>for You</span></h2>
									<p class="no-margin-bottom">No Event at the Moment</p>
								</div>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="assets/img/event_1.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">Help for Language. Voluanteer</a></h6>
										<p><b>Dark Spurt,</b> San Francisco, CA 94528, USA</p>
										<p><b>September 30 - October 31,</b> 2019</p>
										<p><b>10:00 AM - 18:00 PM,</b> Everyday</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="assets/img/event_2.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">The Culture of Africa. Rebirth</a></h6>
										<p><b>Dark Spurt,</b> San Francisco, CA 94528, USA</p>
										<p><b>September 30 - October 31,</b> 2019</p>
										<p><b>10:00 AM - 18:00 PM,</b> Everyday</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="assets/img/event_3.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">Help for Language. Voluanteer</a></h6>
										<p><b>Dark Spurt,</b> San Francisco, CA 94528, USA</p>
										<p><b>April 15 - April 20,</b> 2019</p>
										<p><b>10:00 AM - 15:00 PM,</b> Everyday</p>
									</div>
								</div>
							</div>
						</div> -->
						<div class="row">
							<div class="col-12 text-center"><a class="button button--primary" href="#">View all events</a></div>
						</div>
					</div>
				</section>
				<!-- events end-->
				<!-- text section start-->
				<section class="section text-section"><img class="text-section__bg" src="assets/img/text-section.png" alt="img"/>
					<div class="container">
						<div class="row">
							<div class="col-12 text-center">
								<h2 class="text-section__heading">Volunteer</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
								<h3 class="text-section__title">Delivering help and hope <br/>to children through sponsorship.</h3>
								<p>Fill the contact us form, and indicate Volunteer & Sponsorship in your description and we will put a call/mail across</p><a class="button button--primary" href="contacts.php">Become a Volunteer</a>
							</div>
						</div>
					</div>
				</section>
				<!-- text section end-->
				<!-- testimonials style-2 start-->
				<!-- <section class="section testimonials--style-2">
					<div class="testimonials--style-2__bg jarallax">
						<picture>
							<source srcset="assets/img/testimonials_2.jpg" media="(min-width: 992px)"/><img class="jarallax-img" src="assets/img/testimonials_2.jpg" alt="img"/>
						</picture>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xl-4">
								<div class="heading heading--primary"><span class="heading__pre-title">Testimonials</span>
									<h2 class="heading__title"><span>What People</span><br/><span>Says About Us</span></h2>
								</div>
								<div class="slider__nav testimonials-style-2__nav">
									<div class="slider__arrows">
										<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
										</div>
										<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8">
								<div class="testimonials-slider testimonials-slider--style-2">
									<div class="testimonials-slider__item">
										<div class="testimonials-slider__icon">“</div>
										<div class="testimonials-slider__text">
											<p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish southern sandfish Rudderfish long-finned pikerazorfish menhaden paradise fish, barramundi oceanic flyingfish. Fangtooth yellowtail banded killifish seamoth triplefin blenny desert pupfish crocodile shark catfish cutlassfish broadband dogfish whalefish.</p>
											<div class="testimonials-slider__author"><span class="testimonials-slider__name">Jack Wolfskin, </span><span class="testimonials-slider__position">Volunteer</span></div>
										</div>
									</div>
									<div class="testimonials-slider__item">
										<div class="testimonials-slider__icon">“</div>
										<div class="testimonials-slider__text">
											<p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish southern sandfish Rudderfish long-finned pikerazorfish menhaden paradise fish, barramundi oceanic flyingfish. Fangtooth yellowtail banded killifish seamoth triplefin blenny desert pupfish crocodile shark catfish cutlassfish broadband dogfish whalefish.</p>
											<div class="testimonials-slider__author"><span class="testimonials-slider__name">Jack Wolfskin, </span><span class="testimonials-slider__position">Volunteer</span></div>
										</div>
									</div>
									<div class="testimonials-slider__item">
										<div class="testimonials-slider__icon">“</div>
										<div class="testimonials-slider__text">
											<p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish southern sandfish Rudderfish long-finned pikerazorfish menhaden paradise fish, barramundi oceanic flyingfish. Fangtooth yellowtail banded killifish seamoth triplefin blenny desert pupfish crocodile shark catfish cutlassfish broadband dogfish whalefish.</p>
											<div class="testimonials-slider__author"><span class="testimonials-slider__name">Jack Wolfskin, </span><span class="testimonials-slider__position">Volunteer</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- testimonials style-2 end-->
				<!-- blog start-->
				<!-- <section class="section blog"><img class="blog__bg" src="assets/img/blog_bg.png" alt="img"/>
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">News</span>
									<h2 class="heading__title no-margin-bottom"><span>Helpo</span> <span>Blog</span></h2>
								</div>
							</div>
						</div>
						<div class="row offset-margin">
							<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img"><img class="img--bg" src="assets/img/blog_1.jpg" alt="img"/><span class="blog-item__badge" style="background-color: #49C2DF;">Water Delivery</span></div>
									<div class="blog-item__content">
										<h6 class="blog-item__title"><a href="#">Save the Children's Role in Fight Against Malnutrition Hailed</a></h6>
										<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
										<div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
											<svg class="icon">
												<use xlink:href="#comment"></use>
											</svg> 501</span></div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-7 col-xl-8">
								<div class="blog-item blog-item--style-2"><img class="img--bg" src="assets/img/blog_2.png" alt="img"/>
									<div class="blog-item__content"><span class="blog-item__badge" style="background-color: #2EC774;">Education</span>
										<h6 class="blog-item__title"><a href="#">Back to the future: Quality education through respect, commitment and accountability</a></h6>
										<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail</p>
									</div>
									<div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
										<svg class="icon">
											<use xlink:href="#comment"></use>
										</svg> 501</span></div>
								</div>
							</div>
							<div class="col-md-6 col-lg-7 col-xl-8">
								<div class="blog-item blog-item--style-2"><img class="img--bg" src="assets/img/blog_3.png" alt="img"/>
									<div class="blog-item__content"><span class="blog-item__badge" style="background-color: #F8AC3A;">Food</span>
										<h6 class="blog-item__title"><a href="#">Condolences to Families Effected By Flash Floods in Setswetla, Alexandra Township, Johannesburg</a></h6>
										<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail</p>
									</div>
									<div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
										<svg class="icon">
											<use xlink:href="#comment"></use>
										</svg> 501</span></div>
								</div>
							</div>
							<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img"><img class="img--bg" src="assets/img/blog_4.png" alt="img"/><span class="blog-item__badge" style="background-color: #F36F8F;">Medicine</span></div>
									<div class="blog-item__content">
										<h6 class="blog-item__title"><a href="#">Save the Children's Role in Fight Against Malnutrition Hailed</a></h6>
										<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
										<div class="blog-item__details"><span class="blog-item__date">23 Jan' 19</span><span>
											<svg class="icon">
												<use xlink:href="#comment"></use>
											</svg> 501</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- blog end-->
				<!-- donors start-->
				<section class="section donors no-padding-top">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">Donors</span>
									<h2 class="heading__title no-margin-bottom"><span>Who Help</span> <span>Us</span></h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<!-- donors slider start-->
								<div class="slider-holder">
									<div class="donors-slider donors-slider--style-1">
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="assets/img/donor_1.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="assets/img/donor_2.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="assets/img/donor_3.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="assets/img/donor_4.png" alt="donor"/></div>
										</div>
									</div>
								</div>
								<!-- donors slider end-->
							</div>
						</div>
					</div>
				</section>
				<!-- donors end-->
				<!-- instagram start-->
				<section class="section instagram no-padding-bottom">
					<div class="container">
						<div class="row align-items-end margin-bottom">
							<div class="col-md-7 col-lg-8">
								<div class="heading heading--primary"><span class="heading__pre-title">Testimonials</span>
									<h2 class="heading__title no-margin-bottom"><span># Aidamigo</span></h2>
								</div>
							</div>
							<div class="col-md-5 col-lg-4 text-md-right">
								<!-- slider nav start-->
								<div class="slider__nav instagram-slider__nav">
									<div class="slider__arrows">
										<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
										</div>
										<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								<!-- slider nav end-->
							</div>
						</div>
					</div>
					<!-- <div class="instagram-slider"><a class="instagram-slider__item" href="#"><img class="img--bg" src="assets/img/ig_1.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="assets/img/ig_2.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="assets/img/ig_3.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="assets/img/ig_4.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="assets/img/ig_5.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="assets/img/ig_6.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a><a class="instagram-slider__item" href="#"><img class="img--bg" src="assets/img/ig_4.jpg" alt="img"/><span class="instagram-slider__icon"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="instagram-slider__icon-hover"><i class="fa fa-instagram" aria-hidden="true"></i></span></a></div> -->
				</section>
				<!-- instagram end-->
				<!-- subscribe start-->
				<section class="subscribe">
					<div class="container">
						<div class="row align-items-end">
							<div class="col-lg-4">
								<h2 class="subscribe__title">Subscribe.</h2>
							</div>
							<div class="col-lg-8">
								<form class="subscribe-form" action="javascript:void(0);">
									<input class="subscribe-form__input" type="email" name="email" placeholder="Enter your E-mail" required="required"/>
									<input class="subscribe-form__submit" type="submit" value="Submit"/>
								</form>
							</div>
						</div>
					</div>
				</section>
				<!-- subscribe end-->
			</main>
<?php
include('footer.php');
?>