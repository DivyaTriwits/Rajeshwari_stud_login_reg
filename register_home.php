<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--========= Basic Page Needs =========-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta property="og:type"               content="The Global Scholarship" />
    <meta property="og:title"              content="Scholarships At Your Fingertips" />
     <meta property="og:description"        content="TGS - A smart scholarships alert engine which matches your profile with the scholarship's criteria and sends you alerts on mobile. " />
     <meta property="og:image"              content="<?php echo base_url()?>assets/img/brand/sc logo.png" />
    <!--======== Page Title===========-->
    <title>The Global Scholarship</title>
    <!--========== Favicons =========-->
    <link rel="shortcut icon" sizes="70x70" href="<?php echo base_url();?>website_assets/sc logo.png">
    <!--======== Font icon Css ============-->
    <!--<link href="<?php echo base_url();?>website_assets/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>website_assets/css/themify-icons.css" rel="stylesheet">
    <!--======= Bootstrap Main Css =============-->
    <link href="<?php echo base_url();?>website_assets/css/bootstrap.min.css" rel="stylesheet">
    <!--====== Plugins Css ================-->
    <link href="<?php echo base_url();?>website_assets/css/plugins.css" rel="stylesheet">
    <!--====== Custom CSS for themes =======-->
    <link href="<?php echo base_url();?>website_assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>website_assets/build/css/intlTelInput.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>website_assets/tags.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>website_assets/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>website_assets/css/tables.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>website_assets/css/amabassador.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>website_assets/css/floating-button.css" rel="stylesheet" />
    <!--[if lt IE 8]>
    <![endif]-->
    <!-- jQuery Latest Version -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/testimonial/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/testimonial/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/testimonial/css/plugins/aos.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/testimonial/css/plugins/selectric.css" />
        <link href="<?php echo base_url()?>assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">
    <!--bootstrap validation-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.css"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>website_assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>

        <script src="<?php echo base_url()?>assets/plugins/sweet-alert/sweetalert.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-T1Y2L3C6VT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-T1Y2L3C6VT');
    </script>-->
  
  
</head>
<body style="background-color:#F2B625" >
    <?php if(!$this->uri->segment(1) == 'student-register'){?>
        <!--<a href="#" class="float" id="menu-share">-->
        <!--    <i class="fa fa-paper-plane my-float"></i>-->
        <!--</a>-->
        <!--<ul class="ulStart">-->
        <!--    <li class="liStart">-->
        <!--        <a href="<?php echo base_url();?>student-register#registration">-->
        <!--            <i class="fa fa-user-plus my-float" data-toggle="tooltip" data-placement="top" title="Student Registration"></i>-->
        <!--        </a>-->
        <!--    </li>-->
        <!--</ul>-->
        <!-- <a   target = "_blank" href="https://api.whatsapp.com/send/?phone=+918892278892" data-action="share/whatsapp/share">
                    <i class="fa fa-whatsapp my-float" data-toggle="tooltip" data-placement="top" title="" style="color: green"></i>
                </a> -->
        <ul class="ulStart">
           <!--  <li class="liStart">
                <a href="<?php echo base_url();?>student-register#registration">
                    <i class="fa fa-user-plus my-float" data-toggle="tooltip" data-placement="top" title="Student Registration"></i>
                </a>
            </li> -->
             <li class="liStart" >
              <a   target = "_blank" href="https://api.whatsapp.com/send/?phone=+919620030302&text=Hello The Global Scholarship Team, Please let me know more about your Scholarship Services as I am interested to enroll for your services. . . I Got Your Contact from your portal...." data-action="share/whatsapp/share"style="background-color: green">
                    <i class="fa fa-whatsapp my-float"></i>
                </a>
            </li>
        </ul>
    <?php }?>
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
<style type="text/css">
                          .registerbutton{
                              
                            display: inline-block;
                            background: #FF854E;
                            color: #fff;
                            /*background-color:#FF854E;*/
                            
                            text-transform: uppercase;
                            padding: 10px 15px;
                            border-radius: 20px;
                            border-color:#FF854E;
                            box-shadow: 0px 10px 5px -5px rgba(0,0,0,0.4);
                            cursor: pointer;
                            transition: all ease-in-out 300ms;
                          }
                        </style>
                        <style type="text/css">
                           .registerbutton:hover{
                            background:#ffffff;
                            box-shadow: 0px 37px 20px -20px rgba(0,0,0,0.2);
                            transform: translate(0px, -10px) scale(1.2);

                          }
                           @media only screen and (max-width: 600px) {
                              
                            .registerbutton:hover
                            {
                            
                             box-shadow: 0px 37px 20px -20px rgba(0,0,0,0.2);
                            transform: translate(0px, -10px) scale(1.0);
                            }
                            #desktopview{
                                display: none;
                            }
                            .container{
                                padding-top:20px 
                            }
                           }
                          
                        </style>

     <script>
        $(window).scroll(function() {
  if ($(this).scrollTop() > 0) {
    $('.socio').fadeOut();
  } else {
    $('.socio').fadeIn();
  }
});
    </script>

 <script src='https://www.google.com/recaptcha/api.js'></script>
