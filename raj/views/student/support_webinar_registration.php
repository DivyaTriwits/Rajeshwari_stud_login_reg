<?php if($webinarLinks->num_rows() > 0 ){
    $webinarLinksCount = $webinarLinks->num_rows();
    $webinarDetails = $webinarLinks->row();
    $regCount = $this->db->where('webinar_name', $webinarDetails->webinar_name)->get('students_webinar_registration')->num_rows();

    if($webinarDetails->link_type == 'Whatsapp'){
        $webinarLinksResult = $webinarLinks->result();
        $index = 1; $min = 0; $max = 250; $increase = 250;
         foreach($webinarLinksResult as $eachLink){
             if($index == 1){
                if($regCount >= $min && $regCount <= $max){
                    
                    $urlLink = $eachLink->links;
                }
             }else{
                if($regCount > $min && $regCount <= $max-1){
                
                    $urlLink = $eachLink->links;
                }
             }
            $min = $max;
            $max += 250;
            $index++;
        }
}else{
  
    $urlLink = $webinarDetails->links;

}
}else{
    redirect('not-found');
}?>
<!--=======Page Heading =================================-->
<!-- <div class="main-content pt-5 mt-5">
  <div class="container-fluid"> -->
  <style>
      .help-block
      {
          color:red;
      }
  </style>
<div class="register-page page-wrapper " style="padding: 10px 0;">
  <div class="container">
    <div class="row justify-content-center">
        <?php if(!$this->session->userdata('user_added_allow_qr_and_link')){?>
       <div class="col-lg-6 col-md-6 col-sm-6 animated fadeInRight delay-4s" id="registration">
        <div class="login-form-area register-form-area">
         <form id="webForm" autocomplete="off" method="post" action="<?php echo base_url('support-webinar-registration')?>">
          <!--<h2 style="font-size:14px !important" class="customH2">"Awareness about unknown scholarships"</h2>-->
          <h2 class="customH2">Webinar Registration</h2>
          <div class="row">
           <div class="col-md-12 mb-3 animated fadeInLeft delay-4s">
            <label for="validationCustom01"><b>Full Name <!-- <span style="color: red">*</span> --></b></label>
            <input class="form-control" type="text" name="fname" id="fname" pattern="[a-zA-Z\s]+" placeholder="Full Name">
          
         </div>
       </div>
       <div class="row">
         <div class="col-md-12 mb-3 animated fadeInLeft delay-4s">
          <label for="validationCustom03"><b>Email Address<!--  <span style="color: red">*</span> --></b></label>
          <input class="form-control" type="email" required autofill="false" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" placeholder="Please enter your email address">
          <div class="invalid-feedback">
           <small>Please enter your email..</small>
         </div>
       </div>
       <div class="col-md-12 mb-3 animated fadeInRight delay-4s">
        <label for="validationCustom04"><b>Mobile Number <span style="color: red">*</span></b></label>
        <input type="tel" id="email" minlength="10" maxLength="10" class="form-control" required name="number" id="number">
     
       <input type="hidden" id="countryCode" name ="countryCode">
     </div>

     <div class="col-md-12 mb-3 animated fadeInLeft delay-4s">
      <label for="validationCustom03"><b>Class<span style="color: red">*</span> </b></label>
      <select class="select2 form-control form-control-line" id="degree" name="degree" style="width: 100%; height:36px;">
        <option  selected="" disabled="">--Please Select--</option>
        <option  value="Diploma">Diploma</option>
        <option  value="Bachelor">Bachelors</option>
        <option  value="Masters">Masters</option>
        <option  value="PH.D">PH.D</option>
        <option  value="Post Doc">Post Doc</option>
        <option  value="Other">Other</option>
      </select>
      
      <input type='hidden' name='segment_name' value='<?php echo $this->uri->segment(2);?>'>
      <div class="invalid-feedback">
       <small>Please enter your email as (e.g : johndeo@gmail.com)</small>
     </div>
   </div>

 </div>               
 <!--<label>For any queries, dial +91-8892278892 / +91-9620030302</label>-->
 <!--<div class="form-check">-->
  <div class="col-md-12 mb-3 animated fadeInLeft delay-4s">
  <label class="form-check-label" for="checkbox"> 
  <input class="form-check-input " required type="checkbox" value="" name="checkbox" id="checkbox">
    I agree to receive notifications from the TGS via Call / SMS/ E-mail/ WhatsApp.
  </label>
  </div>
<!--</div>-->
 <div class="col-md-8 mb-3" style="margin-left:auto;margin-right:auto;">
   <button class="btn btn-primary btn-default" name="stud" id="register-button"  type="submit">Submit</button>
 </div>
</form>
</div>
</div>
<?php }?>
<style>
    .Alertbutton {
  background: #FF7F45;
  border: 0;
  font-size: 20px;
  padding: 10px 20px;
  position: relative;
  animation-name: shake;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in;
  cursor: pointer;
  border-radius:10px;
  color:#ffff;
}
.Alertbutton:hover {
  animation-name: shakeAnim;
  color:#480057;
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
<?php if($this->session->userdata('user_added_allow_qr_and_link') == 'true'){?>
  <div class="col-lg-6 col-md-6 col-sm-6 text-center" style="top:20 !important">
    <h2 class="customH2 animated fadeInLeft delay-1s" align="center" style="font-weight: bold;font-size: 36px;letter-spacing: 0.05em;"></h2><br>
    <!--<h2 class="customH2 animated fadeInLeft delay-1s" align="center" style="font-weight: bold;font-size: 26px;letter-spacing: 0.05em;">CLICK JOIN TO GET ALERTS</h2><br>-->
    <h3 class="customH2 animated fadeInLeft delay-1s" align="center" style="font-weight: bold;font-size: 18px;letter-spacing: 0.05em;">To receive webinar notification, subscribe and click the bell icon.


</h3><br>
        <a target="_blank" class="Alertbutton" href="<?php echo $urlLink;?>">SUBSCRIBE <i class="fa fa-youtube-play"></i></a>
        <hr>
        <!--<i><b>Every participant will get an assured reward at the end of the webinar.</b></i>-->
        <i style="font-size: 10px;"><b >Every participant will get an E-Certificate at the end of the webinar.

</b></i>
  </div>
  <?php }?>



<!--/.col-lg-4-->
</div>
<!--/.row-->
</div>
<!--/.container-->
</div>
<!--/.login-page-->
<!-- </div>
</div> -->

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
 <style>
  input{
    color: #000000;
  }
</style>
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

.button {
  background-color: #ff7f45;
  border: none;
  color: white;
  padding: 5px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
</style>

<script>
  function copyToClipBoard() {
    var copyText = document.getElementById("webinar_link");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
    $('.alert').show();
  // alert("Copied the text: " + copyText.value);
}
</script>
<script>
  $(document).ready(function() {
    $("#openLink").trigger('click');
}
</script>
<script>
		$(document).ready(function() {

								$('#webForm').bootstrapValidator({

									fields: {
										fname: {

											validators: {
												notEmpty: {
													message: 'Full name is required'
												},


											}
										},
										email: {

											validators: {
												notEmpty: {
													message: 'Email is required'
												},


											}
										},
										number: {

											validators: {
												notEmpty: {
													message: 'Mobile number is required'
												},


											}
										},
											degree: {

											validators: {
												notEmpty: {
													message: 'Class  is required'
												},


											}
										},
											checkbox: {

											validators: {
												notEmpty: {
													message: 'Agree to term and conditions'
												},


											}
										},



									}
								}) .on('success.form.bv', function(e) {
									$(this)[0].submit();
								});
							});
</script>
