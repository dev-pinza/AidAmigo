<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  ?>
  <script>
    window.history.back();
  </script>
  <?php
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Grow Fund is an African for-profit crowdfunding platform that allows people to raise money for events ranging from life events such as celebrations and graduations to challenging circumstances like accidents and illnesses.">
    <meta name="keywords" content="Grow Fund, African, Crowdfunding, Investment, Money, People, Celebration, Illnesses, Accident, Education, Payment, Graduation">
    <meta name="author" content="pinzastudio">
    <link rel="icon" href="assets/images/logo/growfund.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/growfund.png" type="image/x-icon">
    <title>GrowFund - Investment & Crowd Funding</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MT516R5N90"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-MT516R5N90')
    </script>
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">         
        <div class="col-12 p-0">
          <div>
            <div class="theme-form">     
            <form method="POST" action="functions/auth/UserSignup.php" id="register_submit" enctype="multipart/form-data">                
              <div class="wizard-4" id="wizard">                       
                <ul>
                  <li><a class="logo text-start ps-0" href="index.php">
                    <img class="img-fluid for-light" src="assets/images/logo/growfund.png" height="200px" width="200px" alt="looginpage">
                    <!-- <img class="img-fluid for-dark" src="assets/images/logo/growfund.png" height="200px" width="200px" alt="looginpage"> -->
                  </a>
                  </li>
                  <li><a href="#step-1">
                      <h4>1</h4>
                      <h5>personal</h5><small>Add personal details</small></a></li>
                  <li><a href="#step-2">
                      <h4>2</h4>
                      <h5>Address</h5><small>Add additional info</small></a></li>
                  <li><a href="#step-3">
                      <h4>3</h4>
                      <h5>verification info.</h5><small>Add verification Info.</small></a></li>
                  <li class="pb-0"><a href="#step-4">
                      <h4>4</h4>
                      <h5> Done <i class="fa fa-thumbs-o-up"></i></h5><small>Complete.. !</small></a></li>
                  <li>                          
                       <!-- <img src="assets/images/login/icon.png" alt="looginpage"></li> -->
                </ul>
                <div id="step-1">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h5 class="text-muted mb-4">Please fill correctly for verification</h5>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3">
                        <label for="name">First Name</label>
                        <input class="form-control" id="name" name="first_name" type="text" placeholder="Sam" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="lname">Middle Name</label>
                        <input class="form-control" id="mname" name="middle_name" type="text" placeholder="John" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="contact">Last Name</label>
                        <input class="form-control" id="lname" name="last_name" type="text" placeholder="Kelly" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="step-2">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h5 class="text-muted mb-4">Enter your email & password to login</h5>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3 m-t-15">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input class="form-control" name="email" id="exampleFormControlInput1" type="email" placeholder="name@example.com" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input class="form-control" name="confirm_password" id="exampleInputcPassword1" type="password" placeholder="Enter again" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="step-3">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h5 class="text-muted mb-4">Enter details to aid verification system</h5>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3">
                        <label for="exampleFormControlInput1">Date of Birth:</label>
                        <input class="form-control" type="date" name="dob" required="required">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Phone</label>
                        <input class="form-control" name="phone" placeholder="8162339624" type="number" required>
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Gender</label>
                        <select class="form-control" name="gender" required="required">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="step-4">
                  <div class="wizard-title">
                    <h2>Sign up to account</h2>
                    <h5 class="text-muted mb-4">Enter Physical Address</h5>
                  </div>
                  <div class="login-main">
                    <div class="theme-form">
                      <div class="form-group mb-3">
                        <label class="control-label">Country</label>
                        <select class="form-control" name="country">
                        <option value="Nigeria">Nigeria</option>
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">State</label>
                        <input class="form-control mt-1" name="state" type="text" placeholder="State" required="required">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Street/House Address</label>
                        <input class="form-control mt-1" name="address" type="text" placeholder="No 2. ..." required="required">
                        <!-- Smart Wizard Ends-->
                      </div>
                      <div class="form-group mb-3">
                      <button class="btn btn-success btn-block" type="submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <script></script>
      <script src="assets/js/tooltip-init.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="assets/js/script.js"></script>
      <!-- <script src="assets/js/theme-customizer/customizer.js"></script> -->
      <!-- login js-->
      <!-- Plugin used-->
      <style>
        .wizard-4 .action-bar {
    position: absolute;
    bottom: 10px;
}
      </style>
      <script>
      (function (a) {
    a.fn.smartWizard = function (m) {
        var c = a.extend({}, a.fn.smartWizard.defaults, m),
            x = arguments;
        return this.each(function () {
            function C() {
                var e = b.children("div");
                b.children("ul").addClass("anchor");
                e.addClass("content");
                n = a("<div>Loading</div>").addClass("loader");
                k = a("<div></div>").addClass("action-bar");
                p = a("<div></div>").addClass("step-container login-card");
                q = a("<a>" + c.labelNext + "</a>").attr("href", "#").addClass("btn btn-primary");
                r = a("<a>" + c.labelPrevious + "</a>").attr("href", "#").addClass("btn btn-primary");
                s = a("<a>" + c.labelFinish + "</a>").attr("href", "#").addClass("btn btn-primary");
                c.errorSteps && 0 < c.errorSteps.length && a.each(c.errorSteps, function (a, b) {
                    y(b, !0)
                });
                p.append(e);
                k.append(n);
                b.append(p);
                b.append(k);
                c.includeFinishButton && k.append(s);
                k.append(q).append(r);
                z = p.width();
                a(q).click(function () {
                    if (a(this).hasClass("buttonDisabled")) return !1;
                    A();
                    return !1
                });
                a(r).click(function () {
                    if (a(this).hasClass("buttonDisabled")) return !1;
                    B();
                    return !1
                });
                a(s).click(function () {
                    if (!a(this).hasClass("buttonDisabled"))
                        if (a.isFunction(c.onFinish)) c.onFinish.call(this,
                            a(f));
                        else {
                            var d = b.parents("form");
                            d && d.length && d.submit()
                        }
                    return !1
                });
                a(f).bind("click", function (a) {
                    if (f.index(this) == h) return !1;
                    a = f.index(this);
                    1 == f.eq(a).attr("isDone") - 0 && t(a);
                    return !1
                });
                c.keyNavigation && a(document).keyup(function (a) {
                    39 == a.which ? A() : 37 == a.which && B()
                });
                D();
                t(h)
            }

            function D() {
                c.enableAllSteps ? (a(f, b).removeClass("selected").removeClass("disabled").addClass("done"), a(f, b).attr("isDone", 1)) : (a(f, b).removeClass("selected").removeClass("done").addClass("disabled"), a(f, b).attr("isDone",
                    0));
                a(f, b).each(function (e) {
                    a(a(this).attr("href"), b).hide();
                    a(this).attr("rel", e + 1)
                })
            }

            function t(e) {
                var d = f.eq(e),
                    g = c.contentURL,
                    h = d.data("hasContent");
                stepNum = e + 1;
                g && 0 < g.length ? c.contentCache && h ? w(e) : a.ajax({
                    url: g,
                    type: "POST",
                    data: {
                        step_number: stepNum
                    },
                    dataType: "text",
                    beforeSend: function () {
                        n.show()
                    },
                    error: function () {
                        n.hide()
                    },
                    success: function (c) {
                        n.hide();
                        c && 0 < c.length && (d.data("hasContent", !0), a(a(d, b).attr("href"), b).html(c), w(e))
                    }
                }) : w(e)
            }

            function w(e) {
                var d = f.eq(e),
                    g = f.eq(h);
                if (e != h && a.isFunction(c.onLeaveStep) &&
                    !c.onLeaveStep.call(this, a(g))) return !1;
                c.updateHeight && p.height(a(a(d, b).attr("href"), b).outerHeight());
                if ("slide" == c.transitionEffect) a(a(g, b).attr("href"), b).slideUp("fast", function (c) {
                    a(a(d, b).attr("href"), b).slideDown("fast");
                    h = e;
                    u(g, d)
                });
                else if ("fade" == c.transitionEffect) a(a(g, b).attr("href"), b).fadeOut("fast", function (c) {
                    a(a(d, b).attr("href"), b).fadeIn("fast");
                    h = e;
                    u(g, d)
                });
                else if ("slideleft" == c.transitionEffect) {
                    var k = 0;
                    e > h ? (nextElmLeft1 = z + 10, nextElmLeft2 = 0, k = 0 - a(a(g, b).attr("href"), b).outerWidth()) :
                        (nextElmLeft1 = 0 - a(a(d, b).attr("href"), b).outerWidth() + 20, nextElmLeft2 = 0, k = 10 + a(a(g, b).attr("href"), b).outerWidth());
                    e == h ? (nextElmLeft1 = a(a(d, b).attr("href"), b).outerWidth() + 20, nextElmLeft2 = 0, k = 0 - a(a(g, b).attr("href"), b).outerWidth()) : a(a(g, b).attr("href"), b).animate({
                        left: k
                    }, "fast", function (e) {
                        a(a(g, b).attr("href"), b).hide()
                    });
                    a(a(d, b).attr("href"), b).css("left", nextElmLeft1);
                    a(a(d, b).attr("href"), b).show();
                    a(a(d, b).attr("href"), b).animate({
                        left: nextElmLeft2
                    }, "fast", function (a) {
                        h = e;
                        u(g, d)
                    })
                } else a(a(g,
                    b).attr("href"), b).hide(), a(a(d, b).attr("href"), b).show(), h = e, u(g, d);
                return !0
            }

            function u(e, d) {
                a(e, b).removeClass("selected");
                a(e, b).addClass("done");
                a(d, b).removeClass("disabled");
                a(d, b).removeClass("done");
                a(d, b).addClass("selected");
                a(d, b).attr("isDone", 1);
                c.cycleSteps || (0 >= h ? a(r).addClass("buttonDisabled") : a(r).removeClass("buttonDisabled"), f.length - 1 <= h ? a(q).addClass("buttonDisabled") : a(q).removeClass("buttonDisabled"));
                !f.hasClass("disabled") || c.enableFinishButton ? a(s).removeClass("buttonDisabled") :
                    a(s).addClass("buttonDisabled");
                if (a.isFunction(c.onShowStep) && !c.onShowStep.call(this, a(d))) return !1
            }

            function A() {
                var a = h + 1;
                if (f.length <= a) {
                    if (!c.cycleSteps) return !1;
                    a = 0
                }
                t(a)
            }

            function B() {
                var a = h - 1;
                if (0 > a) {
                    if (!c.cycleSteps) return !1;
                    a = f.length - 1
                }
                t(a)
            }

            function E(b) {
                a(".content", l).html(b);
                l.show()
            }

            function y(c, d) {
                d ? a(f.eq(c - 1), b).addClass("error") : a(f.eq(c - 1), b).removeClass("error")
            }
            var b = a(this),
                h = c.selected,
                f = a("ul > li > a[href^='#step-']", b),
                z = 0,
                n, l, k, p, q, r, s;
            k = a(".action-bar", b);
            0 == k.length && (k =
                a("<div></div>").addClass("action-bar"));
            l = a(".msg-box", b);
            0 == l.length && (l = a('<div class="msg-box"><div class="content"></div><a href="#" class="close"><i class="icofont icofont-close-line-circled"></i></a></div>'), k.append(l));
            a(".close", l).click(function () {
                l.fadeOut("normal");
                return !1
            });
            if (m && "init" !== m && "object" !== typeof m) {
                if ("showMessage" === m) {
                    var v = Array.prototype.slice.call(x, 1);
                    E(v[0]);
                    return !0
                }
                if ("setError" === m) return v = Array.prototype.slice.call(x, 1), y(v[0].stepnum, v[0].iserror), !0;
                a.error("Method " + m + " does not exist")
            } else C()
        })
    };
    a.fn.smartWizard.defaults = {
        selected: 0,
        keyNavigation: !0,
        enableAllSteps: !1,
        updateHeight: !0,
        transitionEffect: "fade",
        contentURL: null,
        contentCache: !0,
        cycleSteps: !1,
        includeFinishButton: !0,
        enableFinishButton: !1,
        errorSteps: [],
        labelNext: "Next",
        labelPrevious: "Previous",
        labelFinish: "Finish",
        onLeaveStep: null,
        onShowStep: null,
        onFinish: null
    }
})(jQuery);
(function ($) {
    "use strict";
    $('#wizard').smartWizard({
        transitionEffect: 'slideleft',
        onFinish: onFinishCallback
    });

    function onFinishCallback() {
        $('#wizard').smartWizard('showMessage', 'Congratulation ! Registration Successful');
        // Here Load upload.php function.
        $("#register_submit").submit();
    }
})(jQuery);
      </script>
    </div>
  </body>
</html>

<?php
if (isset($_GET["return_message"])) {
  if ($_GET["return_message"] == "wrongpass") {
    ?>
    <script>
       $('#wizard').smartWizard('showMessage', 'Password Does not Match');
    </script>
    <?php
  } else {
    ?>
    <script>
       $('#wizard').smartWizard('showMessage', 'No DataSent');
    </script>
    <?php
  }
}
?>