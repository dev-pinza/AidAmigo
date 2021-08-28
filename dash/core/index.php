<?php
$web_title = "Dashboard";
include('header.php');
include('nav.php');
?>
<div class="page-body">
    <div class="container-fluid">
    <div class="page-title">
        <div class="row">
        <div class="col-6">
            <h3>
                Grow Fund - Dashboard</h3>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">                                       <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Home</li>
            </ol>
        </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
    <div class="row project-cards">
        <div class="col-md-12 project-list">
        <div class="card">
            <div class="row">
            <div class="col-md-6">
                <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>All</a></li>
                <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="info"></i>Inprogress</a></li>
                <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="check-circle"></i>Completed</a></li>
                </ul>
            </div>
            <div class="col-md-6">                    
                <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="request-fund.php"> <i data-feather="plus-square"> </i>Request New FundRaise</a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
            <div class="tab-content" id="top-tabContent">
                <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                <div class="row">
                <?php
                // use a database
                $current_date = date('Y-m-d H:i:s');
                $current_date_x = date('Y-m-d').' 00:00:00';
                $query_get_fund = mysqli_query($connection, "SELECT * FROM `fund_raise` WHERE `user_id` = '$user_id' AND (due_date >= '$current_date' AND is_withdrawn = '0') AND is_active = '1' ORDER BY id DESC");
                if (mysqli_num_rows($query_get_fund) > 0) {
                    while ($row = mysqli_fetch_array($query_get_fund)) {
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
                    $query_total_paid = mysqli_query($connection, "SELECT COUNT(fund_id) AS fund_id_all  FROM `fund_raise_transaction` WHERE fund_id = '$fund_id'");
                    // summary of today transaction
                    $query_total_today = mysqli_query($connection, "SELECT COUNT(fund_id) AS fund_id_today  FROM `fund_raise_transaction` WHERE fund_id	= '$fund_id' AND `date` > '$current_date_x'");

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
                    <div class="col-xxl-4 col-lg-6">
                    <div class="project-box"><span class="badge badge-<?php echo $color; ?>"><?php echo $badge_name; ?></span>
                        <h6><?php echo $row["campaign_title"]; ?></h6>
                        <div class="media">
                            <!-- <img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""> -->
                        <div class="media-body">
                            <p><?php echo $row["category"].' - Created '.$row["created_date"]; ?></p>
                        </div>
                        </div>
                        <p><?php echo  substr($row["story_body"], -40).'...'; ?></p>
                        <div class="row details">
                        <div class="col-6"><span>Total Contribution</span></div>
                        <div class="col-6 text-<?php echo $color; ?>"><?php echo number_format($total_all); ?> </div>
                        <div class="col-6"> <span>Contribution Today</span></div>
                        <div class="col-6 text-<?php echo $color; ?>"><?php echo number_format($total_today); ?></div>
                        </div>
                        <div class="customers">
                        <ul>
                        <?php
                        $query_three_trans = mysqli_query($connection, "SELECT * FROM `fund_raise_transaction` WHERE fund_id = '$fund_id' ORDER BY id DESC LIMIT 3");

                        while ($rowx = mysqli_fetch_array($query_three_trans)){
                        ?>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <?php 
                        }
                            ?>
                            <li class="d-inline-block ms-2">
                            <p class="f-12">+<?php
                            if ($total_all > 3) {
                                echo $total_all - 3;
                            } else {
                                echo 0;
                            }
                            ?> More</p>
                            </li>
                            
                        </ul>
                        </div>
                        <div class="project-status mt-4">
                        <div class="media mb-0">
                            <p><?php echo '₦ '.number_format($row["amount_raised"]); ?> </p>
                            <div class="media-body text-end"><span><?php echo '₦ '.number_format($row["goal_amount"]); ?></span></div>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-<?php echo $color; ?> <?php echo $progress_bar_type; ?>" role="progressbar" style="width: <?php echo $progress_difference; ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                        <!-- Action buttons -->
                        <div class="customers mt-4">
                            <center>
                        <a class="btn btn-pill btn-success btn-air-success" type="button" title="Withdraw the FundRaised" href="collect-fund.php?public-link=<?php echo $public_link; ?>">Collect Fund</a>
                        <a class="btn btn-pill btn-warning btn-air-warning" href="fund.php?public-link=<?php echo $public_link; ?>" type="button" title="View">View</a>
                        <a class="btn btn-pill btn-light btn-air-light" type="button" onclick="myFunction()">Share Link</a>
                        <input class="form-control" id="copy-header" hidden value="<?php echo $row["campaign_title"]; ?>" type="text" aria-describedby="inputGroupPrepend" required="">
                        <input class="form-control" id="public-link" hidden value="<?php echo $public_link; ?>" type="text" aria-describedby="inputGroupPrepend" required="">
                        </center>
                        </div>
                    </div>
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
                   <?php
                    }
                } else {
                    ?>
                    
                    <div class="col-xxl-12 col-lg-12">
                    <center>
                    <div class="project-box">
                        <h6>Hola! Welcome, <?php echo $first_name; ?></h6>
                        <div class="media">
                        </div>
                        <p>CLICK BELOW TO CREATE A FUND RAISE</p>
                        <!-- Action button -->
                        <div class="customers mt-4">
                        <a class="btn btn-pill btn-success btn-air-success" href="request-fund.php" type="button">Create FundRaise</a>
                        </div>
                    </div>
                    </center>
                    </div>
                    <?php
                }
                   ?>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
        <!-- Container-fluid Ends-->
    </div>

<?php
include('footer.php');
?>