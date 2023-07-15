    <!--=======Contact Page==================================-->
    <div class="login-page page-wrapper" style="padding: 50px 0px;">
      <?php if($this->session->flashdata('success')){ ?>
      <div class="alert alert-success alert-dismissible" style="width: 50%;text-align: center;margin: 5px auto;">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Success!</h4>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
        
        <style>
           
            .required{
                color:red;
            }
            .help-block{
                color:red;
            }
            .form-control{
                border
            }
            ::placeholder {
  color: red;
  opacity: 1; /* Firefox */
}
        </style>
      
            <div class="container">
                   <div class="row justify-content-center">
      <div class="col-lg-8 col-md-6 col-sm-8">
        <div class="login-form-area">
                        
                        <form class="needs-validation" novalidate id="contacts" method="post">
                            
                            <!--<h6 style="color: #ffffff">OR</h6>-->
                            <h3 align="center">Direct Message</h3>
                            <div class="row" style="padding: 20px 0px;">
                                <div class="col-lg-6">
                             <label><b>Service<span class="required">*</span></b></label>

                            <div class="form-group">
                               <select name="service" class="form-control">
                                <option selected="" disabled="">Select</option>
                                   <option value="Sales">Sales</option>
                                   <option value="Support">Support</option>
                               </select>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <label><b>Full Name<span class="required">*</span></b></label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name"  name="name" placeholder="Enter full name">
                            </div>
                            </div>
                         <div class="col-lg-6">
                            <label><b>Institute Name</b></label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="ins_name" name="ins_name" placeholder="Enter Institute Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label><b>Email<span class="required">*</span></b></label>
                            <div class="form-group">
                                <input type="email" placeholder="Enter Email" class="form-control" id="email"  name="email" >
                            </div>
                            </div>
                        <div class="col-lg-6">
                            <label><b>Mobile<span class="required">*</span></b></label>
                            <div class="form-group">
                                <!--<input type="number" minlength="10" maxlength="10" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile No.">-->
                               <input   pattern="[0-9]{1,10}"  maxlength="10"
											oninput="if (!this.checkValidity()) this.value = this.value.slice(0, -1)"
											class="form-control" name="mobile"id="mobile" placeholder="Contact" required="" type="text">
                            </div>
                            </div>
                        <div class="col-lg-6">
                            <label><b>Subject<span class="required">*</span></b></label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="sub" placeholder="Enter Subject">
                            </div>
                            </div>
                        <div class="col-lg-12">
                            <label><b>Message<span class="required">*</span></b></label>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="msg" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                            </div >
                            <div align="center">
                            <button style="background-color:#ff7f45; color:white" type="submit" name="contacts" class="btn btn-default">Submit</button>
                            </div>
                            <br/>
                            <br/>
                          
                        </form><!--/.contact-form-area-->
                    </div><!--/.col-md-10-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div>
       


    </div><!--/.contact-page-->

  
<style>
    .error {
    color: red;
}



</style>

<script>
    $(document).ready(function() {
        $('#contacts').bootstrapValidator({
         // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
         feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
         },
         fields: {
             service: {
                
                validators: {
                    notEmpty: {
                        message: 'The service is required'
                    }
                }
            },
            name: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
            sub: {
                message: 'The sub is not valid',
                validators: {
                    notEmpty: {
                        message: 'The sub is required'
                    }
                }
            },
            email: {
                message: 'The email is not valid',
                validators: {
                    notEmpty: {
                        message: 'The email is required'
                    }
                }
            },
            mobile: {
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
            msg: {
                message: 'The message is not valid',
                validators: {
                    notEmpty: {
                        message: 'The message is required'
                    },
                  
                }
            }

         }
      }).on('success.form.bv', function(e) {
        e.preventDefault();
        (this).submit();
      });
   });
</script>
