<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--========= Basic Page Needs =========-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta property="og:type"               content="The Global Scholarship" />
    <meta property="og:title"              content="Scholarships At Your Fingertips" />
     <meta property="og:description"        content="TGS - A smart scholarships alert engine which matches your profile with the scholarship's criteria and sends you alerts on mobile. " />
     <meta property="og:image"              content="<?php echo base_url()?>assets/img/brand/sc logo.png" />
    <!--======== Page Title===========-->
    <title>The Global Scholarship</title>
    <!--========== Favicons =========-->
    <link rel="shortcut icon" sizes="70x70" href="<?php echo base_url();?>website_assets/sc logo.png">
    <!--======== Font icon Css ============-->
    <!--<link href="<?php echo base_url();?>website_assets/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>website_assets/css/themify-icons.css" rel="stylesheet">
    <!--======= Bootstrap Main Css =============-->
    <link href="<?php echo base_url();?>website_assets/css/bootstrap.min.css" rel="stylesheet">
    <!--====== Plugins Css ================-->
    <link href="<?php echo base_url();?>website_assets/css/plugins.css" rel="stylesheet">
    <!--====== Custom CSS for themes =======-->
    <link href="<?php echo base_url();?>website_assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>website_assets/build/css/intlTelInput.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>website_assets/tags.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>website_assets/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>website_assets/css/tables.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>website_assets/css/amabassador.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>website_assets/css/floating-button.css" rel="stylesheet" />
    <!--[if lt IE 8]>
    <![endif]-->
    <!-- jQuery Latest Version -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/testimonial/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/testimonial/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/testimonial/css/plugins/aos.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/testimonial/css/plugins/selectric.css" />
    	<link href="<?php echo base_url()?>assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">
	
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.css"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>website_assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
    	<script src="<?php echo base_url()?>assets/plugins/sweet-alert/sweetalert.min.js"></script>
		<script src="<?php echo base_url()?>assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>
    <script>
        window.smartlook||(function(d) {
            var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
            var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
            c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', '6fbe985a968f9a076a6a942a91ee9df06341f130');
    </script>
    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
 <!--    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T1Y2L3C6VT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-T1Y2L3C6VT');
    </script>-->
  
  
  

</head>
<body>
    <?php if(!$this->uri->segment(1) == 'student-register'){?>
        <!--<a href="#" class="float" id="menu-share">-->
        <!--    <i class="fa fa-paper-plane my-float"></i>-->
        <!--</a>-->
        <!--<ul class="ulStart">-->
        <!--    <li class="liStart">-->
        <!--        <a href="<?php echo base_url();?>student-register#registration">-->
        <!--            <i class="fa fa-user-plus my-float" data-toggle="tooltip" data-placement="top" title="Student Registration"></i>-->
        <!--        </a>-->
        <!--    </li>-->
        <!--</ul>-->
        <!-- <a   target = "_blank" href="https://api.whatsapp.com/send/?phone=+918892278892" data-action="share/whatsapp/share">
                    <i class="fa fa-whatsapp my-float" data-toggle="tooltip" data-placement="top" title="" style="color: green"></i>
                </a> -->
        <ul class="ulStart">
           <!--  <li class="liStart">
                <a href="<?php echo base_url();?>student-register#registration">
                    <i class="fa fa-user-plus my-float" data-toggle="tooltip" data-placement="top" title="Student Registration"></i>
                </a>
            </li> -->
             <li class="liStart" >
              <a   target = "_blank" href="https://api.whatsapp.com/send/?phone=+919620030302&text=Hello The Global Scholarship Team, Please let me know more about your Scholarship Services as I am interested to enroll for your services. . . I Got Your Contact from your portal...." data-action="share/whatsapp/share"style="background-color: green">
                    <i class="fa fa-whatsapp my-float"></i>
                </a>
            </li>
        </ul>
    <?php }?>
                                        <style>
                                        .reg-button:hover {
  animation-name: shakeAnim;
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
<style type="text/css">
                          .registerbutton{
                              
                            display: inline-block;
                            background: #FF854E;
                            color: #fff;
                            /*background-color:#FF854E;*/
                            
                            text-transform: uppercase;
                            padding: 10px 15px;
                            border-radius: 20px;
                            border-color:#FF854E;
                            box-shadow: 0px 10px 5px -5px rgba(0,0,0,0.4);
                            cursor: pointer;
                            transition: all ease-in-out 300ms;
                          }
                        </style>
                        <style type="text/css">
                           .registerbutton:hover{
                            background:#ffffff;
                            box-shadow: 0px 37px 20px -20px rgba(0,0,0,0.2);
                            transform: translate(0px, -10px) scale(1.2);

                          }
                           @media only screen and (max-width: 600px) {
                              
                            .registerbutton:hover
                            {
                            
                             box-shadow: 0px 37px 20px -20px rgba(0,0,0,0.2);
                            transform: translate(0px, -10px) scale(1.0);
                            }
                           }
                          
                          
                        </style>
    <!--====Header Area ====================================-->
       <header id="site-header" class="header-area"style="margin-bottom:105px">
           
        <div class="header-inner"id="sticky">
            
   
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-menu-wrap hidden-xs hidden-sm">
                            <div class="logo">
                                <a href="https://www.theglobalscholarship.org/">
                                    <img src="<?php echo base_url();?>website_assets/sc logo.png" alt="logo" style="max-width:125px;margin-left:60px">
                                </a>
                            </div><!--/.logo-->
                           <!--<div><h3>GET SCHOLARSHIP ALERTS</h3></div>-->
                        </div><!--/.logo-menu-wrap-->
                    </div><!--/.col-lg-12-->
                </div><!--/.row-->
            </div><!--/.container-fluid-->
        </div><!--/.headier-inner-->
<style>
            #sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index:9999;
  background-color:#ffff;
  
}
        </style>
      
        <div class="mobile-menu" id="sticky">
          
            <div class="row" >
                <div class="col-lg-12" >
                <div class="mobile-logo">
                                <a href="https://www.theglobalscholarship.org/">
                                    <img src="<?php echo base_url();?>website_assets/sc logo.png" alt="logo" style="max-width:100px;margin-left:10px">
                                </a>
              </div>
               <div  style="padding:20px; padding-bottom:20px; margin-left:165px" align="center">
                      <!--<div><h5><b>GET SCHOLARSHIP <br> ALERTS</b></h5></div>-->
            
            </div>
            </div>
            </div>
            </div>
             </div>
        </div>
    </header><!--/.header-area-->
     <script>
        $(window).scroll(function() {
  if ($(this).scrollTop() > 0) {
    $('.socio').fadeOut();
  } else {
    $('.socio').fadeIn();
  }
});
    </script>