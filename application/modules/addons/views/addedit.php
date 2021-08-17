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
	                <li class="breadcrumb-item"><a href="<?php echo SITEURL;?>">Dashboard</a></li>
	                <li class="breadcrumb-item"><a href="<?php echo URL_ADDONS_INDEX;?>">View Addon</a></li>
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
	                            aria-selected="true">
	                            <?php if(isset($pagetitle)) echo $pagetitle;?>
	                        </a>

	                            <div class="card text-center">
								<div class="card-body">
									<div class="dropdown float-end">
										<a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"> <i class="uil uil-ellipsis-h"></i> </a>
										<div class="dropdown-menu dropdown-menu-end"> <a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Remove</a> </div>
									</div>
									<div class="clearfix"></div>
									<div class="mb-4">
										<?php 
											$src = "";
											$style="display:none;";
											if(isset($record->addon_image) && $record->addon_image != "" && file_exists(ADDON_IMG_UPLOAD_PATH_URL.$record->addon_image)) 
											{
												$src = ADDON_IMG_PATH.$record->addon_image;
												$style="";
											}
											?>
                                            <img class="card-img-top img-fluid" id="menu_image" src="<?php echo $src;?>" style="<?php echo $style;?>">
									</div>
								</div>
							</div>
						</div>
					</div>

	                <div class="col-md-9">
	                    <div class="tab-content text-muted mt-4 mt-md-0"s id="v-pills-tabContent">
	                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
	                            aria-labelledby="v-pills-home-tab">

	                           <?php $attributes = array('name'=>'addon_from','id'=>'addon_from'); echo form_open_multipart(URL_ADDEDIT_ADDON,$attributes);?>

		                              <div class="row">
		                                  <div class="col-md-12">
		                                      <div class="mb-3">
		                                         <label><?php echo get_languageword('addon_name').required_symbol();?></label>
													<?php
													$val='';
													if(isset($record) && !empty($record))
													{
														$val = $record->addon_name;
													}
													else if(isset($_POST))
													{
														$val = set_value('addon_name');
													}
													
													$element = array('name'=>'addon_name',
													'value'=>$val,
													'class'=>'form-control');
													echo form_input($element).form_error('addon_name');
													?>
		                                      </div>
		                                  </div>

		                                  <div class="col-md-12">
		                                      <div class="mb-3">
		                                          <label><?php echo get_languageword('price').required_symbol();?></label>
													<?php
													$val='';
													if(isset($record) && !empty($record))
													{
														$val = $record->price;
													}
													else if(isset($_POST))
													{
														$val = set_value('price');
													}
													
													$element = array('name'=>'price',
													'value'=>$val,
													'class'=>'form-control');
													echo form_input($element).form_error('price');
													?>
		                                      </div>
		                                  </div>
		                              </div>
		                              
		                              <div class="row">
		                                  <div class="col-md-12">
		                                      <div class="mb-3">
		                                          <label><?php echo get_languageword('description').required_symbol();?></label>
													<?php
													$val='';
													if(isset($record) && !empty($record))
													{
														$val = $record->description;
													}
													else if(isset($_POST))
													{
														$val = set_value('description');
													}
													
													$element = array('name'=>'description',
													'value'=>$val,
													'maxlength'=>'100',
													'class'=>'form-control');
													echo form_textarea($element).form_error('description');
													?>
		                                      </div>
		                                  </div>

		                                  <div class="col-md-12">
		                                      <div class="mb-3">
		                                          <label><?php echo get_languageword('addon_image').required_symbol();?>(<small><strong><?php echo ALLOWED_TYPES;?></strong></small>)</label>

		                                          <input type="file" name="addon_image" title="Addon Image" onchange="photo(this,'addon_image')">
		                                      </div>
		                                  </div>

		                                  <div class="col-md-12">
		                                      <div class="mb-3">
		                                          <label><?php echo get_languageword('status').required_symbol();?></label>
													<?php
													$val='';
													if(isset($record) && !empty($record))
													{
														$val = $record->status;
													}
													else if(isset($_POST))
													{
														$val = set_value('status');
													}
													
													
													echo form_dropdown('status',$status_options,$val,'class="chzn-select form-control"').form_error('status');
													?>
												  </div>
												</div>
											</div>

												<div class="float-end">
														<?php 
														$value='';
														if(isset($record))
														{
															$value = $record->addon_id;
														}
														echo form_hidden('addon_id',$value);?>
														
														<button type="submit" name="addedit_addon" value="addedit_addon" class="btn btn-primary"><?php echo get_languageword('save');?></button>
														
														<a class="btn btn-warning" href="<?php echo URL_ADDONS_INDEX;?>"><?php echo get_languageword('cancel');?></a>
						                                      </div>
						                                  </div>
						                              </div>
						                          <?php echo form_close(); ?>
						                      </div>
						                  </div>
						              </div>
						          </div>
						      </div>
						  </div>

<!-- parsleyjs -->
<script src="<?= base_url() ?>public/assets/libs/parsleyjs/parsley.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/pages/form-validation.init.js"></script>

<!-- Form Validation Plugins /Start -->
<?php if(!empty($css_js_files) && in_array('form_validation', $css_js_files)) { ?>

<link href="<?php echo CSS_ADMIN_OR_BOOTSTRAP_VALIDATOR;?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo JS_ADMIN_BOOTSTRAP_VALIDATOR;?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
		
        $('#addon_from').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            /* feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            }, */
			framework: 'bootstrap',
            excluded: ':disabled',
            fields: {
                addon_name: {
                    validators: {
                        notEmpty: {
                            message: '<?php echo get_languageword('addon_name_required');?>'
                        }
                    }
                },
                price: {
                    validators: {
                        notEmpty: {
                            message: '<?php echo get_languageword('price_required');?>'
                        }
                    }
                },
				description: {
                    validators: {
                        notEmpty: {
                            message: '<?php echo get_languageword('description_required');?>'
                        }
                    }
                },
				addon_image: {
                    validators: {
                       file: {
							extension: 'jpeg,jpg,png,gif,svg',
							type: 'image/jpeg,image/png,image/gif,image/svg',
							message: '<?php echo get_languageword('addon_image_is_not_valid_file');?>'
						}
                    }
                }
			
            },
			 submitHandler: function(validator, form, submitButton) {
				form.submit();
			}
        })
    });
</script>
<?php } ?>

<script type="text/javascript" src="<?php echo JS_ADMIN_BOOTSTRAP_MAXLENGTH_MIN;?>"></script>
<script type="text/javascript">
    $('textarea').maxlength({
        alwaysShow: true,
        threshold: 10,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger",
        separator: ' out of ',
        preText: 'You write ',
        postText: ' chars.',
        validate: true
    });
</script>