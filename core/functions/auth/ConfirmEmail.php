<?php
// Check for GET - activation_code
// Import Database
// Sanitize GET
// Check Database for Random Number
// Activate if Exist on Database
// Redirect to Login. Done!


#check Activation code
if (isset($_GET["activation_code"])) {

    #import
    include("../db/connect.php");

    #sanitize
    $activation_code = addslashes($_GET["activation_code"]);

    #check & update
    $query_check = mysqli_query($connection, "SELECT * FROM `users` WHERE activation_code = '$activation_code'");

    if (mysqli_num_rows($query_check) > 0) {

        #update table
        $query_update_activation_code = mysqli_query($connection, "UPDATE `users` SET email_confimed = '1' WHERE activation_code = '$activation_code'");

        #Done direct to Login
        if ($query_update_activation_code) {
            echo header("Location: ../../login.php");
        } else {
            echo header("Location: ../../index.php?msg=cannotupdatesystemerror");
        }
    } else {
        echo header("Location: ../../index.php?msg=norecord");
    }

} else {
    echo header("Location: ../../index.php");
}
?>