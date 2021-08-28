<?php
// if post
// import db
// check if user exist
// send a mail to change

#include PHPMailer
require_once "../../bat/phpmailer/PHPMailerAutoload.php";

if (isset($_POST["email"])) {
    $email = $_POST["email"];

    #import db
    include('../db/connect.php');

    #query user
    $query_user_email = mysqli_query($connection, "SELECT * FROM `users` WHERE email = '$email'");

    if (mysqli_num_rows($query_user_email) > 0) {
        // Name of User
        $fu = mysqli_fetch_array($query_update_code);
        $first_name = $fu["first_name"];
        // Random Number
        $digits = 6;
        $activation_code = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

        #query update user activatio code
        $query_update_code = mysqli_query($connection, "UPDATE `users` SET activation_code = '$activation_code' WHERE email = '$email'");

        if ($query_update_code) {
            // SEND EMAIL
            $mail = new PHPMailer();
            // from email addreess and name
            $mail->From = "info@growfund.com.ng";
            $mail->FromName = "GrowFund";
            // to adress and name
            $mail->SMTPSecure = 'ssl';
            $mail->addAddress($email, $first_name);
            // reply address
            //Address to which recipient will reply
            // progressive html images
            $mail->addReplyTo("info@growfund.com.ng", "Reply");
            // CC and BCC
            //CC and BCC
            // $mail->addCC("cc@example.com");
            // $mail->addBCC("bcc@example.com");
            // Send HTML or Plain Text Email
            $mail->isHTML(true);
            $mail->Subject = "Password-reset cofirmation code";
            $mail->Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
            <html dir='ltr' xmlns='http://www.w3.org/1999/xhtml'>
           
            <head>
                <meta name='viewport' content='width=device-width' />
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                <title>Confirmation Code Below</title>
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
                                    <td style='background:#413e39; padding:20px; color:#fff; text-align:center;'> Hola $first_name, Reset your GrowFund password. </td>
                                </tr>
                            </tbody>
                        </table>
                        <div style='padding: 40px; background: #fff;'>
                            <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>Activation Code</p>
                                            <p> <b>$activation_code</b></p>
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
           echo header ("Location: ../../forget_password.php?return_message=noemail&error_msg=$mail->ErrorInfo");
                
            } else
            {
                echo "Message has been sent successfully";
                echo header ("Location: ../../change_password.php?codesent=1");
            }
            // END SEND EMAIL
        } else {
          echo header("Location: ../../forget_password.php?return_message=updateusererror&error_msg=Couldnt process your activation code");
        }
        
    } else {
        echo header("Location: ../../forget_password.php?return_message=nouserfound&error_msg=User didnt register with GrowFund");
    }
} else {
    echo header("Location: ../../forget_password.php");
}

?>