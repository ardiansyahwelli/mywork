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

                                </div>
                            </div>
                        </div>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
	                            <tr>
									<th><?php echo get_languageword('s_no');?></th>
									<th><?php echo get_languageword('order_no');?></th>
									<th><?php echo get_languageword('order_date');?></th>
									<th><?php echo get_languageword('order_time');?></th>
									<th><?php echo get_languageword('order_cost');?></th>
									<th><?php echo get_languageword('customer_name');?></th>
									<th><?php echo get_languageword('phone');?></th>
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