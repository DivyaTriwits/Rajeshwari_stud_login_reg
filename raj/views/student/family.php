<!-- Main Content-->
<div class="main-content pt-4 mt-5 mb-0">
	<div class="container fuild">

		<!-- Page Header -->
<!-- 	<div class="text-wrap">
			<div class="example">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-style1 mg-b-0">

						<li class="breadcrumb-item">
							<a href="<?php echo base_url()?>">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php echo base_url('student_profile')?>">Student Profile</a></li>
							<li class="breadcrumb-item active">Family Details</li>
						</ol>
					</nav>
				</div>
			</div> -->
		<!-- End Page Header -->
		<!-- Row -->
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="card-body">
						<div>
							<h6 class="main-content-label mb-1">Update Family Details</h6>
						</div>
						<form id="familyForm" method="POST" action="<?php echo base_url('update-family-details')?>">
							<div class="row">
								<!--<div class="col-md-6">-->
								<!--	<div class="form-group">-->
								<!--		<p class="mg-b-10">Father Name</p>-->
								<!--		<input type="text" class="form-control" name="father_fullname" value="<?php if($getFamilyDetails!=''){echo $getFamilyDetails->father_fullname;}?>"placeholder="">-->
								<!--	</div>-->
								<!--</div>-->
								<!--<div class="col-md-6">-->
								<!--	<div class="form-group">-->
								<!--		<p class="mg-b-10">Mother Name</p>-->
								<!--		<input type="text" class="form-control" name="mother_fullname" value="<?php if($getFamilyDetails!=''){echo $getFamilyDetails->mother_fullname;}?>" placeholder="" value="" >-->
								<!--	</div>-->
								<!--</div>-->
								<div class="col-md-4">
									<div class="form-group">
										<p class="mg-b-10">Religion <span class="tx-danger">*</span> </p>
										<select class="form-control select2" name="religion" required>
											<option selected="" disabled="">Select Religion
											</option>
											<option value="Muslim"<?php if($getFamilyDetails!='') echo ($getFamilyDetails->religion =='Muslim')? 'selected' :''; ?>>Muslim
											</option>
											<option value="Hindu"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->religion =='Hindu')? 'selected' :''; ?>>Hindu
											</option>
											<option value="Christian"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->religion =='Christian')? 'selected' :''; ?>>Christian
											</option>
											<option value="Jain"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->religion =='Jain')? 'selected' :''; ?>>Jain
											</option>
											<option value="Parsi"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->religion =='Parsi')? 'selected' :''; ?>>Parsi
											</option>
											<option value="Buddhist"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->religion =='Buddhist')? 'selected' :''; ?>>Buddhist
											</option>
											<option value="Sikh"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->religion =='Sikh')? 'selected' :''; ?>>Sikh
											</option>
										</select>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<p class="mg-b-10">Category <span class="tx-danger">*</span> </p>
										<select class="form-control select2" name="category" required>
											<!-- <option label="Choose one">
											</option> -->
											<option selected="" disabled="">Select Category
											</option>
											<option value="GM"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->category =='GM')? 'selected' :''; ?>>GM
											</option>
											<option value="2A"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->category =='2A')? 'selected' :''; ?>>2A
											</option>
											<option value="2B"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->category =='2B')? 'selected' :''; ?>>2B
											</option>
											<option value="3A"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->category =='3A')? 'selected' :''; ?>>3A
											</option>
											<option value="3B"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->category =='3B')? 'selected' :''; ?>>3B
											</option>
											
											
											<option value="OBC BC OC"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->category =='OBC BC OC')? 'selected' :''; ?>>OBC BC OC
											</option>
												<option value="CAT-1"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->category =='CAT-1')? 'selected' :''; ?>>CAT-1
											</option>
											<option value="SC"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->category =='SC')? 'selected' :''; ?>>SC
											</option>
											<option value="ST"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->category =='ST')? 'selected' :''; ?>>ST
											</option>
											<option value="UR"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->category =='UR')? 'selected' :''; ?>>UR
											</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<p class="mg-b-10">Family Income</p>
										<input type="text" class="form-control" name="family_annual_income" value="<?php if($getFamilyDetails!=''){echo $getFamilyDetails->family_annual_income;}?>"placeholder="">

									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<p class="mg-b-10">Number of Sibling </p>
										<input type="number" class="form-control" name="number_of_siblings"value="<?php if($getFamilyDetails!=''){echo $getFamilyDetails->number_of_siblings;}?>" placeholder="">

									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group ">
										<p class="mg-b-10">Parent Occupation</p>
										<select class="form-control select2-no-search" name="parent_occupation">
											<option selected="" disabled="">Select Occupation
											</option>

											<?php if($parent->num_rows()>0){foreach($parent->result() as $row){?>
												<option <?php if($getFamilyDetails!='') { echo ($getFamilyDetails->parent_occupation==$row->occupation_name)  ? "selected" : " ";} ?> value="<?php echo $row->occupation_name;?>">
													<?php  echo $row->occupation_name;?>
												</option>

											<?php } } ?>

										</select>

									</div>
								</div>


								<div class="col-md-4">
									<div class="form-group">
										<p class="mg-b-10">Is Orphans <span class="tx-danger">*</span> <i class="ion-help-circled" data-toggle="tooltip" title="A child who lost his/her parents"></i></p>
										<div class="row">
											
											<div class="col-lg-3">
												<label class="rdiobox"><input name="is_orphans"  type="radio" <?php if($getFamilyDetails!='' && $getFamilyDetails->is_orphans=="1") { echo "checked"; }?> value="1" ><span>Yes</span></label>
											</div>
											<div class="col-lg-3 mg-t-20 mg-lg-t-0">
												<label class="rdiobox"><input  name="is_orphans" type="radio"<?php if($getFamilyDetails!='' && $getFamilyDetails->is_orphans=="0") {echo "checked";}?> value="0"><span>No</span></label>
											</div>

										</div>
									</div>

								</div>

