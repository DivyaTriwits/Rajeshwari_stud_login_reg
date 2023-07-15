    <!-- Start footer area -->
    <footer id="footer" class="site-footer">
     

    <!-- Start footer copyright area -->
    <div class="footer-copyright-area bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright text-center">
              &copy;  <?php echo date("Y");?> Copyrights by TheGlobalScholarship.org
            </div>
          </div>
        </div><!--/.row-->
      </div><!--/.container-->
    </div><!--End footer copyright area -->
  </footer><!--End footer area -->


  <!--=========== JS FILE DECLARATION  ==============-->
  <!-- jQuery Latest Version -->
  <!--<script src="<?php echo base_url();?>website_assets/js/jquery-v3.2.1.min.js"></script>-->


  <!-- PopperJS -->
  <script src="<?php echo base_url();?>website_assets/js/popper.min.js"></script>
  <!-- Bootstrap framework JS -->
  <script src="<?php echo base_url();?>website_assets/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
  <!-- All JS plugins included in this file. -->
  <script src="<?php echo base_url();?>website_assets/js/plugins.js"></script>
  <!-- Main JS file that contents all jQuery Plugins activation. -->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
   <script src="<?php echo base_url();?>dashboard_assets/assets/dist/js/custom.min.js"></script>
  <?php if($this->session->flashdata('proceed')){?>
    <script>
      $('#exampleModalCenter').modal('show');
    </script>
  <?php }?>
  <?php if(isset($_GET['payment']) && $_GET['payment'] == 'success'){?>
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">The Global Scholarship</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p style="text-align: center;"><strong>Your registration has been done successfully.</strong></p><br>
            Share On Facebook : 

            <div class="fb-share-button" data-href="https://www.theglobalscholarship.org/student-register" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.theglobalscholarship.org%2Fstudent-register&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div> 



          </div>
          <div class="modal-footer">
            <a href="<?php echo base_url('student-login')?>" class="btn btn-success">Click Here To Login</a>
            <button type="button" id="regconfirmclosebtn" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
    <script>
      $(document).ready(function(){
        $("#myModal").modal();
      });
      $('#regconfirmclosebtn').click( function(){
       location.replace('<?php echo base_url();?>'); 
     });
   </script>
   <!--end modal-->
 <?php } ?>

 <?php if($this->uri->segment(1) == 'student-register'){?>
   <div style="top:130px !important" class="modal fade" id="opportunity" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">WAIT!!!!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><strong>You need to read this.. We Have</strong></p>
          <ul align="center">
              <li><strong>1000+ </strong><i class="fa fa-graduation-cap"></i>Scholarships till date</li>
              <li> Sent <strong><i class="fa fa-rupee"></i>26,01,070</strong> worth Scholarships in <?php echo date('Y');?></li>
              <li> Sent <strong>20,000+ </strong> <i class="fa fa-bell"></i>notifications in <?php echo date('Y');?></li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" id="opportunity" class="btn btn-default" data-dismiss="modal"><i class="fa fa-frown-o" aria-hidden="true"></i> Let go</button>
        </div>
      </div>
      
    </div>
  </div>
<?php }?>


<?php if(isset($_GET['payment']) && $_GET['payment'] == 'cancelled'){?>
  <div class="modal fade" id="myModalCancelled" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">The Global Scholarship</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><strong>Registration has been cancelled...</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" id="regcancelclosebtn" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <script>
    $(document).ready(function(){
      $("#myModalCancelled").modal();
    });
    $('#regcancelclosebtn').click( function(){
     location.replace('<?php echo base_url();?>'); 
   });
 </script>
 <!--end modal-->
<?php } ?>



<?php if(isset($_GET['payment']) && $_GET['payment'] == 'successforindividual'){?>
  <div class="modal fade" id="myModalforIndividual" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">The Global Scholarship</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><strong>Your payment has been done successfully. Your Scholarship will be added soon to website.</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" id="regconfirmclosebtnforindividual" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <script>
    $(document).ready(function(){
      $("#myModalforIndividual").modal();
    });
    $('#regconfirmclosebtnforindividual').click( function(){
     location.replace('<?php echo base_url();?>'); 
   });
 </script>
 <!--end modal-->
<?php } ?>

<?php if(isset($_GET['payment']) && $_GET['payment'] == 'failed'){?>
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">The Global Scholarship</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><strong>Something went wrong, Please try again.</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" id="regconfirmclosebtnfail" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <script>
    $(document).ready(function(){
      $("#myModal2").modal();
    });
    $('#regconfirmclosebtnfail').click( function(){
     location.replace('<?php echo base_url();?>'); 
   });
 </script>
 <!--end modal-->
<?php } ?>

