
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--========= Basic Page Needs =========-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--======== Page Title===========-->
    <title>The Global Scholarship</title>
    <!--========== Favicons =========-->
    <link rel="shortcut icon" sizes="70x70" href="<?php echo base_url();?>assets/sc logo.png">
    <!--======== Font icon Css ============-->
    <!--<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/themify-icons.css" rel="stylesheet">
    <!--======= Bootstrap Main Css =============-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!--====== Plugins Css ================-->
    <link href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet">
    <!--====== Custom CSS for themes =======-->
    <link href="<?php echo base_url();?>assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/build/css/intlTelInput.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/tags.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/tables.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/amabassador.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/floating-button.css" rel="stylesheet" />
    <!--[if lt IE 8]>
    <![endif]-->
    <!-- jQuery Latest Version -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.css"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
    <script>
        window.smartlook||(function(d) {
            var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
            var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
            c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', '6fbe985a968f9a076a6a942a91ee9df06341f130');
    </script>
    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</head>
<body>
    <?php if(!$this->uri->segment(1) == 'student-register'){?>
        <a href="#" class="float" id="menu-share">
            <i class="fa fa-paper-plane my-float"></i>
        </a>
        <ul class="ulStart">
            <li class="liStart">
                <a href="<?php echo base_url();?>student-register#registration">
                    <i class="fa fa-user-plus my-float" data-toggle="tooltip" data-placement="top" title="Student Registration"></i>
                </a>
            </li>
        </ul>
    <?php }?>
    <!--====Header Area ====================================-->
    <div class="focus" style="background: #ff7f45;height:6px"></div>
    <div class="socio" align="right" style="background: #ff7f45;color:#ffffff; padding-right:24px; height: 27px;"><a href="https://instagram.com/the_global_scholarship" target="_blank">Follow us on Instagram <i class="target fa fa-hand-o-right" aria-hidden="true"></i> <i class="fa fa-instagram" style="color:#ffffff" aria-hidden="true"></i></a> for updates</div>
    <header id="site-header" class="header-area">
        <div class="header-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-menu-wrap hidden-xs hidden-sm">
                            <div class="logo">
                                <a href="<?php echo base_url();?>">
                                    <img src="<?php echo base_url();?>assets/sc logo.png" alt="logo" style="max-width:125px">
                                </a>
                            </div><!--/.logo-->
                            <nav class="menu">
                                <ul id="nav">
                                    <!--<li>-->
                                    <!--    <form class="form-inline" action="<?php echo base_url('search');?>" method="get">-->
                                    <!--        <div class="col-md-12"> -->
                                    <!--            <input name="search" class="form-control form-control-sm shadow" type="text" placeholder="Scholarhship Name.." aria-label="Search" required>-->
                                    <!--            <button class="fa fa-search btn-primary btn-sm btn " type="submit" style="margin:5px"></button>-->
                                    <!--        </div>-->
                                    <!--    </form>-->
                                    <!--</li>-->
                                    <li><a href="<?php echo base_url();?>">home</a></li>
                                  <!--   <li><a href="<?php echo base_url();?>#learning-section">apply for scholarship</a></li>
                                    <li><a href="<?php echo base_url();?>packages">Packages</a></li> -->
                                    <!--<li><a href="<?php echo base_url();?>campus-ambassador">Ambassador</a></li>-->
                                    <!--<li><a href="<?php echo base_url();?>faq">FAQ</a></li>-->
                                    
                                    <!-- <li><a href="<?php echo base_url();?>contact-us">contact us</a></li> -->
                       <!--              <?php if($this->session->userdata('userid') || $this->session->userdata('student_id') || 
                                             $this->session->userdata('instituteId') || $this->session->userdata('instituteManagerId') ||
                                             $this->session->userdata('individualId') || $this->session->userdata('ambassa_id')){ 
                                    ?>
                                        <li class="dropdown-trigger"><a href="#"><?php echo $this->session->userdata('username');?></a>
                                            <ul class="dropdown-content" style="width: 115% !important;">
                                                <?php if($this->session->userdata('userid')){ ?>
                                                    <li><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
                                                    <li><a href="<?php echo base_url();?>add-new-scholarship">Add scholarship</a></li>
                                                <?php }else if($this->session->userdata('student_id')){?>
                                                    <li><a href="<?php echo base_url();?>student-dashboard">Dashboard</a></li>
                                                <?php }else if($this->session->userdata('instituteId')){?>
                                                    <li><a href="<?php echo base_url();?>institute-dashboard">Dashboard</a></li>
                                                <?php }else if($this->session->userdata('instituteManagerId')){?>
                                                    <li><a href="<?php echo base_url();?>institute-manager-dashboard">Dashboard</a></li>
                                                <?php }else if($this->session->userdata('individualId')){?>
                                                    <li><a href="<?php echo base_url();?>individual-dashboard">Dashboard</a></li>
                                                <?php }else if($this->session->userdata('ambassa_id')){?>
                                                    <li><a href="<?php echo base_url();?>ambassador-dashboard">Dashboard</a></li>
                                                <?php }?>
                                                <li><a href="<?php echo base_url();?>logout">Logout</a></li>
                                            </ul>
                                        </li>
                                    <?php }else{?> -->
                                    <style>
                                        .reg-button:hover {
  animation-name: shakeAnim;
}

@keyframes shakeAnim {
  0% {left: 0}
  1% {left: -3px}
  2% {left: 5px}
  3% {left: -8px}
  4% {left: 8px}
  5% {left: -5px}
  6% {left: 3px}
  7% {left: 0}
}

@keyframes shake {
  0% {left: 0}
  1% {left: -3px}
  2% {left: 5px}
  3% {left: -8px}
  4% {left: 8px}
  5% {left: -5px}
  6% {left: 3px}
  7% {left: 0}
}
                                    </style>
                                    <!-- <li><a href="<?php echo base_url();?>student-login">Login</a></li> -->
                                    <!--style= 'color: #fff; background-color:#480057;'-->
                                    <!-- <li style="padding:0 px !important"><a align="right"  class="btn btn-primary btn-md reg-button" href="<?php echo base_url();?>student-register">Register</a></li> -->
                                    <?php }?>
                                </ul>
                            </nav><!--/.menu-->
                        </div><!--/.logo-menu-wrap-->
                    </div><!--/.col-lg-12-->
                </div><!--/.row-->
            </div><!--/.container-fluid-->
        </div><!--/.headier-inner-->

        <div id="sticky-header"><div class="focus" style="background: #ff7f45;height:6px"></div>
        <div class="socio" align="right" style="background: #ff7f45;color:#ffffff; padding-right:24px; height: 27px;"><a href="https://instagram.com/the_global_scholarship" target="_blank">Follow us on Instagram <i class="target fa fa-hand-o-right" aria-hidden="true"></i> <i class="fa fa-instagram" style="color:#ffffff" aria-hidden="true"></i></a> for updates</div></div><!--/#sticky-header-->

        <!--Mobile Menu-->
        <div class="mobile-menu">
            <a class="mobile-logo" href="<?php echo base_url();?>">
                <img src="<?php echo base_url();?>assets/sc logo.png" alt="logo" style="max-width:80px">
            </a>
        </div>
    </header><!--/.header-area-->
<!--=======Page Heading =================================-->
<!--<section class="page-heading-section before-bg bg-image" style="background-image: url(./assets/images/header/p-header3.jpg);">-->
<!--  <div class="container">-->
<!--    <div class="row">-->
<!--      <div class="col-md-12 col-sm-12">-->
<!--        <div class="page-heading">-->
<!--          <h2 class="page-name text-capitalize">Contributor Login</h2>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<div class="login-page page-wrapper" style="padding:50px 0px">
  <div class="container">
    <div class="row justify-content-center">
        <h2>Download webinar certificates</h2>
        
      <div class="col-lg-12 col-md-6 col-sm-8">
          <?php if($this->session->flashdata('failure')){?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('failure')?></div>
        <?php }?>
        <div class="login-form-area">
          <form id="downloadForm" method="post" class="form-horizontal" action="<?php echo base_url('download-certificate');?>">
                        <div class="form-group">
                            <label class="col-sm-12 control-label"><b>Enter Registered Mobile Number</b></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="bibno" required/>
                            </div>
                        </div>

                        <div class="form-group w3_agileits_footer_grid">
                             <div class="col-md-2 mb-3">
              <!--<a class="login-form-forgot-password" href="#">Forgot your password?</a> -->
              <p><button class="btn btn-default btn-primary" type="submit">Submit</button></p>
            </div>
                        </div>
                    </form>
        
        </div><!--/.login-form-area-->
      </div><!--/.col-lg-4-->
    </div><!--/.row-->
  </div><!--/.container-->
</div><!--/.login-page-->
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
    <!-- Start footer area -->
    <footer id="footer" class="site-footer">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h2>Help us to know new scholarships</h2>
                        <div class="single-faq-content">
                               <h5> Originality is the essence of true scholarship. Creativity is the soul of the true scholar.</h5>
                               <h6>- Nnamdi Azikiwe</h6>
                         </div>
                    </div><!--/.col-lg-9-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.footer-top-area-->

        <!-- Start footer widgets area -->
        <div class="footer-widgets-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="footer-widget">
                            <h4 class="footer-title">Quick Links</h4>
                            <ul class="footer-widget-list list-unstyled">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li><a href="<?php echo base_url('faq');?>">FAQ</a></li>
                                <li><a href="<?php echo base_url('contact-us');?>">Contact Us</a></li>
                                <li><a href="<?php echo base_url('#learning-section');?>">Apply For Scholarship</a></li>
                                <!--<li><a href="<?php echo base_url('login');?>">Add Scholarship</a></li>-->
                                <li>
                                    <!-- Start of CuterCounter Code -->
                                    <a href="https://www.cutercounter.com/" target="_blank"><img src="https://www.cutercounter.com/hits.php?id=gucfoan&nd=6&style=5" border="0" alt="free counter"></a>
                                    <!-- End of CuterCounter Code -->
                                </li>
                            </ul>
                        </div><!--/.footer-widget-->
                    </div><!--/.col-lg-3-->
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="footer-widget">
                            <h4 class="footer-title">Sales</h4>
                            <ul class="footer-widget-list list-unstyled ">
                            <li><a style="text-transform: lowercase;" href="mailto:sales@theglobalscholarship.org"><i class="fa fa-envelope" style="font-size:16px"></i> sales@theglobalscholarship.org</a></li>
                            <li><a href="tel:+919620030302"><i class="fa fa-phone" style="font-size:16px"></i> +91-9620030302</a></li>
                            <li><a href="tel:+918892278892"><i class="fa fa-phone" style="font-size:16px"></i> +91-8892278892</a></li>
                            </ul>
                        </div><!--/.footer-widget-->
                        <div class="footer-widget">
                            <h4 class="footer-title">Support</h4>
                            <ul class="footer-widget-list list-unstyled">
                            <li><a style="text-transform: lowercase;" href="mailto:support@theglobalscholarship.org"><i class="fa fa-envelope" style="font-size:16px"></i> support@theglobalscholarship.org</a></li>
                            <li><a href="tel:+919916056303"><i class="fa fa-phone" style="font-size:16px"></i> +91-9916056303</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="footer-newsletter footer-widget">
                            <h4 class="footer-title">Newsletter</h4>
                            <p>Do you want to get notified about new Scholarships subscribe now</p>
                            <form class="newsletter-form" method="post" action="<?php echo base_url('newsletter-subscription');?>">
                                <div class="form-group">
                                    <input class="form-control" name="news" type="email" placeholder="Your email address" required style="color:#fff;">
                                    <button type="submit" class="btn btn-default btn-primary">Subscribe</button>
                                </div>
                            </form>
                            <?php if($this->input->post('news')){?>
                                <p>Subscribed Successfully.</p>
                            <?php }?>
                        </div><!--/.footer-newsletter-->
                    </div><!--/.col-lg-6-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- End footer widgets area -->

        <!-- Start footer copyright area -->
        <div class="footer-copyright-area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            &copy;  <?php echo date('Y')?> Copyrights by TheGlobalScholarship.org
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--End footer copyright area -->
    </footer><!--End footer area -->


    <!--=========== JS FILE DECLARATION  ==============-->
    <!-- jQuery Latest Version -->
    <!--<script src="<?php echo base_url();?>assets/js/jquery-v3.2.1.min.js"></script>-->


    <!-- PopperJS -->
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <!-- Bootstrap framework JS -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <!-- All JS plugins included in this file. -->
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    <!-- Main JS file that contents all jQuery Plugins activation. -->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <!--<script src="<?php echo base_url();?>assets/js/dec.js"></script>-->
    
        <div class='container'>
    <div class="modal modal-xl fade" id="offer-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--<div class="modal-header "> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>-->
                <div class="modal-body p-0 row">
                    <div class="col-12 col-lg-4 p-0 ad"> <img src="https://www.theglobalscholarship.org/assets/images/Grab2.png" width="100%" height="100%"> </div>
                    <div class="details col-12 col-lg-8 text-center">
                        <div class="heading d-flex">
                            <div class="logo"></div>
                            <div class="off"></div>
                        </div>
                        <h2 id="offer-time"></h2>
                        <p>REGISTER TODAY AND AVAIL RS. 100 OFF</p>
                        <div class="text-muted hurry"><small>Hurry!! ONLY FEW REGISTRATIONS LEFT.</small></div>
                        <p><small class="text-muted blink-me">LIMITED TIME OFFER<br /></small></p>
                        <div class="d-flex mt-2 mb-5 text-center register-modal-button"> <a  href="<?php echo base_url('student-register?rcode=TGSOF100#registration')?>"><button  align="center" type="button" class="btn booking"><label><strong>REGISTER NOW</label></button></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .modal,
.fade,
.show {
    /*background-color: lightgray;*/
    padding-left: 0px;
    padding-right: 15px
    opacity: 0.5;
}

.modal{
    /*background-color: lightgray;*/
    z-index: 1000000000;
    padding-top: 75px;
}

.modal-content {
    /*background: transparent;*/
    border: none;
    /*padding: 0 19px*/
}

/*.close {*/
/*    position: relative;*/
/*    top: 48px;*/
/*    left: 13px;*/
/*    z-index: 1;*/
/*    font-size: 30px;*/
/*    font-weight: 100;*/
/*    line-height: 1;*/
/*    color: gray*/
/*}*/

/*.modal-header {*/
/*    border: none*/
/*}*/

.modal-body {
    border: none;
    background-color: white;
    padding-bottom: 5px
}


.heading {
    justify-content: space-between
}

.modal-footer {
    border: none
}

.logo {
    width: 100px;
    height: 100px;
    /*background: url(https://res.cloudinary.com/dxfq3iotg/image/upload/v1576118709/83225325-beauty-spa-logo-design.jpg);*/
    background-size: contain;
    position: relative;
    right: 14px
}

.off {
    margin-top: 25px;
    width: 50px;
    height: 50px;
    /*background: url(https://www.theglobalscholarship.org/assets/images/Grab2.png);*/
    background-size: contain
}

.booking {
    background-color: white;
    border: 2px solid lightgray;
    width: 350px;
    border-radius: 0px
    /*animation: animate 1.5s linear infinite;*/
}

.blink-me{
    font-weight:600;
    animation: animate 1.5s linear infinite;
}

.booking:hover {
    background-color: #ECEFF1;
    border: 2px solid black
}

@media (min-width:599px) {
    .modal-dialog {
        max-width: 47rem
    }

    .details {
        padding: 0 114px
    }

    .off {
        position: absolute;
        bottom: 150px;
        left: 25px
    }
}

@media screen and (max-width: 600px) {
  .ad {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 28%;
    display: none;
  }
}

@keyframes animate { 
            0% { 
                opacity: 0; 
            } 
  
            50% { 
                opacity: 0.7; 
            } 
  
            100% { 
                opacity: 0; 
            } 
        }
</style>

<script>
var countDownDate = new Date("Jan 7, 2021 20:00:00").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("offer-time").innerHTML = days + "D " + hours + "H "
  + minutes + "M " + seconds + "S ";
      if (distance < 0) {
    clearInterval(x);
    document.getElementById("offer-time").innerHTML = "OOP! You are late..";
    $('#register-modal-button').hide();
  }
}, 1000);

