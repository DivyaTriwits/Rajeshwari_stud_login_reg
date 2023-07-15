<!--=======Page Heading =================================-->
    

<style>
    /* (A) SAME DIMENSIONS FOR OUTER CONTAINER & SLIDES */
.vwrap, .vslide {
  box-sizing: border-box;
  width: 100%;
  height: 70px;
}
 
/* (B) OUTER CONTAINER */
.vwrap {
    
  /*background: #ebfbff;*/
  /*border: 2px solid #a69bff;*/
  overflow: hidden; /* HIDE SCROLLBARS */
}
 
/* (C) MIDDLE CONTAINER */
.vmove {
  position: relative;
  bottom: 0%;
}
 
/* (D) SLIDES */
.vslide { padding: 10px; }

/* (E) SLIDE ANIMATION */
@keyframes slidev {
  /* (E0) THE IDEA - USE KEYFRAMES TO SHIFT SLIDES *
  0% { bottom: 0; }
  33% { bottom: 100%; }
  66% { bottom: 200%; }
  100% { right: 0; }
 
  /* (E1) BUT THE ABOVE WILL SHIFT NON-STOP */
  /* SO WE ADD PAUSES BETWEEN EACH SLIDE */
  0% { bottom: 0; }
  30% { bottom: 0; }
  33% { bottom: 100%; }
  63% { bottom: 100%; }
  66% { bottom: 200%; }
  97% { bottom: 200%; }
  100% { right: 0; }
}
.vmove { animation: slidev linear 10s infinite; }
.vmove:hover { animation-play-state: paused; }
</style>


<div class="register-page page-wrapper " style="padding: 10px 0;">
   <div class="container" style="padding-bottom:290px ">
    
          <div class = "row justify-content-center">
                <div class="vwrap col-sm-12 col-md-6">
                    <div class="vmove">
                  <div class="vslide">
                    <h6  style="text-align: center; font-weight:800;">Serving students from 450+ colleges.</h6>
                  </div>
                  <div class="vslide">
                    <h6  style="text-align: center; font-weight:800;">150K+ SMS alerts sent in last 6 months.</h6>
                  </div>
                  <div class="vslide">
                    <h6 style="text-align: center; font-weight:800;"  >An average of 100K worth scholarship alerts to each student/year.</h6>
                  </div>
                </div>
                </div>
          </div>
      <div class="row justify-content-center">
          
      
       
        
        <div class="col-sm-12 col-md-6" id="registration">
            <div class="login-form-area register-form-area">
               <h5>Congratulations You have been successfully registered!!</h5>
               <h6>We have sent an email with a confirmation link to your email address. In order to complete the sign-up process, please click the confirmation link by logging in to your email.</h6>
                 
            </div>
           
         </div>
       
        
         
         
           
        
         
         
         <!--/.col-lg-4-->
      </div>
      <!--/.row-->
   </div>
   <!--/.container-->
</div>




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
</style>