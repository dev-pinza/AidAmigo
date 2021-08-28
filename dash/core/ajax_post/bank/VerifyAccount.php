<?php
session_start();

# USER DETAILS
$account_no = $_POST["account_no"];
$bank_code = $_POST["bank_code"];

if ($_SESSION["loggedin"] === true && $account_no != "" && $bank_code != "") {
    // STAT API
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/bank/resolve?account_number=$account_no&bank_code=$bank_code",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_live_7d955ca9d1f7814b697b4d10463d6853a5a48a0d",
        "Cache-Control: no-cache",
        ),
    ));
    $response = curl_exec($curl);

    $err = curl_close($curl);

    #check connection
    if ($err) {
        echo '<script type="text/javascript">
        $(document).ready(function(){
            swal.fire({
                type: "error",
                title: "CONNECTION ERROR",
                text: "TIMED OUT",
                showConfirmButton: false,
                timer: 3000
            })
            document.getElementById("cbvn").setAttribute("hidden", "");
            document.getElementById("wbvn").removeAttribute("hidden");
            $(document).ready(function() {
                $("#bank_payment").prop("disabled", true);
            });
        });
        </script>
        ';
    } else {
        $obj = json_decode($response, TRUE);
        $status = $obj['status'];
        $msg = $obj['message'];
        

        if ($status == true && $status != "") {
            $account_number = $obj['data']['account_number'];
            $account_name = $obj['data']['account_name'];
            ?>
            <input class="form-control" style="text-transform: uppercase;" value="<?php echo $account_name ?>" type="text" name="account_name" readonly>
            <script>
                $(document).ready(function() {
                    $("#bank_payment").prop("disabled", false);
                });
            </script>
            <?php
        } else {
            echo '<script type="text/javascript">
            $(document).ready(function(){
                swal.fire({
                    type: "error",
                    title: "Account not Found",
                    text: "We coulnt find this account",
                    showConfirmButton: false,
                    timer: 3000
                })
                document.getElementById("cbvn").setAttribute("hidden", "");
                document.getElementById("wbvn").removeAttribute("hidden");
            });
            $(document).ready(function() {
                $("#bank_payment").prop("disabled", true);
            });
            </script>
            ';
        }
    }
} else {
    echo '<script type="text/javascript">
    $(document).ready(function(){
        swal.fire({
            type: "error",
            title: "User Error",
            text: "No User Found",
            showConfirmButton: false,
            timer: 3000
        })
        document.getElementById("cbvn").setAttribute("hidden", "");
        document.getElementById("wbvn").removeAttribute("hidden");
    });
    $(document).ready(function() {
        $("#bank_payment").prop("disabled", true);
    });
    </script>
    ';
}
?>