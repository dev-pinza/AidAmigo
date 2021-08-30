<?php
$web_title = "Collect Fund";
include('header.php');
include('nav.php');
?>
<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Aid Amigo - Collect Fund</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Collect Fund</li>
                    <li class="breadcrumb-item active">Payment Details</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid credit-card">
            <div class="row">

            <!-- CHECK IF ACCOUNT EXIST -->
            <?php
            $query_check_account = mysqli_query($connection, "SELECT * FROM `bank_account` WHERE user_id = '$user_id'");

            if (mysqli_num_rows($query_check_account) <= 0) {
            ?>
              <!-- Individual column searching (text inputs) Starts-->
              <div class="col-xxl-12 box-col-12">
                <div class="card">
                  <div class="card-header py-4">
                    <h5>Bank Details - Add Local Bank </h5>
                  </div>

                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <form class="theme-form mega-form" method="POST" action="../functions/fund/AddBank.php">
                        <div class="mb-3">
                          <div id="display_bank"></div>
                          </div>
                          <div class="mb-3">
                            <input class="form-control" style="text-transform: uppercase;" id="acct_no" name="account_number" type="text" placeholder="Account Number" required>
                          </div>
                          <div class="mb-3">
                            <div id="display_name"></div>
                          </div>
                          <!-- <div class="mb-3">
                            <select class="form-select" size="1" style="text-transform: uppercase;" required>
                              <option value="">Select Account Type</option>
                              <option value="INDIVIDUAL">Personal</option>
                              <option value="TEAM">Team</option>
                            </select>
                          </div> -->
                          <div class="mb-3">
                              <button type="submit" id="bank_payment" disabled class="btn btn-pill btn-success btn-air-success">Add Bank</button>
                          </div>
                        </form>
                      </div>
                      <div class="col-md-5 text-center"><img class="img-fluid" src="../assets/images/bank.svg" alt=""></div>
                    </div>
                  </div>

                  <!-- When sharing -->

                </div>
              </div>
              <!-- Individual column searching (text inputs) Ends-->
              <?php
            } else {

              // GET ACCOUNT DETAIL
              $gau = mysqli_fetch_array($query_check_account);
              $bank_id = $gau["id"];
              $bank_code = $gau["bank_code"];
              $bank_name = $gau["bank_name"];
              $account_number = $gau["account_number"];
              $account_name = $gau["account_name"];
              $total_deposit = $gau["total_deposit"];

              // if a collection was requested then change title, add collect button and change amount
              if (isset($_GET["public-id"])) {
                // do function
                $fund_title = "";
              } else {
                $fund_title = "Withdrawal Account Information";
              }
            ?>

              <!-- we done Adding Account -->
              <div class="col-xxl-12 box-col-12">
                <div class="card">
                  <div class="card-header py-4">
                    <h5><?php echo $fund_title; ?> </h5>
                  </div>
                  
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <form class="theme-form mega-form" method="POST" action="../functions/fund/CollectFund.php">
                        <div class="mb-3">
                        <input class="form-control" type="text" style="text-transform: uppercase;" readonly value="<?php echo $account_name; ?>">
                          </div>
                          <div class="mb-3">
                            <input class="form-control" style="text-transform: uppercase;" type="text" readonly value="<?php echo $bank_name;?>">
                          </div>
                          <div class="mb-3">
                            <input class="form-control" style="text-transform: uppercase;" type="text" readonly value="<?php echo $account_number; ?>">
                          </div>
                          <div class="mb-3">
                          <input class="form-control" style="text-transform: uppercase;" type="text" readonly value="Total Withdrawn: NGN <?php echo $total_deposit; ?>">
                          </div>
                          <br>
                          <br>
                          <?php 
                          if (isset($_GET["public-link"])) {
                            // get the amount & set the pass
                            $public_link_id = $_GET["public-link"];
                            $query_verify = mysqli_query($connection, "SELECT * FROM `fund_raise` WHERE public_link = '$public_link_id' AND is_withdrawn = '0' && is_active = '1'");
                            $plw = mysqli_fetch_array($query_verify);
                            
                            if (mysqli_num_rows($query_verify) > 0 && mysqli_num_rows($query_verify) < 2) {
                              // check if the fund is 40% or more 
                              // check if the withdrawal fund account is verified else he/she cant withdraw
                              $goal_amount = $plw["goal_amount"];
                              $amount_raised = $plw["amount_raised"];
                              $percentage_margin = ($amount_raised / $goal_amount) * 100;
                              if ($percentage_margin > 40) {
                                $check_verified_identity = mysqli_query($connection, "SELECT `is_verified` FROM `users` WHERE id = '$user_id' && is_verified = '1'");
                                if (mysqli_num_rows($check_verified_identity) > 0) {
                                  ?>
                                  <div class="mb-3">
                                  NGN
                          <input class="form-control" name="amount" style="text-transform: uppercase;" type="text" value="<?php echo $plw["amount_raised"]; ?>" readonly placeholder=" <?php echo $plw["amount_raised"]; ?>">
                          <input class="form-control" name="public_link" hidden type="text" readonly value="<?php echo $_GET["public-link"] ?>">
                          </div>
                          <div class="mb-3">
                              <button type="submit" class="btn btn-pill btn-success btn-air-success">Request Withdrawal</button>
                          </div>
                                  <?php
                                } else {
                                  ?>
                            <div class="mb-3">
                              <button type="submit" disabled class="btn btn-pill btn-danger btn-air-danger">PLEASE VERIFY YOUR IDENTITY IN THE SETTINGS</button>
                          </div>
                                  <?php
                                }
                              ?>
                              
                              <?php
                              } else {
                                ?>
                                  <div class="mb-3">
                              <button type="submit" disabled class="btn btn-pill btn-danger btn-air-danger">YOU NEED TO RAISE 40% BEFORE YOU REQUEST WITHDRAWAL</button>
                          </div>
                                <?php
                              }
                            } else {
                              ?>
                              <div class="mb-3">
                          </div>
                          <div class="mb-3">
                              <button type="submit" disabled class="btn btn-pill btn-danger btn-air-danger">THIS WITHDRAWAL WAS PROCESSED OR FUND RAISE NOT ACTIVE</button>
                          </div>
                              <?php
                            }
                          ?>
                          
                          <?php
                          }
                          ?>
                        </form>
                      </div>
                      <div class="col-md-5 text-center"><img class="img-fluid" src="../assets/images/bank.svg" alt=""></div>
                    </div>
                  </div>

                  <!-- When sharing -->

                </div>
              </div>
             
              <!-- Container-fluid Ends-->

              <!-- Transactions -->
              <div class="col-xxl-12 box-col-12">
                <div class="card">
                  <div class="card-header py-4">
                    <h5>Withdrawal Transactions </h5>
                  </div>
                  
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                <div class="card">
                  <span>All Withdrawal Transactions for Fund Raised below.</span>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        
                        <thead>
                          <tr>
                            <th>Transaction ID</th>
                            <th></th>
                            <th></th>
                            <th>Amount</th>
                            <th></th>
                            <th></th>
                            <th>Date</th>
                            <th></th>
                            <th></th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                            <th>Bank</th>
                            <th></th>
                            <th></th>
                            <th>Account Number</th>
                            <th></th>
                            <th></th>
                            <th>Account Name</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $query_check_transaction = mysqli_query($connection, "SELECT * FROM `bank_account_transaction` WHERE bank_id = '$bank_id' ORDER BY id DESC");
                        if (mysqli_num_rows($query_check_transaction) > 0) {
                          while ($gtg = mysqli_fetch_array($query_check_transaction)) {
                        ?>
                          <tr>
                            <td><?php echo $gtg["transaction_id"] ?></td>
                            <td></td>
                            <td></td>
                            <td>NGN <?php echo number_format($gtg["amount"],2) ?></td>
                            <td></td>
                            <td></td>
                            <td><?php echo  $gtg["date"] ?></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $gtg["description"] ?></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $bank_name;?></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $account_number;?></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $account_name; ?></td>
                          </tr>
                          <?php
                          }
                        }
                        else {
                          ?>
                          <tr>
                            <td>--</td>
                            <td></td>
                            <td></td>
                            <td>NGN --</td>
                            <td></td>
                            <td></td>
                            <td>--</td>
                            <td></td>
                            <td></td>
                            <td>--</td>
                            <td></td>
                            <td></td>
                            <td>--</td>
                            <td></td>
                            <td></td>
                            <td>--</td>
                            <td></td>
                            <td></td>
                            <td>--</td>
                          </tr>
                          <?php
                        } 
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
                  </div>

                  <!-- When sharing -->

                </div>
              </div>
              <?php
            }
              ?>
            </div>
          </div>
        </div>
