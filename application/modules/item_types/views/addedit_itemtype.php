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
	                <li class="breadcrumb-item"><a href="<?php echo SITEURL; ?>">Dashboard</a></li>
	                <li class="breadcrumb-item"><a href="<?php echo URL_ITEMS_INDEX; ?>">View Item</a></li>
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
	                            $attributes = array('name'=>'item_type_from','id'=>'item_type_from');
	                            echo form_open(URL_ADDEDIT_ITEM_TYPE,$attributes);?>

	                              <div class="row">
	                                  <div class="col-md-12">
	                                      <div class="mb-3">
	                                       <label><?php echo get_languageword('item_type').required_symbol();?></label>
											<?php
											$val='';
											if(isset($record) && !empty($record))
											{
												$val = $record->item_type;
											}
											else if(isset($_POST))
											{
												$val = set_value('item_type');
											}
											$element = array('name'=>'item_type',
											'value'=>$val,
											'class'=>'form-control');
											echo form_input($element).form_error('item_type');
											?>
	                                  </div>
	                              </div>
	                          </div>

                                  <div class="float-end">

									<?php 
									$value='';
									if(isset($record))
									{
										$value = $record->item_type_id;
									}
									echo form_hidden('item_type_id',$value);?>
									<button type="submit" name="addedit_item_type" value="addedit_item_type" class="btn btn-primary"><?php echo get_languageword('save');?></button>

									

									<a class="btn btn-warning" href="<?php echo URL_ITEM_TYPES_INDEX;?>"><?php echo get_languageword('cancel');?></a>
								</div>
							</div>
							 <?php echo form_close(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>