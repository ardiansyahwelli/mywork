	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="main-content">

	<div class="page-content">
	<div class="container-fluid">

	<!-- start page title -->
	<div class="row">
	<div class="col-12">
	    <div class="page-title-box d-flex align-items-center justify-content-between">
	        <h4 class="mb-0"><?php if(isset($pagetitle)) echo $pagetitle;?></h4>

	        <div class="page-title-right">
	            <ol class="breadcrumb m-0">
	                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
	                <li class="breadcrumb-item active"><?php if(isset($pagetitle)) echo $pagetitle;?></li>
	            </ol>
	        </div>

	    </div>
	</div>
	</div>
	<!-- end page title -->

	<div class="row">

	 <?php echo $this->session->flashdata('message'); ?>

	<div class="col-xl-12">
	    <div class="card">
	        <div class="card-body">
	            <div class="row">
	                <div class="col-md-3">
	                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
	                        aria-orientation="vertical">
	                        <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill"
	                            href="#v-pills-home" role="tab" aria-controls="v-pills-home"
	                            aria-selected="true">Change Password</a>

	                        <a class="nav-link mb-2 active" href="<?php echo URL_DM_PROFILE;?>">Updated Profile</a>
	                    </div>
	                </div>
	                <div class="col-md-9">
	                    <div class="tab-content text-muted mt-4 mt-md-0"s id="v-pills-tabContent">
	                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
	                            aria-labelledby="v-pills-home-tab">

	                            <?php
	                            $attributes = array('name'=>'password_form','id'=>'password_form');
	                            echo form_open(URL_DM_CHANGE_PASSWORD,$attributes);?>

	                              <div class="row">
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="username">
	                                          	<?php echo get_languageword('current_password').required_symbol();?>
	                                          </label>
	                                          <?php echo form_input($old_password);?>
	                                      </div>
	                                  </div>
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="firstname">
	                                          	<?php echo get_languageword('new_password').required_symbol();?>
	                                          </label>
	                                          <?php echo form_input($new_password);?>
	                                      </div>
	                                  </div>
	                              </div>
	                              <div class="row">
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="lastname">
	                                          	<?php echo get_languageword('new_confirm_password').required_symbol();?>
	                                          	</label>
	                                         <?php echo form_input($new_password_confirm);?>
	                                      </div>
	                                  </div>
	                              </div>
	                              <button type="submit" name="change_pwd" value="change_pwd" class="btn btn-primary"><?php echo get_languageword('change');?></button>

	                              <a class="btn btn-warning" href="<?= base_url() ?>"><?php echo get_languageword('cancel');?></a>
	                          <?php echo form_close(); ?>
	                        </div>
	                    </div>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<!-- Form Validation Plugins /Start -->
<?php if(!empty($css_js_files) && in_array('form_validation', $css_js_files)) { ?>
<script type="text/javascript" src="<?php echo JS_VALIDATE_MIN;?>"></script>
<script type="text/javascript">
(function($,W,D)
{
      var JQUERY4U = {};
   
      JQUERY4U.UTIL =
      {
          setupFormValidation: function()
          {
              //Additional Methods
			  
			//form validation rules
              $("#password_form").validate({
					ignore: "",
                  rules: {
					 old_password: {
						 required: true
					 },
                     new_password: {
						required: true,
						rangelength:[6,20]
					 },
					 new_confirm_password: {
						 equalTo: "#new_password"
					 }
					 
   		
                  },
				 messages: {
					 old_password: {
						 required: "<?php echo get_languageword('old_password_required');?>"
					 },
					 new_password: {
						 required: "<?php echo get_languageword('new_password_required');?>"
					 },
					 new_confirm_password: {
						 equalTo: "<?php echo get_languageword('password_confirm_password_should_be_same');?>"
					 }
   			},
                  
                  submitHandler: function(form) {
                      form.submit();
                  }
              });
          }
      }
   
      //when the dom has loaded setup form validation rules
      $(D).ready(function($) {
          JQUERY4U.UTIL.setupFormValidation();
      });
   
   })(jQuery, window, document); 
</script>
<?php } ?>

<!-- parsleyjs -->
<script src="<?= base_url() ?>public/libs/parsleyjs/parsley.min.js"></script>
<script src="<?= base_url() ?>public/js/pages/form-validation.init.js"></script>