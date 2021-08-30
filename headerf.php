<?php
// USER DETAILS
#session
session_start();
#database
include('core/functions/db/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aid Amigo is a for-profit crowdfunding platform that allows people to raise money for events ranging from life events such as celebrations and graduations to challenging circumstances like accidents and illnesses.">
    <meta name="keywords" content="Aid Amigo, African, Crowdfunding, Investment, Money, People, Celebration, Illnesses, Accident, Education, Payment, Graduation">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/img/logo/AIDAMIGO_SVG_BACKGROUNDLESS.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/logo/AIDAMIGO_SVG_BACKGROUNDLESS.svg" type="image/x-icon">
    <title>Aid Amigo - <?php echo $web_title; ?></title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="core/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="core/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="core/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="core/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="core/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="core/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="core/assets/css/vendors/animate.css">
    <!-- <link rel="stylesheet" type="text/css" href="core/assets/css/vendors/dropzone.css"> -->
    <link rel="stylesheet" type="text/css" href="core/assets/css/vendors/date-picker.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="core/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="core/assets/css/style.css">
    <link id="color" rel="stylesheet" href="core/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="core/assets/css/responsive.css">
    <!-- AJAX  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--  SWEET ALERT -->
    <link href="core/assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
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
  <body>
  <!-- <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div> -->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar compact-small material-icon" id="pageWrapper">
      <!-- Page Header Start-->
 
      <!-- Page Header Ends  -->
      <!-- <div class="page-body-wrapper default-menu default-menu"> -->