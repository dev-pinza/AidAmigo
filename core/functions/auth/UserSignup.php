<?php
// import db
// Check & Sanitize Data
// Check Password
// check if record exist on database
// Once good fill database
// Send Email confirmation
// Login Access

#include database
include('../db/connect.php');

#include PHPMailer
require_once "../../bat/phpmailer/PHPMailerAutoload.php";


if (isset($_POST["email"]) && isset($_POST["country"]) && isset($_POST["first_name"]) && $_POST["first_name"] != "") {

    $first_name = addslashes($_POST["first_name"]);
    $middle_name = addslashes($_POST["middle_name"]);
    $last_name = addslashes($_POST["last_name"]);

    $email = addslashes($_POST["email"]);
    $password = addslashes($_POST["password"]);
    $confirm_password = addslashes($_POST["confirm_password"]);

    $hash_pass = password_hash($password, PASSWORD_DEFAULT);
    $dob = addslashes($_POST["dob"]);
    $phone = addslashes($_POST["phone"]);
    $gender = addslashes($_POST["gender"]);

    $country = addslashes($_POST["country"]);
    $state = addslashes($_POST["state"]);
    $address = addslashes($_POST["address"]);

    // $ = addslashes($_POST[""]);
    $date = date('Y-m-d H:i:s');
    // Check Password
    if ($password == $confirm_password) {

        #Check if Data Exist on Database and Move on.
        $query_check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE email = '$email'");

        // Count Row if Zero Move else User Exist
        if (mysqli_num_rows($query_check_user) <= 0) {
            // Post record on database
            $query_insert_user = mysqli_query($connection, "INSERT INTO `users` (`email`, `password`, `phone`, `bvn`, `is_active`, `is_verified`, `email_confimed`, `first_name`, `middle_name`, `last_name`, `gender`, `dob`, `address`, `country`, `state`, `last_logged`, `created_date`)
             VALUES ('{$email}', '{$hash_pass}', '{$phone}', '0', '0', '0', '0', '{$first_name}', '{$middle_name}', '{$last_name}', '{$gender}', '{$dob}', '{$address}', '{$country}', '{$state}', '{$date}', '{$date}')");

            if ($query_insert_user) {

                // Random Number
                $digits = 10;
                $activation_code = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

                // Insert Code to Database
                $query_update_code = mysqli_query($connection, "UPDATE `users` SET activation_code = '$activation_code' WHERE email = '$email'");

                if ($query_update_code) {

                    $mail = new PHPMailer();
                     // from email addreess and name
                     $mail->From = "info@growfund.com.ng";
                     $mail->FromName = "GrowFund";
                     // to adress and name
                     $mail->addAddress($email, $first_name);
                     // reply address
                     $mail->SMTPSecure = 'ssl';
                     //Address to which recipient will reply
                     // progressive html images
                     $mail->addReplyTo("info@growfund.com.ng", "Reply");
                     // CC and BCC
                     //CC and BCC
                     // $mail->addCC("cc@example.com");
                     // $mail->addBCC("bcc@example.com");
                     // Send HTML or Plain Text Email
                     $mail->isHTML(true);
                     $mail->Subject = "Confirm GrowFund Email";
                     $mail->Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                     <html dir='ltr' xmlns='http://www.w3.org/1999/xhtml'>
                    
                     <head>
                         <meta name='viewport' content='width=device-width' />
                         <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                         <title>GrowFund Nigeria</title>
                     </head>
                    
                     <body style='margin:0px; background: #f8f8f8; '>
                         <div width='100%' style='background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;'>
                             <div style='max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px'>
                                 <table border='0' cellpadding='0' cellspacing='0' style='width: 100%; margin-bottom: 20px'>
                                     <tbody>
                                         <tr>
                                             <td style='vertical-align: top; padding-bottom:30px;' align='center'>
                                            GrowFund
                                             </td>
                                         </tr>
                                     </tbody>
                                 </table>
                                 <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                     <tbody>
                                         <tr>
                                             <td style='background:#413e39; padding:20px; color:#fff; text-align:center;'> Hola $first_name, Activate GrowFund Account. </td>
                                         </tr>
                                     </tbody>
                                 </table>
                                 <div style='padding: 40px; background: #fff;'>
                                     <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                         <tbody>
                                             <tr>
                                                 <td>
                                                     <p>Submitted Date <b>$date</b></p>
                                                     <p>Click link below for Activation</p>
                                                     <p>Find Below Your Login Credentials</p>
                                                     <p>E-mail: $email</p>
                                                     <p>Phone: $phone</p>
                                                     <center>
                                                         <a href='https://growfund.com.ng/functions/auth/ConfirmEmail.php?activation_code=$activation_code' style='display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #4fc3f7; border-radius: 60px; text-decoration:none;'>Activate Code</a>
                                                     </center>
                                                     <b>- Thanks (GrowFund Email Robot)</b> </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <div style='text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px'>
                                     <p> Powered by GrowFund
                                         <br>
                                         <a href='javascript: void(0);' style='color: #b2b2b5; text-decoration: underline;'>Unsubscribe</a> </p>
                                 </div>
                             </div>
                         </div>
                     </body>
                    
                     </html>";
                     $mail->AltBody = "This is the plain text version of the email content";
                     // mail system
                     if(!$mail->send()) 
                     {
                         echo "Mailer Error: " . $mail->ErrorInfo;
                    echo header ("Location: ../../return_error.php?return_message=noemail&error_msg=$mail->ErrorInfo");
                         
                     } else
                     {
                         echo "Message has been sent successfully";
                         echo header ("Location: ../../return_success.php");
                     }
                } else {
                    echo header ("Location: ../../return_error?return_message=nocoderecord&error_msg=Activation code not recorded for User $email");
                }

            } else {
          echo header ("Location: ../../return_error.php?return_message=signupfailed&error_msg=User registration failed didnt capture $email");
            }

        } else {
          echo header ("Location: ../../return_error.php?return_message=userexist&error_msg=User has already registered with GrowFund");
        }
    } else {
        // return a message
        echo header ("Location: ../../signup.php?return_message=wrongpass");
    }

} else {
    echo header ("Location: ../../signup.php?return_message=nodata");
}
?>