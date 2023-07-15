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
            <!--12th may -->
            
            <div class="col-md-12 mb-3">
              
              </div>
            </div>

            <div class="col-md-12 mb-3">
              <!--<a class="login-form-forgot-password" href="#">Forgot your password?</a> -->
              <a href="<?php echo $chk;?>"><p><button class="btn btn-default btn-primary"style="border-radius: 15px;background-color: #41044D ;border-color: #41044D;color: #f2b625; " type="submit">Click To Reset Password</button></p></a>
            </div>
            <!--<p style="text-align: center;"><a href="forgot_password.php"> <b>FORGOT PASSWORD?</b></a></p> -->
         
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
