<style>
	.icon-bar {
		position: fixed;
		top: 50%;
		-webkit-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		transform: translateY(-50%);
	}
	.icon-bar a {
		display: block;
		text-align: center;
		padding: 16px;
		transition: all 0.3s ease;
		color: white;
		font-size: 20px;
	}
	.facebook {
		background: #3B5998;
		color: white;
	}
	.accordion .card-header a {
    //color: #ffff;
    background-color: transparent;
    
}
.accordion .card-header a.collapsed {
   
    background-color: #ecedef;
    border-bottom-color: transparent;
    
}
.accordion .card-header a.collapsed:hover, .accordion .card-header a.collapsed:focus {
    background-color: #ecedef;
    color: #181c27;
}

</style>

<?php 
$result=$this->Student_model->getRedeemLogs();
$total_amount=0;
if($result->num_rows()>0){
	foreach ($result->result() as $eachResult) {
		$total_amount=$total_amount+$eachResult->total_amount;
	}
}
else
{
	$total_amount=0;
}
?>
<!-- Main Content-->
<div class="main-content pt-4 mt-5 mb-4">
	<div class="container fuild">

		<!-- Page Header -->

		<!-- Row -->
		<div class="row">
		  
			<div class="col-md-12">
				<div class="card">
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-sm-6 border-right reg" id="reg">
							<div class="card-body text-center">
								<h6 class="mb-0 ">Registration by Referral</h6>
								<h2 class="mb-1 mt-2 number-font"><span class="counter"><i class="fa fa-handshake-o"style="color: #ff7f45"></i>&nbsp; &nbsp;<?php echo $getReferdata?></span></h2>
								<!-- <p class="mb-0 text-muted"><span class="mb-0 text-danger fs-13 ml-1"><i class="fe fe-arrow-down"></i> 1.68%</span> for Last month</p> -->
							</div>
						</div>
						<div class="col-xl-3 col-md-3 col-lg-6 col-sm-6 border-right cat" id="cat">
							<div class="card-body text-center">
								<h6 class="mb-0 ">You are Under Category</h6>
								<?php if($getReferdata >= 20){
								$category=1;
								}else if($getReferdata >= 50){
								    $category=2;
								}else if($getReferdata >= 100){
								    $category=3; 
								}else if($getReferdata >= 200){
								    $category=4; 
								}else{
								    $category=0;
								}
								?>
								<h2 class="mb-1 mt-2 number-font"><span class="counter"><i class="ion-cash"style="color: #ff7f45"></i>&nbsp;&nbsp;
									<?php  echo $category?></span></h2>
		
								</div>
							</div>
							
							<div class="col-xl-6 col-lg-12 col-sm-12 border-right">
							<div class="card-body text-center">
								<h6 class="mb-0 ">Invite Your Friends</h6>
							<a target = "_blank"
												class="whatsapp"
												href="https://api.whatsapp.com/send?text=Hey! I just found this awesome website which helps students to find upcoming scholarships. https://scholar.theglobalscholarship.org/student-promotion-register?rcode=<?php if($getSpecificEachReferralCode!='') echo $getSpecificEachReferralCode->referral_code?> Register now and thank me later.." data-action="share/whatsapp/share">
											
												<img  src="<?php echo base_url()?>dashboard_assets/whatsapp-icon.png"style="height: 45px; align:right">
												
											</a>
									<!-- 	<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ml-1"><i class="fe fe-arrow-up"></i> 0.27%</span> for Last month</p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

					<div class="row" >
						<!-- <a data-target="#trackorder" class="nav-link" data-toggle="tab" role="tablist"><i class="fe fe-truck icon1"></i> Track Order</a> -->
						<div class="col-lg-8 col-md-12" style=" margin-top:0px;margin-right:auto;margin-left:auto;margin-bottom:-30px;width:900px;">
							<div class="card" >
							    	<div class="card-body">
							    	    <table width="100%" border=1>
							    	        <thead>
							    	        <tr>
							    	            <td align="center"><b>Category</b></td>
							    	            <td align="center"><b>Invites</b></td>
							    	            <td align="center"><b>Rewards</b></td>
							    	        </tr>
							    	        </thead>
							    	        <tbody>
							    	            <tr>
							    	                <td align="center">1</td>
							    	                <td align="center">20</td>
							    	                <td align="center">50 INR</td>
							    	            </tr>
							    	            <tr>
							    	                <td align="center">2</td>
							    	                <td align="center">50</td>
							    	                <td align="center">100 INR</td>
							    	            </tr>
							    	            <tr>
							    	                <td align="center">3</td>
							    	                <td align="center">100</td>
							    	                <td align="center">250 INR</td>
							    	            </tr>
							    	            <tr>
							    	                <td align="center">4</td>
							    	                <td align="center">200</td>
							    	                <td align="center">1000 INR</td>
							    	            </tr>
							    	        </tbody>
							    	    </table>
							    	    </br>
							    	   <div align="center"> Winners will be announced on our Instagram page <a href="https://instagram.com/the_global_scholarship" target="_blank"><u>Instagram</u></a></div>
							    	    </div>
							    	  
							    </div>
							     
							</div>
						
						 </div>
						  	<div class="row">
							<div class="col-lg-8"  style=" margin:0 auto;width:900px;">
										<div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
											
											<div class="card">
												<div class="card-header" id="headingTwo" role="tab">
													<a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwo">Term and Conditions* &nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#ff7f45"></i></a>
												</div>
												<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="collapseTwo" role="tabpanel">
													<div class="card-body">
													1-Start referring as many as friends you want.
													</br>
													2-The rewards will be given based on the category you fall in.*</br>
                                                      From Category one, eight lucky students will be awarded</br>
                                                      From category two, four lucky students will be awarded</br>
                                                      From category three and four, two lucky students will be awarded</br>
                                                    3-Winner names will be declared on 16 Dec 2021</br>
                                                    4-Winners will be announced on our Instagram page <a href="https://instagram.com/the_global_scholarship" target="_blank"><u>Instagram</u></a></br>
													</div>
												</div>
											</div>
											
										</div><!-- accordion -->
								
								
							</div>
						</div>
	
				</div>
			</div>
		</div>