<?php if($this->input->get('rcode') == ''){?>
$(document).ready(function(){
    // setTimeout(function(){  $("#offer-modal").modal(); }, 5000);
});
<?php }?>
</script>

    <?php if($this->session->flashdata('proceed')){?>
        <script>
                    $('#exampleModalCenter').modal('show');
        </script>
    <?php }?>
   <?php if(isset($_GET['payment']) && $_GET['payment'] == 'success'){?>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">The Global Scholarship</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><strong>Your registration has been done successfully.</strong></p><br>
          Share On Facebook : 
          
          <div class="fb-share-button" data-href="https://www.theglobalscholarship.org/student-register" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.theglobalscholarship.org%2Fstudent-register&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div> 
        </div>
        <div class="modal-footer">
            <a href="<?php echo base_url('student-login')?>" class="btn btn-success">Click Here To Login</a>
          <button type="button" id="regconfirmclosebtn" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
    <script>
    $(document).ready(function(){
    $("#myModal").modal();
    });
    $('#regconfirmclosebtn').click( function(){
       location.replace('<?php echo base_url();?>'); 
    });
    </script>
    <!--end modal-->
    <?php } ?>
    
    
     <?php if(isset($_GET['payment']) && $_GET['payment'] == 'cancelled'){?>
    <div class="modal fade" id="myModalCancelled" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">The Global Scholarship</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><strong>Registration has been cancelled...</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" id="regcancelclosebtn" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    <script>
    $(document).ready(function(){
    $("#myModalCancelled").modal();
    });
    $('#regcancelclosebtn').click( function(){
       location.replace('<?php echo base_url();?>'); 
    });
    </script>
    <!--end modal-->
    <?php } ?>
    
    
    
    <?php if(isset($_GET['payment']) && $_GET['payment'] == 'successforindividual'){?>
    <div class="modal fade" id="myModalforIndividual" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">The Global Scholarship</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><strong>Your payment has been done successfully. Your Scholarship will be added soon to website.</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" id="regconfirmclosebtnforindividual" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    <script>
    $(document).ready(function(){
    $("#myModalforIndividual").modal();
    });
    $('#regconfirmclosebtnforindividual').click( function(){
       location.replace('<?php echo base_url();?>'); 
    });
    </script>
    <!--end modal-->
    <?php } ?>

    <?php if(isset($_GET['payment']) && $_GET['payment'] == 'failed'){?>
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">The Global Scholarship</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <p style="text-align: center;"><strong>Something went wrong, Please try again.</strong></p>
                </div>
                <div class="modal-footer">
                <button type="button" id="regconfirmclosebtnfail" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            
            </div>
        </div>
    <script>
    $(document).ready(function(){
    $("#myModal2").modal();
    });
    $('#regconfirmclosebtnfail').click( function(){
       location.replace('<?php echo base_url();?>'); 
    });
    </script>
    <!--end modal-->
    <?php } ?>
    
    <?php if($this->uri->segment(1) == '123222122312'){?>
    <!--<div class="modal fade" id="webinar" role="dialog">-->
    <!--        <div class="modal-dialog" style='margin-top: 125px;'>-->
            
            <!-- Modal content-->
    <!--        <div class="modal-content">-->
    <!--            <div class="modal-header">-->
    <!--            <h4 class="modal-title">The Global Scholarship</h4>-->
    <!--            <button type="button" class="close" data-dismiss="modal">&times;</button>-->
    <!--            </div>-->
    <!--            <div class="modal-body">-->
    <!--            <p style="text-align: center;"><strong>The Global Scholarship Webinar on Awareness about Unknown Scholarships. Register to join.</strong></p>-->
    <!--            </div>-->
    <!--            <div class="modal-footer">-->
    <!--            <a target='_blank' style='background-color:green; color:#ffffff' class="btn btn-default" href='https://forms.gle/UU7g8JXTdvm7YY3j8'>Register</a>-->
    <!--            <button type="button" id="regconfirmclosebtnfail" class="btn btn-default" data-dismiss="modal">Close</button>-->
    <!--            </div>-->
    <!--        </div>-->
            
    <!--        </div>-->
    <!--    </div>-->
    <!--<script>-->
    <!--$(document).ready(function(){-->
    <!--$("#webinar").modal();-->
    <!--});-->
    <!--// $('#regconfirmclosebtnfail').click( function(){-->
    <!--//   location.replace('<?php echo base_url();?>'); -->
    <!--// });-->
    <!--</script>-->
    <?php }?>
    
    <?php if($this->uri->segment(1) == 'student-register'){?>
   <div style="top:130px !important" class="modal fade" id="opportunity" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">WAIT!!!!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><strong>You need to read this.. We Have</strong></p>
          <ul align="center">
              <li><strong>1000+ </strong><i class="fa fa-graduation-cap"></i>Scholarships till date</li>
              <li> Sent <strong><i class="fa fa-rupee"></i>26,01,070</strong> worth Scholarships in <?php echo date('Y');?></li>
              <li> Sent <strong>20,000+ </strong> <i class="fa fa-bell"></i>notifications in <?php echo date('Y');?></li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" id="opportunity" class="btn btn-default" data-dismiss="modal"><i class="fa fa-frown-o" aria-hidden="true"></i> Let go</button>
        </div>
      </div>
      
    </div>
  </div>
<?php }?>
    
    <?php if(isset($_GET['payment']) && $_GET['payment'] == 'failedforindividual'){?>
        <div class="modal fade" id="myModal2forindividual" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">The Global Scholarship</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <p style="text-align: center;"><strong>Something went wrong, Please try again.</strong></p>
                </div>
                <div class="modal-footer">
                <button type="button" id="regconfirmclosebtnfailforindividual" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            
            </div>
        </div>
    <script>
    $(document).ready(function(){
    $("#myModal2forindividual").modal();
    });
    $('#regconfirmclosebtnfailforindividual').click( function(){
       location.replace('<?php echo base_url();?>'); 
    });
    </script>
    <!--end modal-->
    <?php } ?>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#exampleModalCenterforPayment').modal();
            $('#redirectToContributor').modal();
            $('#redirectToInstitute').modal();
            $('#redirectToIndividual').modal();
            $('#reset_password').modal();
        });
    </script>
    <script src="<?php echo base_url();?>assets/build/js/intlTelInput-jquery.js"></script>
    <script src="<?php echo base_url();?>assets/build/js/utils.js"></script>

