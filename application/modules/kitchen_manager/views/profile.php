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
	                            aria-selected="true"><?php if(isset($pagetitle)) echo $pagetitle;?></a>

	                        <a class="nav-link mb-2 active" href="<?php echo URL_KM_CHANGE_PASSWORD;?>">Change Password</a>

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
										if(isset($record->photo) && $record->photo != "" && file_exists(USER_IMG_UPLOAD_PATH_URL.$record->photo)) 
										{
											$src = USER_IMG_PATH.$record->photo;
											$style="";
										}
										?>
										
									<img class="card-img-top img-fluid" id="user_image" src="<?php echo $src;?>" style="<?php echo $style;?>"> 

									</div>
									<h5 class="font-size-16 mb-1"><a href="#" class="text-dark">
										<?php $user=getUserRec();echo $user->first_name;?> <?php $user=getUserRec();echo $user->last_name;?></a></h5>
									<p class="text-muted mb-2">Last Update:<?php $user=getUserRec();echo $user->updated_datetime;?></p>
								</div>
							</div>
						</div>
					</div>

	                <div class="col-md-9">
	                    <div class="tab-content text-muted mt-4 mt-md-0"s id="v-pills-tabContent">
	                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
	                            aria-labelledby="v-pills-home-tab">

	                            <?php
	                            $attributes = array('name'=>'profile_form','id'=>'profile_form');
	                            echo form_open_multipart(URL_KM_PROFILE,$attributes);?>

	                              <div class="row">
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="username">
	                                          	<?php echo get_languageword('first_name').required_symbol();?>
	                                          </label>
	                                          <?php
												$val='';
												if(isset($record) && !empty($record))
												{
													$val = $record->first_name;
												}
												else if(isset($_POST))
												{
													$val = set_value('first_name');
												}
												
												$element = array('name'=>'first_name',
												'value'=>$val,
												'class'=>'form-control');
												echo form_input($element).form_error('first_name');
												?>
	                                      </div>
	                                  </div>
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="firstname">
	                                          	<?php echo get_languageword('last_name').required_symbol();?>
	                                          </label>
	                                          <?php
												$val='';
												if(isset($record) && !empty($record))
												{
													$val = $record->last_name;
												}
												else if(isset($_POST))
												{
													$val = set_value('last_name');
												}
												
												$element = array('name'=>'last_name',
												'value'=>$val,
												'class'=>'form-control');
												echo form_input($element).form_error('last_name');
												?>
	                                      </div>
	                                  </div>
	                              </div>
	                              <div class="row">
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="lastname">
	                                          	<?php echo get_languageword('email').required_symbol();?>
	                                          	</label>
	                                         <?php
												$val='';
												if(isset($record) && !empty($record))
												{
													$val = $record->email;
												}
												else if(isset($_POST))
												{
													$val = set_value('email');
												}
												
												$element = array('name'=>'email',
												'value'=>$val,
												'class'=>'form-control',
												'type'=>'email',
												'readonly'=>true);
												echo form_input($element).form_error('email');
												?>
	                                      </div>
	                                  </div>
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="email"><?php echo get_languageword('phone').required_symbol();?></label>
	                                          <?php
												$val='';
												if(isset($record) && !empty($record))
												{
													$val = $record->phone;
												}
												else if(isset($_POST))
												{
													$val = set_value('phone');
												}
												
												$element = array('name'=>'phone',
												'value'=>$val,
												'class'=>'form-control');
												echo form_input($element).form_error('phone');
												?>
	                                      </div>
	                                  </div>
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                          <label class="form-label" for="mobile_no"><?php echo get_languageword('profile_image').required_symbol();?>(<small><strong><?php echo ALLOWED_TYPES;?></strong></small>)</label>
	                                          <input type="file" name="user_image" title="Profile Image" onchange="photo(this,'user_image')" class="form-control-file">
	                                      </div>
	                                  </div>
	                              </div>
	                              <button type="submit" name="update_profile" value="update_profile" class="btn btn-primary"><?php echo get_languageword('update');?></button>

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

	<!-- parsleyjs -->
	<script src="<?= base_url() ?>public/libs/parsleyjs/parsley.min.js"></script>
	<script src="<?= base_url() ?>public/js/pages/form-validation.init.js"></script>