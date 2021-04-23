<?php
include('../../../functions/db/connect.php');

if (isset($_GET["reference"]) && isset($_GET["publiclink"]) && $_GET["reference"] != "" ) {

    $reference = $_GET["reference"];
    $public_link = $_GET["publiclink"];

    $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_live_6fa11470f62be3e8f3225ad2a98f4ce87305e9a5",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //   echo $response;

    $obj = json_decode($response, TRUE);
    $status = $obj['status'];
    $data = $obj['data'];
    $dataex = json_encode($data);
    $sa = json_decode($dataex, true);
    $data_id = $sa["id"];
    $payment_status = $sa["status"];
    // take 3%
    $amount = (($sa["amount"] / 100) - (($sa["amount"] / 100) * 0.03));
    $profit_amount = ($sa["amount"] / 100) * 0.03;
    
    // customer email
    $cdata = $sa["customer"];
    $cdatax = json_encode($cdata);
    $cd = json_decode($cdatax, TRUE);
    $email = $cd["email"];
    $customer_code = $cd["customer_code"];
    // META fullname
    $mdata = $sa["metadata"];
    $mdatax = json_encode($mdata);
    $md = json_decode($mdatax, TRUE);
    $cust_fd = $md["custom_fields"];
    $cdatas = json_encode($cust_fd);
    $cf = json_decode($cdatas, TRUE);
    $fullname = $cf["fullname"];
    $date = date('Y-m-d H:i:s');

    // CHECK DATABASE
    $query_data = mysqli_query($connection, "SELECT * FROM `fund_raise_transaction` WHERE transaction_id = '$reference'");

    if (mysqli_num_rows($query_data) <= 0) {
        if ($payment_status == "success" && $status == "success") {
            // add fund
            // balance, id
            $query_fund = mysqli_query($connection, "SELECT * FROM `fund_raise` WHERE public_link = '$public_link'");

            if (mysqli_num_rows($query_fund) > 0) {
                $row = mysqli_fetch_array($query_fund);
                $fund_id = $row["id"];
                $user_id = $row["user_id"];
                $amount_raised = $row["amount_raised"];
                $total_contributed_x = $row["total_contributed"];
                

                // computation and query two database;
                $balance_raised = $amount + $amount_raised;
                $total_contributed = $total_contributed_x + 1;

                // update database
                $query_update_fund = mysqli_query($connection, "UPDATE `fund_raise` SET amount_raised = '$balance_raised', total_contributed = '$total_contributed' WHERE id = '$fund_id'");

                if ($query_update_fund) {
                    // insert once check if fund transaction exist
                    $query_fund_trans = mysqli_query($connection, "SELECT * FROM `fund_raise_transaction` WHERE transaction_id = '$reference'");

                    if (mysqli_num_rows($query_fund_trans) <= 0) {
                        $query_insert_trans = mysqli_query($connection, "INSERT INTO `fund_raise_transaction` (`fund_id`, `amount`, `fund_balance`, `transaction_id`, `status`, `description`, `email`, `fullname`, `address`, `date`) VALUES ('{$fund_id}', '{$amount}', '{$balance_raised}', '{$reference}', '{$payment_status}', '{$customer_code}', '{$email}', '{$fullname}', '{$data_id}', '{$date}')");

                        if ($query_insert_trans) {

                            // profit
                            $query_profit = mysqli_query($connection, "INSERT INTO `profit_transaction` (`amount`, `date`, `fund_id`) VALUES ('{$profit_amount}', '{$date}', '{$fund_id}')");

                            if ($query_profit) {
                            // notification
                            $email_amount = number_format($amount, 2);
                            $email_balance = number_format($balance_raised, 2);
                                $query_notification = mysqli_query($connection, "INSERT INTO `notification` (`user_id`, `message`, `link`, `date`, `is_read`) VALUES ('{$user_id}', 'Fund Credited with NGN $email_amount, you now have balance of NGN $email_balance', '{$reference}', '{$date}', '0')");

                                if ($query_notification) {
                                    ?>
                                    <script>
                                        location.reload();
                                    </script>
                                    <?php
                                } else {
                                    ?>
                                    <script>
                                        location.reload();
                                    </script>
                                    <?php
                                }

                            } else {
                                echo "Error";
                            }

                            
                        } else {
                            echo "<b>Error Updating Fund Transaction</b>";
                        }
                    } else {
                        echo "<b>Error Fund Exist</b>";
                    }
                } else {
                    echo "<b>System Error Updating</b>";
                }

            } else {
                echo "<b>Error Problem occured</b>";
            }

        } else {

        }
    } else {
        echo "<b>Transaction already done!</b>";
    }


  }
} else {
    echo "<b>No Data</b>";
}
?>