    <style>
    @media (max-width : 480px){
        .mobile-ad{
         display:block !important;  
         width:auto;
         /*height:150px;*/
        }
        #telebutton{
    display:block !important;
}
#mobileButton{
   display:block !important; 
}
#deskButton{
    display:none !important;
}
.description{
    max-width: 347px; word-wrap: break-word;
}

    }
    #telebutton{
    display:none;
}
        .product-new {
    background: #fff;
        border-radius: 50%;
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    height: 42px;
    right: 10px;
    line-height: 42px;
    position: absolute;
    text-align: center;
    text-shadow: 1px 2px 1px rgb(0 0 0 / 14%);
    top: 10px;
    width: 42px;
    z-index: 5;
}
.product-sale-off {
    background: red;
    border-radius: 0 12px 0;
    top: 0;
    color: #fff;
    font-size: 12px;
    font-weight: 500;
    height: 25px;
    line-height: 20px;
    position: absolute;
    right: 0;
    text-align: center;
    text-shadow: 1px 2px 1px rgb(0 0 0 / 14%);
    width: 100px;
    z-index: 5;
}
#deskButton{
    display:block !important;
}
#mobileButton{
   display:none !important; 
}

h5{
    color:#000000;
}
.newregisterbutton{
   background: #41044D;
   border-color: #41044D;
   color:#F2B625;
}
        .wrapper {
  margin: 50px auto;
  width: 280px;
  height: 370px;
  background: white;
  border-radius: 10px;
  -webkit-box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
  -moz-box-shadow:    0px 0px 8px rgba(0,0,0,0.3);
  box-shadow:         0px 0px 8px rgba(0,0,0,0.3);
  position: relative;
  z-index: 90;
}

.ribbon-wrapper-red {
  width: 85px;
  height: 88px;
  overflow: hidden;
  position: absolute;
  top: -3px;
  right: -3px;
}
.ribbon-wrapper-green {
  width: 85px;
  height: 88px;
  overflow: hidden;
  position: absolute;
  top: -3px;
  left: -3px;
}

