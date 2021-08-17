<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        	<?php echo $this->session->flashdata('message'); ?>

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Invoice Detail</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li class="breadcrumb-item">
                                	<a href="<?php echo SITEURL;?>">
                                		<?php echo get_languageword('dashboard');?>
                                	</a>
                                </li>

                                <li class="breadcrumb-item">
                                	<a href="<?php echo URL_ORDERS_INDEX.'new';?>">
                                		<?php echo get_languageword('orders');?>
                                	</a>
                                </li>

                                <li class="breadcrumb-item active">Invoice Detail</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="invoice-title">
                                <h4 class="float-end font-size-16">Orders No. #<?php if(isset($order->order_id)) echo $order->order_id;?> <span class="badge bg-success font-size-12 ms-2"><?php if(isset($order->status)) echo ucwords(str_replace('_',' ',$order->status));?>
                                </span></h4>
                                <div class="mb-4">

                                    <?php if(isset($pagetitle)) echo $pagetitle;

                                    $currency = $this->config->item('site_settings')->currency_symbol;
                                    $count = count($order_products)+count($order_offers); ?>

                                </div>
                            </div>

                            <hr class="my-12">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-muted">
                                        <h5 class="font-size-16 mb-3">Orders Details:</h5>

                                        <p class="mb-1">
                                        	<span><?php echo get_languageword('customer_name');?>
                                        	<i class="bx bx-chevrons-right"></i>
                                    		</span><?php if(isset($order->customer_name)) echo $order->customer_name;?>
                                    	</p>

                                        <p class="mb-1">
                                        	<span><?php echo get_languageword('order_time');?>
	                                        <i class="bx bx-chevrons-right"></i>
	                                    	</span> <?php if(isset($order->order_time) && $order->order_time != '') echo $order->order_time;?>
	                                    </p>

                                        <p class="mb-1">
                                        	<span><?php echo get_languageword('phone');?>
	                                        <i class="bx bx-chevrons-right"></i>
	                                        </span><?php if(isset($order->phone)) echo $order->phone;?>
	                                    </p>

	                                    <p class="mb-1">
                                        	<span><?php echo get_languageword('Table No');?>
	                                        <i class="bx bx-chevrons-right"></i>
	                                        </span><?php if(isset($order->phone)) echo $order->phone;?>
	                                    </p>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-muted text-sm-end">
                                        <div>
                                            <h5 class="font-size-16 mb-1">Address Details:</h5>
                                            <p class="mb-1">
                                            	<span><?php if(isset($order->house_no)) echo $order->house_no;?> <?php if(isset($order->street)) echo $order->street;?>
                                            		<i class="bx bx-chevrons-left"></i>
                                            	</span><?php echo get_languageword('street');?> 
                                            </p>

                                            <p class="mb-1">
                                            	<span><?php if(isset($order->city)) echo $order->city;?>
                                            		<i class="bx bx-chevrons-left"></i>
                                            	</span><?php echo get_languageword('city');?> 
                                            </p>

                                            <p class="mb-1">
                                            	<span><?php if(isset($order->pincode)) echo $order->pincode;?>
                                            		<i class="bx bx-chevrons-left"></i>
                                            	</span><?php echo get_languageword('zipcode');?> 
                                            </p>

                                            <p class="mb-1">
                                            	<span><?php if(isset($order->date_created)) echo $order->date_created;?>
                                            		<i class="bx bx-chevrons-left"></i>
                                            	</span><?php echo get_languageword('booked_date');?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-12">

                            <!--ORDER ITEMS-->
                            <div class="py-2">
                                <h5 class="font-size-15"><?php echo get_languageword('order_items');?></h5>
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
												<th><?php echo get_languageword('item_name');?></th>
												<th><?php echo get_languageword('option');?></th>
												<th><?php echo get_languageword('item_cost');?></th>
												<th><?php echo get_languageword('item_quantity');?></th>
												<th><?php echo get_languageword('total_cost');?></th>
												<th><?php echo get_languageword('is_deleted');?></th>
                                            </tr>
                                        </thead>

	                                        <?php if(isset($order_products) && !empty($order_products)) { ?>
											<tbody>
											<?php 
												$i=0;
												foreach($order_products as $product):
												$i++;?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $product->item_name;?></td>
												<td><?php echo $product->size_name;?></td>
												<td><?php echo $currency.$product->item_cost;?></td>
												<td><?php echo $product->item_qty;?></td>
												<td><?php echo $currency.$product->final_cost;?></td>
												<td><?php if($product->is_deleted==0) echo get_languageword('no'); else if($product->is_deleted==1) echo get_languageword('yes');?></td>
												
											</tr>
											<?php endforeach; ?>
											<?php } ?>
                                        </tbody>
                                    </table>
                                </div><br>
                                <!--ORDER ITEMS-->

                                <!--ORDER ADDONS-->
                                <?php if(isset($order_addons) && !empty($order_addons)) { ?>
                                <div class="py-2">
                                <h5 class="font-size-15"><?php echo get_languageword('order_addons');?></h5>
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th><?php echo get_languageword('item_name');?></th>
                                                <th><?php echo get_languageword('item_cost');?></th>
                                                <th><?php echo get_languageword('item_quantity');?></th>
                                                <th><?php echo get_languageword('total_cost');?></th>
                                                <th><?php echo get_languageword('is_deleted');?></th>
                                            </tr>
                                        </thead>

                                            <?php 
                                                $i=0;
                                                foreach($order_addons as $addon):
                                                $i++;?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $addon->addon_name;?></td>
                                                <td><?php echo $currency.$addon->price;?></td>
                                                <td><?php echo $addon->quantity;?></td>
                                                <td><?php echo $currency.$addon->final_cost;?></td>
                                                <td><?php if($addon->is_deleted==0) echo get_languageword('no'); else if($addon->is_deleted==1) echo get_languageword('yes');?></td>                                            
                                            </tr>
                                            <?php endforeach; ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div><br>
                                <!--ORDER ADDONS-->

                                <!--ORDER OFFER-->
                                <?php if(isset($order_offers) && !empty($order_offers)) { ?>
                                <div class="py-2">
                                <h5 class="font-size-15"><?php echo get_languageword('order_offers');?></h5>
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th><?php echo get_languageword('item_name');?></th>
                                                <th><?php echo get_languageword('item_cost');?></th>
                                                <th><?php echo get_languageword('item_quantity');?></th>
                                                <th><?php echo get_languageword('total_cost');?></th>
                                                <th><?php echo get_languageword('is_deleted');?></th>
                                            </tr>
                                        </thead>

                                            <?php if(isset($order_addons) && !empty($order_addons)) { ?>
                                            <tbody>
                                            <?php 
                                                $i=0;
                                                foreach($order_addons as $addon):
                                                $i++;?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $addon->addon_name;?></td>
                                                <td><?php echo $currency.$addon->price;?></td>
                                                <td><?php echo $addon->quantity;?></td>
                                                <td><?php echo $currency.$addon->final_cost;?></td>
                                                <td><?php if($addon->is_deleted==0) echo get_languageword('no'); else if($addon->is_deleted==1) echo get_languageword('yes');?></td>                                            
                                            </tr>
                                            <?php endforeach; ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!--ORDER OFFER-->
                                <?php } ?>

                                <div class="table-responsive">
                                    <table class="table table-nowrap table-centered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" colspan="6" class="text-end">Sub Total</th>
                                                <td class="text-end"><?php if(isset($order->total_cost)) echo $currency.($order->total_cost + $order->delivery_fee);?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="6" class="border-0 text-end">
                                                    Discount :</th>
                                                <td class="border-0 text-end"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="6" class="border-0 text-end">
                                                    Shipping Charge :</th>
                                                <td class="border-0 text-end"><?php if(isset($order->delivery_fee)) echo $currency.$order->delivery_fee;?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="6" class="border-0 text-end">Total</th>
                                                <td class="border-0 text-end"><h4 class="m-0"><?php if(isset($order->total_cost)) echo $currency.($order->total_cost + $order->delivery_fee);?></h4></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-print-none mt-4">
                                    <div class="float-end">
                                        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="bx bxs-printer"></i></a>

                                        <?php if(isset($order) && ($order->status !='cancelled' && $order->status !='delivered')) {?>
											   <!-- Small modal -->
											   <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm">
											   	<i class="bx bx-edit-alt"></i> <?php echo get_languageword('order_update');?></button>
										<?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            
        </div> <!-- container-fluid -->
    </div>

    <!--DELETE Modal-->
	<div id="deleteModal" class="modal fade" role="dialog">
	  <div class="order-modal-dialog">
	  
	<?php echo form_open(URL_DELETE_ORDER);?>
	    <!-- Modal content-->
	    <div class="modal-content order-content">
	      <div class="order-modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title"><?php echo get_languageword('delete');?></h4>
	      </div>
	      <div class="modal-body">
			 <p><?php echo get_languageword('are_you_sure_to_delete');?> ? </p>
			  <input type="hidden" name="delete_item_id" id="delete_item_id" value="">
	      </div>
	      
		  <div class="order-modal-footer modal-footer">
			
			<button type="submit" class="btn btn-primary" name="delete_item"><?php echo get_languageword('yes');?></button>
		
		  <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo get_languageword('no');?></button>
		</div>
			
	    </div>
	<?php echo form_close();?>
	  </div>
	</div>
	<!--DELETE Modal-->

    <!--  Small modal example -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mySmallModalLabel"><?php echo get_languageword('update');?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <?php echo form_open(URL_UPDATE_ORDER,array('id'=>'order_status_form'));?>
                <div class="modal-body">
                    <div class="form-group">
					  <label><?php echo get_languageword('update_order_status').required_symbol();?></label>
						<?php 
							if($order->status=='new')
							{
								$status = array(''=>get_languageword('select'),
											'process'=>get_languageword('processing'),
											'out_to_deliver'=>get_languageword('out_to_deliver'),
											'delivered'=>get_languageword('delivered'),
											'cancelled'=>get_languageword('cancelled')
											);
								$val='';
								echo form_dropdown('order_status',$status,$val,'class="form-control chzn-select" onchange="get_km_div(this.value)"');			
							}
							else if($order->status=='process')
							{
								$status = array(''=>get_languageword('select'),
											'out_to_deliver'=>get_languageword('out_to_deliver'),
											'delivered'=>get_languageword('delivered'),
											'cancelled'=>get_languageword('cancelled')
											);
								$val='';
								echo form_dropdown('order_status',$status,$val,'class="form-control chzn-select" onchange="get_dm_div(this.value)"');			
							}
							else if($order->status=='out_to_deliver')
							{
								$status = array(''=>get_languageword('select'),
											'delivered'=>get_languageword('delivered'),
											'cancelled'=>get_languageword('cancelled')
											);
								$val='';
								echo form_dropdown('order_status',$status,$val,'class="form-control chzn-select" ');			
							}
							
							
							?>
					  </div>
					 
					  
					  <div class="form-group">
					  <label><?php echo get_languageword('kitchen_manager');?></label>
					  <?php 
					  	$val='';
					  	echo form_dropdown('km_id',$kitchen_managers,$val,'class="form-control chzn-select" id="km_id"');
					  	?>
					  </div>

					  <div class="form-group">
					  <label><?php echo get_languageword('delivery_manager');?></label>
					  <?php 
					  	$val='';
					  	echo form_dropdown('dm_id',$delivery_managers,$val,'class="form-control chzn-select" id="dm_id"');
					  	?>
					  </div>

					  <div class="form-group">
					  <label><?php echo get_languageword('message_to_customer');?></label>
					  <?php 
					  $element = array('name'=>'message',
										'class'=>'form-control');
					  echo form_textarea($element);
					  ?>
					  </div>
					  
					  <input type="hidden" name="order_id" id="order_id" value="<?php echo $order->order_id;?>">

					  <input type="hidden" name="order_id" id="order_id" value="<?php echo $order->order_id;?>">
			        </div>
			        <div class="order-modal-footer modal-footer">
					
						<button type="submit" name="update_order_status" class="btn btn-primary"><?php echo get_languageword('yes');?></button>
					
			          <button type="button" class="btn btn-default" data-bs-dismiss="modal"><?php echo get_languageword('no');?></button>
			        </div>
			      </div>
				  <?php echo form_close();?>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->