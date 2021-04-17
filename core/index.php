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
                    <div class="col-xxl-4 col-lg-6">
                    <div class="project-box"><span class="badge badge-primary">In-Progress</span>
                        <h6>Help Terminate Malaria in Katsina</h6>
                        <div class="media">
                            <!-- <img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""> -->
                        <div class="media-body">
                            <p>Global Medical FundRaise, Nigeria 2020-04-15</p>
                        </div>
                        </div>
                        <p>Help and funding are needed urgently for thousands of people in the north region of Nigeria, Gamboru village in Borno State Nigeria...</p>
                        <div class="row details">
                        <div class="col-6"><span>Total Contribution</span></div>
                        <div class="col-6 text-primary">40 </div>
                        <div class="col-6"> <span>Contribution Today</span></div>
                        <div class="col-6 text-primary">5</div>
                        </div>
                        <div class="customers">
                        <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                            <p class="f-12">+10 More</p>
                            </li>
                        </ul>
                        </div>
                        <div class="project-status mt-4">
                        <div class="media mb-0">
                            <p>$7,000 </p>
                            <div class="media-body text-end"><span>$10,000</span></div>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                        <!-- Action buttons -->
                        <div class="customers mt-4">
                            <center>
                        <button class="btn btn-pill btn-success btn-air-success" type="button" title="Withdraw the FundRaised">Collect Fund</button>
                        <button class="btn btn-pill btn-warning btn-air-warning" type="button" title="You only get to Edit Once! ">Edit Once</button>
                        <button class="btn btn-pill btn-light btn-air-light" type="button" title="Share">Share Link</button>
                        </center>
                        </div>
                    </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                    <div class="project-box"><span class="badge badge-success">Done</span>
                        <h6>Help Keep Lions in Nigeria</h6>
                        <div class="media">
                            <!-- <img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""> -->
                        <div class="media-body">
                            <p>Global Animal Fundraising, Nigeria 2020-12-14</p>
                        </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                        <div class="col-6"><span>Total Contribution</span></div>
                        <div class="col-6 text-success">600 </div>
                        <div class="col-6"> <span>Contribution Today</span></div>
                        <div class="col-6 text-success">10</div>
                        </div>
                        <div class="customers">
                        <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                            <p class="f-12">+3 More</p>
                            </li>
                        </ul>
                        </div>
                        <div class="project-status mt-4">
                        <div class="media mb-0">
                            <p>$239,000 </p>
                            <div class="media-body text-end"><span>Done - $200,000</span></div>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                        <!-- Action button -->
                        <div class="customers mt-4">
                            <center>
                        <button class="btn btn-pill btn-success btn-air-success" type="button" title="Withdraw the FundRaised">Collect Fund</button>
                        <button class="btn btn-pill btn-warning btn-air-warning" type="button" title="You only get to Edit Once! ">Edit Once</button>
                        <button class="btn btn-pill btn-light btn-air-light" type="button" title="Share">Share Link</button>
                        </center>
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