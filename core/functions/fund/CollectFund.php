<?php
session_start();
include('../db/connect.php');

if ($_SESSION["loggedin"] === true && isset($_POST["amount"]) && isset($_POST["public_link"]) && $_SESSION["id"] != "")
{
    $link_id = $_POST["public_link"];
    $user_id = $_SESSION["id"];
    $amount = $_POST["amount"];
    $query_update = mysqli_query($connection, "UPDATE fund_raise SET is_active = '0', is_withdrawn = '1' WHERE public_link = '$link_id'");
    if ($query_update) {
        $query_bank = mysqli_query($connection, "SELECT * FROM bank_account WHERE `user_id` = '$user_id'");
        if (mysqli_num_rows($query_bank) > 0) {
            $qb = mysqli_fetch_array($query_bank);
            $bank_id = $qb["id"];
            $total_deposit = $qb["total_deposit"] + $amount;
            // update bank
            $query_bank_update = mysqli_query($connection, "UPDATE bank_account SET total_deposit = '$total_deposit' WHERE id = '$bank_id'");
            if ($query_bank_update) {
                $upload_transaction = mysqli_query($connection, "INSERT INTO `bank_account_transaction` (`bank_id`, `fund_id`, `transaction_id`, `amount`, `is_verified`, `description`) VALUES ('{$bank_id}', '{$link_id}', 'PENDING', '{$amount}', '0', 'PENDING TRANSFER')");
                if ($upload_transaction) {
                    echo header("Location: ../../core/collect-fund.php?success=Withdrawal Successful");
                } else {
                    echo header("Location: ../../core/collect-fund.php?error=Transaction Failed");
                }
            } else {
                echo header("Location: ../../core/collect-fund.php?error=Error Updating Bank Deposit");
            }
        } else {
            echo header("Location: ../../core/collect-fund.php?error=Error Finding Bank");
        }
    } else {
        echo header("Location: ../../core/collect-fund.php?error=Fund Raise not Updating");
    }
} else {
    echo header("Location: ../../core/collect-fund.php?error=No data found");
}
?>