<!--<div class="icon-bar">-->
<!--	<button type="button" class="btn ripple float-left" id="btn-share" style="background-color:#ff7f45;color: black"><i class="pe-7s-share"></i></button>-->
<!--</div>-->


<script>	
	window.addEventListener('load', function() {
		if(!navigator.share) {
        // document.querySelector('#btn-share').innerHTML = 'Not available';
        return;
    }


    document.getElementById('btn-share').addEventListener('click', function() {
    	navigator.share({
    		title: 'theglobalscholarship',
    		text: '"Hey!, Use my referral code <?php if($getEachReferralCode!='') echo $getEachReferralCode->referral_code?> and get Rs.<?php echo $getRefferalOffersforShare->discount_on_referral?> instant discount to register on',
    		url: 'https://www.theglobalscholarship.org/student-register?rcode=<?php if($getEachReferralCode!='') echo $getEachReferralCode->referral_code?>',
    	});
    });
});

</script>
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ed8817de8cea7d4"></script>-->
<script>
	$('#btn-share').hide();
	$('#all-share').hide();
    var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
	|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
	$('#btn-share').show();
	isMobile = true;
}else{
	$('#all-share').show();
}
</script>
<script>
	function myFunction() {
		/* Get the text field */
		var copyText = document.getElementById("myInput");

		/* Select the text field */
		copyText.select();
		copyText.setSelectionRange(0, 99999); /* For mobile devices */

		/* Copy the text inside the text field */
		document.execCommand("copy");

		/* Alert the copied text */
//   alert("Copied the text: " + copyText.value);
document.getElementById("message").innerHTML = "Link Copied";
document.getElementById("message").style.color = "#ff7f45";
}
</script>
<script>
	document.getElementById("demo").innerHTML = 5 + 6;
</script>


<script>
	$(document).ready(function() {

		$('#bankForm').bootstrapValidator({
			// message: 'This value is not valid',
			feedbackIcons: {
				// valid: 'glyphicon glyphicon-ok',

				// validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				bhim_upi_id: {
					validators: {
						notEmpty: {
							message: 'Bhim upi id is  required '
						},

					}
				},
				confirm_bhim_upi_id: {
					validators: {
						notEmpty: {
							message: 'Confirm bhim upi is required '
						},
						identical: {
							field: 'bhim_upi_id',
							message: 'Bhim upi id is not matching'
						}

					}
				},
				redeem_amount: {
					validators: {
						notEmpty: {
							message: 'The amount is required'
						},
						between: {
							max: <?php echo $getRefferalOffers->earned_on_referral_amount-$total_amount?>,
							message: 'amount should not be greater then your earned amount'


						},
						regexp: {
							regexp: /[0-9]/,
							message: 'The amount. can only consist of digits'
						}
					}
				},

			}
		}) .on('success.form.bv', function(e) {
			$(this)[0].submit();
		});
	});
</script>
<script>
	$(document).ready(function() {

		$('#newAccount').bootstrapValidator({
			// message: 'This value is not valid',
			feedbackIcons: {
				// valid: 'glyphicon glyphicon-ok',

				// validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
			    	registered_email: {
					validators: {
						notEmpty: {
							message: 'The email is  required '
						},

					}
				},
				fullname: {
					validators: {
						notEmpty: {
							message: 'The Full name is  required '
						},

					}
				},
			
			mobile_number: {
					validators: {
								notEmpty: {
									message: 'The mobile number is required  '
								},
								stringLength: {
									min: 10,
									max: 10,
									message: 'The mobile number must be 10 digits'
								},
								regexp: {
									regexp: /[0-9]/,
									message: 'The mobile number. can only consist of digits'
								}
							}
						},

			}
		}) .on('success.form.bv', function(e) {
			$(this)[0].submit();
		});
	});
</script>
<?php if($this->session->flashdata('renew-success')){?>		
	<Script>
		swal({
			title: 'Awesome!',
			text: 'Your request sent! soon you will get response',
			type: 'success',
			timer: 5000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
<?php if($this->session->flashdata('registered-success')){?>		
	<Script>
		swal({
			title: 'Awesome!',
			text: 'Your request sent! soon you will get response',
			type: 'success',
			timer: 5000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
<?php if($this->session->flashdata('bank-success')){?>		
	<Script>
		swal({
			title: 'Awesome!',
			text: 'Your request sent! it will take 4 to 7 working days to add amount to your account',
			type: 'success',
			timer: 6000,
			showConfirmButton: false
		});
	</Script>
	<?php }?>
<?php if($this->session->flashdata('number-exist')){?>		
	<Script>
		swal({
			title: 'Oops!',
			text: 'Account already registered with this number',
			type: 'error',
			timer: 4000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
<?php if($this->session->flashdata('email-exist')){?>		
	<Script>
		swal({
			title: 'Oops!',
			text: 'Account already registered with this email',
			type: 'error',
			timer: 4000,
			showConfirmButton: false
		});
	</Script>
<?php }?>
