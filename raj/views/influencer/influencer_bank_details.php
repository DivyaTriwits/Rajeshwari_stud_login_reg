<!-- Main Content-->
<div class="main-content pt-4 mt-5 mb-0">
	<div class="container">

			<!-- Row -->
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h6 class="main-content-label mb-1">Update Bank & Address Details</h6>

							</div>
							<br>
							
							<form id="bankForm" method="POST"action="<?php echo base_url('update-influencer-bank-details')?>" >


								<div class="row">

									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Beneficiary Name <span class="text-danger">*</span> <i class="ion-help-circled" data-toggle="tooltip" title="Name as per bank records"></i></p>
											<input type="text" class="form-control" name="bank_beneficiary_name" id="bank_beneficiary_name"
											value="<?php if($getBankandAddressDetails!=''){echo $getBankandAddressDetails->bank_beneficiary_name;}?>" placeholder="" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Bank Name <i class="ion-help-circled" data-toggle="tooltip" title="Your bank name"></i></p>
											<input type="text" class="form-control" name="bank_name"
											value="<?php if($getBankandAddressDetails!=''){echo $getBankandAddressDetails->bank_name;}?>" placeholder="">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Account type <i class="ion-help-circled" data-toggle="tooltip" title="What type of bank accoount you have"></i></p>
											<select class="form-control select2-no-search" name="bank_account_type">
												<option selected="" disabled="">Select Account Type
												</option>
												<option value="Saving" <?php if($getBankandAddressDetails!='')echo($getBankandAddressDetails->bank_account_type=='Saving')?'selected':'';?>>Saving

												</option>
												<option value="Current"<?php if($getBankandAddressDetails!='')echo($getBankandAddressDetails->bank_account_type=='Current')?'selected':'';?>>Current
												</option>
												<option value="Joint"<?php if($getBankandAddressDetails!='')echo($getBankandAddressDetails->bank_account_type=='Joint')?'selected':'';?>>Joint
												</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Account Number <i class="ion-help-circled" data-toggle="tooltip" title="add your bank accoount number"></i></p>
											<input 

											pattern="[0-9]{1,18}"  maxlength="20" oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"


											type="text" class="form-control" name="bank_account_no" placeholder="" value="<?php if($getBankandAddressDetails!=''){echo $getBankandAddressDetails->bank_account_no;}?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10"> IFSC Code <i class="ion-help-circled" data-toggle="tooltip" title="add your banks ifsc code"></i></p>
											<input 

											pattern="[a-zA-Z0-9]{1,11}"  maxlength="11" oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"

											type="text" class="form-control ifsc" name="bank_ifsc_code" id="bank_ifsc_code" value="<?php if($getBankandAddressDetails!=''){echo $getBankandAddressDetails->bank_ifsc_code;}?>" placeholder="">
											<span id="ifscError" style="color:red;"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<p class="mg-b-10">Bank Branch <i class="ion-help-circled" data-toggle="tooltip" title="add your banks branch name"></i></p>
											<input type="text" class="form-control" name="bank_branch_name"  value="<?php if($getBankandAddressDetails!=''){echo $getBankandAddressDetails->bank_branch_name;}?>" placeholder="">

										</div>
									</div>


								</div>
								<br>
								<a href="<?php echo base_url('document_uploads')?>">
									<button style="background-color: #ff7f45; border-color: #ff7f45" type="Submit" class="btn ripple btn-primary float-right">Next</button>
								</a>



							</form>
						</div>
					</div>

				</div>

				<!-- End Row -->
			</div>
		</div>
	</div>
		<!-- End Main Content-->
		<?php if($this->session->flashdata('bank-details-update-success')){?>		
			<Script>
				swal({
					title: 'Awesome',
					text: 'Lets improve your Bank Details!',
					type: 'success',
					timer: 3000,
					showConfirmButton: false
				});
			</Script>
		<?php }?>








		<script type="text/javascript">
			$(document).ready(function(){

				$('#student_native_state').change(function(){ 
					var id=$(this).val();

                //var id=document.getElementById('academic_year').value;


                $.ajax({

                	url : "<?php echo site_url('get-cities-list');?>",
                	method : "POST",
                	data : {id: id},
                	async : true,
                	dataType : 'json',
                	success: function(data){

                		var html = '<option value="" selected disabled>Select</option>';
                		var i;
                		for(i=0; i<data.length; i++){

                			html += '<option value="'+data[i].id+'">'+data[i].city+'</option>';

                		}
                		$('#student_native_district').html(html);

                		$('#student_native_city').html(html);




                	}
                });
                return false;
            }); 

			});
		</script>








		<script type="text/javascript">    
			$(document).ready(function(){     

				$(".ifsc").change(function () {    
					document.getElementById("ifscError").innerHTML="";  
					var inputvalues = $(this).val();      
					var reg = /[A-Z|a-z]{4}[a-zA-Z0-9]{7}$/;    
					if (inputvalues.match(reg)) {    
						return true;    
					}    
					else {    
                    //$(".ifsc").val("");    
                    // alert("You entered invalid IFSC code");    
                    document.getElementById("ifscError").innerHTML="You entered invalid IFSC code";    
                    return false;    
                }    
            });      

			});    
		</script>




		<script>
			$(document).ready(function() {
				$('#bankForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
        // 	valid: 'glyphicon glyphicon-ok',
        // 	invalid: 'glyphicon glyphicon-remove',
        // 	validating: 'glyphicon glyphicon-refresh'
    },

    fields: {

    	bank_beneficiary_name: {

    		validators: {
    			notEmpty: {
    				message: 'The bank beneficiary is required'
    			},
    		}
    	},
        // 	gender: {

        // 		validators: {
        // 			notEmpty: {
        // 				message: 'The gender is required'
        // 			},
        // 		}
        // 	},
        // 	whatsapp: {
        // 		validators: {
        // 			notEmpty: {
        // 				message: 'The student whatsapp number is required'
        // 			},
        // 			stringLength: {
        // 				min: 10,
        // 				max: 10,
        // 				message: 'The student whatsapp number. must be 10 digits'
        // 			},
        // 			regexp: {
        // 				regexp: /[0-9]/,
        // 				message: ' <br >The student whatsapp number. can only consist of digits'
        // 			}
        // 		}
        // 	},
        // 	addharcard_no: {
        // 		validators: {
        // 			// notEmpty: {
        // 			// 	message: 'aadhar number is required'
        // 			// },
        // 			stringLength: {
        // 				min: 12,
        // 				max: 12,
        // 				message: 'The aadhar number. must be 12 digits'
        // 			},
        // 			regexp: {
        // 				regexp: /[0-9]/,
        // 				message: ' <br >The aadhar number number. can only consist of digits'
        // 			}
        // 		}
        // 	},


        // 	mobile: {

        // 		validators: {
        // 			notEmpty: {
        // 				message: 'The student mobile number  is required'
        // 			},
        // 			stringLength: {
        // 				min: 10,
        // 				max: 10,
        // 				message: 'The student mobile number must be 10 digits'
        // 			},
        // 			regexp: {
        // 				regexp: /[0-9]/,
        // 				message: ' <br >The student mobile number can only consist of digits'
        // 			}
        // 		}
        // 	}          
    }
}).on('success.form.bv', function(e) {
	$(this)[0].submit();
});
});
</script>
