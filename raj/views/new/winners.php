<style>
.product-new {
    background: #fff;
        border-radius: 50%;
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    height: 42px;
    right: 0px;
    line-height: 42px;
    position: absolute;
    text-align: center;
    text-shadow: 1px 2px 1px rgb(0 0 0 / 14%);
    top:0px;
    width: 42px;
    z-index: 5;
}

.product-sale-off {
    background: red;
    border-radius: 10px 0 0;
    bottom: 62px;
    color: #fff;
    font-size: 12px;
    font-weight: 500;
    height: 25px;
    /*line-height: 20px;*/
    position: absolute;
    right: 0;
    text-align: center;
    text-shadow: 1px 2px 1px rgb(0 0 0 / 14%);
    width: 100px;
    z-index: 5;
}
h1{
    color:#41044D;
}
.btn-primary{
    background-color:#41044D;
    border-color:#41044D;
    color:#F2B625 !important
}
.Add {
    margin-top: 72px;
    background-color: #ff7f45;
    height: 260px;
    width: 300px;
    background-image: url(assets/images/add/ads-logo.png);
    background-size: 100% 100%;
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
  
element.style {
}
.page-item:first-child .page-link {
    border-radius: 6px 0 0 6px;
}
.page-item.active .page-link {
    color: #ffffff;
}
.page-item.active .page-link {
    z-index: 2;
    color: #fff;
    background-color: #41044D;
    border-color: #41044D;
}
  .pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 5px 5px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #41044D;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}

.box {
  background-color: white;
  width: 300px;
  height: 300px;
  display: flex;
  flex-direction: column;
  padding: 5px;
  margin: 20px 0;
  border-radius: 10px;
  border: 2px solid  #4b0082;
  box-shadow: 0 0 0px #000;
  transition: transform 0.3s ease;
  overflow: hidden;
}

  .box:hover {
    transform: scale(1.1);
    background-color: white;
    height: auto;
  }
.rating {
  color: gold; /* Change color to the desired star color */
  font-size: 30px; /* Adjust the size of the stars */
}

.star {
  transition: color 0.3s ease; /* Add transition effect for color change */
  cursor: pointer; /* Add pointer cursor on hover */
}

.star:hover {
  color: lightyellow; /* Change color on hover */
}

.profile {
  display: flex;
}

.bio {
  font-size: 0.6em;
  align-self: center;
  margin-left: 20px;
}

.bio h3 {
  font-weight: 100;
}

.qoute {
  font-size: 0.7em;
  line-height: 1.5;
  border-top: 1px solid #000;
  margin-top: 20px;
  padding: 10px 0;
}
 
</style>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8408941960924322"
crossorigin="anonymous"></script>
<div style="background-color:#F2B625 !important">
<section id="courses-section" class="popular-courses-area " >
  <div class="container" style="padding-top:38px !important">
    <div class="row justify-content-md-center">
      <div class="col-lg-12">
        <div class="text-center">
          <h1 class="text-capitalize section-heading" style="margin-bottom: 30px">Winners
                </h1>
        </div>
        <!--/.section-heading-area--> 
      </div>
      <!--/.col-lg-8-->
    </div>
      <div class=" text-center">
    <div class="Addbox text-center mobile-card" >
         <div>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8408941960924322"
     crossorigin="anonymous"></script>

<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-8408941960924322"
     data-ad-slot="4904725821"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
              
</div>
     <br>  
 </div>
      </div>
    <div class="row" >
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>BHASKAR SIDDHESH SANJAY</h5>
            <h5>INR 2,500/month</h5>
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;">Sitaram Jindal Scholarship winner</h6>
          <p style="font-size:15px; margin: 10px;">
            I would like to express my sincere gratitude to The Global Scholarship.org for their invaluable Assistance in helping me secure a scholarship. <br>

Their unwavering support & Guidance throughout the application process is instrumental in turning my dreams into reality. <br>
I am truly grateful for their commitment to promoting education & providing opportunities to Students around the world. <br>

Thanks to their efforts, I am now able to pursue my academic aspiration & unlock a future.

          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>KHANPARA GRECY</h5>
            <h5>INR 2 Lakhs</h5>
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;">Reliance foundation scholarship winner</h6>
          <p style="font-size:15px; margin: 10px;">
            
Hey I'm KHANPARA GRECY and I want to thank you because! I got reliance foundation scholarship and it's only because you The global scholarship
 I'm able to know about the scholarship and again thank you very much.<br>

Thanks you are the reason for my happiness!!!

          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>HAZARATBILAL KHALIFA</h5>
            <h5>INR 25,000</h5>
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;">Danish scholarship winner</h6>
          <p style="font-size:15px; margin: 10px;">
            I applied Danish trust scholarship through THE GLOBAL SCHOLARSHIP and then received it.
First I thought that this is fake and global scholarship site is also fake.. But when I received call from Danish trust I really believed it. <br>

I genuinely received funds from Danish trust... And it is only possible through THE GLOBAL SCHOLARSHIP.ORG portal. <br>

Thanks to the entire GLOBAL SCHOLARSHIP team.

          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>AALIYA BALABATTI</h5>
            
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;">NSDL Scholarship Winner</h6>
          <p style="font-size:15px; margin: 10px;">
            My name is AALIYA BALABATTI I’m from KARNATAKA. So The Global Scholarship was a Great opportunity I took, I was guided by my college to apply. <br>
And I got so many scholarships options and one can easily take and apply for it. So basically this scholarship not only provide just some amount to the students 
But they also have provide some great information related to individual interest and talent. <br>

 I personally was eligible for so many scholarships so it's a great opportunity for a student to apply and explore more it.

          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>Shiva Sai</h5>
            <h5>INR 2 Lakhs</h5>
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;">Reliance foundation scholarship winner</h6>
          <p style="font-size:15px; margin: 10px;">
            Dear Global Scholarship, <br>

I want to express my heartfelt gratitude for notifying me about the Reliance Foundation Scholarship. Your efforts in bringing this opportunity to my attention are deeply appreciated. <br>
The chance to apply for this prestigious scholarship has the potential to transform my educational journey and future prospects. Your support and recognition mean the world to me, <br>
and I am truly grateful for your dedication in assisting students like me.  <br>

Thank you for making a significant difference in my life.

          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>SAIKIRAN BAVGE</h5>
            <h5>INR 2 Lakhs</h5>
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;">Reliance Foundation scholarship</h6>
          <p style="font-size:15px; margin: 10px;">
            Thank you very much for the Application Process Videos that you have shared on YouTube and because of it, I have been able to apply Independently and got selected for “Reliance Undergraduate Scholarship Program” <br>
TheGlobalScholarship.org is a very good platform which creates awareness regarding education and scholarships for all categories of students. <br>
This platform has helped me to know about the Reliance Foundation Scholarship Exam in which I have been selected. <br> 

Thank you to whole team

          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>PramodPrajapat</h5>
            <h5></h5>
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;"></h6>
          <p style="font-size:15px; margin: 10px;">
            I am writing to express my sincere gratitude for the scholarship that I received from The Global Scholarship website. I saw the scholarship details on your website and I was immediately interested. I applied for the scholarship and I was thrilled to be select
          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>HARSH VARDHAN</h5>
            <h5>INR 30,000/month</h5>
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;">Fellowship winner</h6>
          <p style="font-size:15px; margin: 10px;">
            I have applied for this Fellowship and thanks for the global scholarship for sharing all kinds of fellowship to us.
          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>Sumitkumar</h5>
            <h5>INR 2 Lakhs</h5>
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;">Reliance Scholarship Winner</h6>
          <p style="font-size:15px; margin: 10px;">
           Hey , Myself Sumitkumar and I am a B-tech second year student and I grabbed the reliance foundation scholarship worth 2,00,000/. Thank you The Global Scholarship for the information.
          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>JAY THAKUR</h5>
            <h5>INR 2 Lakhs</h5>
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;"></h6>
          <p style="font-size:15px; margin: 10px;">
            Because of your support only I won this scholarship
          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>SHRIYAKADAM</h5>
            <h5>INR 2 Lakhs</h5>
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;">Reliance foundation scholarship winner</h6>
          <p style="font-size:15px; margin: 10px;">
            Great way of giving students opportunities to learn more! <br>
Not even financial issues can stop them due to you guys!

          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
         <div class="box" style="border-color: #41044D;border-width:2px">
        <div class="profile">
          <div class="bio" style="margin: 10px; margin-bottom: 0px;">
            <h5>SUMIT YADAV</h5>
            <h5>INR 2 Lakhs</h5>
          </div>
        </div>
        <div class="qoute">
          <h6 style=" margin: 10px;">Reliance Foundation scholarship winner</h6>
          <p style="font-size:15px; margin: 10px;">
           I am selected for Reliance Foundation Scholarship Thank you so much for giving information for scholarship.
          </p>
        </div>
      </div>  
      </div>
      <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12 mobile-ad" style=" padding-bottom:18px; ">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8408941960924322"
     crossorigin="anonymous"></script>

<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8408941960924322"
     data-ad-slot="4868051162"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
      </div>
    
    </div>
    <center>
    <a  class="btn btn-primary ripple btn-block" style="width: 120px;"><button class="load-more-btn" onclick="loadMore()">Load more</button></a>
    </center>

  </div>  
  <style>
  @media (max-width : 480px){
      .mobile-ad{
      
       display:block !important;  
       width:auto;
       /*height:150px;*/
      }
  }
      .mobile-ad{
          display:none;  
      }
  </style>

  <div  class="addbox" id="fadd" style="padding-top:38px !important">
    <div class="Add" style="height:300px !important;border-radius:14px !important;background-color: #ffff">
    
    </div>  
      <div class="Add" style="height:300px !important;border-radius:14px !important;margin-top: 26px;background-color: #ffff">
      <!-- screen 2 - Ad 2 responsive -->
      <ins class="adsbygoogle"
      style="display:block"
      data-ad-client="ca-pub-8408941960924322"
      data-ad-slot="4137016599"
      data-ad-format="auto"
      data-full-width-responsive="true"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!--<div class="states">    -->
      <!--</div>-->
  </div>

  
</section>

   <div class=" text-center">
    <div class="Addbox text-center mobile-card" >
         <div>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8408941960924322"
     crossorigin="anonymous"></script>

<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-8408941960924322"
     data-ad-slot="4904725821"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
              
</div>
     <br>  
 </div>

  
</div>
        <style>
                  
          @media (min-width: 1200px) {
            .container {
              max-width: 1400px;
            }
                      .mobilecate{
              display: none ;
            }
                  #padinations{
              display: none;
            }
          }
          .container{

            margin-left: 0;

          }
          .card-height{
             height:280px !important; 
          }
          .card-header{
              max-height:35px; 
              margin-bottom:30px
          }
           @media only screen and (max-width: 600px) {
             .card-height{
                height:auto !important;  
             }
            .addbox{
                display:none;
            } 
                        .desktopcate {
              display: none !important;
            }
            #padinations{
              display: block !important;
            }
            #deskview{
              display: none !important;
            }
            #mobileview{
              display: block !important;
            }
            .mobilecate{
              display: block !important;
            }
           }
           @media screen and (max-width: 650px) {
                        .card-height {
                        height:auto !important;  
             }
             .addbox{
                display:none;
            } 
                        .desktopcate {
              display: none !important;
            }
            #padinations{
              display: block !important;
            }
            #deskview{
              display: none !important;
            }
            #mobileview{
              display: block !important;
            }
            .mobilecate{
              display: block !important;
            }
                  }
                        @media (max-width: 400px) {
            #deskview{
              display: none !important;
            }
            #mobileview{
              display: block !important;
            }
            .desktopcate {
              display: none !important;
            }
            #padinations{
              display: block !important;
            }
            .mobilecate{
              display: block !important;
            }
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
    
    
      .addEducationReadMore.showEducationlesscontent .EducationSecSec,
    .addEducationReadMore.showEducationlesscontent .readEducationLess {
        display: none;
    }

    .addEducationReadMore.showEducationmorecontent .readEducationMore {
        display: none;
    }

    .addEducationReadMore .readEducationMore,
    .addEducationReadMore .readEducationLess {
        font-weight: bold;
        margin-left: 2px;
        font-size:12px;
        color: #337ab7;
        cursor: pointer;
    }

    .addEducationReadMoreWrapTxt.showEducationmorecontent .EducationSecSec,
    .addEducationReadMoreWrapTxt.showEducationmorecontent .readEducationLess {
        display: block;
    }
    .EducationSecSec{
        font-size:15px;
    }
    </style>
        <script>

