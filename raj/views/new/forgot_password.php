<div class="login-page page-wrapper s-pd100">
  <?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success alert-dismissible" style="width: 50%;text-align: center;margin: 5px auto;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i> Success!</h4>
      <?php echo $this->session->flashdata('success'); ?>
    </div>
  <?php }else if($this->session->flashdata('failure')){ ?>
    <div class="alert alert-danger alert-dismissible" style="width: 50%;text-align: center;margin: 5px auto;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-times"></i> Fail!</h4>
      <?php echo $this->session->flashdata('failure'); ?>
    </div>
  <?php }?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="login-form-area">
         <!--<form method="post" class="needs-validation" novalidate>-->
           <form action="<?php echo base_url()?>send-reset-password-link " method="post" class="needs-validation" novalidate> <!--12th may -->
            
            <div class="col-md-12 mb-3">
              <label for="validationCustom01"><b>Email Address <span style="color: red">*</span></b></label>
             <input class="form-control" type="email" name="email" id="validationCustom01" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" required placeholder="Please enter your email address"> 
                 <div class="invalid-feedback">
                <small>Please enter your valid email as (e.g : johndeo@gmail.com)</small>
              </div>
            </div>

            <div class="col-md-12 mb-3">
              <!--<a class="login-form-forgot-password" href="#">Forgot your password?</a> -->
              <p><button class="btn btn-default btn-primary"style="border-radius: 15px;background-color: #41044D ;border-color: #41044D;color: #f2b625; " type="submit">Recover Your Account</button></p>
            </div>
            <!--<p style="text-align: center;"><a href="forgot_password.php"> <b>FORGOT PASSWORD?</b></a></p> -->
            <p style="text-align: center; margin-top:-12px;">Registered?  <a href="<?php echo base_url('student-login');?>"> <b>LOGIN</b></a></p>
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