<!-- 								<div class="col-md-4">
									<div class="form-group">
										<p class="mg-b-10">Is Orphans&nbsp;<i class="ion-help-circled" data-toggle="tooltip" title="A child who lost his/her parents"></i></p>
										<div class="row">
											
											<div class="col-lg-3">
												<label class="rdiobox"><input name="is_orphans" id="is_yes" type="radio"<?php if($getFamilyDetails!=''&&$getFamilyDetails->is_orphans=="1") {echo "checked";}?>value="1" required ><span>Yes</span></label>
											</div>
											<div class="col-lg-3 mg-t-20 mg-lg-t-0">
												<label class="rdiobox"><input name="is_orphans" id="is_no" type="radio" <?php if($getFamilyDetails!=''&&$getFamilyDetails->is_orphans=="0") {echo "checked";}?>value="0"required ><span>No</span></label>
											</div>

										</div>
									</div>

								</div> -->
								<div class="col-md-4">
									<div class="form-group">
										<p class="mg-b-10">Is Single Parent&nbsp;<i class="ion-help-circled" data-toggle="tooltip" title="A child who have single parent"></i></p>
										<select class="form-control select2-no-search" name="is_single_parent" id="is_single_parent" disabled="">
											<option label="Choose one">Select
											</option>
											<option value="1"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->is_single_parent =='1')? 'selected' :''; ?>>Yes
											</option>
											<option label="0"<?php if($getFamilyDetails!='')echo ($getFamilyDetails->is_single_parent =='0')? 'selected' :''; ?>>No
											</option>
										</select>
									</div>
								</div>
								<!-- <input type='radio' name='radios' id='rdbDaily' value='Daily' />&nbsp;Daily
									<input type='radio' name='radios' id='rdbMisc' value='Misc' />&nbsp;Misc -->

								<!-- <select id='selectordropdown'>
									<option>Deity Name</option>
								</select>
							-->
						</div>
						<br>
						<a href="<?php echo base_url('scholarships')?>">
							<button style="background-color: #ff7f45; border-color: #ff7f45" type="Submit" class="btn ripple btn-primary float-right">Next</button>
						</a>
					
					</div>

				</div>

			</div>
			<!-- End Row -->
		</div>
	</div>
	<!-- End Main Content-->
	<?php if($this->session->flashdata('update-success')){?>		
		<Script>
			swal({
				title: 'Awesome!',
				text: 'Lets improve your Family Details!',
				type: 'success',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>

	<script>
		$(document).ready(function() {
			$('#familyForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
        // 	valid: 'glyphicon glyphicon-ok',
        // 	invalid: 'glyphicon glyphicon-remove',
        // 	validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        	religion: {
        			validators: {
        			notEmpty: {
        				message: 'The religion is required'
        			},
        		}
        	},
        
        	category: {
        		validators: {
        			notEmpty: {
        				message: 'The category is required'
        			},
        		}
        	},
        		is_orphans: {
        			validators: {
        			notEmpty: {
        				message: 'The Orphans is required'
        			},
 				}
        	}
        }
        }).on('success.form.bv', function(e) {
        	$(this)[0].submit();
        });
    });
</script>


<script type="text/javascript">
	$('input:radio[name="is_orphans"]').change(function() {
		if ($(this).val()=='1') {
			$('#is_single_parent').attr('disabled', true);
		} 
		else if ($(this).val()=='0') {
			$('#is_single_parent').attr('disabled', false);
		}
	});
</script>

<!-- <script type="text/javascript">
	$('input:radio[name="is_orphans"]').change(function() {
		if ($(this).val()=='0') {
			$('#is_single_parent').attr('disabled', true);
		} 
		else if ($(this).val()=='1') {
			$('#is_single_parent').attr('disabled', false);
		}
	});
</script> -->