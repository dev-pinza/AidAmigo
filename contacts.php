<?php
include('header.php');
?>
<!-- header end-->
<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="assets/img/mine/contact-us.jpg" media="(min-width: 992px)"/><img class="img--bg" src="assets/img/mine/contact-us.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Compassion</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">
                                    <div class="header-logo"><a class="header-logo__link" href="#"><img class="header-logo__img logo--light" src="assets/img/logo/AIDAMIGO_SVG_DARK_SIDE.svg" alt="logo"/></a></div>
                                    </span>
										<h1 class="promo-primary__title"><span>Contacts Us</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section start-->
				<section class="section contacts">
					<div class="container">
						<div class="row offset-margin">
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="assets/img/icon_1-1.png" alt="img"/>
										<svg class="icon icon-item__icon icon--red">
											<use xlink:href="#location-pin"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Adress: 1 Gombe close, opp. Shagari Plaza. Area 1, Abuja</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="assets/img/icon_2-2.png" alt="img"/>
										<svg class="icon icon-item__icon icon--orange">
											<use xlink:href="#phone-call"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Phone: <a class="icon-item__link" href="tel:+2349041215181">+ 234 904 121 5181</a> <a class="icon-item__link" href="tel:+2348162399614">+ 234 816 239 9614</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="assets/img/icon_3-3.png" alt="img"/>
										<svg class="icon icon-item__icon icon--green">
											<use xlink:href="#envelope"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Email: <a class="icon-item__link" href="mailto:support@aidamigo.com">support@aidamigo.com</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="assets/img/icon_4-4.png" alt="img"/>
										<svg class="icon icon-item__icon icon--blue">
											<use xlink:href="#share"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<!-- socials start-->
										<ul class="socials">
											<li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li class="socials__item"><a class="socials__link socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										</ul>
										<!-- socials end-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- contacts start-->
				<section class="section contacts no-padding-top">
					<div class="contacts-wrapper">
						<div class="container">
							<div class="row justify-content-end">
								<div class="col-xl-6">
                                    <?php
                                    $response = "";
                                    if (isset($_GET["email"]) && isset($_GET["phone-number"]) && isset($_GET["message"])) {
                                        $first_name = addslashes($_GET["first-name"]);
                                        $last_name = addslashes($_GET["last-name"]);
                                        $email = addslashes($_GET["email"]);
                                        $phone = addslashes($_GET["phone-number"]);
                                        $message = addslashes($_GET["message"]);

                                        // SQL
                                        $query_get_before = mysqli_query($connection, "SELECT * FROM `contact` WHERE `message` = '$message' && `email` = '$email'");
                                        if (mysqli_num_rows($query_get_before) <= 0) {
                                            $query_information = mysqli_query($connection, "INSERT INTO `contact` (`first_name`, `last_name`, `email`, `phone`, `message`, `is_read`) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$phone}', '{$message}', '0')");

                                            if ($query_information) {
                                                $response = "<b style='color:green'> -  Thank you!, we wil get back to you shortly </b>";
                                            } else {
                                                $response = "<b style='color:red'> -  Error, Sending Message </b>";
                                            }
                                        } else {
                                            $response = "<b style='color:green'> -  Message already sent, We will get back to you shortly </b>";
                                        }
                                        
                                    }
                                    ?>
									<form class="form message-form" method="GET">
										<h6 class="form__title">Send Message <?php echo $response; ?></h6><span class="form__text">* The following info is required</span>
										<div class="row">
											<div class="col-lg-6">
												<input class="form__field" type="text" name="first-name" placeholder="First Name *" required="required"/>
											</div>
											<div class="col-lg-6">
												<input class="form__field" type="text" name="last-name" placeholder="Last Name *" required="required"/>
											</div>
											<div class="col-lg-6">
												<input class="form__field" type="email" name="email" placeholder="Email *" required="required"/>
											</div>
											<div class="col-lg-6">
												<input class="form__field" type="tel" name="phone-number" placeholder="Phone"/>
											</div>
											<div class="col-12">
												<textarea class="form__message form__field" name="message" placeholder="Message"></textarea>
											</div>
											<div class="col-12">
												<button class="form__submit" type="submit">Send Message</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- <div class="contacts-wrapper__map" id="map" data-api-key="AIzaSyBqpMGJlq4WqSEPHPxKiLmX0Qhg_D3tyF8" data-longitude="9.0297855" data-latitude="7.4702424" data-marker="assets/img/marker.png"></div> -->
                        <div class="contacts-wrapper__map"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Sekani%20System&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
					</div>
				</section>
				<!-- contacts end-->
				<!-- bottom bg start-->
				<section class="bottom-background">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bottom-background__img"><img src="assets/img/bottom-bg.png" alt="img"/></div>
							</div>
						</div>
					</div>
				</section>
				<!-- bottom bg end-->
			</main>
<?php
include('footer.php');
?>