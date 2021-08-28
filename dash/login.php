<?php
// check if server have a POST
// import database
// input password checking code
// check if email is active
// SET sessions here
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  ?>
  <script>
    window.history.back();
  </script>
  <?php
}

// Include config file
require_once "functions/db/connect.php";

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
$err = "";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email or Email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT users.id, users.email, users.phone, users.password, users.email_confimed, users.first_name, users.middle_name, users.last_name FROM `users` WHERE users.email = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $phone, $hashed_password, $email_confimed, $first_name, $middle_name, $last_name);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            // session_start();
                            
                            // Store data in session variables
                            session_regenerate_id();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["phone"] = $phone;
                            $_SESSION["email_confimed"] = $email_confimed;
                            $_SESSION["first_name"] = $first_name;
                            $_SESSION["middle_name"] = $middle_name;
                            $_SESSION["last_name"] = $last_name;
                            // $_SESSION["lastname"] = $lastname;
                            session_write_close();                            
                            //run a quick code to show active user
                            // Redirect user to welcome page
                            if ($stmt->num_rows ==1 && $_SESSION["loggedin"] === true) {
                              header("location: core/index.php");
                            }else {
                              $email_err = "Please verify your account";
                              $password_err = "Please verify your account";
                            }

                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if email doesn't exist
                    $email_err = "No account found with that E-mail or Password.";
                }
            } else{
                $email_err = "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
    }
    
    // Close connection
    mysqli_close($connection);
    mysqli_stmt_close($stmt);
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
    <meta name="author" content="pinzastudio">
    <link rel="icon" href="assets/images/logo/growfund.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/growfund.png" type="image/x-icon">
    <title>GrowFund - Investment & CrowdFunding</title>
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
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
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
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-5">
            <!-- Start text -->
            <!-- End Text -->
            <img class="bg-img-cover bg-center img-responsive" src="assets/images/logo/growfund.png" alt="looginpage">
            <!-- End Image -->
        </div>
        <div class="col-xl-7 p-0">
          <div class="login-card">
            <div>
              <div>
                  <!-- <a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="assets/images/logo/growfund.png" alt="looginpage" width="200px" height="200px"><img class="img-fluid for-dark" src="assets/images/logo/growfund.png" alt="looginpage" width="200px" height="200px"></a> -->
                </div>
              <div class="login-main"> 
                <form class="theme-form needs-validation" novalidate="" method="POST">
                  <h4>Sign in to GrowFund</h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" name="email" required="" placeholder="user@example.com">
                    <span class="help-block" style="color:red;"><?php echo $email_err; ?></span>
                    <div class="invalid-tooltip">Please enter proper email.</div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                    <span class="help-block" style="color:red;"><?php echo $password_err; ?></span>
                    <div class="invalid-tooltip">Please enter password.</div>
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                  </div>
                  <!-- <h6 class="text-muted mt-4 or">Or Sign in with</h6> -->
                  <div class="social mt-4">
                    <div class="btn-showcase">
                        <a href="forget_password.php" target="_blank"> Forgot Password? </a>
                    </div>
                  </div>
                  <p class="mt-4 mb-0">Don't have account?<a class="ms-2" href="signup.php">Create Account</a></p>
                  <script>
                    (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                    }, false);
                    });
                    }, false);
                    })();
                    
                  </script>
                </form>
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
      <!-- Sidebar jquery-->
      <script src="assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="assets/js/script.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
    </div>
  </body>
</html>