
			<!-- Main Content-->
			<div class="main-content pt-5 mt-5">
				<div class="container-fluid">

						<!-- Page Header -->
				<!-- 		<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30">Instititional Dashboard</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Bulk Upload</a></li>
								</ol>
							</div>
						</div> -->
						<!-- End Page Header -->
						<!-- Row -->
						
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<div  class="text-right">

								<a download class="btn" style="background-color:#460056;border-color:#460056" href="<?php echo base_url()?>sample_file/studentdata.csv">Sample CSV File </a>

								</div>
								<form id="bulkLeadUpload" method="post" action="<?php echo base_url('student-bulk-upload')?>" enctype="multipart/form-data">
										<div class="main-content-label mg-b-5">
											File Browser
										</div>
										<!-- <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p> -->
										<div class="row">
										<div class="col-lg-6 form-group">
											<label class="form-label">Upload CSV File <span class="text-danger">*</span></label>
											
											<input class="form-control" name="file" id="file" type="file"  onchange="ValidatestudentDetails(this)" required="">
											

											<br ><p id="errorMessage"  style="color:red"></p>
										</div>
<!-- 
											<div class="col-lg-6 form-group">
											<label class="form-label">Sample File <span class="text-danger">*</span></label>
											
											<input style="background-color: #ff7f45; border-color: #ff7f45" type="submit" name="submit" value="submit" class="btn ripple btn-primary" >
											

											<br ><p id="errorMessage"  style="color:red"></p>
										</div> -->
										</div>
											<div class="col-sm-12 col-md-12 col-lg-6">
												
														<input style="background-color: #ff7f45; border-color: #ff7f45" type="submit" name="submit" value="submit" class="btn ripple btn-primary" >
													
											</div>
											</form>
									</div>
								</div>
							</div>
						</div>
					

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										
										<div class="">
											
											<br>
										</div>
										
										<div class="table-responsive">
											<table id="example3" class="table table-striped table-bordered text-nowrap" >
												<thead>
													<tr>
														<th>Sl. No</th>
														<th>File Name</th>
														<th>Uploaded Date</th>
														<th>Download File</th>
														
														
													</tr>
												</thead>
												<tbody>
													<?php $index=1;
													foreach($files as $file){?>
													<tr>
														<td><?php echo $index;?></td>
														<td><?php echo $file->file?></td>
														<td><?php $date = $file->date; echo date('d-m-Y',strtotime($date))?></td>
														<td><a class="btn" style="background-color:#460056;border-color:#460056" href="<?php echo base_url('institute_uploads/institute_student_bulk_upload/'.$file->file); ?>" download>Download </a></td>
														
														
														
													</tr>
													<?php $index++; }?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
					</div>
				</div>
<script>
function ValidatestudentDetails(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB
        var filePath = file.value; 
        var allowedExtensions =  
                    /(\.csv|\.CSV)$/i; 
                    document.getElementById('errorMessage').innerHTML='';
                
        if (FileSize < 6) {

            if (!allowedExtensions.exec(filePath)  ) { 
                  
                    document.getElementById('errorMessage').innerHTML="File type should be .csv | .CSV";
                 //   fileInput.value = ''; 
                 $(file).val(''); //for clearing with 
                    return false; 
                }         
            
        } 
        else
        {   document.getElementById('errorMessage').innerHTML="File size should be less then 6 MB";
            
            $(file).val(''); //for clearing with 
        }
    }
   </script>

   <script>
	$('bulkLeadUpload').ready(function() {
		$('#bulkLeadUpload').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
        	valid: 'glyphicon glyphicon-ok',
        	invalid: 'glyphicon glyphicon-remove',
        	validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
    
        	file: {
        		validators: {
        			notEmpty: {
        				message: 'CSV file is required'
        			},
        		
        	
        		}
        	}
             
        }
    }).on('success.form.bv', function(e) {
        $(this)[0].submit();
    
    });                             
	});
</script>



	<?php if($this->session->flashdata('add-success')){?>		
		<Script>
			swal({
				title: 'Well Done!',
				text: 'Bulk student add success',
				type: 'success',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>



	<?php if($this->session->flashdata('failure')){?>		
		<Script>
			swal({
				title: 'Alas!',
				text: 'Failed to add student details in bulk',
				type: 'success',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>


	<?php if($this->session->flashdata('duplicate-entries')){?>		
		<Script>
			swal({
				title: 'Alas!',
				text: 'Duplicate entires',
				type: 'error',
				timer: 3000,
				showConfirmButton: false
			});
		</Script>
	<?php }?>


