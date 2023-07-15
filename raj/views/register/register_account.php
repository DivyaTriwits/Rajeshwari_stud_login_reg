<!--=======Page Heading =================================-->
    

<style>
    /* (A) SAME DIMENSIONS FOR OUTER CONTAINER & SLIDES */
.vwrap, .vslide {
  box-sizing: border-box;
  width: 100%;
  height: 70px;
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
.vslide { padding: 10px; }

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
</style>


<div class="register-page page-wrapper " style="padding: 10px 0;">
   <div class="container">
       <!--<?php if($this->session->flashdata('failure')){?>-->
       <!--   <div class="alert alert-danger"><?php echo $this->session->flashdata('failure')?></div>-->
       <!--   <?php }?>-->
          <div class = "row justify-content-center">
                <div class="vwrap col-sm-12 col-md-6">
                    <div class="vmove">
                  <div class="vslide">
                    <h6  style="text-align: center; font-weight:800;">Serving students from 450+ colleges.</h6>
                  </div>
                  <div class="vslide">
                    <h6  style="text-align: center; font-weight:800;">150K+ SMS alerts sent in last 6 months.</h6>
                  </div>
                  <div class="vslide">
                    <h6 style="text-align: center; font-weight:800;"  >An average of 100K worth scholarship alerts to each student/year.</h6>
                  </div>
                </div>
                </div>
          </div>
      <div class="row justify-content-center">
          <!--<div class="row">-->
          <!--          <iframe style="padding-top:30px !important" width="560" height="315" src="https://www.youtube.com/embed/HAMmNg0LPCw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
          <!--        </div>-->
      
        <!--<div class="col-sm-12 col-md-6" id="registration">-->
            
        <!--</div>-->
        <!--<div class="col-sm-12 col-md-2" id="registration">-->
        <!--    </div>-->
        <div class="col-sm-12 col-md-6" id="registration">
            <div class="login-form-area register-form-area">
              
                  <h2 class="customH2">COMPLETE YOUR REGISTRATION</h2>
                  
            </div>
            <div class="login-form-area register-form-area">
               <form autocomplete="off" method="post" class="needs-validation"  action="<?php echo base_url();?>student-account-details/<?php echo $this->uri->segment(2);?>" novalidate>
                  <!--<h2 class="customH2">SUBSCRIBE FOR AN YEAR</h2>-->
                  <div class="row">
                      <div class="col-md-12 mb-3">
                        <label for="validationCustom01"><b>Email<span style="color: red">*</span></b></label>
                        <input class="form-control" type="email" name="email" id="email"  placeholder="Student Email" autocomplete="off" required>
                        <!--<select class="form-control" name="course" id="course" required>-->
                        <!--    <option selected disabled>Select Course</option>-->
                        <!--    <option value="PhD">PhD</option>-->
                        <!--    <option value="PG">PG</option>-->
                        <!--    <option value="UG">UG</option>-->
                        <!--    <option value="Diploma">Diploma</option>-->
                        <!--    <option value="7-12">Class 7 - Class 12</option>-->
                        <!--    <option value="1-6">Class 1 - Class 6</option>-->
                        <!--</select>-->
                        <div class="invalid-feedback">
                           <small>Please enter email</small>
                        </div>
                     </div>
                          <div class="col-md-12 mb-3">
                        <label for="validationCustom01"><b>Whatsapp No<span style="color: red">*</span></b></label>
                        <!--<input class="form-control" type="text" name="name" id="validationCustom01" pattern="[a-zA-Z\s]+" placeholder="Full Name" required>-->
                        <input

											pattern="[0-9]{1,10}"  maxlength="10" oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"

											class="form-control rounded-11" name="mobile_number" id="mobile_number" placeholder="Student Mobile Number" type="tel"  autocomplete="off" required>

											<input type="hidden" name="uniqueNumber" id="uniqueNumber" value="<?php echo $this->uri->segment(2) ?>">
                        <!--<select class="form-control" name="state" id="state" required>-->
                        <!--    <option selected disabled>Select State</option>-->
                        <!--    <?php foreach($states as $state){?>-->
                        <!--    <option value="<?php echo $state->id?>"><?php echo $state->name;?></option>-->
                        <!--  <?php }?>-->
                            
                        <!--</select>-->
                        <div class="invalid-feedback">
                           <small>Please enter whatsapp No.</small>
                        </div>
                     </div>
                      <div class="col-md-12 mb-3">
                        <label for="validationCustom01"><b>How Did You Hear About Us<span style="color: red">*</span></b></label>
                        <!--<input class="form-control" type="email" name="email" id="email"  placeholder="Student Email" autocomplete="off" required>-->
                        <select class="form-control" name="source" id="email" required>
                            <option selected disabled>Select Source</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Google">Google</option>
                            <option value="Friends">Friends</option>
                            <option value="Other's">Other's</option>
                           
                        </select>
                        <div class="invalid-feedback">
                           <small>Please select source</small>
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationCustom03"><b>Create Password<span style="color: red">*</span></b></label>
                      
                        <input class="form-control" type="password" autofill="false" name="password" id="password" minlength="8" required placeholder="Please enter your password">
                        <div class="invalid-feedback">
                           <small>Please enter a password, minimum length is 8.</small>
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationCustom04"><b>Confirm Password<span style="color: red">*</span></b></label>
                        <input class="form-control" type="password" autofill="false" name="confirm_password" id="cpassword" required placeholder="Please re-enter your password" minlength="8">
                        
                        <div class="invalid-feedback">
                           <small>Please confirm your password, minimum length is 8.</small>
                        </div>
                        <span style="color:red;display:none;" id= "error-span">Passwords do not match..</span>
                     </div>
                  </div>
                  <div class="col-md-8 mb-3" style="margin-left:auto;margin-right:auto;">
                     <button class="btn btn-primary bounce" name="stud" id="register-button"  type="submit">Register</button>
                  </div>
               </form>
               <!--<div class="col-md-12 mb-3" >-->
               <!--    <p style="text-align: center;">Any Queries? Call us on <a href="tel:+919916056303">+919916056303</a> OR <a href="tel:+919620030302">+919620030302</a></p>-->
               <!--</div>-->
            </div>
            <i style="font-size: 10px;line-height: normal;">Disclaimer:<br>The Global Scholarship (TGS) does not give any scholarship or guarantee of scholarship to any of our clients / subscribers. We help students in choosing the right scholarship also try that candidates should participate in all the possible scholarships as per the eligibility criteria.</i>
            <!--<br><i style="font-size: 10px;line-height: normal;">2. Subscription fees paid once will not be refunded</i>-->
         </div>
       
        
         
         
           
        
         
         
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


		<?php if($this->session->flashdata('continue-registration')){?>		
			<Script>
				swal({
					title: 'Registration!',
					text: 'welcome back, please complete your registration!',
					type: 'info',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>

		<?php if($this->session->flashdata('email-already-exists')){?>		
			<Script>
				swal({
					title: 'Registration!',
					text: 'Account already registered with this email, please use different email!',
					type: 'error',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>





		<?php if($this->session->flashdata('update-student-registration-failure')){?>		
			<Script>
				swal({
					title: 'Registration!',
					text: 'Failed to add details,Please Try Agian',
					type: 'error',
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

	<?php if($this->session->flashdata('account-already-exists')){?>		
		<Script>
			swal({
				title: 'Registration!',
				text: 'Already registered!',
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