<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0"><?php if(!empty($pagetitle)) echo $pagetitle;?></h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?php if(!empty($pagetitle)) echo $pagetitle;?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">

            	<?php echo $this->session->flashdata('message'); ?>

                <div class="card">
                    <div class="card-body">
                        <div class="card-title-desc">
                            <div class="text-right">
                                <div class="form-group">
                                    <a class="btn btn-primary" href="<?php echo URL_ADDEDIT_OPTION;?>">
                                        <i class="bx bx-plus"></i><?php echo get_languageword('add_record'); ?>
                                    </a>

                                    <a class="btn btn-success" href="<?php echo URL_OPTIONS_INDEX;?>">
                                        <i class="bx bx-revision"></i><?php echo get_languageword('refresh'); ?>
                                    </a>

                                    <?php $this->load->view('common_sections/multi_action_section'); ?>

                                </div>
                            </div>
                        </div>
                        <hr>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
	                            <tr>
	                                <th><input type="checkbox" class="ip_check_all" name="check_all" id="check_all" onclick="toggle_check_all(this);"> </th>
									<th><?php echo get_languageword('name');?></th>
									<th><?php echo get_languageword('status');?></th>
									<th><?php echo get_languageword('actions');?></th>
	                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>


    <?php $this->load->view('modals/delete-modal'); ?>