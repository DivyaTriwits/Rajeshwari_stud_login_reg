
<!-- Main Content-->
    <div class="main-content pt-5 mt-5">
                <div class="container-fluid">

		<!-- Page Header -->
<!-- 	<div class="text-wrap">
            <div class="example">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-0">

                        
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url()?>">Home</a>
                            
                            <li class="breadcrumb-item active">Student Profile</li>
                        </ol>
                    </nav>
                </div>
            </div> -->
		<!-- End Page Header -->

		<div class="row square">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="card-body">


						<div class="profile-tab tab-menu-heading">
							<nav class="nav main-nav-line p-3 tabs-menu profile-nav-line bg-gray-100 rounded-11">
								<a class="nav-link  active" data-toggle="tab" href="#about">Personal Details</a>
								<a class="nav-link" data-toggle="tab" href="#edit">Academic Details</a>
								<a class="nav-link" data-toggle="tab" href="#timeline">Family Details</a>
								<a class="nav-link" data-toggle="tab" href="#gallery">Extracurricular</a>
								<a class="nav-link" data-toggle="tab" href="#friends">Bank And Address</a>
								<!-- <a class="nav-link" data-toggle="tab" href="#settings">Documents</a> -->
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php if($personal->num_rows() == 0){?>
        <div class="row">
            
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        
                        <div class="card">
                            <div class="card-body">
                        <h2>no student data found</h2>
                        </div>
                    </div>
                     </div>
        </div>
        <?php }else{$personal = $personal->row(); ?>
		<!-- Row -->
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="card main-content-body-profile">
					<div class="tab-content">
						<div class="main-content-body tab-pane p-4 border-top-0 active" id="about">
							<div class="card-body p-0 border p-0 rounded-11">
								
								<div class="card-body">
									<div class="row">

										<div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
											<br>
											<p class="text-muted"><?php echo $personal->student_fullname;?></p>
										</div>
										<div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
											<br>
											<p class="text-muted"> <?php echo $personal->student_mobile_no;?> </p>
										</div>
										<div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
											<br>
											<p class="text-muted"><?php echo $personal->student_email	;?></p>
										</div>
										<div class="col-md-3 col-xs-6"> <strong>Aadhaar no</strong>
											<br>
											<p class="text-muted"><?php echo $personal->adharno;?></p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3 col-xs-6 b-r"> <strong>Gender</strong>
											<br>
											<p class="text-muted"><?php echo $personal->student_gender;?></p>
										</div>
										<div class="col-md-3 col-xs-6 b-r"> <strong>Date of Birth</strong>
											<br>
											<p class="text-muted"><?php echo $personal->date_of_birth;?></p>
										</div>
										<div class="col-md-3 col-xs-6 b-r"> <strong>State</strong>
											<br>
											<p class="text-muted"><?php echo $bank->student_native_state;?></p>
										</div>
										<div class="col-md-3 col-xs-6"> <strong>District</strong>
											<br>
											<p class="text-muted"><?php echo $bank->student_native_district;?> </p>
										</div>
									</div>
									<div class="row">
                                          <!--   <div class="col-md-3 col-xs-6 b-r"> <strong>Is hosteller?</strong>
                                                <br>
                                                <p class="text-muted"><?php echo ($student_details->is_hosteller == 1) ? 'Yes' : 'No' ;?></p>
                                            </div> -->
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Is orphan? </strong>
                                            	<br>
                                            	<p class="text-muted"><?php echo ($personal->is_orphan == 1) ? 'Yes' : 'No';?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Is handicap?</strong>
                                            	<br>
                                            	<p class="text-muted"><?php echo ($personal->is_specially_abled == 1) ? 'Yes' : 'No';?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Are you single child?</strong>
                                            	<br>
                                            	<p class="text-muted"><?php echo ($personal->is_single_child == 1) ? 'Yes' : 'No';?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>Are you single girl child?</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo ($personal->is_single_girl_child == 1) ? 'Yes' : 'No';?></p>
                                        	</div>
                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>Specially Abled Type? </strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $personal->specially_abled_type?></p>
                                        	</div>
                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>Specially Abled Percentage?</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $personal->specially_abled_percentage	?></p>
                                        	</div>
                                        	<div class="col-md-3 col-xs-6"> <strong>Registration Date</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $student_details->registration_datetime;?></p>
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>Expire Date</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $student_details->registration_verified_datetime ?></p>
                                        	</div>
                                            <!-- <div class="col-md-3 col-xs-6 b-r"> <strong>Expire Status </strong>
                                                <br>
                                                <p class="text-muted"><?php echo ($student_details->registration_status == 1) ? 'Active' : 'Expired';?></p>
                                            </div> -->

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="main-content-body tab-pane p-4 border-top-0" id="edit">
                            	<div class="card-body border rounded-11">
                            		<div class="mb-4 main-content-label">Academic Details</div>
                            		<div class="card-body">
                            			<div class="row">

                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Current School Name</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $academic->student_current_school_name	;?> </p>
                            				</div>
                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Studying State</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $academic->student_studying_state	;?> </p>
                            				</div>
                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Studying District</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $academic->student_studying_district;?></p>
                            				</div>
                            				<div class="col-md-3 col-xs-6"> <strong>Stream</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $academic->qualification;?></p>
                            				</div>
                            			</div>
                            			<div class="row">

                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Current Class</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $academic->current_class_or_degree	;?> </p>
                            				</div>
                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Current Semester</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $academic->current_semester	;?> </p>
                            				</div>
                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Quota</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $academic->quota;?></p>
                            				</div>
                                           <!--  <div class="col-md-3 col-xs-6"> <strong>Qualification</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $academic->qualification;?></p>
                                            </div> -->
                                        </div>
                                        <h5><u>10th Details</u></h5>
                                        <div class="row">

                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>10th Board</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $academic->tenth_board	;?> </p>
                                        	</div>
                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>10th Result Type</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $academic->tenth_cgpa_type	;?> </p>
                                        	</div>
                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>10th class Result</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $academic->tenth_cgpa_or_percentage;?></p>
                                        	</div>
                                        	<div class="col-md-3 col-xs-6"> <strong>10th Year Of Passing</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $academic->tenth_year_of_passing;?></p>
                                        	</div>
                                        </div>
                                        <h5><u>12th Details</u></h5>
                                        <div class="row">

                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>12th Board</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $academic->twelfth_board	;?> </p>
                                        	</div>
                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>12th Result Type</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $academic->twelfth_cgpa_type	;?> </p>
                                        	</div>
                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>12th class Result</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $academic->twelfth_cgpa_or_percentage;?></p>
                                        	</div>
                                        	<div class="col-md-3 col-xs-6"> <strong>12th Year Of Passing</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $academic->twelfth_year_of_passing;?></p>
                                        	</div>
                                        </div>
                                        <h5><u>Diploma Details</u></h5>
                                        <div class="row">

                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>Diploma Cgpa Type</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $academic->diploma_cgpa_type	;?> </p>
                                        	</div>

                                        	<div class="col-md-3 col-xs-6 b-r"> <strong>Diploma Cgpa or Percentage</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $academic->diploma_cgpa_or_percentage;?></p>
                                        	</div>
                                        	<div class="col-md-3 col-xs-6"> <strong>Diploma Year Of Passing</strong>
                                        		<br>
                                        		<p class="text-muted"><?php echo $academic->diploma_year_of_passing;?></p>
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-content-body  tab-pane p-4 border-top-0" id="timeline">
                            	<div class="card-body border rounded-11">
                            		<div class="mb-4 main-content-label">Family Details</div>
                            		<div class="card-body">
                            		<!-- 	<?php if($family == ''){?>
                            			<div class="row">

                            				<div class="col-lg-12 col-xlg-9 col-md-7">

                            					<div class="card">
                            						<div class="card-body">
                            							<h2>no familiy data found</h2>
                            						</div>
                            					</div>
                            				</div>
                            			</div> <?php }else{?> -->

                            			<div class="row">

                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Father Name</strong>
                            					<br>

                            					
                            					<p class="text-muted"><?php echo $family->father_fullname;?></p>

                            				</div>
                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Mother Name</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $family->mother_fullname;?></p>
                            				</div>
                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Religion</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $family->religion;?></p>
                            				</div>
                            				<div class="col-md-3 col-xs-6"> <strong>Category</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $family->category	;?></p>
                            				</div>
                            			</div>
                            			<div class="row">

                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Family Income</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $family->family_annual_income;?></p>
                            				</div>
                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Number Of Siblings</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $family->number_of_siblings;?></p>
                            				</div>
                            				<div class="col-md-3 col-xs-6 b-r"> <strong>Parent Occupation</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $family->parent_occupation;?></p>
                            				</div>
                            				<div class="col-md-3 col-xs-6"> <strong>Single Parent?</strong>
                            					<br>
                            					<p class="text-muted"><?php echo $family->is_single_parent;?></p>
                            				</div>
                            			</div><!-- <?php }?> -->
                            		</div>
                            	</div>
                            </div>
                            <div class="main-content-body  tab-pane p-4 border-top-0" id="gallery">
                         <!--    	<div class="card-body border rounded-11">
                            		<div class="mb-4 main-content-label">Extracurricular</div>
                            		<div class="card-body">
                            			
                                            <div class="table-responsive">
                                              <table class="table" id="example3">

                                                  <thead>

                                                     <tr>
                                                        <th>Activity Name</th>
                                                       <th>Activity Achievement</th>

                                                   </tr>
                                               </thead>

                                               <tbody>
                                                 <?php foreach($extrac as $extra){?>
                                                     <tr>
                                                      <td><?php echo $extra->student_activity_name?></td>
                                                      <td ><?php echo $extra->student_activity_achievement?></td>
                                                  </tr>
                                              <?php }?>
                                          </tbody>
                                      </table>
                                  
                              </div>
                          </div>
                      </div> -->

                      <div class="row">
                        <div class="col-12">
                            <!-- table responsive -->
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="main-content-label mb-1">Extracurricular</h6> 
                                 
                                <div class="table-responsive">
                                  <table class="table" id="example3" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th class="wd-20p">Sl No.</th>
                                            <th class="wd-20p">Activity Name</th>
                                            <th class="wd-20p">Activity Achievement</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        $index = 1;
                                       foreach($extrac as $extra){ ?>
                                            <tr>
                                                <td><?php echo $index;?></td>
                                                <td><?php echo $extra->student_activity_name?></td>
                                                <td ><?php echo $extra->student_activity_achievement?></td>
                                            </tr>
                                            <?php $index++; }?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
                  <div class="main-content-body  tab-pane p-4 border-top-0" id="friends">
                   <div class="card-body border rounded-11">
                      <div class="mb-4 main-content-label">Bank And Address</div>
                      <div class="card-body">
                          <h5><u>Bank Details</u></h5>
                          <div class="row">

                           <div class="col-md-3 col-xs-6 b-r"> <strong>Beneficiary Name</strong>
                              <br>
                              <p class="text-muted"><?php echo $bank->bank_beneficiary_name	;?> </p>
                          </div>
                          <div class="col-md-3 col-xs-6 b-r"> <strong>Account Type</strong>
                              <br>
                              <p class="text-muted"><?php echo $bank->bank_account_type	;?> </p>
                          </div>
                          <div class="col-md-3 col-xs-6 b-r"> <strong>Account Number</strong>
                              <br>
                              <p class="text-muted"><?php echo $bank->bank_account_no;?></p>
                          </div>
                          <div class="col-md-3 col-xs-6"> <strong>IFSC Code</strong>
                              <br>
                              <p class="text-muted"><?php echo $bank->bank_ifsc_code;?></p>
                          </div>
                          <div class="col-md-3 col-xs-6"> <strong>Branch</strong>
                              <br>
                              <p class="text-muted"><?php echo $bank->bank_branch_name;?></p>
                          </div>
                      </div>
                      <h5><u>Address Details</u></h5>
                      <div class="row">

                       <div class="col-md-3 col-xs-6 b-r"> <strong>State</strong>
                          <br>
                          <p class="text-muted"><?php echo $bank->student_native_state	;?> </p>
                      </div>

                      <div class="col-md-3 col-xs-6 b-r"> <strong>District</strong>
                          <br>
                          <p class="text-muted"><?php echo $bank->student_native_district;?></p>
                      </div>
                      <div class="col-md-3 col-xs-6 b-r"> <strong>City</strong>
                          <br>
                          <p class="text-muted"><?php echo $bank->student_studying_city;?></p>
                      </div>
                      <div class="col-md-3 col-xs-6"> <strong>Rural</strong>
                          <br>
                          <p class="text-muted"><?php echo $bank->is_from_rural;?></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
     
</div>
</div>
</div>
</div>
<?php }?>
<!-- End Row -->


</div>
</div>
<!-- End Main Content-->



<script>
    function deletePop(student_username,scholarshipId){
                // alert(username);
                $('#scholarship_id').val(scholarshipId);
                $('#username').val(student_username);
            }
        </script>
        
        <style type="text/css">
            .table-responsive > #config-table > .row{
                display: flex;
                flex-wrap: unset;
                margin-right: -10px;
                margin-left: -10px
            }
        </style>


        <script>
<?php if($this->session->flashdata('success')){?>
    Swal({
                position: 'top-end',
                type: 'success',
                title: 'Pushed Scholarship',
                showConfirmButton: false,
                timer: 4000,
            });
            <?php }?>
            
            <?php if($this->session->flashdata('success-delete')){?>
    Swal({
                position: 'top-end',
                type: 'success',
                title: 'Deleted successfully..',
                showConfirmButton: false,
                timer: 4000,
            });
            <?php }?>
            
            <?php if($this->session->flashdata('failure')){?>
                Swal({
                position: 'top-end',
                type: 'error',
                title: 'Something went wrong!!!',
                showConfirmButton: false,
                timer: 4000,
             
            });
            <?php }?>
</script>