<?php
$web_title = "Settings";
include('header.php');
include('nav.php');
?>
 <!-- Page Sidebar Ends-->
 <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>GrowFund - Settings</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Settings</li>
                    <li class="breadcrumb-item active"> Profile</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts                    -->
          <div class="container-fluid">
            <div class="row">
              <!-- col-sm-3 col-md-6 -->
              <div class="col-xl-6 xl-100 col-lg-12 box-col-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="pull-left">User Settings</h5>
                  </div>
                  <div class="card-body">
                    <div class="tabbed-card">
                      <ul class="pull-right nav nav-tabs border-tab nav-success" id="top-tabdanger" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-danger" data-bs-toggle="tab" href="#top-homedanger" role="tab" aria-controls="top-homedanger" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Profile</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-danger" data-bs-toggle="tab" href="#top-profiledanger" role="tab" aria-controls="top-profiledanger" aria-selected="true"><i class="fa fa-check"></i>Verify Me</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" id="contact-top-danger" data-bs-toggle="tab" href="#top-contactdanger" role="tab" aria-controls="top-contactdanger" aria-selected="false"><i class="icofont icofont-contacts"></i>Contact</a></li> -->
                      </ul>
                      <div class="tab-content" id="top-tabContentdanger">
                        <div class="tab-pane fade active show" id="top-homedanger" role="tabpanel" aria-labelledby="top-home-tab">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card">
                                  <div class="card-header py-4">
                                      <h5>Profile Update <b style="color: brown;">coming soon!</b></h5>
                                  </div>
                                  <?php
                                  $query_users_profile = mysqli_query($connection, "SELECT * FROM `users` WHERE id = '$user_id'");

                                  $qup = mysqli_fetch_array($query_users_profile);

                                  ?>
                                  <div class="card-body">
                                      <div class="row">
                                      <div class="col-md-12">
                                          <form class="theme-form mega-form">
                                          <div class="mb-3">
                                          <input class="form-control" type="text" readonly value="<?php echo $qup["first_name"].' '.$qup["middle_name"].' '.$qup["last_name"]; ?>">
                                          </div>
                                          <div class="mb-3">
                                              <input class="form-control" type="text" readonly value="<?php echo $qup["email"]; ?>">
                                          </div>
                                          <div class="mb-3">
                                              <input class="form-control" type="text" readonly value="<?php echo $qup["phone"]; ?>">
                                          </div>
                                          <div class="mb-3">
                                          <input class="form-control" type="text" readonly value="<?php echo $qup["country"]; ?>">
                                          </div>
                                          <div class="mb-3">
                                          <input class="form-control" type="text" readonly value="<?php echo $qup["state"]; ?>">
                                          </div>
                                          <div class="mb-3">
                                          <input class="form-control" type="text" readonly value="<?php echo $qup["dob"]; ?>">
                                          </div>
                                          <div class="mb-3">
                                              <button disabled type="submit" class="btn btn-pill btn-success btn-air-success">Update</button>
                                          </div>
                                          <?php
                                          $query_bank_c = mysqli_query($connection, "SELECT * FROM `bank_account` WHERE user_id = '$user_id'");

                                          if (mysqli_num_rows($query_bank_c) <= 0) {
                                          ?>
                                          <div class="mb-3">
                                              <a href="collect-fund.php" class="btn btn-pill btn-warning btn-air-warning">Create Withdrawal Account</a>
                                          </div>
                                          <?php
                                          }
                                          ?>
                                          </form>
                                      </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                            
                        </div>
                        <div class="tab-pane fade" id="top-profiledanger" role="tabpanel" aria-labelledby="profile-top-tab">
                          <div class="row">
                            <div class="col-md-12">

                            <div class="card">
                                <div class="card-header py-4">
                                    <h5>Verify Identity <b style="color: brown;">coming soon!</b> </h5>
                                </div>
                                
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <form class="theme-form mega-form">
                                        <div class="mb-3">
                                        <input class="form-control" readonly type="text" readonly placeholder="BVN">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" readonly type="text" readonly placeholder="Phone Number">
                                        </div>
                                        <div class="mb-3">
                                            <button disabled type="submit" class="btn btn-pill btn-success btn-air-success">Verify</button>
                                        </div>
                                        </form>
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
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
<?php
include('footer.php');
?>