<style>
.hide{
    display:none;
}
</style>
<script>
    $(document).ready(function(){
        $("#mobile-number").intlTelInput();
        var input = document.querySelector("#mobile-number"),
        errorMsg = document.querySelector("#error-msg"),
        validMsg = document.querySelector("#valid-msg");

        var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
        var iti = $("#mobile-number").intlTelInput(input, {
          utilsScript: "<?php echo base_url();?>assets/build/js/utils.js"
      });
        var reset = function() {
          input.classList.remove("error");
          errorMsg.innerHTML = "";
          errorMsg.classList.add("hide");
          validMsg.classList.add("hide");
      };
      input.addEventListener('change', reset);
      input.addEventListener('keyup', reset);
      $("#mobile-number").keyup(function()
      {
        if($("#mobile-number").val() == ''){
            $("#mobile-number").removeAttr('maxlength');
            $("#mobile-number").css('border-color','red');
        }
        let str = $("#mobile-number").val();
        var input = document.querySelector("#mobile-number"),
        errorMsg = document.querySelector("#error-msg"),
        validMsg = document.querySelector("#valid-msg");
        input.addEventListener('keyup', function() {
          reset();
          if (input.value.trim()) {
            if ($("#mobile-number").intlTelInput("isValidNumber")) {
                var countryCode = $("#mobile-number").intlTelInput("getSelectedCountryData");
                let maxDig = $("#mobile-number").val();
                $("#mobile-number").removeAttr('placeholder');
                $("#mobile-number").attr('maxlength',maxDig.length);
                if($("#mobile-number").val() == ''){
                    $("#mobile-number").removeAttr('maxlength');
                }
                $('#countryCode').val(countryCode.dialCode);
                $("#mobile-number").css('border-color','green');
                validMsg.classList.remove("hide");
            } else {
                $('#mobile-number').on('input', function (event) { 
                    this.value = this.value.replace(/[^0-9]/g, '');
                });
                $("#mobile-number").removeAttr('placeholder');
                input.classList.add("error");
                var errorCode = $("#mobile-number").intlTelInput('getValidationError');
                $("#mobile-number").css('border-color','red');
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        }
    });
    });

  });
</script>
  <script>
      var regex = new RegExp("(.*?)\.(csv)$");
      function triggerValidation(el) {
        if (!(regex.test(el.value.toLowerCase()))) {
          el.value = '';
          $('#filetypeerror').show();
          $('#filetypeerror').css('opacity','1');
          // var alertBox = document.getElementsById("filetypeerror");
          // alertBox.style.display = alertBox.style.display === 'none' ? '' : 'none';
          // alert('Please select correct file format');
      }
  }
  </script>
  <script >
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).hide();
        });
    }, 6000);
