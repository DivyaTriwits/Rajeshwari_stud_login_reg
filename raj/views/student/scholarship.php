

<!-- Main Content-->
	<div class="main-content pt-2 mt-2 mb-2">
	<div class="container">
    
		<!-- Page Header -->
	<!-- 	<div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">


						<li class="breadcrumb-item">
							<a href="<?php echo base_url()?>">Home</a></li>
							<li class="breadcrumb-item active">Scholarships</li>
						</ol>
					</nav>
				</div>
			</div> -->
			<!-- End Page Header -->



			<!-- Row -->
         <div>
             	<div class="col-md-12 col-xl-4" style="
    width: 358px;
    margin-left: -14px;
">
											<div class="form-group">
											
												<select class="form-control " name="category" id="category">
													<option selected="" disabled="">Select Category
													</option>
                                                       <option value="Scholarship" <?php echo ('Scholarship' == $this->input->get('category')) ? "Selected" : "" ?>>
                                                           Scholarship
                                                       </option>
                                                       <option value="Abroad" <?php echo ('Abroad' == $this->input->get('category')) ? "Selected" : "" ?>>
                                                           Abroad
                                                       </option>
                                                       <option value="Competitions And Awards" <?php echo ('Competitions And Awards' == $this->input->get('category')) ? "Selected" : "" ?>>
                                                           Competitions And Awards
                                                       </option>
                                                       <option value="Internship" <?php echo ('Internship' == $this->input->get('category')) ? "Selected" : "" ?>>
                                                           Internship
                                                       </option>
												</select>

											</div>
										</div>
         </div>
			<div class="row">

               
				<?php foreach($scholarship as $sc){?>
				<div class="col-md-12 col-xl-4" style="margin-bottom:-15px !important">
				    	<div class="item"  >
                           <?php if($value->h_tags !=''){
                        $newname =str_replace(' ', '-', strtolower($sc->h_tags));
                        }else{
                        $newname =str_replace(' ', '-', strtolower($sc->scholarship_name));
                        }
                                                  ?>
												    	<a href="https://www.theglobalscholarship.org/page/<?php echo $sc->scholarship_id?>/<?php echo $newname?>">
				    <div class="card" style="height:120px !important">
				       		<div class="row" style="padding-top:20px;padding-left:12px">
															<div class="col-3">
														<div style="background-color: #41044D; border-radius: 5px ; padding:12px;color:#F2B625; height:78px !important; width:75px !important" align="center">
																	<h6><?php $str= $sc->application_end_date;
																	$newdata = date("d", strtotime($str));
																	echo $newdata; 

																?></h6>
																<h6><?php $str= $sc->application_end_date;
																$month =date("F", strtotime($str));
																$result = substr($month, 0, 3);
																echo $result;
															?></h6>
															<p style="font-size:10px;padding-bottom:2px">Last Date</p>
														</div>
													</div>
													<div class="col-9">
													     <div style="padding-top:10px !important">
														<h6 class="addReadMore showlesscontent">
															<?php echo $sc->scholarship_name;?>
														</h6>
														</div>
														
													</div>
												</div>
				    </div>
				    </a>
				    </div>
						<!--<div class="card">-->
						<!--	<div class="card-header custom-card-header border-bottom-0 ">-->
						<!--			<h5 class="main-content-label tx-dark my-auto tx-medium mb-0"><?php echo $sc->scholarship_name?>-->
									
						<!--			</h5>-->
								
						<!--	</div>-->
							
							
						<!--	<div class="card-body">-->
						


						<!--		<h6 class="">Start Date : -->
									
						<!--			<?php if($sc->application_start_date!='' && $sc->application_start_date!="0000-00-00" ){?>-->

						<!--			<?php echo  date("d-m-Y ", strtotime($sc->application_start_date)); ?>-->
						<!--			<?php } else { echo $sc->application_start_date;  }?>-->


						<!--			</h6>-->
						<!--		<h6 class="">End Date : -->

						<!--				<?php if($sc->application_end_date!='' && $sc->application_end_date!="0000-00-00" ){?>-->

						<!--			<?php echo  date("d-m-Y ", strtotime($sc->application_end_date)); ?>-->
						<!--			<?php } else { echo $sc->application_end_date;  }?>-->




						<!--			</h6>-->
                                
						<!--		<h6 class="addReadMore showlesscontent">Benefits : <?php if($sc!=''){echo number_format($sc->scholarship_worth,2);}?></h6>-->
						<!--	</div>-->
						<!--	<div class="card-footer">-->
						<!--		<a href="https://www.theglobalscholarship.org/scholarships-details/<?php echo $sc->scholarship_id?>" class="btn btn-primary ripple btn-block" style="background-color: #ff7f45; border-color: #ff7f45">View</a>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
				<?php }?>
			
				
			</div>
			<!-- <div class="row"> -->

			<p><?php echo $links; ?></p>
		<!-- </div> -->
			<!--<a href="<?php echo base_url('student-home')?>">-->
			<!--	<button type="button" class="btn ripple btn-dark float-left" style="margin-right: 5px;background-color:#460056;border-color:#460056">Back</button>-->
			<!--</a>-->


			<!-- End Row -->
		       <!--<div class="row">-->
            	
			<!--</div>-->
				<!--		<div class="modal" id="modaldemo1"aria-hidden="true" data-keyboard="false" data-backdrop="static">-->
				<!--<div class="modal-dialog" role="document">-->
				<!--	<form action="<?php echo base_url('scholarship-applied')?>" method="Post">-->
				<!--		<div class="modal-content modal-content-demo">-->
						
				<!--				<div class="modal-body">-->

				<!--					<h6>We Have Noticed That You Had Visited The Following Scholarship Links To Apply.Have You Applied?</h6>-->
				<!--					<ul style="list-style-type: none;">-->
				<!--						<?php $i=1;foreach ($getLinkVisitStatusList as $eachList) {?>-->

				<!--							<li><label for="name">-->
				<!--								<strong><?php echo $i;?> .</strong>&nbsp;-->
				<!--								<?php echo $eachList->scholarship_name?>-->


				<!--								<strong><span style="padding-left: 20px"><input name="name[]" id="name" class="update_std" type="checkbox" -->
				<!--									value="<?php echo $eachList->scholarship_id?>"/>-->
				<!--								Yes</span></strong></label>-->
				<!--							</li>-->
				<!--							<?php $i++;}?>-->
				<!--						</ul>-->
				<!--					</div>-->
				<!--					<div class="modal-footer justify-content-center">-->
				<!--						<button class="btn ripple btn-primary" type="submit">Submit</button>-->
									
				<!--						<button class="btn ripple btn-outline-light" data-dismiss="modal" type="button">Close</button>-->
				<!--					</div>-->

				<!--				</div>-->
				<!--			</form>-->
				<!--		</div>-->
				<!--	</div>-->
		</div>
	</div>
	
	<!-- End Main Content-->
