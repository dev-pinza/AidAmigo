<?php
$web_title = "Request FundRaise";
include('header.php');
include('nav.php');
?>
 <div class="page-body">
          <div class="container-fluid">
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
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>FundRaise Campaign</h5>
                  </div>
                  <div class="card-body">
                    <form class="f1" method="post">
                      <div class="f1-steps">
                        <div class="f1-progress">
                          <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
                        </div>
                        <div class="f1-step active">
                          <div class="f1-step-icon"><i class="fa fa-lightbulb-o"></i></div>
                          <p>Goal</p>
                        </div>
                        <div class="f1-step">
                          <div class="f1-step-icon"><i class="fa fa-align-left"></i></div>
                          <p>Details</p>
                        </div>
                        <div class="f1-step">
                          <div class="f1-step-icon"><i class="fa fa-paper-plane-o"></i></div>
                          <p>Complete</p>
                        </div>
                      </div>
                      <fieldset>
                        <div class="mb-2">
                        <label class="form-label" for="validationCustomUsername">Goal Amount</label>
                          <div class="input-group"><span class="input-group-text" id="inputGroupPrepend">$</span>
                            <input class="form-control" id="validationCustomUsername" type="number" placeholder="30000" aria-describedby="inputGroupPrepend" required="">
                            <div class="invalid-feedback">input a goal amount.</div>
                          </div>
                        </div>
                        <div class="mb-2">
                          <label for="f1-last-name">Campaign Title</label>
                          <input class="f1-last-name form-control" id="f1-last-name" type="text" name="f1-last-name" placeholder="Help Josh Smile Again" required="">
                        </div>
                        <div class="f1-buttons">
                          <button class="btn btn-primary btn-next" type="button">Next</button>
                        </div>
                      </fieldset>
                      <fieldset>
                        <div class="mb-2">
                        <label class="form-label" for="validationTextarea">FundRaise Category</label>
                          <select class="form-control" name="f1-email" required="">
                              <option value="Medical">Medical</option>
                              <option value="Memorial">Memorial</option>
                              <option value="Emergency">Emergency</option>
                              <option value="Nonprofit">Nonprofit</option>
                              <option value="Education">Education</option>
                              <option value="Animals">Animals</option>
                              <option value="Environment">Environment</option>
                              <option value="Business">Business</option>
                              <option value="Community">Community</option>
                              <option value="Competition">Competition</option>
                              <option value="Creative">Creative</option>
                              <option value="Event">Event</option>
                              <option value="Faith">Faith</option>
                              <option value="Family">Family</option>
                              <option value="Sports">Sports</option>
                              <option value="Travel">Travel</option>
                              <option value="Volunteer">Volunteer</option>
                              <option value="Wishes">Wishes</option>
                          </select>
                        </div>
                        <div class="mb-2">
                        <label class="form-label" for="validationTextarea">Your Story</label>
                        <textarea class="form-control "  placeholder="Short Story" required=""></textarea>
                        <!-- <div class="invalid-feedback">Please enter a message in the textarea.</div> -->
                        </div>
                        <div class="f1-buttons">
                          <button class="btn btn-primary btn-previous" type="button">Previous</button>
                          <button class="btn btn-primary btn-next" type="button">Next</button>
                        </div>
                      </fieldset>
                      <fieldset>
                        <div class="mb-2">
                        <div class="mb-2">
                        <label class="form-label" for="validationTextarea">FundRaise As</label>
                          <select class="form-control" name="f1-email" required="">
                              <option value="Individal">Individual</option>
                              <option value="Team">Global/Team</option>
                          </select>
                        </div>
                        </div>
                        <div class="mb-2">
                        <label>Upload Main Image</label>
                            <form class="dropzone" id="singleFileUpload" action="/upload.php">
                              <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                                <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                              </div>
                            </form>
                        </div>
                        <div class="f1-buttons">
                          <button class="btn btn-primary btn-previous" type="button">Previous</button>
                          <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                        </div>
                      </fieldset>
                    </form>
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
