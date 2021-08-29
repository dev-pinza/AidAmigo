<?php
$web_title = "#1 Investment & FundRaising";
include('headerf.php');

if (isset($_GET["public-link"]) && $_GET["public-link"] != "") {
// check online
$public_link = $_GET["public-link"];
$current_date = date('Y-m-d H:i:s');
$query_get_fund = mysqli_query($connection, "SELECT * FROM `fund_raise` WHERE `public_link` = '$public_link' AND (due_date >= '$current_date' AND is_withdrawn = '0') AND is_active = '1'");

if (mysqli_num_rows($query_get_fund) > 0) {

  $row = mysqli_fetch_array($query_get_fund);
  $fund_id = $row["id"];
  $goal_amount = $row["goal_amount"];
  $amount_raised = $row["amount_raised"];
  $public_link = $row["public_link"];

  // difference and percentage difference
  $diff_cal = $amount_raised - $goal_amount;
  // color change
  // name badge change
  // progress bar type
  if ($diff_cal < 0) {
      $color = "primary";
      $badge_name = "In-Progress";
      $progress_bar_type = "progress-bar-striped";
  } else {
      $color = "success";
      $badge_name = "Done";
      $progress_bar_type = "";
  }
  
  // summary of transaction
  $query_total_paid = mysqli_query($connection, "SELECT COUNT(fund_id) AS fund_id_all  FROM `fund_raise_transaction` WHERE fund_id	= '$fund_id'");
  // summary of today transaction
  $query_total_today = mysqli_query($connection, "SELECT COUNT(fund_id) AS fund_id_today  FROM `fund_raise_transaction` WHERE fund_id	= '$fund_id' AND `date` = '$current_date'");

  $qtp = mysqli_fetch_array($query_total_paid);
  $qtt = mysqli_fetch_array($query_total_today);

  $total_all = $qtp["fund_id_all"];
  $total_today = $qtt["fund_id_today"];

  // while loop of entities LIMIT 5
  
  // progress bar amount computation
  $diff_per = ($amount_raised / $goal_amount) * 100;
  // round up
  $progress_difference = round($diff_per);

?>
<!-- Container-fluid starts-->
<div class="page-body">
    <!-- <div class="container-fluid">
        <div class="page-title">
            <div class="row">
            <div class="col-6">
                <h3>GrowFund - Request FundRaise</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">                                       <i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active"> Request FundRaise</li>
                </ol>
            </div>
            </div>
        </div>
    </div> -->
    <div class="container-fluid">
    <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>GrowFund #2021</h5>
                  </div>
                  <div class="card-body">
                  <div class="row product-page-main p-0">
                <div class="col-xl-4 xl-cs-65 box-col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="product-slider owl-carousel owl-theme" id="sync1">
                      <div class="text-center"><img class="img-fluid" src="<?php echo $row["image_base64"]; ?>" alt=""></div>
                        <!-- <div class="item"><img src="../assets/images/ecommerce/01.jpg" height="500px" width="500px" alt=""></div> -->
                      </div>
                      <!-- <div class="owl-carousel owl-theme" id="sync2">
                        <div class="item"><img src="../assets/images/ecommerce/01.jpg" alt=""></div>
                        <div class="item"><img src="../assets/images/ecommerce/02.jpg" alt=""></div>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 xl-100 box-col-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="product-page-details">
                        <h3><?php echo $row["campaign_title"]; ?></h3>
                      </div>
                      <hr>
                      <p><?php echo $row["category"].' - Due Date '.$row["due_date"]; ?></p>
                      <hr>
                      <p><?php echo $row["story_body"]; ?></p>
                      
                      <hr>
                      <div class="m-t-15">
                        <button class="btn btn-success m-r-10" type="button" title="" data-bs-toggle="modal" data-bs-target="#myModal"> <i class="fa fa-shopping-basket me-1"></i>Donate Now</button><button class="btn btn-secondary" onclick="myFunction()"> <i class="fa fa-heart me-1"></i>Share Now</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 xl-cs-35 box-col-6">
                  <div class="card">
                    <div class="card-body">
                      <!-- side-bar colleps block stat-->
                      <div class="">
                        <h4><?php echo '₦ '.number_format($row["amount_raised"]); ?></h4> <h6>Raised of <?php echo '₦ '.number_format($row["goal_amount"]); ?> </h6>
                        <ul>
                          <li>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-<?php echo $color; ?> <?php echo $progress_bar_type; ?>" role="progressbar" style="width: <?php echo $progress_difference; ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                          </li>
                          <br>
                          <li>
                          <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success btn-lg" href="#"> <i class="fa fa-shopping-basket me-1"></i>Donate Now</button>
                          </li>
                          <br>
                          <li>
                            <button class="btn btn-secondary btn-lg" onclick="myFunction()"> <i class="fa fa-heart me-1"></i>Share Now</button>
                          </li>
                          <!-- <li>Watches</li>
                          <li>ACCESSORIES</li> -->
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <div class="collection-filter-block">
                        <ul class="pro-services">
                        <li>
                            <div class="media"><i data-feather="credit-card"></i>
                              <div class="media-body">
                                <h5>Online Payment                                  </h5>
                                <p>Card, Bank Transfer, QR, Bank Teller.                                   </p>
                              </div>
                            </div>
                          </li>
                          <br>
                          <?php
                        $query_three_trans = mysqli_query($connection, "SELECT * FROM `fund_raise_transaction` WHERE fund_id = '$fund_id' ORDER BY id DESC LIMIT 3");

                        while ($rowx = mysqli_fetch_array($query_three_trans)){
                        ?>
                          <li>
                            <div class="media"><i data-feather="clock"></i>
                              <div class="media-body">
                                <h5><?php echo $rowx["fullname"]; ?>                                  </h5>
                                <p>₦ <?php echo number_format($rowx["amount"]); ?></p>
                              </div>
                            </div>
                          </li>
                          <?php 
                        }
                            ?>
                          
                        </ul>
                      </div>
                    </div>
                    <!-- silde-bar colleps block end here-->
                  </div>
                </div>
              </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- MODAL -->
            <!-- Modal-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <button class="btn-close theme-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          <div class="modal-body">
                            <div class="card">
                              <div class="animate-widget">
                                <div class=" p-25">
                                <div class="card">
                                  <div class="card-header py-4">
                                      <h5>Payment information</h5>
                                  </div>
                                  <div class="card-body">
                                      <div class="row">
                                      <div class="col-md-12">
                                          <form id="paymentForm">

                                            <div id="display_res"></div>


                                          <div class="mb-3">
                                          <label class="form-label" for="validationCustomUsername">Amount</label>
                                          <div class="input-group"><span class="input-group-text" id="inputGroupPrepend">NGN</span>
                                            <input class="form-control" id="amount" type="number" placeholder="30000" aria-describedby="inputGroupPrepend" required="">
                                          </div>
                                          </div>
                                          <div class="mb-3">
                                          <label class="form-label" for="validationCustomUsername">Fullname (edit to display name)</label>
                                            <input class="form-control" type="text" id="fullname" value="Anonymous" aria-describedby="inputGroupPrepend" required="">
                                          </div>
                                          <div class="mb-3">
                                          <?php
                                            $digitx = 7;
                                            $rand_email = str_pad(rand(0, pow(10, $digitx)-1), $digitx, '0', STR_PAD_LEFT); 
                                            ?>
                                          <label class="form-label" for="validationCustomUsername">E-mail (edit to display email)</label>
                                            <input class="form-control" id="email-address" type="email" value="<?php echo $rand_email."@nomail.com"; ?>" placeholder="person@example.com" aria-describedby="inputGroupPrepend" required="">
                                            <?php
                                            $digits = 12;
                                            $activation_code = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT); 
                                            ?>
                                            <input class="form-control" id="reference-id" hidden value="<?php echo $activation_code; ?>" type="text" aria-describedby="inputGroupPrepend" required="">
                                            <input class="form-control" id="public-link" hidden value="<?php echo $public_link; ?>" type="text" aria-describedby="inputGroupPrepend" required="">
                                            <input class="form-control" id="copy-header" hidden value="<?php echo $row["campaign_title"]; ?>" type="text" aria-describedby="inputGroupPrepend" required="">
                                          </div>
                                          <div class="mb-3">
                                              <a onclick="payWithPaystack()" class="btn btn-pill btn-success btn-air-success">Proceed</a>
                                          </div>
                                          </form>
<script src="https://js.paystack.co/v1/inline.js"></script> 
<script>
var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', payWithPaystack, false);
function payWithPaystack() {
  var handler = PaystackPop.setup({
    key: 'pk_live_b19068b06305c296d45aa5bed13b19dd5fbe6225', // Replace with your public key
    email: document.getElementById('email-address').value,
    amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
    ref: document.getElementById('reference-id').value, // Replace with a reference you generated
    metadata: {
      custom_fields: [
        {
        fullname: document.getElementById('fullname').value
        }
      ]
    },
    callback: function(response) {
      //this happens after the payment is completed successfully
      var reference = response.reference;
      var publick = document.getElementById('public-link').value;
      // Make an AJAX call to your server with the reference to verify the transaction
      $.ajax({
        url: 'ajax_post/paystack/VerifyTransaction.php?reference='+ response.reference + '&publiclink='+ publick,
        method: 'GET',
        success: function (response) {
          // the transaction status is in response.data.status
          $('#display_res').html(response);
        }
      });
    },
    onClose: function() {
      alert('Transaction was not completed, window closed.');
    },
  });
  handler.openIframe();
}
</script>
<script>
  // COPY OR SHARE JAVASCRIPT
  function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("copy-header");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  var publick = document.getElementById('public-link').value;
  var copied_value = copyText.value + '\n' + 'click below to donate!\n' + 'https://growfund.com.ng/core/fund.php?public-link='+publick;

  // SWEET ALERT SUCCESS
  swal.fire({
    type: "success",
    title: "Copy Content Below",
    text: copied_value,
    showConfirmButton: false,
    timer: 9000
  });
}
</script>
                                      </div>
                                      </div>
                                  </div>
                              </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            <!-- END MODAL -->
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        
<?php
include('footerf.php');
?>

<script>
  $('#myModal').modal({
    backdrop: 'static',
    keyboard: false
})
</script>
<?php
} else {
?>
<script>
    window.history.back();
  </script>
<?php
}
} else {
?>
<script>
    window.history.back();
  </script>
<?php
}
?>