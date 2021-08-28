<?php
// Users Add Bank Details
// Check Session
// import & sanitize input
// check length of account number
// check for duplicate on database
// add details to database

session_start();
include('../db/connect.php');

if ($_SESSION["loggedin"] === true && isset($_POST["account_number"]) && isset($_POST["bank_code"]) && isset($_POST["account_name"]))
{
    $user_id = $_SESSION["id"];
    $bank_name = addslashes($_POST["bank_namex"]);
    $bank_code = addslashes($_POST["bank_code"]);
    $account_name = addslashes($_POST["account_name"]);
    $account_number = addslashes($_POST["account_number"]);
    $created_date = date('Y-m-d H:i:s');

    # account number length
    $account_number_length = strlen($account_number);

    if ($account_number_length == 10) {
        // check if account exist
        $query_add_bank = mysqli_query($connection, "SELECT * FROM `bank_account` WHERE account_number = '$account_number' AND bank_code = '$bank_code'");

        if (mysqli_num_rows($query_add_bank) <= 0) {
            // add to the bank
            $query_add_account = mysqli_query($connection, "INSERT INTO `bank_account` (`user_id`, `bank_code`, `bank_name`, `account_number`, `account_name`, `total_deposit`, `created_date`)
            VALUES ('{$user_id}', '{$bank_code}', '{$bank_name}', '{$account_number}', '{$account_name}', '0.00', '{$created_date}')");

            // Return success
            echo header("Location: ../../core/collect-fund.php?success=Local bank account added successfully");
        } else {
            echo header("Location: ../../core/collect-fund.php?error=Account details already created");
        }
    } else {
        echo header("Location: ../../core/collect-fund.php?error=Please input account number");
    }

} else {
    echo header("Location: ../../core/collect-fund.php?error=No data found");
}
?>