</script>

<style>
  /*.select2-container {
  width: 90% !important;
}

.select2-container .select-all {
    position: absolute;
    top: 6px;
    right: 4px;
    width: 20px;
    height: 20px;
    margin: auto;
    display: block;
    background-size: contain;
    cursor: pointer;
    z-index: 999999;
  }*/
</style>
<script>
 $(document).ready(function() {
   $('.js-example-basic-multiple').select2();
});



// $('.js-example-basic-multiple').select2({
//   placeholder: 'Press CTRL+A for selecr or unselect all options'
// });

// $('.select2[multiple]').siblings('.select2-container').append('<span class="select-all"></span>');

// $(document).on('click', '.select-all', function (e) {
//   selectAllSelect2($(this).siblings('.selection').find('.select2-search__field'));
// });

// $(document).on("keyup", ".select2-search__field", function (e) {
//   var eventObj = window.event ? event : e;
//   if (eventObj.keyCode === 65 && eventObj.ctrlKey)
//      selectAllSelect2($(this));
// });
        
        
// function selectAllSelect2(that) {

//   var selectAll = true;
//   var existUnselected = false;
//   var id = that.parents("span[class*='select2-container']").siblings('select[multiple]').attr('id');
//   var item = $("#" + id);

//   item.find("option").each(function (k, v) {
//       if (!$(v).prop('selected')) {
//           existUnselected = true;
//           return false;
//       }
//   });