<!--=======Page Heading =================================-->
    <?php $notificationCount = $this->db->get('sent_notifications')->num_rows();
    $worthOfScholarships = $this->db->select_sum('scholarship_worth')->get('scholarships')->row();
    ?>
<?php if($this->session->flashdata('newuser')){ ?>
<div class="alert alert-success alert-dismissible" style="width: 50%;text-align: center;margin: 10px auto;">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
   <h4>Success!</h4>
   <?php echo $this->session->flashdata('newuser'); ?>
</div>
<?php }else if($this->session->flashdata('newuserFailed')){?>
<div class="alert alert-danger alert-dismissible" style="width: 50%;text-align: center;margin: 10px auto;">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
   <h4>Failed!</h4>
   <?php echo $this->session->flashdata('newuserFailed'); ?>
</div>
<?php }?>

<style>
    /* (A) SAME DIMENSIONS FOR OUTER CONTAINER & SLIDES */
.vwrap, .vslide {
  box-sizing: border-box;
  width: 100%;
  height: 65px;
}
.g-recaptcha {
    transform:scale(0.77);
    -webkit-transform:scale(0.77);
    transform-origin:0 0;
    -webkit-transform-origin:0 0;
    align-items: 'center';
}
 
/* (B) OUTER CONTAINER */
.vwrap {
    
  /*background: #ebfbff;*/
  /*border: 2px solid #a69bff;*/
  overflow: hidden; /* HIDE SCROLLBARS */
}
 
/* (C) MIDDLE CONTAINER */
.vmove {
  position: relative;
  bottom: 0%;
}
 
/* (D) SLIDES */
.vslide { padding: 2px; }

/* (E) SLIDE ANIMATION */
@keyframes slidev {
  /* (E0) THE IDEA - USE KEYFRAMES TO SHIFT SLIDES *
  0% { bottom: 0; }
  33% { bottom: 100%; }
  66% { bottom: 200%; }
  100% { right: 0; }
 
  /* (E1) BUT THE ABOVE WILL SHIFT NON-STOP */
  /* SO WE ADD PAUSES BETWEEN EACH SLIDE */
  0% { bottom: 0; }
  30% { bottom: 0; }
  33% { bottom: 100%; }
  63% { bottom: 100%; }
  66% { bottom: 200%; }
  97% { bottom: 200%; }
  100% { right: 0; }
}
.vmove { animation: slidev linear 10s infinite; }
.vmove:hover { animation-play-state: paused; }
#recaptcha {
    width: 304px;
    margin: 0 auto;
   
}

.login-form-area .form-control
{
    height:37px !important;
}
label {
    margin-bottom:0rem !important;
}
</style>


<div class="register-page page-wrapper " style="padding-top: 16px;">
   <div class="container" style="max-width:1050px;">
  
     <div class="card" style="border-radius:25px;border-color:#41044D;border-width: 3px;"><div class="card-body">
        <center>
  
          <div class="logo">
                    <a href="<?php echo base_url();?>">
                      <img src="<?php echo base_url();?>website_assets/sc logo.png" alt="logo" style="max-width:125px;">
                    </a>
                  </div><!--/.logo-->
                  <div class="section-heading-area text-center" style="padding-top: 10px; padding-bottom: 10px" >
          <h4 class="section-heading " style="color:#410441;font-size: 1.5em;"><b>Create your profile</b></h4>
        </div>
         <?php if($this->session->flashdata('failure')){?>
          <div class="alert alert-danger"><?php echo $this->session->flashdata('failure')?></div>
          <?php }?>

