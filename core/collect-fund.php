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
                  <h3>GrowFund - Collect Fund</h3>
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
              <!-- Individual column searching (text inputs) Starts-->
              <div class="col-xxl-8 box-col-12">
                <div class="card">
                  <div class="card-header py-4">
                    <h5>Bank Details - Local Bank </h5>
                  </div>

                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <form class="theme-form mega-form">
                        <div class="mb-3">
                            <select class="form-select" size="1">
                              <option>Select Bank</option>
                              <option>Wema Bank</option>
                              <option>United Bank of Africa</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Account Number">
                          </div>
                          <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Name on card">
                          </div>
                          <div class="mb-3">
                            <select class="form-select" size="1">
                              <option>Select Account Type</option>
                              <option>Personal</option>
                              <option>Team</option>
                            </select>
                          </div>
                          <div class="mb-3">
                              <button type="submit" class="btn btn-pill btn-success btn-air-success">Add Bank</button>
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

              <!-- we done Adding Account -->
              <div class="col-xxl-8 box-col-12">
                <div class="card">
                  <div class="card-header py-4">
                    <h5>FundRaise Title </h5>
                  </div>
                  
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <form class="theme-form mega-form">
                        <div class="mb-3">
                        <input class="form-control" type="text" readonly placeholder="Oluwaseun">
                          </div>
                          <div class="mb-3">
                            <input class="form-control" type="text" readonly placeholder="Wema Bank">
                          </div>
                          <div class="mb-3">
                            <input class="form-control" type="text" readonly placeholder="0242412689">
                          </div>
                          <div class="mb-3">
                          <input class="form-control" type="text" readonly placeholder="$30,000">
                          </div>
                          <div class="mb-3">
                              <button type="submit" class="btn btn-pill btn-success btn-air-success">Request Withdrawal</button>
                          </div>
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
              <div class="col-xxl-8 box-col-12">
                <div class="card">
                  <div class="card-header py-4">
                    <h5>Withdrawal Transactions </h5>
                  </div>
                  
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                      </div>
                    </div>
                  </div>

                  <!-- When sharing -->

                </div>
              </div>
            </div>
          </div>
        </div>
<?php
include('footer.php');
?>