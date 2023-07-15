<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=ues" name="viewport">
  <meta property="og:type"               content="The Global Scholarship" />
  <meta property="og:title"              content="Scholarships At Your Fingertips" />
  <meta property="og:description"        content="TGS - A smart scholarships alert engine which matches your profile with the scholarship's criteria and sends you alerts on mobile. " />
  <meta property="og:image"              content="<?php echo base_url()?>assets/img/brand/sc logo.png" />
  <!--<meta name="description" content="The Global Scholarship - Scholarships At Your Fingertips">-->
  <meta name="author" content="THE GLOBAL SCHOLARSHIP">
  <meta name="keywords" content="The Global Scholarship, Scholarships, Alerts, Education, Private scholarships, opportunities, scholarship alerts, Scholarship, Application, Amount, Price, Gender based scholarships, merit based scholarships, talent based scholarships, need based scholarships, new scholarships, free scholarships">
  
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url()?>assets/img/brand/tgs-logo.png" type="image/x-icon"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
  <!-- Title -->
  <title>The Global Scholarship</title>


  <!-- Bootstrap css-->
  <link href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

  <!-- Icons css-->
  <link href="<?php echo base_url()?>assets/css/icons.css" rel="stylesheet"/>

  <!-- Style css-->
  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/dark-boxed.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/boxed.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/skins.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/dark-style.css" rel="stylesheet">

  <!-- Color css-->
  <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/css/colors/color.css">

  <!-- P-SCROLL css-->
  <link href="<?php echo base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">

  <!-- Switcher css-->
  <link href="<?php echo base_url()?>assets/switcher/css/switcher.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/switcher/demo.css" rel="stylesheet">

</head>
<body class="horizontalmenu">
  <!-- Page -->
  <div class="page main-signin-wrapper error">

    <div class="container ">
      <div class="construction1 text-center details text-white">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <h1 class="tx-140 mb-0"><img alt="img" class="" src="<?php echo base_url()?>assets/img/media/404.png"></h1>
          </div>
          <div class="col-lg-12 mt-3">
            <h1 class="mb-3">Sorry !</h1>
            <h5 class="tx-20 mb-3  text-dark">We could not find the page you are looking for.</h5>
            <!--<h6 class="tx-20  text-muted">Sorry we could not find the page you are looking for.</h6>-->
            <?php if($this->session->userdata('student_username')){?>
              <h5 class="tx-20 mb-3  text-dark">
                <a href="<?php echo base_url('student-home')?>">
                 <button class="btn ripple btn-secondary btn-lg"style="background-color: #ff7f45;border-color: #ff7f45">Go Back to Home</button>
               </a>
             </h5>
             
           <?php }else{?>
            <h5 class="tx-20 mb-3  text-dark">
            <a href="<?php echo base_url()?>">
              <button class="btn ripple btn-secondary btn-lg " style="background-color: #ff7f45; border-color: #ff7f45">Go Back to Home</button>
            </a>
          <?php }?>
          
        </div>
      </div>
    </div>
  </div>

</div>
<!-- End Page -->

<!-- Jquery js-->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Perfect-scrollbar js -->
<script src="<?php echo base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!-- Select2 js-->
<script src="<?php echo base_url()?>assets/plugins/select2/js/select2.min.js"></script>

<!-- Custom js -->
<script src="<?php echo base_url()?>assets/js/custom.js"></script>

<!-- Switcher js -->
<script src="<?php echo base_url()?>assets/switcher/js/switcher.js"></script>

</body>
</html>