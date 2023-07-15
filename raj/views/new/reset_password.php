<div class="login-page page-wrapper s-pd100">
  <?php if($this->session->flashdata('failure')){ ?>
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
          <form method="post" action="<?php echo base_url('reset');?>" class="needs-validation" novalidate>

            <div class="col-md-12 mb-3">
              <label for="validationCustom01"><b>New Password <span style="color: red">*</span></b></label>
              <input class="form-control" type="password" name="newpass" id="validationCustom02" required placeholder="New Password">
            </div>

            <div class="col-md-12 mb-3">
              <label for="validationCustom01"><b>Confirm Password <span style="color: red">*</span></b></label>
              <input class="form-control" type="password" name="conpass" id="validationCustom02" required placeholder="Confirm your password">
            </div>
            <input type="hidden" value="<?php echo urldecode($this->uri->segment(4));?>" name="email">
            <div class="col-md-12 mb-3">
              <a class="login-form-forgot-password" href="#">Forgot your password?</a> <!-- Anamika has updated the code to test the forgot password -->
            
              <p><button class="btn btn-default btn-primary" style="border-radius: 15px;background-color: #41044D ;border-color: #41044D;color: #f2b625; " type="submit">Reset</button></p>
            </div>
            <p style="text-align: center;"><a href="forgot_password.php"> <b>FORGOT PASSWORD?</b></a></p> <!-- namika has updated the code to test the forgot password -->
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
