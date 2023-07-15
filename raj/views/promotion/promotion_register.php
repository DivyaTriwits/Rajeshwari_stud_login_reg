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
<div class="register-page page-wrapper " style="padding: 10px 0;">
   <div class="container">
       <?php if($this->session->flashdata('failure')){?>
          <div class="alert alert-danger"><?php echo $this->session->flashdata('failure')?></div>
          <?php }?>
      <div class="row justify-content-center">
        <?php if($this->input->get('subscriber') != ''){?>
        <div class="col-sm-12 col-md-6" id="registration">
            <div class="login-form-area register-form-area">
              
                  <h2 class="customH2">WATCH AND SUBSCRIBE</h2>
                  <div class="row">
                    <iframe style="padding-top:30px !important" width="560" height="315" src="https://www.youtube.com/embed/HAMmNg0LPCw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6" id="registration">
            <div class="login-form-area register-form-area">
               <form autocomplete="off" method="post" class="needs-validation" action="<?php echo base_url('promotion-register-subscriber')?>" novalidate>
                  <h2 class="customH2">SUBSCRIBE FOR AN YEAR</h2>
                  <div class="row">
                      <div class="col-md-12 mb-3">
                        <label for="validationCustom01"><b>Course<span style="color: red">*</span></b></label>
                        <!--<input class="form-control" type="text" name="name" id="validationCustom01" pattern="[a-zA-Z\s]+" placeholder="Full Name" required>-->
                        <select class="form-control" name="course" id="course" required>
                            <option selected disabled>Select Course</option>
                            <option value="PhD">PhD</option>
                            <option value="PG">PG</option>
                            <option value="UG">UG</option>
                            <option value="Diploma">Diploma</option>
                            <option value="7-12">Class 7 - Class 12</option>
                            <option value="1-6">Class 1 - Class 6</option>
                        </select>
                        <div class="invalid-feedback">
                           <small>Please select course..</small>
                        </div>
                     </div>
                          <div class="col-md-12 mb-3">
                        <label for="validationCustom01"><b>State<span style="color: red">*</span></b></label>
                        <!--<input class="form-control" type="text" name="name" id="validationCustom01" pattern="[a-zA-Z\s]+" placeholder="Full Name" required>-->
                        <select class="form-control" name="state" id="state" required>
                            <option selected disabled>Select State</option>
                            <?php foreach($states as $state){?>
                            <option value="<?php echo $state->id?>"><?php echo $state->name;?></option>
                          <?php }?>
                            
                        </select>
                        <div class="invalid-feedback">
                           <small>Please select course..</small>
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationCustom03"><b>Password<span style="color: red">*</span></b></label>
                        <input type="hidden" name="sub_id_auth" value="<?php echo $this->input->get('subscriber');?>">
                        <input class="form-control" type="password" autofill="false" name="password" id="password" minlength="8" required placeholder="Please enter your password">
                        <div class="invalid-feedback">
                           <small>Please enter a password, minimum length is 8.</small>
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationCustom04"><b>Confirm Password<span style="color: red">*</span></b></label>
                        <input class="form-control" type="password" autofill="false" name="cpassword" id="cpassword" required placeholder="Please re-enter your password" minlength="8">
                        
                        <div class="invalid-feedback">
                           <small>Please confirm your password, minimum length is 8.</small>
                        </div>
                        <span style="color:red;display:none;" id= "error-span">Passwords do not match..</span>
                     </div>
                  </div>
                  <div class="col-md-8 mb-3" style="margin-left:auto;margin-right:auto;">
                     <button class="btn btn-primary bounce" name="stud" id="register-button"  type="submit">Proceed to pay</button>
                  </div>
               </form>
               <div class="col-md-12 mb-3" >
                   <p style="text-align: center;">Any Queries? Call us on <a href="tel:+919916056303">+919916056303</a> OR <a href="tel:+919620030302">+919620030302</a></p>
               </div>
            </div>
            <i style="font-size: 10px;line-height: normal;">Disclaimer:<br>1. The Global Scholarship (TGS) does not give any scholarship or guarantee of scholarship to any of our clients / subscribers. We help students in choosing the right scholarship also try that candidates should participate in all the possible scholarships as per the eligibility criteria.</i>
            <br><i style="font-size: 10px;line-height: normal;">2. Subscription fees paid once will not be refunded</i>
         </div>
        <?php }?>
        <?php if($this->input->get('subscriber') == ''){?>
        <div class="col-sm-12 col-md-6" id="registration">
            <div class="login-form-area register-form-area">
               <form autocomplete="off" method="post" class="needs-validation" novalidate>
                  <h2 class="customH2">GET SCHOLARSHIP ALERTS</h2>
                  <div class="row">
                      <div class="col-md-12 mb-3">
                        <label for="validationCustom01"><b>Full Name <span style="color: red">*</span></b></label>
                        <input type="hidden" name="source" value="<?php echo $this->input->get('source');?>">
                        <input class="form-control" type="text" name="name" id="validationCustom01" pattern="[a-zA-Z\s]+" placeholder="Full Name" required>
                        <div class="invalid-feedback">
                           <small>Please enter your Full name (e.g : John)</small>
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationCustom03"><b>Email Address <span style="color: red">*</span></b></label>
                        <input class="form-control" type="email" autofill="false" name="email" id="validationCustom03" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" required placeholder="Please enter your email address">
                        <div class="invalid-feedback">
                           <small>Please enter your email.</small>
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                        <label for="validationCustom04"><b>Mobile Number <span style="color: red">*</span></b></label>
                        <input class="form-control" type="text" autofill="false" name="mobile_no" id="mobile_no" pattern="^[0-9]*$" required placeholder="Please enter your mobile number" maxlength="10" minlength="10">
                        <div class="invalid-feedback">
                           <small>Please enter your mobile no.</small>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 mb-3" style="margin-left:auto;margin-right:auto;">
                     <button class="btn btn-primary bounce" name="stud" id="register-button"  type="submit">Get Alerts <i class="fa fa-bell"></i></button>
                  </div>
               </form>
               <div class="col-md-12 mb-3" >
                   <p style="text-align: center;">Any Queries? Call us on <a href="tel:+919916056303">+919916056303</a> OR <a href="tel:+919620030302">+919620030302</a></p>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6" >
            <div class="login-form-area register-form-area">
            <h2 align="center" class="customH2">WHY CHOOSE <br>US?</h2>
            <label></label>
                        <div class="col-lg-12 col-md-12">
                        <div id="accordion" class="our-standard-content" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default single-standard active">
                                <div class="panel-heading" role="tab">
                                    <h3 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Scholarships that you can avail..</a>
                                    </h3>
                                </div><!--/.panel-heading-->
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
                                    <div class="single-standard-content">
                                        <p>Yes! We strive hard on behalf of you to find latest scholarships which suit your profile and have highest chances of availing. So why wait?? <a style="color:#ff7f45" href="#registration">just get started..</a></p>
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!--/.single-standard-->
                            <div class="panel panel-default single-standard">
                                <div class="panel-heading" role="tab">
                                    <h3 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Support and guidance..</a>
                                    </h3>
                                </div><!--/.panel-heading-->
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
                                    <div class="single-standard-content">
                                        <p>Obviously!!! You are our priority and here we are to help you out. <a style="color:#ff7f45" href="#registration">Register with us</a> and take a sigh of relief.</p>
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!--/.single-standard-->
                            <div class="panel panel-default single-standard">
                                <div class="panel-heading" role="tab">
                                    <h3 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Scholarship alerts..</a>
                                    </h3>
                                </div><!--/.panel-heading-->
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
                                    <div class="single-standard-content">
                                        <p>No pain! Just <a style="color:#ff7f45" href="#registration">register and update</a> your profile and you are gonna get matched up scholarship alerts right on your mobile via SMS.. </p>
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!--/.single-standard-->
                            <div class="panel panel-default single-standard">
                                <div class="panel-heading" role="tab">
                                    <h3 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Personalized Dashboard</a>
                                    </h3>
                                </div><!--/.panel-heading-->
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
                                    <div class="single-standard-content">
                                        <p>No worries! Didn't check your message box? Not a problem. <a style="color:#ff7f45" href="#registration">Register with us,</a> sign in and get a personalized dashboard where you can check the scholarships which have been sent to you.</p>
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!--/.single-standard-->
                        </div><!--/.our-standard-content-->
                    </div>
            </div>
        </div>
         <?php }?>
         
         
           
        
         
         
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