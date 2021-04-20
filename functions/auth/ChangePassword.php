<?php

// check $_POST
// import DB
// check length of code
// check if password match
// check if code exist on database
// if it exist update password
// Access login

#check post
if (isset($_POST["input_one"]) && isset($_POST["password"])) {

    #import
    include('../db/connect.php');

    #sanitize input make it one
    $input_one = addslashes($_POST["input_one"]);
    $input_two = addslashes($_POST["input_two"]);
    $input_three = addslashes($_POST["input_three"]);
    
    $password = addslashes($_POST["password"]);
    $confirm_password = addslashes($_POST["confirm_password"]);
    # hash password
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    $activation_code = $input_one.''.$input_two.''.$input_three;
    $code_length = strlen($activation_code);

    # check code length
    if ($code_length == 6) {

        #check if password match
        if ($password == $confirm_password) {

            #check database if code exist for one user
            $query_user_code = mysqli_query($connection, "SELECT * FROM `users` WHERE activation_code = '$activation_code'");

            if (mysqli_num_rows($query_user_code) == 1) {
                
                # update database
                $query_update_password = mysqli_query($connection, "UPDATE `users` SET `users`.`password` = '$hash_password' WHERE activation_code = '$activation_code'");

                if ($query_update_password) {
                echo header ("Location: ../../login.php?password_changed=1");
                } else {
                echo header ("Location: ../../change_password.php?codesent=1&return_message=updateerror&error_msg=Opps a problem occured, pleaase enter code & password again!");
                }
            } else {
                echo header ("Location: ../../forget_password.php?return_message=noemail&error_msg=Opps a problem occured please send code again!");
                // echo $activation_code;
            }
        } else {
            echo header ("Location: ../../change_password.php?codesent=1&return_message=passdontmatch&error_msg=Password dont Match");
        }

    } else {
    echo header ("Location: ../../change_password.php?codesent=1&return_message=codelength&error_msg=Please enter a proper code");
    }

} else {
    echo header ("Location: ../../change_password.php?return_message=nodata");
}

?>