.ribbon-red {
    font: bold 15px Sans-Serif;
    color: #fff;
    text-align: center;
    text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    position: relative;
    padding: 4px 0;
    left: -5px;
    top: 15px;
    width: 120px;
    background-color: #ea181e;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ea181e), to(#b90005));
    background-image: -webkit-linear-gradient(top, #ea181e, #b90005);
    background-image: -moz-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -ms-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -o-linear-gradient(top, #BFDC7A, #8EBF45);
    color: #fff;
    -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    -moz-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
}

.ribbon-green {
    font: bold 15px Sans-Serif;
    color: #fff;
    text-align: center;
    text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    position: relative;
    padding: 4px 0;
    left: -29px;
    top: 1px;
    border: 1px solid;
    width: 120px;
    background-color: #FF8C00;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #FF8C00), to(#FF8C00));
    background-image: -webkit-linear-gradient(top,  #FF8C00, # #FF8C00);
    background-image: -moz-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -ms-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -o-linear-gradient(top, #BFDC7A, #8EBF45);
    color: #fff;
    -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    -moz-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
}

.ribbon-red:before,
.ribbon-red:after{
  content: "";
  border-top: 3px solid #b90005;   
  border-left: 3px solid transparent;
  border-right: 3px solid transparent;
  position:absolute;
  bottom: -3px;
}

.ribbon-green:after,
.ribbon-green:after{
  content: "";
  border-top: 3px solid #6e8900;   
  border-left: 3px solid transparent;
  border-right: 3px solid transparent;
  position:absolute;
  bottom: -3px;
}

.ribbon-red:before{
  left: 0;
}
.ribbon-green:before{
  right: 0;
}

.ribbon-red:after{
  right: 0;
}
.ribbon-green:after{
  left: 0;
}
    </style>
    <div style="background-color:#F2B625 !important">
    <div style="padding:52px 10px 0px 0px;">
      <?php if($details->h_tags!=''){?>
      <h1 align="center"><?php echo $details->h_tags;?></h1>
      <?php }else{?>
    <h1 align="center"><?php echo $details->scholarship_name;?></h1>
      <?php }?>
      <title><?php echo $details->title_tag;?></title>
      <meta name="description" content=<?php echo $details->title_description;?>>
    </div>
<div class="Addbox text-center" style="height: 150px; margin: 10px 0px;">
   <!-- Screen 3 - Ad 2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8408941960924322"
     data-ad-slot="1930489805"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!--<ins class="adsbygoogle"-->
<!--     style="display:block"-->
<!--     data-ad-client="ca-pub-8408941960924322"-->
<!--     data-ad-slot="2291895570"-->
<!--     data-ad-format="auto"-->
<!--     data-full-width-responsive="true"></ins>-->
<!--<script>-->
<!--     (adsbygoogle = window.adsbygoogle || []).push({});-->
<!--</script>-->
</div>

<section id="courses-section" class="popular-courses-area" style=" display: flex;">
    <?php $mainname="Scholarship";?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xl-6 col-md-12 col-12 col-sm-12">
                <div class="card" style="margin-bottom:10px;border-color: #41044D;border-width:2px">
                    <?php $Date = $details->scholarship_added_date;
                    $newDate = date("Y-m-d", strtotime($Date));  
                    $now = time(); // or your date as well
                     $your_date = strtotime($newDate);
                    $datediff = $now - $your_date;
                    $days= round($datediff / (60 * 60 * 24));
                    $otodaydate=date('Y-m-d');
                     $t=$details->application_end_date;
                    $exp= date("Y-m-d", strtotime($t));
                    $esort=strtotime($exp);
                    $expdiff =  $esort-$now;
                   // $exprydate=round($expdiff / (60 * 60 * 24));
                       $odate1 = new DateTime($t);
                     $odate2 = $odate1->diff(new DateTime($otodaydate));
                    
                     $exprydate= $odate2->days;
        //time difference in seconds for coundown timer
       
                    ?>
                  
                    <div class="card-header custom-card-header border-bottom-0 " >
                                    <?php if($days <= 4){?>
  <div class="ribbon-wrapper-green">
      
    <div class="ribbon-green" >New</div>
  
  </div> <?php }?>
                        <h5 class="main-content-label tx-dark tx-medium mb-0 font"  style="letter-spacing: 0; text-transform:capitalize;"><?php echo $mainname; ?> Details</h5>
                    </div>
                    <div class="card-body">

                        <div class="media">
                            <div class="media-icon bg-primary-transparent text-primary" > <i class="fa fa-graduation-cap"></i> </div>
                            <div class="media-body">
                                <span class="tx-dark" style="color: black;padding-left: 10px"><?php echo $mainname; ?> Name</span>
                                <div style="padding-left: 10px;color:#ff7f45"><!-- <?php if($getScholarship!=''){echo $getScholarship->scholarship_name;}?> -->
                                    <?php echo $details->scholarship_name;?>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-handshake-o" ></i> </div>
                            <div class="media-body">
                                <strong> <span style="color: black; padding-left: 10px"><?php echo $mainname; ?> Provider</span></strong> 
                                <div style="padding-left: 10px;color:#ff7f45"> <!-- <?php if($getScholarship!=''){echo $getScholarship->scholarship_provider;}?> -->
                                    <?php echo $details->scholarship_provider;?>
                                </div>      
                            </div>
                        </div>
                            <?php if($details->scholarship_worth != 0.00 ){?>
                        <div class="media">
                            <div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-rupee" ></i> </div>
                            <div class="media-body">
                                <strong> <span style="color: black; padding-left: 10px"><?php echo $mainname; ?> Rewards</span></strong> 
                                <div style="padding-left: 10px;color:#ff7f45"><!-- <?php if($getScholarship!=''){echo $getScholarship->benefits;}?> -->
                                    <!--<?php echo $details->scholarship_worth;?>-->
                                
                                        <?php $amount = $details->scholarship_worth+0;
                                 $new=(int)$details->scholarship_worth;
                               $newworthamout=$this->New_model->moneyFormatIndia($new);
                                   // echo number_format($amount);
                                   echo $newworthamout;
                                   ?>
                                </div>
                            </div>
                        </div>
                            <?php }else if($details->benefits != ''){ ?>
                      <div class="media">
                            <div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-rupee" ></i> </div>
                            <div class="media-body">
                                <strong> <span style="color: black; padding-left: 10px"><?php echo $mainname; ?> Rewards</span></strong> 
                                <div style="padding-left: 10px;color:#ff7f45"><!-- <?php if($getScholarship!=''){echo $getScholarship->benefits;}?> -->
                                    <!--<?php echo $details->scholarship_worth;?>-->
                                
                                        <?php $amount = $details->benefits;
                              
                                   echo $amount;
                                   ?>
                                </div>
                            </div>
                        </div>
                         <?php }?>
                        <?php if($details->family_annual_income != 0.00){?>
                        <div class="media">
                            <div class="media-icon bg-success-transparent text-primary"> <i class="fa fa-rupee" ></i> </div>
                            <div class="media-body">
                                <strong> <span style="color: black; padding-left: 10px">Family Income</span></strong> 
                                <div style="padding-left: 10px;color:#ff7f45"> 
                                    
                                    
                                        <?php $amount = $details->family_annual_income+0;
                               $new=(int)$details->family_annual_income;
                               $newamout=$this->New_model->moneyFormatIndia($new);
                                    //echo number_format($amount);
                                    echo $newamout;
                                    ?>
                                </div>      
                            </div>
                        </div>
                        <?php }?>
                        <?php if($t >= date('Y-m-d')){?>
                        <?php if($exprydate<=4 && $exprydate>=0){?>
                        <?php if($exprydate == 1){?>
                        <span class="product-sale-off timer" ><?php echo $exprydate?> day to expire</span>
                        <?php }else if($exprydate == 0){?>
                            <span class="product-sale-off timer" >Expire's today</span>
                            <?php }else{?>
                                <span class="product-sale-off timer"><?php echo $exprydate?> days to expire</span>
                            <?php }?>
                        <?php }?>
                        <?php }?>
                    </div>
                </div>
            </div>
          
          <!--    ---------------telegram link  28/06/2023 by varun-----------------------    -->
          <center>
            <div class="container" id="telebutton">
              <div class="col-lg-6 col-xl-12 col-md-12 col-12 col-sm-12" style="margin-bottom:10px;">
                <a href="https://t.me/theglobalscholarship">
                  <button style="background-color:#2AABEE;color:#fff;border-radius:12px;padding:10px 10px 10px 10px">
                    <i class="fa fa-telegram" style="font-size:32px;padding:2px 6px 2px 6px"></i>
                    <span style="font-size:18px;margin:10px !important ">Join Telegram Channel</span>
                  </button>
                </a>
              </div>
          </div>
              </center>
            <!--    ---------------telegram link  28/06/2023 by varun-----------------------    -->

          
          
<!--  For hiding the Importanf dates in the expired scholar imfprmation page 03 June  By Varun -->
           <?php if( $t < date('Y-m-d')){?>
            <div class="col-lg-12 col-xl-6 col-md-12 col-12 col-sm-12">
            <div class="card" style="margin-bottom:10px;border-color: #41044D;border-width:2px;">
                    <div class="card-header custom-card-header border-bottom-0 ">
                        <h5 class="main-content-label tx-dark tx-medium mb-0 font">Education</h5>
                    </div>
                    <div class="card-body" style="padding-top:8px !important">

                        <div class="media">
                            <!--<div class="media-icon bg-primary-transparent text-primary"> <i class="ion-calendar" ></i> </div>-->
                            <div class="media-body"> 
                            <!--<strong> <span style="color: black; padding-left: 10px">Start Date</span></strong> -->
                                <div class="addReadMore showlesscontent" style="padding-left: 10px;color:#ff7f45;" >
                            
                               <?php 
                               if($details->current_class_or_degree == 'null' || empty($details->current_class_or_degree)){
                                 $couses=   $details->courses;
                               }else{
                                  
                                    $couses=   $details->current_class_or_degree;
                               }
                               
                                $course = json_decode($couses);
                               foreach($course as $course){?>
                                                   <!--<a class="" ><?php echo $course ; ?>,</a>  -->
                                                   
                                                    <?php }?>
                                                          <a class="" ><?php
                                                          $str=$details->display_courses;
                                    $res = str_replace( array( '\'', '"', ';', '<', '>' ), ' ', $str);echo $res ; ?></a>
                                                  
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                </div>
                
                <?php }else{?>
                    <div class="col-lg-12 col-xl-6 col-md-12 col-12 col-sm-12">
                <div class="card" style="margin-bottom:10px;border-color: #41044D;border-width:2px">
                    <div class="card-header custom-card-header border-bottom-0 ">
                        <h5 class="main-content-label tx-dark tx-medium mb-0 font">Important Dates</h5>
                    </div>
                    <div class="card-body">
                       <div class="row">
                           <div class="col-lg-6">
                        <div class="media">
                            <div class="media-icon bg-primary-transparent text-primary"> <i class="ion-calendar" style="color:green"></i> </div>
                            <div class="media-body"> <strong> <span style="color: black; padding-left: 10px">Start Date</span></strong> 
                                <div style="padding-left: 10px;color:#ff7f45">
                                    <!-- <?php if( $getScholarship!='' && ($getScholarship->application_start_date!='' && $getScholarship->application_start_date!="0000-00-00" )){?>
                                        <?php echo  date("d-m-Y", strtotime($getScholarship->application_start_date)); ?>
                                    <?php } else { if($getScholarship!='') { echo $getScholarship->application_start_date; } }?> 
                                
                                        <?php $str= $details->application_start_date;
                            echo date("d-m-Y", strtotime($str)); ?>-->
                            <?php $str= $details->application_start_date;
                                        $month =date("F", strtotime($str));
                            $result = substr($month, 0, 3);
                            echo date("d", strtotime($str)).' '.$result.' '.date("Y", strtotime($str)) ; ?>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="media">
                            <div class="media-icon bg-success-transparent text-danger"> <i class="ion-calendar" ></i> </div>
                            <div class="media-body"> 
                                <strong> <span style="color: black; padding-left: 10px">End Date</span></strong> 
                                <div style="padding-left: 10px;color:#ff7f45"> 
                                    <!-- <?php if( $getScholarship!='' && ($getScholarship->application_end_date!='' && $getScholarship->application_end_date!="0000-00-00" )){?>
                                        <?php echo  date("d-m-Y", strtotime($getScholarship->application_end_date)); ?>
                                    <?php } else { if($getScholarship!=''){ echo $getScholarship->application_end_date;  }}?> 
                                
                                        <?php $str= $details->application_end_date;
                                        echo date("d-m-Y", strtotime($str)); ?>-->
                                        
                                            <?php $str= $details->application_end_date;
                                        $month =date("F", strtotime($str));
                            $result = substr($month, 0, 3);
                            echo date("d", strtotime($str)).' '.$result.' '.date("Y", strtotime($str)) ; ?>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="margin-bottom:10px;border-color: #41044D;border-width:2px; ">
                    <div class="card-header custom-card-header border-bottom-0 ">
                        <h5 class="main-content-label tx-dark tx-medium mb-0 font">Education</h5>
                    </div>
                    <div class="card-body" style="padding-top:8px !important">

                        <div class="media">
                            <!--<div class="media-icon bg-primary-transparent text-primary"> <i class="ion-calendar" ></i> </div>-->
                            <div class="media-body"> 
                            <!--<strong> <span style="color: black; padding-left: 10px">Start Date</span></strong> -->
                                <div class="addReadMore showlesscontent" style="padding-left: 10px;color:#ff7f45;" >
                            
                               <?php 
                               if($details->current_class_or_degree == 'null' || empty($details->current_class_or_degree)){
                                 $couses=   $details->courses;
                               }else{
                                  
                                    $couses=   $details->current_class_or_degree;
                               }
                               
                                $course = json_decode($couses);
                               foreach($course as $course){?>
                                                   <!--<a class="" ><?php echo $course ; ?>,</a>  -->
                                                   
                                                    <?php }?>
                                                          <a class="" ><?php
                                                          $str=$details->display_courses;
                                    $res = str_replace( array( '\'', '"', ';', '<', '>' ), ' ', $str);echo $res ; ?></a>
                                                  
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                                
                <?php }?>
<!-- End  For hiding the Importanf dates in the expired scholar imfprmation page 03 June  By Varun -->
                <div class="Addbox text-center mobile-ad" style="height: 150px; margin: 10px 0px; display:none" >
   <!-- Screen 3 - Ad 2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-ef+6k-30-ac+ty"
     data-ad-client="ca-pub-8408941960924322"
     data-ad-slot="6101225875"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<!-- Comented regarding the hiding of important dates in the experied view 03 June By Varun -->
                <!-- <div class="card" style="margin-bottom:10px;border-color: #41044D;border-width:2px; ">
                    <div class="card-header custom-card-header border-bottom-0 ">
                        <h5 class="main-content-label tx-dark tx-medium mb-0 font">Education</h5>
                    </div>
                    <div class="card-body" style="padding-top:8px !important">

                        <div class="media">
                            <div class="media-icon bg-primary-transparent text-primary"> <i class="ion-calendar" ></i> </div>
                            <div class="media-body"> 
                            <strong> <span style="color: black; padding-left: 10px">Start Date</span></strong> 
                                <div class="addReadMore showlesscontent" style="padding-left: 10px;color:#ff7f45;" >
                            
                               <?php 
                               if($details->current_class_or_degree == 'null' || empty($details->current_class_or_degree)){
                                 $couses=   $details->courses;
                               }else{
                                  
                                    $couses=   $details->current_class_or_degree;
                               }
                               
                                $course = json_decode($couses);
                               foreach($course as $course){?>
                                                   <a class="" ><?php echo $course ; ?>,</a>  
                                                   
                                                    <?php }?>
                                                          <a class="" ><?php
                                                          $str=$details->display_courses;
                                    $res = str_replace( array( '\'', '"', ';', '<', '>' ), ' ', $str);echo $res ; ?></a>
                                                  
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>-->
            </div>
        </div>      
    </div>
</section>
      
 <!-- Display the Youtube video on Product page by Varun 14 June -->        
   <center>
     <div class="watchLink"><Strong>Watch Complete Application Process </Strong></div>
    <div style="border: 3px solid white;  width: 360px; height: 205px; border-radius: 15px; ">
    <?php
// Original string
$originalString = "$details->vedio_link";

// Replace "/watch?v=" with "/embed/"
$modifiedString = str_replace("https://youtu.be/","https://www.youtube.com/embed/",$originalString);



?>
    
      
    <?php if($details->vedio_link==NULL){?>
        <iframe style="border-radius: 15px;" width="350" height="200" src="https://www.youtube.com/embed/PzgSgXqurvo?autoplay=1" frameborder="0"  allow="autoplay" allowfullscreen="1"
        sandbox="allow-forms allow-same-origin allow-scripts">
      </iframe>
      <?php }else{?>
      <iframe style="border-radius: 15px;" width="350" height="200" src="<?php echo $modifiedString ?>" frameborder="0" allowfullscreen></iframe>
      <?php }?>

</div>

</center>
<!-- Display the Youtube video on Product page by Varun 14 June -->   
      
 <br><br>
<!--<div class="container" id="telebutton">
<div class="col-lg-6 col-xl-12 col-md-12 col-12 col-sm-12" style="margin-bottom:10px;">
<a href="https://t.me/theglobalscholarship"><button style="background-color:#2AABEE;color:#fff;border-radius:12px;padding:10px 10px 10px 10px">
<i class="fa fa-telegram" style="font-size:32px;padding:2px 8px 2px 10px"></i><span style="font-size:20px;margin:15px !important ">Join Telegram Channel
</span>
</button>
</a></div>
</div> -->  
<div class="Addbox text-center" style="height: 150px; margin: 10px 0px;">

<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8408941960924322"
     data-ad-slot="1753619774"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<section id="courses-section" class="popular-courses-area " style="display: flex; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-12 col-md-12 col-12 col-sm-12">
                <div class="" style="margin-bottom:10px;margin-left: -25px !important">
                    <div class="card-header  border-bottom-0 ">
                    </div>
                    <div class="card-body"> 
                        <ul class="unorderd description" >
                        <div class="content-toggle" style="color: black;">
    <?php echo $scholarshipDescription; ?>
</div>

<!-- Include the CSS and JavaScript code for the toggle functionality -->
<style>
    .toggle-btn {
        cursor: pointer;
    }
    .toggle-content {
        display: none;

    }

    .toggle-content {
        display: none;
        margin-left: 20px;
        color: black; /* Set the text color to black */
    }

</style>

<script>
   document.addEventListener('DOMContentLoaded', function() {
    var toggleButtons = document.getElementsByClassName('toggle-btn');

    for (var i = 0; i < toggleButtons.length; i++) {
        toggleButtons[i].addEventListener('click', function() {
            var content = this.nextElementSibling;
            var icon = this.innerHTML.trim();

            if (content.style.display === 'none') {
                content.style.display = 'block';
                this.innerHTML = icon.replace('+', '-');
            } else {
                content.style.display = 'none';
                this.innerHTML = icon.replace('-', '+');
            }
        });
    }
});
</script>


                            </ul>           
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-12 col-md-12 col-12 col-sm-12 text-center">
                <!-- Screen 3 - Ad 3 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8408941960924322"
             data-ad-slot="1491506109"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        </div>
        <?php if($details->documents != ''){?>
            <div class="col-lg-12 col-xl-12 col-md-12 col-12 col-sm-12">
                <div class="" style="margin-bottom:0px;margin-left: -25px !important">
                    <div class="card-header border-bottom-0 ">
                       <h6 class="main-content-label tx-dark tx-medium mb-0 font" onclick="toggleDescription('description2')" style="cursor: pointer;border-radius: 10px;background-color:white; border: 2px solid  #4b0082; padding: 10px;margin: 10px 0;">
  Attachments
  <span id="description2-toggleIcon" class="toggle-icon plus"></span>
</h6>
</div>
<div class="toggle-description" id="description2" style="display: none;border-radius: 10px;background-color:white; border: 2px solid #4b0082; padding: 10px;margin: 10px 0;margin-bottom:0px;margin-left: 25px !important;margin-right:25px !important ;">
  <div class="card-body">
    <ul class="unorderd" >
      <?php echo $details->documents ?>
    </ul>
  </div>
</div>
                </div>
            </div>  
            <?php }?>
            <div class="col-lg-12 col-xl-12 col-md-12 col-12 col-sm-12">
                <div class="" style="margin-bottom:0px;margin-left: -25px !important">
                    <div class="card-header border-bottom-0 ">
                        <h6 class="main-content-label tx-dark tx-medium mb-0 font" onclick="toggleDescription('description1')" style="cursor: pointer;border-radius: 10px;background-color:white; border: 2px solid #4b0082; padding: 10px;margin: 10px 0;"> How To Apply
                        <span id="description1-toggleIcon" class="toggle-icon plus"></span>
                        </h6>
                    </div>
                    <div class="toggle-description" id="description1" style="display: none;border-radius: 10px;background-color:white; border: 2px solid #4b0082; padding: 10px;margin: 10px 0;margin-bottom:0px;margin-left: 25px !important;margin-right:25px !important ;">
                    <div class="card-body"> 
                    <?php if($details->how_apply != ''){?>
                    <!--<li><?php echo $details->how_apply;?></li>-->
                    <ul class="unorderd">
                            <?php echo $details->how_apply?>
                    </ul>
                    <?php } else {?>
                    <h6>Steps to be followed:</h6>
                        <li>1. Login your Account https://www.theglobalscholarship.org/student-login</li>
                        <li> 2. Go to Notified Scholarships tab</li>
                    <li>3. For Detailed apply process visit: https://www.youtube.com/c/TheGlobalScholarshiporg</li>
                    <?php }?>
                        <!-- <ul class="unorderd">
                            <li>The Scheme "Begum Hazrat Mahal National Scholarship" for Girl Students belonging to the Minority Communities was earlier known as "Maulana Azad National Scholarship" Scheme. It was started by the Foundation in the academic year 2003-04. The main purpose of the scheme is to provide financial assistance to meritorious girl students belonging to national minorities, who cannot continue their education due to lack of financial support. Please go through the attachment Criteria:</li>
                            
                                <li>Only girl students belonging to six notified Minority Communities i.e. Muslims, Christians, Sikhs, Buddhists, Jains, and Parsis are eligible.</li>
                                <li>Scholarship will be awarded to minorities’ girl students who are studying in Class 9th to 12th, and have secured at least 50% marks or equivalent grade in aggregate in the previous class/qualifying exam.</li>
                                <li>Annual income of the student’s parent/guardian from all sources does not exceed Rs.2.00 lakh.</li>
                                <li>Annual income of the student’s parent/guardian from all sources does not exceed Rs.2.00 lakh.</li>
                                <li>Candidates can contact the Help Desk for resolution of the technical problems on
                                    <ul>
                                    <li>011-23583788/89</li>
                                    <li>scholarship-maef@nic.in</li>
                                    <li>scholarshipmaef@gmail.com</li>
                                    </ul>

                                </li>
                            </ul>    --> 
                            </div>                   
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="addbox">
    <div class="add" style="background-color: #ff7f45; height: 470px; width: 300px; background-image: url('assets/images/add/ads-logo.png');  background-size: 100% 100%;">
        <!-- Screen 3 - Ad 4 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8408941960924322"
     data-ad-slot="4261139671"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    </div>
</section>

<!--<section id="courses-section" class="popular-courses-area ">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 col-xl-12 col-md-12 col-12 col-sm-12">-->
<!--                <div class="card" style="margin-bottom:10px">-->
<!--                    <div class="card-header custom-card-header border-bottom-0 ">-->
<!--                        <h5 class="main-content-label tx-dark tx-medium mb-0 font">How To Apply</h5>-->
<!--                    </div>-->
<!--                    <div class="card-body"> -->
                        <!-- <ul class="unorderd">
<!--                            <li>The Scheme "Begum Hazrat Mahal National Scholarship" for Girl Students belonging to the Minority Communities was earlier known as "Maulana Azad National Scholarship" Scheme. It was started by the Foundation in the academic year 2003-04. The main purpose of the scheme is to provide financial assistance to meritorious girl students belonging to national minorities, who cannot continue their education due to lack of financial support. Please go through the attachment Criteria:</li>-->
                            
<!--                                <li>Only girl students belonging to six notified Minority Communities i.e. Muslims, Christians, Sikhs, Buddhists, Jains, and Parsis are eligible.</li>-->
<!--                                <li>Scholarship will be awarded to minorities’ girl students who are studying in Class 9th to 12th, and have secured at least 50% marks or equivalent grade in aggregate in the previous class/qualifying exam.</li>-->
<!--                                <li>Annual income of the student’s parent/guardian from all sources does not exceed Rs.2.00 lakh.</li>-->
<!--                                <li>Annual income of the student’s parent/guardian from all sources does not exceed Rs.2.00 lakh.</li>-->
<!--                                <li>Candidates can contact the Help Desk for resolution of the technical problems on-->
<!--                                    <ul>-->
<!--                                    <li>011-23583788/89</li>-->
<!--                                    <li>scholarship-maef@nic.in</li>-->
<!--                                    <li>scholarshipmaef@gmail.com</li>-->
<!--                                    </ul>-->

<!--                                </li>-->
<!--                            </ul>    -->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>  -->
<!--</section>-->


    <div class="Addbox text-center">
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-f5+6e+9-cx+lz"
     data-ad-client="ca-pub-8408941960924322"
     data-ad-slot="1825977203"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    
    

    <section id="courses-section" class="popular-courses-area ">
    <div class="displayButton" >
        <?php $sid=$details->scholarship_link;
        $url = urlencode($sid);
        //print_r($url);exit;
        ?>
         <?php if($this->session->userdata('student_username')){ 
                        ?>
    <a target=_blank class="btn newregisterbutton"  href="<?php echo $sid?>" style="text-transform: capitalize;">
    Click Here To Apply
    </a>
     <?php }else{?>  
     <!--test code 9th June 2023--> 
      <?php $referrer_value = current_url().($_SERVER['QUERY_STRING']!=""?"?".$_SERVER['QUERY_STRING']:"");
            $this->session->set_userdata('login_referrer', $referrer_value);
  ?>
          
      <!--test code 9th June 2023--> 
      
    <a target='_blank'  class="btn newregisterbutton"  href="<?php echo base_url();?>student-login?sid=<?php echo $sid?>" style="text-transform: capitalize;">
    Login & Apply
    </a>
      <?php }?>
     <!-- <?php if($details->vedio_link==NULL){?>
        <div class="watchLink"><Strong>Watch Complete process </Strong><a class="youtubelink" target="_blank" href="https://www.youtube.com/channel/UC_kmviAHHhyZYESlhRPoKuw" style="color: blue;text-decoration: underline;">here.!</a>
        </div>
      <?php }else{?>
      <div class="watchLink"><Strong>Watch Complete process </Strong><a class="youtubelink" target="_blank" href="<?php echo $details->vedio_link?>" style="color: blue;text-decoration: underline;">here.!</a>
        </div>
      <?php }?> -->
        <!--<div style="padding-left:10px" >
            <?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
           <a target="_blank" href="whatsapp://send?text= <?php echo $details->scholarship_name;?> Scholarship , See More: <?php echo $actual_link;  ?>" data-action="share/whatsapp/share"  class="link-whatsapp"><button style="background-color:green;padding:4px;color:#fff;border-radius:10px"><i class="fa fa-whatsapp" aria-hidden="true" style="padding-right:6px"></i>Share via WhatsApp</button></a>
        </div>-->

        <!--<div style="padding-left:10px" id="deskButton">-->
        <!--    <?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>-->
        <!--   <button onclick="window.open('https://web.whatsapp.com://send?text=<?php echo $details->scholarship_name;?> Scholarship , See More: <?php echo $actual_link;  ?>')" style="background-color:green;padding:4px;color:#fff;border-radius:10px"><i class="fa fa-whatsapp" aria-hidden="true" style="padding-right:6px"></i>Share via WhatsApp</button> -->
        <!--</div>-->
    </div>
    <section>
        <div class="Addbox text-center" style="margin: 10px 0px;">
<!--<ins class="adsbygoogle"-->
<!--     style="display:block"-->
<!--     data-ad-format="autorelaxed"-->
<!--     data-ad-client="ca-pub-8408941960924322"-->
<!--     data-ad-slot="5577314716"-->
<!--     data-matched-content-rows-num="2"-->
<!--     data-matched-content-columns-num="2"-->
<!--     data-matched-content-ui-type="image_stacked"></ins>-->
<!--<script>-->
<!--     (adsbygoogle = window.adsbygoogle || []).push({});-->
<!--</script>-->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8408941960924322"
     data-ad-slot="2291895570"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    </section>
</section>

    </div>
    <style>
        @media (min-width: 1200px) {
            .container {
                max-width: 1400px;
            }
            .container{
        
            }
        </style>
        <style>
            .unorderd li{
                color: black;
                list-style-type: initial;
                margin-bottom: 5px;
                color:#000000 !important;
            }
            .unorderd{
                    color:#000000 !important;
            }
        </style>
            <style>
    .addReadMore.showlesscontent .SecSec,
    .addReadMore.showlesscontent .readLess {
        display: none;
    }

    .addReadMore.showmorecontent .readMore {
        display: none;
    }

    .addReadMore .readMore,
    .addReadMore .readLess {
        font-weight: bold;
        margin-left: 2px;
        font-size:12px;
        color: #337ab7;
        cursor: pointer;
    }

    .addReadMoreWrapTxt.showmorecontent .SecSec,
    .addReadMoreWrapTxt.showmorecontent .readLess {
        display: block;
    }
    .SecSec{
        font-size:15px;
    }
    .educationarray{
        font-size:13px !important;
    }
    .show-more {
  display: none;
  cursor: pointer;
  color:#337ab7;
  font-size:12px;
}
    </style>
    <style>
  .toggle-icon {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin-left: 5px;
    color: black;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
  }

  .toggle-icon.plus:before {
    content: "+";
  }

  .toggle-icon.minus:before {
    content: "-";
  }
</style>

                        <script>

function AddReadMore() {
    if ($('.educationarray').length > 3) {
  $('.educationarray:gt(2)').hide();
  $('.show-more').show();
   var readMoreTxt = " ... Know More";
    // Text to show when text is expanded
    var readLessTxt = " Know Less";
}
   
}
$('.show-more').on('click', function() {
  //toggle elements with class .ty-compact-list that their index is bigger than 2
  $('.educationarray:gt(2)').toggle();
  //change text of show more element just for demonstration purposes to this demo
  $(this).text() === 'Show more' ? $(this).text('Show less') : $(this).text('Show more');
});
$(function() {
    //Calling function after Page Load
    AddReadMore();
});

</script>
  <!-- <script>
  function toggleDescription(id) {
    var description = document.getElementById(id);
    var toggleIcon = document.getElementById(id + "-toggleIcon");

    if (description.style.display === "block") {
      description.style.display = "none";
      toggleIcon.classList.remove("minus");
      toggleIcon.classList.add("plus");
    } else {
      description.style.display = "block";
      toggleIcon.classList.remove("plus");
      toggleIcon.classList.add("minus");
    }
  }
</script> -->
<script>
function toggleDescription(id) {
  var description = document.getElementById(id);
  var toggleIcon = document.getElementById(id + "-toggleIcon");
  var toggleDescriptions = document.getElementsByClassName("toggle-description");
  var toggleIcons = document.getElementsByClassName("toggle-icon");

  for (var i = 0; i < toggleDescriptions.length; i++) {
    if (toggleDescriptions[i].id !== id) {
      toggleDescriptions[i].style.display = "none";
      toggleIcons[i].classList.remove("minus");
      toggleIcons[i].classList.add("plus");
    }
  }

  if (description.style.display === "block") {
    description.style.display = "none";
    toggleIcon.classList.remove("minus");
    toggleIcon.classList.add("plus");
  } else {
    description.style.display = "block";
    toggleIcon.classList.remove("plus");
    toggleIcon.classList.add("minus");
  }
}
</script>