<?php
include('footer.php');
?>

<script>
 $(document).ready(function() {
  //  BANK LISTING
    var acct = $('#acct_no').val();
    $.ajax({
      url:"ajax_post/bank/BankCodeCheck.php",
      method:"POST",
      data:{ acct:acct },
      success:function(data){
        $('#display_bank').html(data);
      }
    });
    

    // ACCOUNT NUMBER VERIFICATION
    $('#acct_no').on("change keyup paste", function(x){
      var account_no = $('#acct_no').val();
      var bank_code = $('#bank_data').val();
      var count_account = account_no.length;

      if (count_account == 10 && bank_code != "" && x.keyCode !== 46  && x.keyCode !== 8) {
        Swal.fire({
        title: 'Checking Account',
        html: 'Please Wait! <b></b> .',
        timer: 2000,
        timerProgressBar: true,
        onBeforeOpen: () => {
          Swal.showLoading()
          timerInterval = setInterval(() => {
            const content = Swal.getContent()
            if (content) {
              const b = content.querySelector('b')
              if (b) {
                b.textContent = Swal.getTimerLeft()
              }
            }
          }, 100)
        },
        onClose: () => {
          clearInterval(timerInterval)
        }
      }).then((result) => {
        if (result.dismiss === Swal.DismissReason.timer) {
          // AJAX
          $.ajax({
            url:"ajax_post/bank/VerifyAccount.php",
            method:"POST",
            data:{ account_no:account_no, bank_code:bank_code },
            success:function(data){
              $('#display_name').html(data);
            }
          });
        }
      });

      }

    });

 });
</script>

<?php
if (isset($_GET["error"]) && $_GET["error"] != '') {
  echo '<script type="text/javascript">
          $(document).ready(function(){
              swal.fire({
                  type: "error",
                  title: "Error",
                  text: "'.$_GET["error"].'",
                  showConfirmButton: false,
                  timer: 3000
              });
          });
          </script>
          ';
} else if (isset($_GET["success"]) && $_GET["success"] != '') {
  echo '<script type="text/javascript">
            $(document).ready(function(){
                swal.fire({
                    type: "success",
                    title: "Hurray!",
                    text: "'.$_GET["success"].'",
                    showConfirmButton: false,
                    timer: 3000
                });
            });
            </script>
            ';
}
?>