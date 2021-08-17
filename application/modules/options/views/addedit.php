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
	                <li class="breadcrumb-item"><a href="<?php echo URL_OPTIONS_INDEX;?>">View Options</a></li>
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
									<div class="dropdown float-end">
										<a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"> <i class="uil uil-ellipsis-h"></i> </a>
								</div>
							</div>
						</div>
					</div>

	                <div class="col-md-9">
	                    <div class="tab-content text-muted mt-4 mt-md-0"s id="v-pills-tabContent">
	                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
	                            aria-labelledby="v-pills-home-tab">

	                            <?php
	                            $attributes = array('name'=>'option_from','id'=>'option_from');
	                            echo form_open(URL_ADDEDIT_OPTION,$attributes);?>

	                              <div class="row">
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label><?php echo get_languageword('option_name').required_symbol();?></label>
												<?php
												$val='';
												if(isset($record) && !empty($record))
												{
													$val = $record->option_name;
												}
												else if(isset($_POST))
												{
													$val = set_value('option_name');
												}
												
												$element = array('name'=>'option_name',
												'value'=>$val,
												'class'=>'form-control');
												echo form_input($element).form_error('option_name');
												?>
	                                      </div>
	                                  </div>
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="mobile_no">
	                                          	<?php echo get_languageword('status').required_symbol();?>
	                                          </label>
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
												
												
												echo form_dropdown('status',$status_options,$val,'class="chzn-select form-control"').form_error('description');
												?>
											  </div>
											</div>
										</div>
											
											<div class="float-end">
												<?php 
												$value='';
												if(isset($record))
												{
													$value = $record->menu_id;
												}
												echo form_hidden('menu_id',$value);?>
												
	                              <button type="submit" name="addedit_option" value="addedit_option" class="btn btn-primary"><?php echo get_languageword('save');?></button>

	                              <a class="btn btn-warning" href="<?= base_url() ?>menu/index"><?php echo get_languageword('cancel');?></a>
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

	<!-- parsleyjs -->
	<script src="<?= base_url() ?>public/assets/libs/parsleyjs/parsley.min.js"></script>
	<script src="<?= base_url() ?>public/assets/js/pages/form-validation.init.js"></script>