<?php if(isset($_GET['payment']) && $_GET['payment'] == 'failedforindividual'){?>
  <div class="modal fade" id="myModal2forindividual" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">The Global Scholarship</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="text-align: center;"><strong>Something went wrong, Please try again.</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" id="regconfirmclosebtnfailforindividual" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <script>
    $(document).ready(function(){
      $("#myModal2forindividual").modal();
    });
    $('#regconfirmclosebtnfailforindividual').click( function(){
     location.replace('<?php echo base_url();?>'); 
   });
 </script>
 <!--end modal-->
<?php } ?>

<script type="text/javascript">
  $(document).ready(function(){
    $('#exampleModalCenterforPayment').modal();
    $('#redirectToContributor').modal();
    $('#redirectToInstitute').modal();
    $('#redirectToIndividual').modal();
    $('#reset_password').modal();
  });
</script>
<script src="<?php echo base_url();?>website_assets/build/js/intlTelInput-jquery.js"></script>
<script src="<?php echo base_url();?>website_assets/build/js/utils.js"></script>

<style>
  .hide{
    display:none;
  }
</style>
<script>
  $(document).ready(function(){
    $("#mobile-number").intlTelInput();
    var input = document.querySelector("#mobile-number"),
    errorMsg = document.querySelector("#error-msg"),
    validMsg = document.querySelector("#valid-msg");

    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
    var iti = $("#mobile-number").intlTelInput(input, {
      utilsScript: "<?php echo base_url();?>website_assets/build/js/utils.js"
    });
    var reset = function() {
      input.classList.remove("error");
      errorMsg.innerHTML = "";
      errorMsg.classList.add("hide");
      validMsg.classList.add("hide");
    };
    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);
    $("#mobile-number").keyup(function()
    {
      if($("#mobile-number").val() == ''){
        $("#mobile-number").removeAttr('maxlength');
        $("#mobile-number").css('border-color','red');
      }
      let str = $("#mobile-number").val();
      var input = document.querySelector("#mobile-number"),
      errorMsg = document.querySelector("#error-msg"),
      validMsg = document.querySelector("#valid-msg");
      input.addEventListener('keyup', function() {
        reset();
        if (input.value.trim()) {
          if ($("#mobile-number").intlTelInput("isValidNumber")) {
            var countryCode = $("#mobile-number").intlTelInput("getSelectedCountryData");
            let maxDig = $("#mobile-number").val();
            $("#mobile-number").removeAttr('placeholder');
            $("#mobile-number").attr('maxlength',maxDig.length);
            if($("#mobile-number").val() == ''){
              $("#mobile-number").removeAttr('maxlength');
            }
            $('#countryCode').val(countryCode.dialCode);
            $("#mobile-number").css('border-color','green');
            validMsg.classList.remove("hide");
          } else {
            $('#mobile-number').on('input', function (event) { 
              this.value = this.value.replace(/[^0-9]/g, '');
            });
            $("#mobile-number").removeAttr('placeholder');
            input.classList.add("error");
            var errorCode = $("#mobile-number").intlTelInput('getValidationError');
            $("#mobile-number").css('border-color','red !important');
            errorMsg.innerHTML = errorMap[errorCode];
            errorMsg.classList.remove("hide");
          }
        }
      });
    });

  });
</script>
<script>

$('#register-button').click(function(){
   var len = $('#mobile-number').val();
   
   if(len == ''){
       document.getElementById("mobile-number").focus();
   } 
});
  var regex = new RegExp("(.*?)\.(csv)$");
  function triggerValidation(el) {
    if (!(regex.test(el.value.toLowerCase()))) {
      el.value = '';
      $('#filetypeerror').show();
      $('#filetypeerror').css('opacity','1');
          // var alertBox = document.getElementsById("filetypeerror");
          // alertBox.style.display = alertBox.style.display === 'none' ? '' : 'none';
          // alert('Please select correct file format');
        }
      }
    </script>
    <script >
      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).hide();
        });
      }, 6000);
    </script>

    <style>
  /*.select2-container {
  width: 90% !important;
}

.select2-container .select-all {
    position: absolute;
    top: 6px;
    right: 4px;
    width: 20px;
    height: 20px;
    margin: auto;
    display: block;
    background-size: contain;
    cursor: pointer;
    z-index: 999999;
    }*/
  </style>
  <script>
   $(document).ready(function() {
     $('.js-example-basic-multiple').select2();
   });



