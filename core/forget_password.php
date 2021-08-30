<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  ?>
  <script>
    window.history.back();
  </script>
  <?php
}
?>
<?php
$output = "";
if (isset($_GET["return_message"])) {
  if ($_GET["return_message"] == "noemail") {
      $output = $_GET["error_msg"];
  } else if ($_GET["return_message"] == "updateusererror") {
    $output = $_GET["error_msg"];
  } else if ($_GET["return_message"] == "nouserfound") {
    $output = $_GET["error_msg"];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aid Amigo is a for-profit crowdfunding platform that allows people to raise money for events ranging from life events such as celebrations and graduations to challenging circumstances like accidents and illnesses.">
    <meta name="keywords" content="Aid Amigo, African, Crowdfunding, Investment, Money, People, Celebration, Illnesses, Accident, Education, Payment, Graduation">
    <meta name="author" content="pinzastudio">
    <link rel="icon" href="../assets/img/logo/AIDAMIGO_SVG_BACKGROUNDLESS.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/img/logo/AIDAMIGO_SVG_BACKGROUNDLESS.svg" type="image/x-icon">
    <title>Aid Amigo - Investment & CrowdFunding</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">     
            <div class="login-card">
              <div>
                <div><a class="logo" href="index.php"><img class="img-fluid for-light" src="../assets/img/logo/AIDAMIGO_SVG_BACKGROUNDLESS.svg" height="100px" width="100px" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
                <div class="login-main"> 
                  <form class="theme-form" method="POST" action="functions/auth/ForgetPassword.php">
                    <h4>Reset Your Password</h4>
                    <div class="form-group">
                      <label class="col-form-label">Enter Your Email Address</label>
                      <div class="row">
                        <!-- <div class="col-4 col-sm-3">
                          <input class="form-control mb-1" type="text" value="+ 91">
                        </div> -->
                        <div class="col-12 col-sm-12">
                          <input class="form-control mb-1" type="email" name="email" placeholder="user@address.com" required="">
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary btn-block m-t-10" type="submit">Send</button>
                        </div>
                      </div>
                    </div>
                    <div class="mt-4 mb-4"><span class="reset-password-link" style="color:red;"> <?php echo $output; ?> </span></div>
                    
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>

