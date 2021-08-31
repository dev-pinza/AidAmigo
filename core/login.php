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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aid Amigo | #1 fundraising platform</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets_login/css/login.css">
  <link rel="icon" href="../assets/img/logo/AIDAMIGO_SVG_BACKGROUNDLESS.svg" type="image/x-icon">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="../assets/img/mine/landing_image2.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <?php
              $account = "";
              if (isset($_GET["return_message"])) {
                $account = "Account created successfully";
              }
              ?>
                <center>
              <div class="brand-wrapper">
                <img src="../assets/img/logo/AIDAMIGO_SVG_BACKGROUNDLESS.svg" alt="logo" class="logo">
              </div>
              </center>
              <span class="help-block" style="color:green;"><?php echo $account; ?></span>
              <p class="login-card-description">Sign into your account</p>
              <form method="POST">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" required="" placeholder="user@example.com" class="form-control" placeholder="Email address">
                    <span class="help-block" style="color:red;"><?php echo $email_err; ?></span>
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" required="" class="form-control" placeholder="***********">
                    <span class="help-block" style="color:red;"><?php echo $password_err; ?></span>
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                </form>
                <a href="forget_password.php" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="signup.php" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets_login/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