//   selectAll = existUnselected ? selectAll : !selectAll;

//   item.find("option").prop('selected', selectAll).trigger('change');
// }



$(document).ready(function () {
    sport();
    noSport();
    $("#sports").prop("disabled", true);
    $('#no-sport').hide();
      $("#sport").change(function () {
        sport();
      });
      $("#no-sport").change(function () {
        noSport();
      });

      function sport(){
        var thisvalue =  $('#sport').val();
        //   alert(thisvalue);
          if(thisvalue == 'on'){
            $("#sports").prop("disabled", false);
            $('#no-sport').show();
            $("#sport").hide();
            $('#no-sport').prop("checked", true);
          }
      }

      function noSport(){
        var thisvalue =  $('#sport').val();
        //   alert(thisvalue);
          if(thisvalue == 'on'){
            $("#sports").prop("disabled", true);
            $('#no-sport').hide();
            $("#sport").show();
            $('#sport').prop("checked", false);
          }
      }
});
</script>
<script>
$(document).ready(function () {
    talent();
    noTalent();
    $("#specialTalent").prop("disabled", true);
    $('#no-talent').hide();
      $("#talent").change(function () {
        talent();
      });
      $("#no-talent").change(function () {
        noTalent();
      });

      function talent(){
        var thisvalue =  $('#talent').val();
        //   alert(thisvalue);
          if(thisvalue == 'on'){
            $("#specialTalent").prop("disabled", false);
            $('#no-talent').show();
            $("#talent").hide();
            $('#no-talent').prop("checked", true);
          }
      }

      function noTalent(){
        var thisvalue =  $('#talent').val();
        //   alert(thisvalue);
          if(thisvalue == 'on'){
            $("#specialTalent").prop("disabled", true);
            $('#no-talent').hide();
            $("#talent").show();
            $('#talent').prop("checked", false);
          }
      }
});



