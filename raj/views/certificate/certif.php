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
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="login-form-area">
        <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-success alert-dismissible" style="text-align: center;margin: 10px auto;">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Success!</h4>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php }
            else if($this->session->flashdata('failure')){
        ?>
            <div class="alert alert-danger alert-dismissible" style="text-align: center;margin: 10px auto;">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Failed!</h4>
              <?php echo $this->session->flashdata('failure'); ?>
            </div>
        <?php
          }
        ?>
          <form method="post" class="needs-validation" novalidate>
            <h2>login as contributor</h2>
            <div class="col-md-12 mb-3">
              <label for="validationCustom01"><b>Email Address <span style="color: red">*</span></b></label>
              <input class="form-control" type="email" name="email" id="validationCustom01" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" required placeholder="Please enter your email address">
              <div class="invalid-feedback">
                <small>Please enter your valid email as (e.g : johndeo@gmail.com)</small>
              </div>
            </div>

            <div class="col-md-12 mb-3">
              <label for="validationCustom01"><b>Password <span style="color: red">*</span></b></label>
              <input class="form-control" type="password" name="pass" id="validationCustom02" required placeholder="Please enter your password">
              <div class="invalid-feedback">
                <small>Please enter your valid password as (e.g : xxxxxx)</small>
              </div>
            </div>

            <div class="col-md-12 mb-3">
              <!--<a class="login-form-forgot-password" href="#">Forgot your password?</a> -->
              <p><button class="btn btn-default btn-primary" type="submit">Log In Your Account</button></p>
            </div>
            <!--<p style="text-align: center;"><a href="forgot_password.php"> <b>FORGOT PASSWORD?</b></a></p> -->
            <!--<p style="text-align: center; margin-top:-12px;">Not yet a member?  <a href="<?php echo base_url('register');?>"> <b>REGISTER NOW</b></a></p>-->
            <!--<p style="text-align: center; margin-top:-12px;"><a href="<?php echo base_url('forgot-password-for-contributor');?>"> <b>FORGOT PASSWORD?</b></a></p>-->
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
