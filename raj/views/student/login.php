<html>
<head></head>
<body>
<form action="<?php echo base_url('student-login')?>" method="post">
  <!-- <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>
 -->
 
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>



<?php if($this->session->flashdata('update-student-registration-success')){?>    
<Script>
  swal({
    title: 'Registration Successfull!',
    text: 'Congratulations, you are registration is successfull, now kindly login to application!',
    type: 'success',
    timer: 3000,
    showConfirmButton: false
  });
</Script>
<?php }?>


<?php if($this->session->flashdata('password-changed-success')){?>    
<Script>
  swal({
    title: 'Reset password!',
    text: 'Congratulations, reset password success, now kindly login to application!',
    type: 'success',
    timer: 3000,
    showConfirmButton: false
  });
</Script>
<?php }?>



<body>
</html>