<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--========= Basic Page Needs =========-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--======== Page Title===========-->
    <title>The Global Scholarship</title>
    <!--========== Favicons =========-->
    <link rel="shortcut icon" sizes="70x70" href="<?php echo base_url();?>assets/sc logo.png">
    <!--======== Font icon Css ============-->
    <!--<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/themify-icons.css" rel="stylesheet">
    <!--======= Bootstrap Main Css =============-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!--====== Plugins Css ================-->
    <link href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet">
    <!--====== Custom CSS for themes =======-->
    <link href="<?php echo base_url();?>assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/build/css/intlTelInput.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/tags.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/tables.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/amabassador.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/floating-button.css" rel="stylesheet" />
    <!--[if lt IE 8]>
    <![endif]-->
    <!-- jQuery Latest Version -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
    <script type = "text/javascript" 
    src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
</script>

<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
  })


</script>

<style>
    .popover-header {
        background-color: #ff7f45 !important;
        color: #000 !important;
    }
    .popover-div{
        cursor: pointer;
    }
    .popover-div:hover{
        color: #ff7f45;
    }
    
    #register-button{
animation: shopifyshake 4s;
animation-iteration-count: infinite;}
.text {display: block;font-size: 2em;width: 100%;-webkit-animation-duration: 1s;animation-duration: 0.5s;}
.fadeInDown.text {-webkit-animation-duration: 1.6s;animation-duration: 0.8s;}


@keyframes shopifyshake {
0% { transform: translate(1px, 1px) rotate(0deg); }
1% { transform: translate(-1px, -2px) rotate(-1deg); }
2% { transform: translate(-3px, 0px) rotate(1deg); }
3% { transform: translate(3px, 2px) rotate(0deg); }
4% { transform: translate(1px, -1px) rotate(1deg); }
5% { transform: translate(-1px, 2px) rotate(-1deg); }
6% { transform: translate(-3px, 1px) rotate(0deg); }
7% { transform: translate(0px, 0px) rotate(0deg); }
8% { transform: translate(0px, 0px) rotate(0deg); }
80% { transform: translate(0px, 0px) rotate(0deg); }
90% { transform: translate(0px, 0px) rotate(0deg); }
100% { transform: translate(0px, 0px) rotate(0deg); }
}


</style>
</head>
<body>
    <?php if(!$this->uri->segment(1) == 'student-register'){?>
        <a href="#" class="float" id="menu-share">
            <i class="fa fa-paper-plane my-float"></i>
        </a>
        <ul class="ulStart">
            <li class="liStart">
                <a href="<?php echo base_url();?>student-register#registration">
                    <i class="fa fa-user-plus my-float" data-toggle="tooltip" data-placement="top" title="Student Registration"></i>
                </a>
            </li>
        </ul>
    <?php }?>
    <style>
        .socio:hover{
            color: #ffffff !important;
        }
    </style>

    <!--====Header Area ====================================-->
    <!--  <div class="focus" style="background: #ff7f45;height:6px"></div> -->
<!--    <div class="socio" align="right" style="background: #ff7f45;color:black; padding-right:24px; height: 30px;">-->
<!--     <marquee>-->
<!--      <i class="fa fa-graduation-cap fa-2x"> </i>-->
<!--      <b style="color: black;">1800 + Scholarships</b>&nbsp;&nbsp;&nbsp;-->
<!--      <i class="fa fa-rupee fa-2x"> </i>           -->
<!--      <b style="color: black;"><?php echo number_format($worthOfScholarships->worth); ?> Scholarship worth</b>&nbsp;&nbsp;&nbsp;-->
<!--      <i class="fa fa-bell fa-2x"> </i>           -->
<!--      <b style="color: black;"><?php echo number_format($notificationCount);?> + Notifications sent</b>-->
<!--  </marquee>-->
<!--</div>-->

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
    <div   class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
        <a align="center" href="<?php echo base_url('tgs-get-alerts');?>">
            <img src="<?php echo base_url();?>assets/sc logo.png" alt="logo" style="max-width:180px">
        </a>
    </div><!--/.logo-menu-wrap-->
</div><!--/.col-lg-12-->
<?php if($this->session->has_userdata('campaign_user_id')){?>
  <div align="right" class="col-xl-12 text-right">
    <div align="right"  class="col-xl-12 text-right">
        <a href="<?php echo base_url('campaign-logout');?>"><strong>Logout <i class="fa fa-sign-out"></i></strong>
        </a>
    </div>
</div>
<?php }?>
<hr>
<header id="site-header" class="header-area">
    <div id="sticky-header"><div class="focus" style="background: #ff7f45;height:6px"></div>
    <div class="socio" align="right" style="background: #ff7f45;color:#ffffff; padding-right:24px; height: 27px;"><a href="https://instagram.com/the_global_scholarship" target="_blank">Follow us on Instagram <i class="target fa fa-hand-o-right" aria-hidden="true"></i> <i class="fa fa-instagram" style="color:#ffffff" aria-hidden="true"></i></a> for updates</div></div><!--/#sticky-header-->
    <!--Mobile Menu-->
    <div class="mobile-menu">
        <a class="mobile-logo" href="<?php echo base_url();?>">
            <img src="<?php echo base_url();?>assets/sc logo.png" alt="logo" style="max-width:80px">
        </a>
    </div>
    </header><!--/.header-area-->