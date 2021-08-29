<?php
// check for POST
// import DB, start session
// sanitize inputted data
// check if the fund terms exist
// make an upload

# check post
if (isset($_POST["goal_amount"]) && isset($_POST["due_date"]) && isset($_POST["story_body"])) {
    
    #import
    include('../db/connect.php');

    #session start
    session_start();

    if ($_SESSION["loggedin"] === true) {
        # sanitize data
        $user_id = $_SESSION["id"];
        $goal_amount = addslashes($_POST["goal_amount"]);
        $campaign_title = addslashes($_POST["campaign_title"]);
        $due_date = addslashes($_POST["due_date"]);
        $category = addslashes($_POST["category"]);
        $story_body = addslashes($_POST["story_body"]);
        $user_type = addslashes($_POST["user_type"]);

        $created_date = date('Y-m-d H:i:s');

        #random-number-for public link
        $get_user_first = mysqli_query($connection, "SELECT first_name FROM `users` WHERE id = '$user_id'");
        $guf = mysqli_fetch_array($get_user_first);
        $first_name = explode(' ',trim($guf["first_name"]));
        $title_code = explode(' ',trim($campaign_title));

        $digits = 4;
        $activation_code = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
        $public_link = $first_name[0].$activation_code.$title_code[0];

        #image converstion to BASE64
        if(isset($_FILES['image'])) {
            // get a value out
            $errors=array();
            $allowed_ext= array('jpg','jpeg','png','gif');
            $file_name = $_FILES['image']['name'];
        //   $file_name =$_FILES['image']['tmp_name'];
            $file_ext = strtolower(end(explode('.',$file_name)));


            $file_size=$_FILES['image']['size'];
            $file_tmp= $_FILES['image']['tmp_name'];
            // echo $file_tmp;echo "<br>";

            $type = pathinfo($file_name, PATHINFO_EXTENSION);
            $data = file_get_contents($file_tmp );
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

            # DONE WITH FILE CONVERSION - check database for anything of such
            $query_check_fund = mysqli_query($connection, "SELECT * FROM `fund_raise` WHERE campaign_title = '$campaign_title' AND goal_amount = '$goal_amount' AND created_date = '$due_date'");

            if (mysqli_num_rows($query_check_fund) <= 0 ) {

                #upload fund 
                $query_upload_fund = mysqli_query($connection, "INSERT INTO `fund_raise` (`user_id`, `currency`, `goal_amount`, `amount_raised`, `total_contributed`, `public_link`, `due_date`, `created_date`, `campaign_title`, `category`, `story_body`, `user_type`, `image_base64`, `is_active`, `is_withdrawn`) VALUES ('{$user_id}', 'NGN', '{$goal_amount}', '0.00', '0', '{$public_link}', '{$due_date}', '{$created_date}', '{$campaign_title}', '{$category}', '{$story_body}', '{$user_type}', '{$base64}', '1', '0')");

                if ($query_upload_fund) {
                    echo header("Location: ../../core/index.php?sucess=1");
                } else {
                    echo header("Location: ../../core/request-fund.php?error=System error creating fund campaign");
                }

            } else {
                echo header("Location: ../../core/request-fund.php?error=You cant re-create an already existing Fund campaign");
            }

        } else {
        echo header("Location: ../../core/request-fund.php?error=We cant process image upload currently");
        }
    } else {
        echo header("Location: ../../core/request-fund.php?error=User not Active");
    }
} else {
    echo header("Location: ../../core/request-fund.php?error=No Data Found");
}
?>