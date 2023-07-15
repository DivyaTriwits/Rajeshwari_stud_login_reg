<div class="login-page page-wrapper" style="padding: 50px 0px;">
  <?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success alert-dismissible" style="text-align: center;margin: 5px auto;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4>Success!</h4>
      <?php echo $this->session->flashdata('success'); ?>
    </div>
  <?php }else if($this->session->flashdata('failure')){ ?>
    <div class="alert alert-danger alert-dismissible" style="width: 50%;text-align: center;margin: 5px auto;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4>Fail!</h4>
      <?php echo $this->session->flashdata('failure'); ?>
    </div>
  <?php }?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="login-form-area">
          <form method="post" class="needs-validation" novalidate action="<?php echo base_url('verify-influencer-login')?>">
            <h2>login as Influencer</h2>
            <div class="col-md-12 mb-3">
              <label for="validationCustom01"><b>Email ID<span style="color: red">*</span></b></label>
              <input class="form-control" type="text" name="email" id="validationCustom01" required placeholder="Please enter your email id"> <!--pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"-->
              <div class="invalid-feedback">
                <small>Please enter your valid email as (e.g : johndeo@gmail.com) </small>
              </div>
            </div>

            <div class="col-md-12 mb-3">
              <label for="validationCustom01"><b>Password <span style="color: red">*</span></b></label>
              <input class="form-control" type="password" name="password" id="validationCustom02" required placeholder="Please enter your password">
              <div class="invalid-feedback">
                <small>Please enter your valid password as (e.g : xxxxxx)</small>
              </div>
            </div>

            <div class="col-md-12 mb-3">
              <p><button class="btn btn-default btn-primary" type="submit">Log In Your Account</button></p>
            </div>                                          
            <p style="text-align: center; margin-top:-12px;">Not yet a member?  
           
            <a href="<?php echo base_url('influencer-registration');?>"> <b>REGISTER NOW</b></a></p>
            <!--<p style="text-align: center; margin-top:-12px;"><a href="<?php echo base_url('forgot-password');?>"> <b>FORGOT PASSWORD?</b></a></p>-->
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