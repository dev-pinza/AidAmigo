<?php
// USER DETAILS
#session
session_start();
#database
include('../functions/db/connect.php');

# session entities
$user_id = $_SESSION["id"];
$email = $_SESSION["email"];
$phone = $_SESSION["phone"];
$email_confimed = $_SESSION["email_confimed"];
$first_name = $_SESSION["first_name"];
$middle_name = $_SESSION["middle_name"];
$last_name = $_SESSION["last_name"];

// if ($email_confimed == "0") {
//   echo header("location:  ../functions/auth/LogOut.php");
// }
if ($_SESSION["loggedin"] != true) {
  echo header("location:  ../functions/auth/LogOut.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Grow Fund is an African for-profit crowdfunding platform that allows people to raise money for events ranging from life events such as celebrations and graduations to challenging circumstances like accidents and illnesses.">
    <meta name="keywords" content="Grow Fund, African, Crowdfunding, Investment, Money, People, Celebration, Illnesses, Accident, Education, Payment, Graduation">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/logo/growfund.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/growfund.png" type="image/x-icon">
    <title>GrowFund - <?php echo $web_title; ?></title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <!-- <link rel="stylesheet" type="text/css" href="../assets/css/vendors/dropzone.css"> -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <!-- AJAX  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--  SWEET ALERT -->
    <link href="../assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MT516R5N90"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-MT516R5N90')
    </script>
  </head>
  <body onload="startTime()">
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
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar compact-small material-icon" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/growfund.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
              <!-- @Twilla Try to see component we can use here -->
          </div>
          <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
              <!-- <li>                         
                  <span class="header-search"><i data-feather="search"></i></span>
                </li> -->
              <li class="onhover-dropdown">
              <!-- count notification -->
              <?php
              $query_notify = mysqli_query($connection, "SELECT * FROM `notification` WHERE user_id = '$user_id' AND is_read = '0'");
              $not_sum = mysqli_num_rows($query_notify);
              ?>
              <!-- end count -->
                <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary"> <?php echo $not_sum; ?>                               </span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li><i data-feather="bell"></i>
                    <h6 class="f-18 mb-0">Notifications</h6>
                  </li>
                  <!-- PHP NOTIFICATION -->
                  <?php
                  #query notification.
                  $query_notify = mysqli_query($connection, "SELECT * FROM `notification` WHERE user_id = '$user_id' AND is_read = '0' ORDER BY id DESC LIMIT 5");
                  if (mysqli_num_rows($query_notify) > 0) {
                    while ($gn = mysqli_fetch_array($query_notify)){
                  ?>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-primary"> </i> <?php echo $gn["message"]; ?><span class="pull-right"><?php echo $gn["date"]; ?></span></p>
                  </li>
                  <?php
                    }
                  } else {
                    ?>
                    <li>
                    <p><i class="fa fa-circle-o me-3 font-warning"> </i>Zero Notification<span class="pull-right">(*_*)</span></p>
                  </li>
                    <?php
                  }
                  ?>
                  <!-- END PHP NOTIFICATION -->
                  <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                </ul>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown p-0 me-0">
                <div class="media profile-media"><img class="b-r-10" src="../assets/images/dashboard/profile.jpg" alt="">
                  <div class="media-body"><span><?php echo $first_name.' '.$last_name ?></span>
                    <p class="mb-0 font-roboto"><?php echo date('Y-m-d');?> <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="settings.php"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="../functions/auth/LogOut.php"><i data-feather="log-out"> </i><span>Log out</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends  -->