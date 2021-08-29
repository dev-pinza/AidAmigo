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
        if(isset($_FILES['image']) && isset($_FILES['image_middle']) || isset($_FILES['image_last'])) {
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

            // LETS CONVERT IMAGE 2
            $file_name_mid = $_FILES['image_middle']['name'];
            $file_ext_mid = strtolower(end(explode('.',$file_name_mid)));


            $file_size_mid=$_FILES['image_middle']['size'];
            $file_tmp_mid= $_FILES['image_middle']['tmp_name'];
            // echo $file_tmp;echo "<br>";

            $type_mid = pathinfo($file_name_mid, PATHINFO_EXTENSION);
            $data_mid = file_get_contents($file_tmp_mid );
            $base64_mid = 'data:image/' . $type_mid . ';base64,' . base64_encode($data_mid);

            // LETS CONVERT IMAGE 3
            $file_name_last = $_FILES['image_last']['name'];
            $file_ext_last = strtolower(end(explode('.',$file_name_last)));


            $file_size_last=$_FILES['image_last']['size'];
            $file_tmp_last= $_FILES['image_last']['tmp_name'];
            // echo $file_tmp;echo "<br>";

            $type_last = pathinfo($file_name_last, PATHINFO_EXTENSION);
            $data_last = file_get_contents($file_tmp_last);
            $base64_last = 'data:image/' . $type_last . ';base64,' . base64_encode($data_last);

            # DONE WITH FILE CONVERSION - check database for anything of such
            $query_check_fund = mysqli_query($connection, "SELECT * FROM `fund_raise` WHERE campaign_title = '$campaign_title' AND goal_amount = '$goal_amount' AND created_date = '$due_date'");

            if (mysqli_num_rows($query_check_fund) <= 0 ) {

                #upload fund 
                $query_upload_fund = mysqli_query($connection, "INSERT INTO `fund_raise` (`user_id`, `currency`, `goal_amount`, `amount_raised`, `total_contributed`, `public_link`, `due_date`, `created_date`, `campaign_title`, `category`, `story_body`, `user_type`, `image_base64`, `middle_image`, `last_image`, `is_active`, `is_withdrawn`) VALUES ('{$user_id}', 'NGN', '{$goal_amount}', '0.00', '0', '{$public_link}', '{$due_date}', '{$created_date}', '{$campaign_title}', '{$category}', '{$story_body}', '{$user_type}', '{$base64}', '{$base64_mid}', '{$base64_last}', '1', '0')");

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