<?php if($this->session->flashdata('applied')){?>		
		<Script>
			swal({
				title: 'Well done!',
				text: 'You are successfully applied for this scholarship!',
				type: 'success',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>
<?php if($this->session->flashdata('receieved')){?>		
		<Script>
			swal({
				title: 'Well done!',
				text: 'Congratulations for for your scholarship reward!',
				type: 'success',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>
	
	<script type="text/javascript">
				$(window).on('load', function() {
					<?php if(!empty($getLinkVisitStatusList)){
						?>
						$('#modaldemo1').modal('show');
					<?php }?>
				});
			</script>
			
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
    </style>
    	<script>

function AddReadMore() {
    //This limit you can set after how much characters you want to show Read More.
    var carLmt = 40;
    // Text to show when text is collapsed
    var readMoreTxt = "";
    // Text to show when text is expanded
    var readLessTxt = "";


    //Traverse all selectors with this class and manupulate HTML part to show Read More
    $(".addReadMore").each(function() {
        if ($(this).find(".firstSec").length)
            return;

        var allstr = $(this).text();
        if (allstr.length > carLmt) {
            var firstSet = allstr.substring(0, carLmt);
            var secdHalf = allstr.substring(carLmt, allstr.length);
            var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
            $(this).html(strtoadd);
        }

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
<script type="text/javascript">
      $(document).ready(function(){
      $('#category').on('change',function(){
          var filter = $(this).val();    
          var url = "<?php echo base_url('scholarships-lists'); ?>?category="+filter;
          document.location=url;
       
      });

      
  });
  </script>
