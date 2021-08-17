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
	                <li class="breadcrumb-item"><a href="<?= base_url('menu/index') ?>">View Menu</a></li>
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
											if(isset($record->menu_image_name) && $record->menu_image_name != "" && file_exists(MENU_IMG_UPLOAD_PATH_URL.$record->menu_image_name)) 
											{
												$src = MENU_IMG_PATH.$record->menu_image_name;
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

	                            <?php
	                            	$attributes = array('name'=>'menu_from','id'=>'menu_from');
	                            	echo form_open_multipart(URL_ADDEDIT_MENU,$attributes);?>

	                              <div class="row">
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="username">
	                                          	<?php echo get_languageword('menu_name').required_symbol();?>
	                                          </label>
	                                          <?php
												$val='';
												if(isset($record) && !empty($record))
												{
													$val = $record->menu_name;
												}
												else if(isset($_POST))
												{
													$val = set_value('menu_name');
												}
												
												$element = array('name'=>'menu_name',
												'value'=>$val,
												'class'=>'form-control');
												echo form_input($element).form_error('menu_name');
												?>
	                                      </div>
	                                  </div>
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="firstname">
	                                          	<?php echo get_languageword('punch_line').required_symbol();?>
	                                          </label>
	                                          <?php
												$val='';
												if(isset($record) && !empty($record))
												{
													$val = $record->punch_line;
												}
												else if(isset($_POST))
												{
													$val = set_value('punch_line');
												}
												
												$element = array('name'=>'punch_line',
												'value'=>$val,
												'class'=>'form-control');
												echo form_input($element).form_error('punch_line');
												?>
	                                      </div>
	                                  </div>
	                              </div>
	                              <div class="row">
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="lastname">
	                                          	<?php echo get_languageword('description').required_symbol();?>
	                                          	</label>
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
	                                          <label class="form-label" for="email">
	                                          	<?php echo get_languageword('menu_image').required_symbol();?>(<small><strong><?php echo ALLOWED_TYPES;?></strong></small>)
	                                          </label>
	                                          <input type="file" name="menu_image_name" title="Menu Image" onchange="photo(this,'menu_image')">
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
	                              <button type="submit" name="addedit_menu" value="addedit_menu" class="btn btn-primary"><?php echo get_languageword('save');?></button>

	                              <a class="btn btn-warning" href="<?= base_url() ?>menu/index"><?php echo get_languageword('cancel');?></a>

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