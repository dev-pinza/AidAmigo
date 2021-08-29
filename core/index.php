<?php
include('header.php');
include("functions/db/connect.php");
?>
<body class="landing-page">
<div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <!-- <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg> -->
    </div>
    <!-- page-wrapper Start-->
    <div class="page-wrapper landing-page">
      <!-- Page Body Start            -->
      <div class="landing-home">
        <ul class="decoration">
          <li class="one"><img class="img-fluid" src="assets/images/landing/decore/1.png" alt=""></li>
          <li class="two"><img class="img-fluid" src="assets/images/landing/decore/2.png" alt=""></li>
          <li class="three"><img class="img-fluid" src="assets/images/landing/decore/4.png" alt=""></li>
          <li class="four"><img class="img-fluid" src="assets/images/landing/decore/3.png" alt=""></li>
          <li class="five"><img class="img-fluid" src="assets/images/landing/2.png" alt=""></li>
          <li class="six"><img class="img-fluid" src="assets/images/landing/decore/cloud.png" alt=""></li>
          <li class="seven"><img class="img-fluid" src="assets/images/landing/2.png" alt=""></li>
        </ul>
        <div class="container-fluid">
          <div class="sticky-header">
            <header>                       
              <nav class="navbar navbar-b navbar-trans navbar-expand-xl fixed-top nav-padding" id="sidebar-menu"><a class="navbar-brand p-0" href="#"><img class="img-fluid" src="assets/images/logo/growfundx.png" alt=""></a>
                <button class="navbar-toggler navabr_btn-set custom_nav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button>
                <div class="navbar-collapse justify-content-end collapse hidenav" id="navbarDefault">
                  <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                    <!-- <li class="nav-item"><a class="nav-link" href="#layout">FundRaising</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#components">Investment</a></li>
                    <li class="nav-item"><a class="nav-link" href="#applications">Donate</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item buy-btn"><a class="nav-link js-scroll" href="signup.php" target="_blank">Start a GrowFund</a></li>
                  </ul>
                </div>
              </nav>
            </header>
          </div>
          <div class="row">
            <div class="col-xl-5 col-lg-6">
              <div class="content">
                <div>
                  <h1 class="wow fadeIn">GrowFund  </h1>
                  <h1 class="wow fadeIn">#2021</h1>
                  <h2 class="txt-secondary wow fadeIn">African Investment & FundRaising Community</h2>
                  <p class="mt-3 wow fadeIn">Fundraising for the people and causes you care about, raise money for events ranging from life events such as celebrations and graduations to challenging circumstances.</p>
                  <div class="btn-grp mt-4"><a class="btn btn-pill btn-primary btn-air-primary btn-lg me-3 wow pulse" href="signup.php" target="_blank"> Start a GrowFund</a><a class="btn btn-pill btn-info btn-air-info btn-lg wow pulse" href="#" target="_blank"> <img src="assets/images/logo/video_play.svg" alt="">Watch How</a></div>
                  <!-- <div class="btn-grp mt-4"></div> -->
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-6">                 
              <div class="wow fadeIn"><img class="screen1" src="assets/images/login/fund_home.jpg" alt=""></div>
              <div class="wow fadeIn"><img class="screen2" src="assets/images/login/fund_home_2.jpg" alt=""></div>
            </div>
          </div>
        </div>
      </div>

      
      <!-- <section id="layout" class="section-space cuba-demo-section bg-Widget pb-0 bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 wow pulse">
              <div class="cuba-demo-content mt50">
                <div class="couting">
                  <h2>FundRaising</h2>
                </div>
                <p>GrowFund for any cause</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid o-hidden">
          <div class="row landing-cards">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-sm-5 col-12"><img class="img-fluid landing-card" src="assets/images/login/liftingothers.jpg" alt=""></div>
                <div class="col-sm-4 col-7"><img class="img-fluid landing-card" src="assets/images/login/bulb.jpg" alt=""></div>
                <div class="col-sm-3 col-5"><img class="img-fluid landing-card" src="assets/images/login/fund_home_2.jpg" alt=""></div> 
                <div class="col-sm-8 col-12">
                  <div class="row">
                    <div class="col-6"><img class="img-fluid landing-card" src="assets/images/event/1.jpg" alt=""></div>
                    <div class="col-6"><img class="img-fluid landing-card" src="assets/images/event/2.jpg" alt=""></div>
                    <div class="col-5"><img class="img-fluid landing-card" src="assets/images/event/3.jpg" alt=""></div>
                    <div class="col-7"><img class="img-fluid landing-card" src="assets/images/event/5.jpg" alt=""></div> 
                  </div>
                </div>
                <div class="col-sm-4 col-12">
                  <div class="row">
                    <div class="col-sm-12 col-6"><img class="img-fluid landing-card" src="assets/images/event/4.jpg" alt=""></div>
                    <div class="col-sm-12 col-6"><img class="img-fluid landing-card" src="assets/images/event/6.jpg" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12 col-sm-4"><img class="img-fluid landing-card" src="assets/images/event/7.jpg" alt=""></div>
                <div class="col-md-6 col-sm-4"><img class="img-fluid landing-card" src="assets/images/event/8.jpg" alt="">
                <img class="img-fluid landing-card" src="assets/images/event/10.jpg" alt="">
                <img class="img-fluid landing-card" src="assets/images/event/11.jpg" alt=""></div>
                <div class="col-md-6 col-sm-4"><img class="img-fluid landing-card" src="assets/images/event/9.png" alt="">
                <img class="img-fluid landing-card" src="assets/images/event/12.jpg" alt=""></div> 
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <section class="section-space cuba-demo-section email_bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 wow pulse">
              <div class="cuba-demo-content mt50">
                <div class="couting">
                  <h2> GrowFund</h2>
                  <p> Signup to GrowFund for Community</p>
                </div>
              </div>
            </div>
          </div>
        </div><img class="img-fluid" src="assets/images/event/10.jpg" alt="">
      </section>
      <section class="section-space cuba-demo-section components-section" id="components">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 wow pulse">
              <div class="cuba-demo-content mt50">
                <div class="couting">
                  <h2>Investment</h2>
                </div>
                <p>We connect you with Angel Investors for your business</p>
              </div>
            </div>
          </div>
        </div>
        <center>

        <div class="container container-modify">
          <div class="row component_responsive">
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect">
                <!-- <img src="assets/images/landing/icon/1.png" alt=""> -->
                <h6 class="m-0 Pt-4">Sign Up</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect">
                <!-- <img src="assets/images/landing/icon/2.png" alt=""> -->
                <h6 class="m-0">Request a FundRaise</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect">
                <!-- <img src="assets/images/landing/icon/2.png" alt=""> -->
                <h6 class="m-0">Choose Business Category</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect">
                <!-- <img src="assets/images/landing/icon/2.png" alt=""> -->
                <h6 class="m-0">Business Proposal Summary</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect">
                <!-- <img src="assets/images/landing/icon/2.png" alt=""> -->
                <h6 class="m-0">Submit</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect">
                <!-- <img src="assets/images/landing/icon/2.png" alt=""> -->
                <h6 class="m-0">Get Feeback</h6>
              </div>
            </div>
          </div>
        </div>
        </center>

      </section>
      <section class="section-space cuba-demo-section app_bg" id="applications">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 wow pulse">
              <div class="cuba-demo-content mt50">
                <div class="couting">
                  <h2>Donate! </h2>
                </div>
                <p>Top FundRaising</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid container-modify apps">
          <div class="landing-slider">
            <div class="row">
              <?php
              $current_date = date('Y-m-d H:i:s');
              $current_date_x = date('Y-m-d').' 00:00:00';
              $query_get_fund = mysqli_query($connection, "SELECT * FROM `fund_raise` WHERE (due_date >= '$current_date' AND is_withdrawn = '0' AND amount_raised > 0) AND is_active = '1' ORDER BY id DESC LIMIT 8");

              if (mysqli_num_rows($query_get_fund) > 0) {
                while ($row = mysqli_fetch_array($query_get_fund)) {
                  $public_link = $row["public_link"];
              ?>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                <div class="img-effect mb-3"><a href="core/fund.php?public-link=<?php echo $public_link; ?>" target="_blank"><img class="img-fluid cuba-img" src="<?php echo $row["image_base64"]; ?>" height="400px" width="400px" alt=""></a></div>
                <h4><?php echo $row["campaign_title"]; ?></h4>
              </div>
              <?php
            }
                } else {
                    ?>
                    
                    <div class="col-xxl-12 col-lg-12">
                    <center>
                    <div class="project-box">
                        <h6>Start A GrowFund</h6>
                        <div class="media">
                        </div>
                        <p>CLICK BELOW TO GET STARTED</p>
                        <!-- Action button -->
                        <div class="customers mt-4">
                        <a class="btn btn-pill btn-success btn-air-success" href="signup.php" type="button">Create FundRaise</a>
                        </div>
                    </div>
                    </center>
                    </div>
                    <?php
                }
                   ?>
            </div>
          </div>
        </div>
      </section>
      <section class="section-space cuba-demo-section frameworks-section" id="frameworks">
        <div class="container">
          <div class="row">                 
            <div class="col-sm-12 wow pulse">
              <div class="cuba-demo-content mt50">
                <div class="couting">
                  <h2>FundRaising Event</h2>
                </div>
                <p class="mb-0">Ranging Events</p>
              </div>
            </div>
            <div class="col-sm-12 framworks">                 
              <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item"><a class="nav-link d-flex active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"> 
                  <!-- <img src="assets/images/landing/icon/html/html.png" alt=""> -->
                    <div class="text-start">
                      <h5 class="mb-0">#1</h5>
                      <p class="mb-0">Category</p>
                    </div></a></li>
                <li class="nav-item"><a class="d-flex nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"> 
                  <!-- <img src="assets/images/landing/icon/react/react1.png" alt=""> -->
                    <div class="text-start">
                      <h5 class="mb-0">#2</h5>
                      <p class="mb-0">Category</p>
                    </div></a></li>
                <li class="nav-item"><a class="d-flex nav-link" id="pills-angular-tab" data-bs-toggle="pill" href="#pills-angular" role="tab" aria-controls="pills-angular" aria-selected="false">
                   <!-- <img src="assets/images/landing/icon/angular/angular.svg" alt=""> -->
                    <div class="text-start">
                      <h5 class="mb-0">#3</h5>
                      <p class="mb-0">Category</p>
                    </div></a></li>
                <li class="nav-item"><a class="d-flex nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                   <!-- <img src="assets/images/landing/icon/laravel/laravel.png" alt=""> -->
                    <div class="text-start">
                      <h5 class="mb-0">#4</h5>
                      <p class="mb-0">Category</p>
                    </div></a></li>
              </ul>
              <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <ul class="framworks-list">
                    <li class="box wow fadeInUp">
                      <div> 
                      <h6 class="mb-0 mt-3">Medical</h6>
                    </li>
                    <li class="box wow fadeInUp">
                      <h6 class="mb-0 mt-3">Memorial</h6>
                    </li>
                    <li class="box wow fadeInUp">
                      <h6 class="mb-0 mt-3">Emergency</h6>
                    </li>
                    <li class="box wow fadeInUp">
                      <h6 class="mb-0 mt-3">Nonprofit</h6>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <ul class="framworks-list">
                    <li class="box">
                      <h6 class="mb-0 mt-3">Education</h6>
                    </li>
                    <li class="box">
                      <h6 class="mb-0 mt-3">Animals</h6>
                    </li>
                    <li class="box">
                      <h6 class="mb-0 mt-3">Environment</h6>
                    </li>
                    <li class="box">
                      <h6 class="mb-0 mt-3">Business</h6>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="pills-angular" role="tabpanel" aria-labelledby="pills-angular-tab">
                  <ul class="framworks-list">
                    <li class="box">
                      <h6 class="mb-0 mt-3">Community</h6>
                    </li>
                    <li class="box">
                      <h6 class="mb-0 mt-3">Competition</h6>
                    </li>
                    <li class="box">
                      <h6 class="mb-0 mt-3">Creative</h6>
                    </li>
                    <li class="box">
                      <h6 class="mb-0 mt-3">Event</h6>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <ul class="framworks-list">
                    <li class="box">
                      <h6 class="mb-0 mt-3">Faith</h6>
                    </li>
                    <li class="box">
                      <h6 class="mb-0 mt-3">Family</h6>
                    </li>
                    <li class="box">
                      <h6 class="mb-0 mt-3">Sports</h6>
                    </li>
                    <li class="box">
                      <h6 class="mb-0 mt-3">Travel</h6>
                    </li>
                    <li class="box">
                      <h6 class="mb-0 mt-3">Volunteer</h6>
                    </li>
                    <li class="box">
                      <h6 class="mb-0 mt-3">Wishes</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php
include('footer.php');
?>