$(document).ready(function(){
$('.cat-2').hide();
    $('#scholarship_category').change(function(){
        var myDropVal = $('#scholarship_category').val();
        if(myDropVal == 'educational'){
            $('#Caste').prop('disabled',false);
            $('#Religion').prop('disabled',false);
            $('#stud_type').prop('disabled',false);
            $('.cat-2').hide();
        }else{
            $('#Caste').prop('disabled',true);
            $('#Religion').prop('disabled',true);
            $('#stud_type').prop('disabled',true);
            $('.cat-2').show();
        }
    });

});
</script>

<style>
    .multiselect-container>li>a>label {
  padding: 4px 20px 3px 20px;
}
</style>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ed8817de8cea7d4"></script>
<?php if($this->uri->segment(1) == 'student-register' ){?>
    <script>
    // window.onbeforeunload = confirmExit;
    // function confirmExit() {
    //     return "You have attempted to leave this page. Are you sure?";
    // }
    $(document).ready(function(){
      var visit = false;
      var opened = false;
      $('.header-inner').hover(function(){
        visit = true;
      });
      $('.focus').hover(function(){
        // alert(counter);
        if(visit == true && opened == false){
          $("#opportunity").modal('show');
        }
      });

      $('#opportunity').on('shown.bs.modal', function (e) {
       opened=true;
     });
    });
  </script>
<?php }?>
</body>
</html>
