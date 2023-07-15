<!--=======Page Heading =================================-->
    <?php $notificationCount = $this->db->get('sent_notifications')->num_rows();
    $worthOfScholarships = $this->db->select_sum('scholarship_worth')->get('scholarships')->row();
    //print_r($worthOfScholarships);exit;
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
       
        <div class="col-sm-12 col-md-6" id="registration">
            <div class="login-form-area register-form-area">
              
                  <h2 class="customH2">MUST WATCH</h2>
                  <div class="row">
                    <iframe style="padding-top:30px !important" width="560" height="315" src="https://www.youtube.com/embed/LZC-R79qDAY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  </div>
                  <br>
                    <div class="col-md-8 mb-3" style="margin-left:auto;margin-right:auto;">
                        <a href="<?php echo base_url();?>student-register"> <button class="btn btn-primary bounce" name="stud" id="register-button"  >Register Now</button></a>
                 
                 </div>
                  <div class="col-md-12 mb-3" >
                   <p style="text-align: center;">Any Queries? Call us on <a href="tel:+918892278892">+918892278892</a> OR <a href="tel:+919620030302">+919620030302</a></p>
               </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6" id="registration">
            <div class="login-form-area register-form-area">
               <form  method="post" id="registerform"  action="<?php echo base_url('download-certificate')?>" >
                  <h2 class="customH2">DOWNLOAD WEBINAR CERTIFICATE</h2>
                  <br>
                  <br>
                  <div class="row">
                      <div class="col-md-12 mb-3">
                        <label for="validationCustom01"><b>ENTER YOUR MOBILE NUMBER<span style="color: red">*</span></b></label>
                        <!--<input class="form-control" type="text" name="name" id="validationCustom01" pattern="[a-zA-Z\s]+" placeholder="Full Name" required>-->
                    <input class="form-control" type="text"  name="bibno" id="password" minlength="10" maxlength="10" required placeholder="Please enter your Mobile Number">
                     </div>
               
                 
                  </div>
                  <div class="col-md-8 mb-3" style="margin-left:auto;margin-right:auto;">
                     <button class="btn btn-primary "   type="submit">Submit</button>
                  </div>
               </form>
              
            </div>
            
         </div>
     
         
         
           
        
         
         
         <!--/.col-lg-4-->
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</div>

<script>
      $('#registerform').ready(function(){
        $('#registerform').bootstrapValidator({
          feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
            bibno: {

              validators: {
                notEmpty: {
                  message: 'The mobile number is required'
                },
               
              regexp: {
                            regexp: /[0-9]/,
                            message: 'The mobile no. can only consist of digits'
                        }
              }
            },
            
           

          }
        })
      });

    </script>
    <style>
      .has-error  {
        color: red;
      }
    </style>