</center>
        <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6" id="registration" style="padding: 0 20px 0 20px;">
            <div class="login-form-area register-form-area">
               <form id="addStudentForm" autocomplete="off" method="post" class="needs-validation" novalidate action="<?php echo base_url()?>add-student-details">
                  <div class="row">
                      <div class="col-md-12 mb-2 " style="margin-bottom: 1rem!important;">
                       
                        <input class="form-control" type="text" name="fullname" id="fullname" pattern="[a-zA-Z\s]{4,200}" placeholder="Full Name" required style="background-color: #ccc;width: 100%; height: 45px !important;color: black;align-content: center;border-radius: 7px 7px 7px 7px;">
                        
                        <div class="invalid-feedback">
                           <small>Please enter your Full name (e.g : John)</small>
                        </div>
                     </div>
                         <div class="col-md-6 mb-2 col-6" style="margin-bottom: 1rem!important;">
                       
                        <select class="form-control" name="course" id="course" required style="background-color: #ccc;width: 100%; height: 45px !important;color: black;align-content: center;border-radius: 7px 7px 7px 7px;">
                        <option selected disabled>Course</option>
                          <?php if($course->num_rows()>0){ foreach(array_reverse($course->result()) as $row){?>
													<option value="<?php echo $row->course_name;?>">
														<?php echo $row->course_name;?>
													</option>
												<?php } } ?>
                            
                     </select>
                        <div class="invalid-feedback">
                           <small>Please select course</small>
                        </div>
                     </div>
                     <div class="col-md-6 mb-2 col-6" style="margin-bottom: 1rem!important;">
                      
                        <select class="form-control" name="state" id="state" required style="background-color: #ccc;width: 100%; height: 45px !important;color: black;align-content: center;border-radius: 7px 7px 7px 7px;">
                        <option selected disabled>State</option>
                          <?php if($states->num_rows()>0){ foreach($states->result() as $row){?>
													<option value="<?php echo $row->name;?>">
														<?php echo $row->name;?>
													</option>
												<?php } } ?>
                            
                     </select>
                        <div class="invalid-feedback">
                           <small>Please select state</small>
                        </div>
                     </div>
                     <div class="col-md-6 mb-2 " style="margin-bottom: 1rem!important;">
                        
                        <input maxlength="10" oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)" class="form-control" type="text" autofill="false" name="mobile_number" id="mobile_no" required placeholder="Mobile number" style="background-color: #ccc;width: 100%; height: 45px !important;color: black;align-content: center;border-radius: 7px 7px 7px 7px;">
                        <div class="invalid-feedback">
                           <small>Please enter your mobile no.</small>
                        </div>
                     </div>
                     <div class="col-md-6 mb-2" style="margin-bottom: 1rem!important;">
                    
                        <input class="form-control" type="email" name="email" id="email" required placeholder="Email" style="background-color: #ccc;width: 100%; height: 45px !important;color: black;align-content: center;border-radius: 7px 7px 7px 7px;">
                       <!--  <div class="invalid-feedback">
                           <small>Please enter your valid email id (e.g : john@gmail.com)</small>
                        </div> -->
                     </div>
                   
               
                        <div class="col-md-6 mb-4" style="margin-bottom: 1rem!important;">
                        <input class="form-control" type="password"  name="password" id="password" required placeholder="Create password" style="background-color: #ccc;width: 100%; height: 45px !important;color: black;align-content: center;border-radius: 7px 7px 7px 7px;">
                        <!-- <div class="invalid-feedback">
                           <small>Please enter a password, minimum length is 8.</small>
                        </div> -->
                     </div>
                     <div class="col-md-6 mb-2" style="margin-bottom: 1rem!important;">
                       
                        <input class="form-control" type="password" name="confirm_password" id="cpassword" required placeholder="Confirm password"style="background-color: #ccc;width: 100%; height: 45px !important;color: black;align-content: center;border-radius: 7px 7px 7px 7px;">
                        
                       <!--  <div class="invalid-feedback">
                           <small>Please confirm your password, minimum length is 8.</small>
                        </div> -->
                        <span style="color:red;display:none;" id= "error-span">Passwords do not match..</span>
                     </div>
                     <div class="col-md-12 mb-2 " style="margin-bottom: 1rem!important;">
                     <input type="hidden" value="<?php echo $this->input->get('sid')?>" name="ad_scholarship_id">
                      <input type="text" value="<?php echo $this->input->get('rcode')?>" name="rcode">
                     <!-- <div id="recaptcha">
                       <div  class="g-recaptcha" data-sitekey="6Le9s5AhAAAAAMOzPXuijOmbjTwOi3X_UisSxVWV"></div>
                       </div> -->
                       </div>
                     <div class="col-md-6 mb-4 col-6" style="margin-bottom: 1rem!important;">
                        <a href="<?php echo base_url('student-login')?>" style="color: black;">Log-In instead </a>
                     </div>
                     <div class="col-md-6 mb-2 col-6" style="margin-bottom: 1rem!important;" align="right">
                       <button class="btn btn-primary bounce" name="stud" id="register-button"  type="submit" style="width: 120px;border-radius: 15px;background-color: #41044D ;border-color: #41044D;color: #f2b625; " > Register </button>
                     </div>
                  </div>
                
               </form>
               
            </div>
         </div>
            <div class="col-sm-12 col-md-6" id="desktopview">
            <div class="login-form-area register-form-area">
            <h3 align="center" class="customH2">WHY CHOOSE US?</h3>
            <label></label>
                        <div class="col-lg-12 col-md-12">
                       <div id="accordion" class="our-standard-content accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default single-standard active" style="padding-top: 10px ;padding-bottom: 10px;margin-bottom: 18px;margin-top: 3px;    border-width: 1px;
                               border-color:#F2B625 !important;
                                 border-style: double;">
                                <div class="panel-heading" role="tab">
                                    <h3 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Personalized Dashboard</a>
                                    </h3>
                                </div><!--/.panel-heading-->
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
                                    <div class="single-standard-content">
                                        <p>No worries! Didn't check your message box? Not a problem. Register with us, sign in and get a personalized dashboard where you can check the scholarships which have been sent to you.</p>
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!--/.single-standard-->
                            <div class="panel panel-default single-standard" style="padding-top: 10px ;padding-bottom: 10px;margin-bottom: 18px;margin-top: 3px; border-width: 1px;
                               border-color:#F2B625 !important;
                                 border-style: double;">
                                <div class="panel-heading" role="tab">
                                    <h3 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">3-4 Monthly Scholarship Alerts</a>
                                    </h3>
                                </div><!--/.panel-heading-->
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
                                    <div class="single-standard-content">
                                        <p>No pain! Just register and update your profile and you are gonna get matched up scholarship alerts right on your personalized dashboard</p>
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!--/.single-standard-->
                            <div class="panel panel-default single-standard" style="padding-top: 10px ;padding-bottom: 10px;margin-bottom: 18px;margin-top: 3px;border-width: 1px;
                               border-color:#F2B625 !important;
                                 border-style: double;">
                                <div class="panel-heading" role="tab">
                                    <h3 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Support and Guidance</a>
                                    </h3>
                                </div><!--/.panel-heading-->
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
                                    <div class="single-standard-content">
                                        <p>Facing Difficulty While Applying for scholarships.? Zero Worries, You Are Our Priority and Here We Are Their to Assist You Out.</p>
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!--/.single-standard-->
                           <!--/.single-standard-->
                        </div><!--/.our-standard-content-->
                    </div>
            </div>
        </div>
       </div></div>
         <!--/.col-lg-4-->
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</div>

