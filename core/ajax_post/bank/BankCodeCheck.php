<?php
session_start();

if ($_SESSION["loggedin"] === true) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/bank",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Cookie: __cfduid=d9fc80d8dc6029f851e20343dfcc8ab971602676119; sails.sid=s%3AjhSRIjOj3rYk0ZDRyVt0UJgDYPdrcF29.GodLtV08HtX%2FuYFY0sZVDQCEgTidj1iaKbLsmpqnqLA"
    ),
    ));

    $response = curl_exec($curl);

    $err = curl_close($curl);

    // start others
    if ($err) {
        ?>
        <script>
        $(document).ready(function() {
        $("#bank_payment").prop("disabled", true);
    });
        </script>
        <div class="alert alert-danger inverse alert-dismissible fade show" role="alert"><i class="icon-alert txt-light"></i>
        <p>Please check network connection</p>
        <button class="btn-close txt-light" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        <?php
    } else {
        $obj = json_decode($response, TRUE);
        $status = $obj['status'];
        $msg = $obj['message'];
        $product = $obj['data'];
        // make a move
        $me = json_encode($product);

        if ($status == true && $status != "") {
            ?>
            <!-- BANK -->
            <div id="bank_ress"></div>
            <select class="form-select" required id="see_bank" name="bank_name" size="1" style="text-transform: uppercase;">
                <option value="">Select Bank</option>
                <?php
                $someArray = json_decode($me, true);
                foreach ($someArray as $key => $value) {
                    echo "<option value=".$value["code"].':'.$value["slug"]." style='color: black;' > " . " ". $value["name"].  "</option>";
                }
                ?>
            </select>
            <!-- script -->
            <script>
                $(document).ready(function() {
                    $('#see_bank').on("change", function() {
                        var bank_data = $('#see_bank').val();
                        $.ajax({
                            url:"ajax_post/bank/BankCode.php",
                            method:"POST",
                            data:{bank_data:bank_data},
                            success:function(data){
                            $('#bank_ress').html(data);
                        }
                        });

                        // val
                        $('#acct_no').val("");
                    });

                    // change of BANk
                });


            </script>
            <?php
        } else {
            ?>
            <div class="alert alert-danger inverse alert-dismissible fade show" role="alert"><i class="icon-alert txt-light"></i>
                <p><?php echo $msg; ?></p>
                <button class="btn-close txt-light" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
    }
} else {
    ?>
    <div class="alert alert-danger inverse alert-dismissible fade show" role="alert"><i class="icon-alert txt-light"></i>
        <p>User Error</p>
        <button class="btn-close txt-light" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
}
?>