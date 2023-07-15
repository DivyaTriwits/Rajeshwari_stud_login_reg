   <style>
  @media screen and (max-width: 650px) {
     #desk{
  display: none;
}  
  }
  @media screen and (min-width: 650px) {
      #mobile{
          display:none;
      }
  }
  @media (min-width: 1200px)
.container {
    max-width: 1140px !important;
}
   .footer-widgets-area {
    background-color: #41044D;
    padding: 20px 0 0px;
}
.footer-copyright-area {
    background-color: #fff;
    color: black;
    padding: 2px 0;
}
.footer-widget-list li {
    color: #F2B625 !important;
}
  </style>
    <!-- Start footer area -->
    <footer id="footer" class="site-footer">
        <!-- Start footer widgets area -->
        <div class="footer-widgets-area" id="desk">
            <div class="container deskcontainer">
                <div class="row ">
                    <div class="col-lg-3 col-sm-6 col-s-6">
                        <div class="footer-widget">
                            <h4 class="footer-title">Quick Links</h4>
                            <ul class="footer-widget-list list-unstyled" style="display: flex; flex-direction: column;">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li><a href="<?php echo base_url('faq');?>">FAQ</a></li>
                              <li><a href="https://mocktest.theglobalscholarship.org/" target="_blank">MockTest</a></li>
                              <li><a href="https://www.amazon.in/b?_encoding=UTF8&tag=137909-21&linkCode=ur2&linkId=6e7e6bd9f310585ddf008ed6b3f291e2&camp=3638&creative=24630&node=4149751031"target="_blank">Books</a></li>
                                <li><a href="<?php echo base_url('about-us');?>">About Us</a></li>
                                 <li><a href="<?php echo base_url('about-us#contact');?>">Why Choose Us</a></li>
                                 <li><a href="<?=base_url('Scholarships2023');?>">Scholarships 2023</a></li>
                                 <!--------------------for sitemap---------on 08 June------by varun------------>
                                 <li><a href="<?=base_url('sitemap');?>">Sitemap</a></li>
                                 <!--------------------for winners---------on 11 Jully------by varun------------>
                                 <li><a href="<?=base_url('winners');?>">Winners</a></li>

                              <?php
                             // $referrer_value = " https://www.theglobalscholarship.org/feed-back";
							//$this->session->set_userdata('login_referrer', $referrer_value);
                              ?>
                                 <li><a href="<?=base_url('feed-back');?>">Feed Back</a></li>
                            </ul>
                        </div><!--/.footer-widget-->
                    </div><!--/.col-lg-3-->
                    <div class="col-lg-3 col-sm-6 col-s-6">
                        <div class="footer-widget">
                            <h4 class="footer-title">Other Links</h4>
                            <ul class="footer-widget-list list-unstyled" style="display: flex; flex-direction: column;">
                                <li><a href="<?php echo base_url('privacy');?>">Privacy</a></li>
                                <li><a href="<?php echo base_url('disclaimer');?>">Disclaimer</a></li> 
                                <!--------------------for winners---------on 12 Jully------by varun------------>
                                 <li><a href="<?=base_url('collaboration');?>">Business Collaboration</a></li>     </ul>
                          </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-s-6">
                        <div class="footer-widget">
                            <h4 class="footer-title">Office Timing</h4>
                            <ul class="footer-widget-list list-unstyled" style="display: flex;flex-direction: column;">
                                <li><i class="fa fa-calendar" style="font-size:16px;margin:5px 5px 0px 0px"></i> Monday - Saturday</li>
                                <li><i class="fa fa-clock-o" style="font-size:16px;margin:5px 5px 0px 0px"></i> 10:00 AM - 6:00 PM</li>
                                <li><i class="fa fa-calendar" style="font-size:16px;margin:5px 5px 0px 0px"></i> Sunday - Holiday</li>
                            </ul>
                        </div>
                    </div>
                      <div class="col-lg-3 col-sm-6 col-s-6">
                        <div class="footer-widget">
                            <h4 class="footer-title">Follow Us on</h4>
                            <ul class="footer-widget-list list-unstyled">                             
                                <li><a href="https://www.instagram.com/the_global_scholarship/" target = "_blank"><i class="fa fa-instagram" style="font-size: 20px; margin-right: 10px"></i></a></li>
                                <li><a  href="https://www.youtube.com/c/theglobalscholarshiporg" target = "_blank"><i class="fa fa-youtube-play" style="font-size: 20px;margin: 0 10px;"></i></a></li>
                                <li><a  href="https://www.facebook.com/theglobalscholarship/" target = "_blank"><i class="fa fa-facebook" style="font-size: 20px;margin: 0 10px;"></i></a></li>
                                <li><a href="https://t.me/theglobalscholarship" target = "_blank"><i class="fa fa-telegram" style="font-size: 20px;margin: 0 10px;"></i></a></li> 
                            </ul>
                        </div>
                    </div>
                     <div class="col-lg-4 col-sm-6 col-s-6">
                         <div class="footer-widget">
                            <h4 class="footer-title">Connect With Us</h4>
                            <ul class="footer-widget-list list-unstyled" style="display: flex; flex-direction: column;">
                            <li>
                                <a style="text-transform: lowercase;" href="mailto:support@theglobalscholarship.org">
                                    <i class="fa fa-envelope" style="font-size:16px"></i> support@theglobalscholarship.org</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- End footer widgets area -->
         <!-- Start footer widgets area -->
        <div class="footer-widgets-area" id="mobile">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-3 col-sm-6 col-s-6">
                        <div class="footer-widget">
                            <h4 class="footer-title">Quick Links</h4>
                            <ul class="footer-widget-list list-unstyled" style="display: flex; flex-direction: column;">
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li><a href="<?php echo base_url('faq');?>">FAQ</a></li>
                                <li><a href="<?php echo base_url('about-us');?>">About Us</a></li>
                                 <li><a href="<?php echo base_url('about-us#contact');?>">Why Choose Us</a></li>
                              <li><a href="https://mocktest.theglobalscholarship.org/">MockTest</a></li>
                              <li><a href="https://www.amazon.in/b?_encoding=UTF8&tag=137909-21&linkCode=ur2&linkId=6e7e6bd9f310585ddf008ed6b3f291e2&camp=3638&creative=24630&node=4149751031">Books</a></li>
                              <li><a href="<?=base_url('Scholarships2023');?>">Scholarships 2023</a></li>
                              <li><a href="<?=base_url('sitemap');?>">Sitemap</a></li>
                              <!--------------------for winners---------on 11 Jully------by varun------------>
                                 <li><a href="<?=base_url('winners');?>">Winners</a></li>

                              <?php
                            //  $referrer_value = current_url().($_SERVER['QUERY_STRING']!=""?"?".$_SERVER['QUERY_STRING']:"");
							//$this->session->set_userdata('login_referrer', $referrer_value);
                              ?>
                                 <li><a href="<?=base_url('feed-back');?>">Feed Back</a></li>
                            </ul>
                        </div><!--/.footer-widget-->
                         <div class="footer-widget">
                            <h4 class="footer-title">Office Timing</h4>
                            <ul class="footer-widget-list list-unstyled" style="display: flex;flex-direction: column;">
                                <li><i class="fa fa-calendar" style="font-size:16px;margin:5px 5px 0px 0px"></i> Monday - Saturday</li>
                                <li><i class="fa fa-clock-o" style="font-size:16px;margin:5px 5px 0px 0px"></i> 10:00 AM - 6:00 PM</li>
                                <li><i class="fa fa-calendar" style="font-size:16px;margin:5px 5px 0px 0px"></i> Sunday - Holiday</li>
                            </ul>
                        </div>
                    </div><!--/.col-lg-3-->
                    <div class="col-lg-3 col-sm-6 col-s-6">
                        <div class="footer-widget">
                            <h4 class="footer-title">Other Links</h4>
                            <ul class="footer-widget-list list-unstyled" style="display: flex; flex-direction: column;">
                                <li><a href="<?php echo base_url('privacy');?>">Privacy</a></li>
                                <li><a href="<?php echo base_url('disclaimer');?>">Disclaimer</a></li>
                                <!--------------------for winners---------on 12 Jully------by varun------------>
                                 <li><a href="<?=base_url('collaboration');?>">Business Collaboration</a></li>     </ul>
                        </div>
                          <div class="footer-widget">
                            <h4 class="footer-title">Follow Us on</h4>
                            <ul class="footer-widget-list list-unstyled">                             
                                <li><a href="https://www.instagram.com/the_global_scholarship/"><i class="fa fa-instagram" style="font-size: 20px; margin-right: 10px"></i></a></li>
                                <li><a  href="https://www.youtube.com/c/theglobalscholarshiporg"><i class="fa fa-youtube-play" style="font-size: 20px;margin: 0 10px;"></i></a></li>
                                <li><a  href="https://www.facebook.com/theglobalscholarship/"><i class="fa fa-facebook" style="font-size: 20px;margin: 0 10px;"></i></a></li>
                                <li><a href="https://t.me/theglobalscholarship"><i class="fa fa-telegram" style="font-size: 20px;margin: 0 10px;"></i></a></li>
                            </ul>
                        </div>
                    </div>
                      <div class="col-lg-3 col-sm-12 col-s-12">
                             <div class="footer-widget">
                            <h4 class="footer-title">Connect With Us</h4>
                            <ul class="footer-widget-list list-unstyled" style="display: flex; flex-direction: column;">
                               <!--  <li><a href="tel:+919916056303"><i class="fa fa-phone" style="font-size:16px"></i> +91-9916056303</a></li> -->
                            <li>
                                <a style="text-transform: lowercase;" href="mailto:support@theglobalscholarship.org">
                                    <i class="fa fa-envelope" style="font-size:16px"></i> support@theglobalscholarship.org</a>
                                </li>
                            </ul>
                        </div>        
                    </div>                     
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

      <script async defer src="<?php echo base_url();?>website_assets/testimonial/js/vendor/vendor.min.js"></script>
    <script async defer src="<?php echo base_url();?>website_assets/testimonial/js/plugins/plugins.min.js"></script>
    <script async defer src="<?php echo base_url();?>website_assets/testimonial/js/ajax-contact.js"></script>
    <script async defer src="<?php echo base_url();?>website_assets/testimonial/js/plugins/aos.js"></script>
    <script async defer src="<?php echo base_url();?>website_assets/testimonial/js/plugins/waypoints.js"></script>
    <script async defer src="<?php echo base_url();?>website_assets/testimonial/js/plugins/jquery.selectric.min.js"></script>
    <script async defer src="<?php echo base_url();?>website_assets/testimonial/js/main.min.js"></script>
    <!-- PopperJS -->
    <script async defer src="<?php echo base_url();?>website_assets/js/popper.min.js"></script>
    <!-- Bootstrap framework JS -->
    <script async defer src="<?php echo base_url();?>website_assets/js/bootstrap.min.js"></script>
    <!-- All JS plugins included in this file. -->
    <script async defer src="<?php echo base_url();?>website_assets/js/plugins.js"></script>
    <!-- Main JS file that contents all jQuery Plugins activation. -->
    <script async defer src="<?php echo base_url();?>website_assets/js/main.js"></script>
   <!--  new tstimonial craousel js -->
    <script async defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script async defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
    <script async defer src="<?php echo base_url();?>website_assets/new/new.js"></script>
 