<!--/.login-page-->
<script>
   // Example starter JavaScript for disabling form submissions if there are invalid fields
   (function() {
     'use strict';
     window.addEventListener('load', function() {
       var forms = document.getElementsByClassName('needs-validation');
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
<?php if($this->session->flashdata('failuer')){?>		
			<Script>
				swal({
					title: 'Sorry!',
					text: 'Already Registered!',
					type: 'error',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
			<?php }?>

	<?php if($this->session->flashdata('captcha-failure')){?>		
			<Script>
				swal({
					title: 'Sorry!',
					text: 'Retry',
					type: 'error',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
			<?php }?>

	
	<?php if($this->session->flashdata('roll-over')){?>		
		<Script>
			swal({
				title: 'Failed!!',
				text: '<?php echo $this->session->flashdata('roll-over');?>',
				type: 'error',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>

	<?php if($this->session->flashdata('add-student-registration-failure')){?>		
		<Script>
			swal({
				title: 'Registration!',
				text: 'Registration Failed!',
				type: 'error',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>


	<?php if($this->session->flashdata('logout-success')){?>		
		<Script>
			swal({
				title: 'Logout!',
				text: 'Logout success!',
				type: 'success',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>


	<?php if($this->session->flashdata('session-creation-error')){?>		
		<Script>
			swal({
				title: 'Reset Password !',
				text: 'Failed to create session!',
				type: 'error',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>


	<?php if($this->session->flashdata('reset-link-expired-error')){?>		
		<Script>
			swal({
				title: 'Reset Password!',
				text: 'Reset password link has expired!',
				type: 'error',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>


	<?php if($this->session->flashdata('password-reset-success')){?>		
		<Script>
			swal({
				title: 'Password Reset!',
				text: 'Password Reset success!',
				type: 'success',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>


	<?php if($this->session->flashdata('password-reset-error')){?>		
		<Script>
			swal({
				title: 'Reset Password!',
				text: 'Failed to reset the password!',
				type: 'error',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>
<script>
   var check = function() {
     if (document.getElementById('validationCustom06').value == document.getElementById('validationCustom07').value) {
       document.getElementById('message').style.color = 'green';
       document.getElementById('message').innerHTML = 'Matching';
     } else {
       document.getElementById('message').style.color = 'red';
       document.getElementById('message').innerHTML = 'Not Matching';
     }
   }
   
   $('#cpassword').keyup(function(){
      
       var password = $('#password').val();
    //   alert(password);
       if(password != '' && password == $(this).val()){
           $('#error-span').hide();
       }else{
           $('#error-span').show();
       }
   });
</script>
<style>
   select.form-control:not([size]):not([multiple]) {
   height: calc(2.25rem + 15px); 
   }
   @media screen and (max-width: 900px) and (min-width: 200px){
      .poster {
        width: 100%;
        height: auto !important;
        margin-left: auto;
        margin-right: auto;
      }
      .customH2{
          margin-top: 20px !important;
      }
      .s-pd100 {
        padding: 15px 0;
      }
    }
</style>
<!-- BootstrapValidator JS -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
        <script>
  $(document).ready(function() {
    $('#addStudentForm').bootstrapValidator({
  

        fields: {
          fullname: {
            validators: {
              notEmpty: {
                message: 'Full name is required '
              },
               stringLength: {
                        min: 4,
                        max: 100,
                        message: 'Full name must be 4 to 100 characters long'
                    },
                     regexp: {
                        regexp: /^[a-zA-Z\s]*$/,
                        message: 'Enter the valid name'
                    },
            }
          },
           mobile_number: {
                message: 'Enter 10 digit mobile no',
                validators: {
                    notEmpty: {
                        message: 'Enter 10 digit mobile no'
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: 'Enter 10 digit mobile no'
                    },
                   regexp: {
                        regexp: /^[6-9]{1}[0-9]{9}$/,
                        message: 'Enter 10 digit mobile no'
                    },
                }
            },
           email: {
                message: 'Enter standard email format with . & @',
                validators: {
                    notEmpty: {
                        message: 'Enter standard email format with . & @'
                    },
                     stringLength: {
                        min:6,
                        max: 30,
                        message: 'Enter standard email format with . & @'
                    },
                   
                   regexp: {
                        regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                     message: 'Enter standard email format with . & @'
                    },
                }
            },
          password: {
                message: 'Enter the password',
                validators: {
                    notEmpty: {
                        message: 'Password is required and cannot be empty'
                    },
                    stringLength: {
                        min: 8,
                        max: 20,
                        message: 'Please enter 8 characters long combination of upper & lowercase, number & 1 special character'
                    },
                }
            },
             confirm_password: {
                message: 'Please enter same as password',
                validators: {
                    notEmpty: {
                        message: 'Please enter same as password'
                    },
                    stringLength: {
                        min: 8,
                        max: 20,
                        message: 'Please enter same as password'
                    },
                }
            },
     
        }
    }).on('success.form.bv', function(e) {
      $(this)[0].submit();
    });
});
</script>
</body>
</html>