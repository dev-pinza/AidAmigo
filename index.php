<?php
include('header.php');
?>
<body class="landing-page" onload="startTime()">
<div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
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
                    <li class="nav-item"><a class="nav-link" href="#layout">FundRaiser</a></li>
                    <li class="nav-item"><a class="nav-link" href="#components">Investment</a></li>
                    <li class="nav-item"><a class="nav-link" href="#applications">Global Funding</a></li>
                    <li class="nav-item"><a class="nav-link" href="#frameworks">Login</a></li>
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
      <section class="section-space cuba-demo-section layout" id="layout">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 wow pulse">
              <div class="cuba-demo-content">
                <div class="couting">
                  <h2>12+</h2>
                  <p>Admin unique layouts</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row demo-imgs">
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/default.jpg" alt="default">
                <div class="hover-link">
                  <div data-bs-toggle="tooltip" data-bs-placement="top" title="HTML"><a class="ms-2" href="index.html" target="_blank">HTML</a></div>
                  <div data-bs-toggle="tooltip" data-bs-placement="top" title="React"><a class="ms-2" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div data-bs-toggle="tooltip" data-bs-placement="top" title="Angular"><a class="ms-2" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div data-bs-toggle="tooltip" data-bs-placement="top" title="Vue"><a class="ms-2" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div data-bs-toggle="tooltip" data-bs-placement="top" title="Laravel"><a class="ms-2" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">Dubai</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/centralize.jpg" alt="centralize">
                <div class="hover-link"><a class="html" href="javascript:void(0)" target="_blank" data-attr="box-layout">Html</a>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">New York</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/classic-sidebar.jpg" alt="classicSidebar">
                <div class="hover-link"><a class="html" href="javascript:void(0)" target="_blank" data-attr="dark-sidebar">Html</a>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">Paris</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/collapse.jpg" alt="collapse">
                <div class="hover-link"><a class="html" href="javascript:void(0)" target="_blank" data-attr="compact-small">Html</a>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">Moscow</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/compact.jpg" alt="compact">
                <div class="hover-link"><a class="html" href="javascript:void(0)" target="_blank" data-attr="compact-wrap">Html</a>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">Tokyo</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/enterprise.jpg" alt="enterprise">
                <div class="hover-link"><a class="html" href="javascript:void(0)" target="_blank" data-attr="enterprice-type">Html</a>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">Singapore</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/further.jpg" alt="further">
                <div class="hover-link"><a class="html" href="javascript:void(0)" target="_blank" data-attr="advance-type">Html</a>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">Barcelona</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/material.jpg" alt="material">
                <div class="hover-link"><a class="html" href="javascript:void(0)" target="_blank" data-attr="material-layout">Html</a>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">Los Angeles</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/revolutionary.jpg" alt="revolutionary">
                <div class="hover-link"><a class="html" href="javascript:void(0)" target="_blank" data-attr="color-sidebar">Html</a>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">Madrid</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/statistics.jpg" alt="statistics">
                <div class="hover-link"><a class="html" href="javascript:void(0)" target="_blank" data-attr="material-icon">Html</a>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">Rome</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/trendy.jpg" alt="trendy">
                <div class="hover-link"><a class="html" href="javascript:void(0)" target="_blank" data-attr="modern-layout">Html</a>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">Seoul</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow pulse demo-content">
              <div class="cuba-demo-img"><img class="img-fluid" src="assets/images/landing/layout-images/blank.jpg" alt="blank">
                <div class="hover-link"><a class="html" href="javascript:void(0)" target="_blank" data-attr="default-body">Html</a>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://react.pixelstrap.com/cuba/dashboard/default" target="_blank">React</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://angular.pixelstrap.com/cuba/" target="_blank">Angular</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="https://vue.pixelstrap.com/cuba/dashboard/default" target="_blank">Vue</a></div>
                  <div class="link-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming soon"><a class="ms-2 coming-soon disabled" href="http://laravel.pixelstrap.com/cuba/dashboard/index" target="_blank">Laravel</a></div>
                </div>
              </div>
              <div class="title-wrapper">
                <div class="content">
                  <h3 class="theme-name mb-0">London</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-space cuba-demo-section bg-Widget pb-0 bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 wow pulse">
              <div class="cuba-demo-content mt50">
                <div class="couting">
                  <h2>Cards</h2>
                </div>
                <p>So many unique cards</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid o-hidden">
          <div class="row landing-cards">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-sm-5 col-12"><img class="img-fluid landing-card" src="assets/images/landing/cards/1.jpg" alt=""></div>
                <div class="col-sm-4 col-7"><img class="img-fluid landing-card" src="assets/images/landing/cards/2.jpg" alt=""></div>
                <div class="col-sm-3 col-5"><img class="img-fluid landing-card" src="assets/images/landing/cards/3.jpg" alt=""></div>
                <div class="col-sm-8 col-12">
                  <div class="row">
                    <div class="col-6"><img class="img-fluid landing-card" src="assets/images/landing/cards/4.jpg" alt=""></div>
                    <div class="col-6"><img class="img-fluid landing-card" src="assets/images/landing/cards/5.jpg" alt=""></div>
                    <div class="col-5"><img class="img-fluid landing-card" src="assets/images/landing/cards/7.jpg" alt=""></div>
                    <div class="col-7"><img class="img-fluid landing-card" src="assets/images/landing/cards/8.jpg" alt=""></div>
                  </div>
                </div>
                <div class="col-sm-4 col-12">
                  <div class="row">
                    <div class="col-sm-12 col-6"><img class="img-fluid landing-card" src="assets/images/landing/cards/6.jpg" alt=""></div>
                    <div class="col-sm-12 col-6"><img class="img-fluid landing-card" src="assets/images/landing/cards/9.jpg" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12 col-sm-4"><img class="img-fluid landing-card" src="assets/images/landing/cards/10.jpg" alt=""></div>
                <div class="col-md-6 col-sm-4"><img class="img-fluid landing-card" src="assets/images/landing/cards/15.jpg" alt=""><img class="img-fluid landing-card" src="assets/images/landing/cards/11.jpg" alt=""><img class="img-fluid landing-card" src="assets/images/landing/cards/21.jpg" alt=""></div>
                <div class="col-md-6 col-sm-4"><img class="img-fluid landing-card" src="assets/images/landing/cards/14.jpg" alt=""><img class="img-fluid landing-card" src="assets/images/landing/cards/13.jpg" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-space cuba-demo-section email_bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 wow pulse">
              <div class="cuba-demo-content mt50">
                <div class="couting">
                  <h2> Email</h2>
                  <p> Usefull Templates</p>
                </div>
              </div>
            </div>
          </div>
        </div><img class="img-fluid" src="assets/images/landing/email_section_img.jpg" alt="">
      </section>
      <section class="section-space cuba-demo-section components-section" id="components">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 wow pulse">
              <div class="cuba-demo-content mt50">
                <div class="couting">
                  <h2>UI</h2>
                </div>
                <p>Components</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container container-modify">
          <div class="row component_responsive">
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/1.png" alt="">
                <h6 class="m-0 Pt-4">SweetAlert2</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/2.png" alt="">
                <h6 class="m-0">Avatar</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/3.png" alt="">
                <h6 class="m-0">Scrollable</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/4.png" alt="">
                <h6 class="m-0">Tree view</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/5.png" alt="">
                <h6 class="m-0">Bootstrap notify</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/6.png" alt="">
                <h6 class="m-0">Rating </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/7.png" alt="">
                <h6 class="m-0">Dropzone</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/8.png" alt="">
                <h6 class="m-0">Tour</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/9.png" alt="">
                <h6 class="m-0">Animated modal</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/10.png" alt="">
                <h6 class="m-0">Owl Carousel</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/11.png" alt="">
                <h6 class="m-0">Ribbons </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/12.png" alt="">
                <h6 class="m-0">Pagination </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/13.png" alt="">
                <h6 class="m-0">Steps </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/14.png" alt="">
                <h6 class="m-0">Breadcrumb  </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/15.png" alt="">
                <h6 class="m-0">Range Slider </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/16.png" alt="">
                <h6 class="m-0">image cropper </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/17.png" alt="">
                <h6 class="m-0">Sticky </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/18.png" alt="">
                <h6 class="m-0">Progress </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/19.png" alt="">
                <h6 class="m-0">Tooltip </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/20.png" alt="">
                <h6 class="m-0">Spinners </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/21.png" alt="">
                <h6 class="m-0">Dropdown </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/22.png" alt="">
                <h6 class="m-0">Tabs </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/23.png" alt="">
                <h6 class="m-0">Accordion  </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/24.png" alt="">
                <h6 class="m-0">Navs</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/25.png" alt="">
                <h6 class="m-0">Shadow</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/26.png" alt="">
                <h6 class="m-0">state color</h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/27.png" alt="">
                <h6 class="m-0">List  </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/28.png" alt="">
                <h6 class="m-0">Grid </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/29.png" alt="">
                <h6 class="m-0">Helper classes </h6>
              </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 component-col-set">
              <div class="component-hover-effect"><img src="assets/images/landing/icon/30.png" alt="">
                <h6 class="m-0">Typography</h6>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-space cuba-demo-section app_bg" id="applications">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 wow pulse">
              <div class="cuba-demo-content mt50">
                <div class="couting">
                  <h2>20+</h2>
                </div>
                <p>Usefull application</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid container-modify apps">
          <div class="landing-slider">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                <div class="img-effect mb-3"><a href="../theme/social-app.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/social-app.jpg" alt=""></a></div>
                <h4>Social App</h4>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4"> 
                <div class="img-effect mb-3"><a href="../theme/knowledgebase.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/knowlagebase-app.jpg" alt=""></a></div>
                <h4>knowledgebase</h4>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4"> 
                <div class="img-effect mb-3"><a href="../theme/support-ticket.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/support-ticket-app.jpg" alt=""></a></div>
                <h4>Support Ticket</h4>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                <div class="img-effect mb-3"><a href="../theme/email-application.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/mail-app.jpg" alt=""></a></div>
                <h4>Email Dashboard</h4>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                <div class="img-effect mb-3"><a href="../theme/to-do.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/To-Do-app.jpg" alt=""></a></div>
                <h4>To-Do</h4>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                <div class="img-effect mb-3"><a href="../theme/job-cards-view.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/job-search-app.jpg" alt=""></a></div>
                <h4>Job Search</h4>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                <div class="img-effect mb-3"><a href="../theme/product-page.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/ecommerce-app.jpg" alt=""></a></div>
                <h4>Ecommerce</h4>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">                             
                <div class="img-effect mb-3"><a href="../theme/kanban.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/apps/kanban.jpg" alt=""></a></div>
                <h4>Kanban</h4>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                <div class="img-effect mb-3"><a href="../theme/file-manager.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/apps/file.jpg" alt=""></a></div>
                <h4>File Manager</h4>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">         
                <div class="img-effect mb-3"><a href="../theme/projects.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/apps/project.jpg" alt=""></a></div>
                <h4>Project</h4>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                <div class="img-effect mb-3"><a href="../theme/contacts.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/apps/contacts.jpg" alt=""></a></div>
                <h4>Contacts</h4>
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                <div class="img-effect mb-3"><a href="../theme/chat.html" target="_blank"><img class="img-fluid cuba-img" src="assets/images/landing/apps/chat.jpg" alt=""></a></div>
                <h4>Chat</h4>
              </div>
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
                  <h2>4+</h2>
                </div>
                <p class="mb-0">Top Frameworks</p>
              </div>
            </div>
            <div class="col-sm-12 framworks">                 
              <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item"><a class="nav-link d-flex active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"> <img src="assets/images/landing/icon/html/html.png" alt="">
                    <div class="text-start">
                      <h5 class="mb-0">HTML</h5>
                      <p class="mb-0">Frameworks</p>
                    </div></a></li>
                <li class="nav-item"><a class="d-flex nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"> <img src="assets/images/landing/icon/react/react1.png" alt="">
                    <div class="text-start">
                      <h5 class="mb-0">React</h5>
                      <p class="mb-0">Frameworks</p>
                    </div></a></li>
                <li class="nav-item"><a class="d-flex nav-link" id="pills-angular-tab" data-bs-toggle="pill" href="#pills-angular" role="tab" aria-controls="pills-angular" aria-selected="false"> <img src="assets/images/landing/icon/angular/angular.svg" alt="">
                    <div class="text-start">
                      <h5 class="mb-0">Angular</h5>
                      <p class="mb-0">Frameworks</p>
                    </div></a></li>
                <li class="nav-item"><a class="d-flex nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"> <img src="assets/images/landing/icon/laravel/laravel.png" alt="">
                    <div class="text-start">
                      <h5 class="mb-0">Laravel</h5>
                      <p class="mb-0">Frameworks</p>
                    </div></a></li>
              </ul>
              <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <ul class="framworks-list">
                    <li class="box wow fadeInUp">
                      <div> <img src="assets/images/landing/icon/html/bootstrap.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Booxstrap 4X</h6>
                    </li>
                    <li class="box wow fadeInUp">
                      <div> <img src="assets/images/landing/icon/html/css.png" alt=""></div>
                      <h6 class="mb-0 mt-3">CSS</h6>
                    </li>
                    <li class="box wow fadeInUp">
                      <div> <img src="assets/images/landing/icon/html/sass.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Sass</h6>
                    </li>
                    <li class="box wow fadeInUp">
                      <div> <img src="assets/images/landing/icon/html/pug.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Pug</h6>
                    </li>
                    <li class="box wow fadeInUp">
                      <div> <img src="assets/images/landing/icon/html/npm.png" alt=""></div>
                      <h6 class="mb-0 mt-3">NPM</h6>
                    </li>
                    <li class="box wow fadeInUp">
                      <div> <img src="assets/images/landing/icon/html/gulp.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Gulp</h6>
                    </li>
                    <li class="box wow bounceIn">                                   
                      <div> <img src="assets/images/landing/icon/html/kit.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Starter Kit</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/html/uikits.png" alt=""></div>
                      <h6 class="mb-0 mt-3">40+ UI Kits</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/html/layout.png" alt=""></div>
                      <h6 class="mb-0 mt-3">8+ Layout</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/html/builders.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Builders</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/html/iconset.png" alt=""></div>
                      <h6 class="mb-0 mt-3">11 Icon Sets</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/html/forms.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Forms</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/html/table.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Tables</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/html/apps.png" alt=""></div>
                      <h6 class="mb-0 mt-3">17+ Apps</h6>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <ul class="framworks-list">
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/react/hook.png" alt=""></div>
                      <h6 class="mb-0 mt-3">React Hook</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/react/reactstrap.png" alt=""></div>
                      <h6 class="mb-0 mt-3">React Strap</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/react/noquery.png" alt=""></div>
                      <h6 class="mb-0 mt-3">No Jquery</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/react/redux.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Redux</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/react/firebase.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Firebase Auth</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/react/crud.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Firebase Crud</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/react/chat.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Chat</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/react/animation.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Router Animation</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/react/props_state.png" alt=""></div>
                      <h6 class="mb-0 mt-3">State & Props</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/react/reactrouter.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Reactrouter</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/react/chart.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Amazing Chart</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/react/map.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Map</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/react/gallery.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Gallery</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/react/application.png" alt=""></div>
                      <h6 class="mb-0 mt-3">9+ Apps</h6>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="pills-angular" role="tabpanel" aria-labelledby="pills-angular-tab">
                  <ul class="framworks-list">
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/angular/1.png" alt=""></div>
                      <h6 class="mb-0 mt-3">SCSS</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/angular/2.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Ng Bootstrap</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/angular/3.png" alt=""></div>
                      <h6 class="mb-0 mt-3">RXjs</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/angular/4.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Router</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/angular/5.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Form</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/angular/6.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Apex chart</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/angular/7.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Chart.js</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/angular/8.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Chartist</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/angular/9.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Google Map</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/angular/10.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Gallery</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/angular/11.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Ecommerce</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/angular/12.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Firebase Auth</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/angular/13.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Firebase Crud</h6>
                    </li>
                    <li class="box wow bounceIn">                                    
                      <div> <img src="assets/images/landing/icon/angular/14.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Chat</h6>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <ul class="framworks-list">
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/laravel/laravel.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Laravel 7</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/laravel/bootstrap.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Bootstrap 5</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/html/sass.png" alt=""></div>
                      <h6 class="mb-0 mt-3">SASS</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/laravel/blade.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Blade</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/laravel/layouts.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Layouts</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/laravel/npm.png" alt=""></div>
                      <h6 class="mb-0 mt-3">NPM</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/laravel/mix.png" alt=""></div>
                      <h6 class="mb-0 mt-3">MIX</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/laravel/yarn.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Yarn</h6>
                    </li>
                    <li class="box">
                      <div> <img src="assets/images/landing/icon/laravel/sasswebpack.png" alt=""></div>
                      <h6 class="mb-0 mt-3">Sasswebpack</h6>
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