// $('.js-example-basic-multiple').select2({
//   placeholder: 'Press CTRL+A for selecr or unselect all options'
// });

// $('.select2[multiple]').siblings('.select2-container').append('<span class="select-all"></span>');

// $(document).on('click', '.select-all', function (e) {
//   selectAllSelect2($(this).siblings('.selection').find('.select2-search__field'));
// });

// $(document).on("keyup", ".select2-search__field", function (e) {
//   var eventObj = window.event ? event : e;
//   if (eventObj.keyCode === 65 && eventObj.ctrlKey)
//      selectAllSelect2($(this));
// });


// function selectAllSelect2(that) {

//   var selectAll = true;
//   var existUnselected = false;
//   var id = that.parents("span[class*='select2-container']").siblings('select[multiple]').attr('id');
//   var item = $("#" + id);

//   item.find("option").each(function (k, v) {
//       if (!$(v).prop('selected')) {
//           existUnselected = true;
//           return false;
//       }
//   });

//   selectAll = existUnselected ? selectAll : !selectAll;

//   item.find("option").prop('selected', selectAll).trigger('change');
// }



$(document).ready(function () {
  sport();
  noSport();
  $("#sports").prop("disabled", true);
  $('#no-sport').hide();
  $("#sport").change(function () {
    sport();
  });
  $("#no-sport").change(function () {
    noSport();
  });

  function sport(){
    var thisvalue =  $('#sport').val();
        //   alert(thisvalue);
        if(thisvalue == 'on'){
          $("#sports").prop("disabled", false);
          $('#no-sport').show();
          $("#sport").hide();
          $('#no-sport').prop("checked", true);
        }
      }

      function noSport(){
        var thisvalue =  $('#sport').val();
        //   alert(thisvalue);
        if(thisvalue == 'on'){
          $("#sports").prop("disabled", true);
          $('#no-sport').hide();
          $("#sport").show();
          $('#sport').prop("checked", false);
        }
      }
    });
  </script>
  <script>
    $(document).ready(function () {
      talent();
      noTalent();
      $("#specialTalent").prop("disabled", true);
      $('#no-talent').hide();
      $("#talent").change(function () {
        talent();
      });
      $("#no-talent").change(function () {
        noTalent();
      });

      function talent(){
        var thisvalue =  $('#talent').val();
        //   alert(thisvalue);
        if(thisvalue == 'on'){
          $("#specialTalent").prop("disabled", false);
          $('#no-talent').show();
          $("#talent").hide();
          $('#no-talent').prop("checked", true);
        }
      }

      function noTalent(){
        var thisvalue =  $('#talent').val();
        //   alert(thisvalue);
        if(thisvalue == 'on'){
          $("#specialTalent").prop("disabled", true);
          $('#no-talent').hide();
          $("#talent").show();
          $('#talent').prop("checked", false);
        }
      }
    });



    $(document).ready(function(){
      $('.cat-2').hide();
      $('#scholarship_category').change(function(){
        var myDropVal = $('#scholarship_category').val();
        if(myDropVal == 'educational'){
          $('#Caste').prop('disabled',false);
          $('#Religion').prop('disabled',false);
          $('#stud_type').prop('disabled',false);
          $('.cat-2').hide();
        }else{
          $('#Caste').prop('disabled',true);
          $('#Religion').prop('disabled',true);
          $('#stud_type').prop('disabled',true);
          $('.cat-2').show();
        }
      });

    });
  </script>

  <style>
    .multiselect-container>li>a>label {
      padding: 4px 20px 3px 20px;
    }
  </style>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ed8817de8cea7d4"></script>-->
  <?php if($this->uri->segment(1) == 'student-register' ){?>
    <script language="JavaScript">
    // window.onbeforeunload = confirmExit;
    // function confirmExit() {
    //     return "You have attempted to leave this page. Are you sure?";
    // }
    $(document).ready(function(){
      var visit = false;
      var opened = false;
      $('.header-inner').hover(function(){
        visit = true;
      });
      $('.focus').hover(function(){
        // alert(counter);
        if(visit == true && opened == false){
          $("#opportunity").modal('show');
        }
      });

      $('#opportunity').on('shown.bs.modal', function (e) {
       opened=true;
     });
    });
  </script>
<?php }?>
</body>
</html>