<style>
    .modal,
.fade,
.show {
    padding-left: 0px;
    padding-right: 15px
    opacity: 0.5;
}

.modal{
    z-index: 1000000000;
    padding-top: 75px;
}

.modal-content {
    border: none;
}
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
    background-size: contain;
    position: relative;
    right: 14px
}
.off {
    margin-top: 25px;
    width: 50px;
    height: 50px;
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
    animation: animate 2.5s linear infinite;
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
        /*padding: 0 100px*/
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

    <!--end modal-->
    <?php } ?>
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

    <script  src="<?php echo base_url();?>website_assets/build/js/utils.js"></script>

<style>
.hide{
    display:none;
}
</style>
  <script >
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).hide();
        });
    }, 6000);
</script>


<!--===========================hiding the code ====================== -->



<script>
      function block(e) {
    if(e.keyCode == 123) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'i'.charCodeAt(0) || e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'j'.charCodeAt(0) || e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.keyCode == 'u'.charCodeAt(0) || e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
     return false;
    }

    if(e.ctrlKey && e.shiftKey && e.keyCode == 'c'.charCodeAt(0) || e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
     return false;
    }   
    if(e.ctrlKey && e.keyCode == 's'.charCodeAt(0) || e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
     return false;
    }   
 }
// document.addEventListener('contextmenu', function(e) {
 // e.preventDefault();
//});
    </script>
<!--===========================hiding the code ====================== -->

</body>
</html>