function AddReadMore() {
    //This limit you can set after how much characters you want to show Read More.
    var carLmt = 72;
    // Text to show when text is collapsed
    var readMoreTxt = " ... Know More";
    // Text to show when text is expanded
    var readLessTxt = " Know Less";


    //Traverse all selectors with this class and manupulate HTML part to show Read More
    $(".addReadMore").each(function() {
        if ($(this).find(".firstSec").length)
            return;

        var allstr = $(this).text();
        // if (allstr.length > carLmt) {
        //     var firstSet = allstr.substring(0, carLmt);
        //     var secdHalf = allstr.substring(carLmt, allstr.length);
        //     var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
        //     $(this).html(strtoadd);
        // }

    });
    //Read More and Read Less Click Event binding
    $(document).on("click", ".readMore,.readLess", function() {
        $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
    });
}
$(function() {
    //Calling function after Page Load
    AddReadMore();
});

</script>
  
<script>

function AddEducationReadMore() {
    //This limit you can set after how much characters you want to show Read More.
    var carLmt = 30;
    // Text to show when text is collapsed
    var readEducationMoreTxt = " ... Know More";
    // Text to show when text is expanded
    var readEducationLessTxt = " Know Less";


    //Traverse all selectors with this class and manupulate HTML part to show Read More
    $(".addEducationReadMore").each(function() {
        if ($(this).find(".EducationfirstSec").length)
            return;

        var allEducationstr = $(this).text();
        // if (allEducationstr.length > carLmt) {
        //     var EducationfirstSet = allEducationstr.substring(0, carLmt);
        //     var EducationsecdHalf = allEducationstr.substring(carLmt, allEducationstr.length);
        //     var Educationstrtoadd = EducationfirstSet + "<span class='EducationSecSec'>" + EducationsecdHalf + "</span><span class='readEducationMore'  title='Click to Show More'>" + readEducationMoreTxt + "</span><span class='readEducationLess' title='Click to Show Less'>" + readEducationLessTxt + "</span>";
        //     $(this).html(strtoadd);
        // }

    });
    //Read More and Read Less Click Event binding
    $(document).on("click", ".readEducationMore,.readEducationLess", function() {
        $(this).closest(".addEducationReadMore").toggleClass("showEducationlesscontent showEducationmorecontent");
    });
}
$(function() {
    //Calling function after Page Load
    AddEducationReadMore();
});

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Create WhatsApp popup dynamically
        var whatsappPopup = $('<div class="whatsapp-popup">' +
            '<a href="https://api.whatsapp.com/send?phone=YOUR_PHONE_NUMBER" target="_blank">' +
            '<img src="whatsapp_logo.png" alt="WhatsApp" class="whatsapp-logo">' +
            '</a>' +
            '</div>');

        // Append WhatsApp popup to the body
        $('body').append(whatsappPopup);

        // Show the WhatsApp popup
        whatsappPopup.fadeIn();

        // Hide the WhatsApp popup after 10 seconds
        setTimeout(function() {
            whatsappPopup.fadeOut();
        }, 1000000);
    });
</script>
<script>
 var reviewsContainer = document.querySelector('.reviews');
var loadMoreBtn = document.getElementsByClassName('load-more-btn');
var cardsToShow = 9;
var cardsIncrement = 9;
var totalCards = document.querySelectorAll('.box').length;

function loadMore() {
  for (var i = cardsToShow; i < cardsToShow + cardsIncrement; i++) {
    if (i >= totalCards) {
      loadMoreBtn.style.display = 'none';
      break;
    }

    var card = document.querySelectorAll('.box')[i];
    card.style.display = 'flex';
  }

  cardsToShow += cardsIncrement;
}

function hideExtraCards() {
  var allCards = document.querySelectorAll('.box');
  for (var i = cardsToShow; i < allCards.length; i++) {
    allCards[i].style.display = 'none';
  }
}

window.onload = function() {
  hideExtraCards();
  if (totalCards > cardsToShow) {
    loadMoreBtn.style.display = 'block';
  }
};

loadMoreBtn.style.display = 'block';  // Ensure the button is initially visible
loadMoreBtn.addEventListener('click', loadMore);
</script>