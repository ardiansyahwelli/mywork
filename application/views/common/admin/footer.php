<!-- End Page-content -->
<?php if(!isset($footer)): ?>
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <script>
              document.write(new Date().getFullYear())
              </script> <?php echo $this->config->item('site_settings')->rights_reserved_content;?></div>
            <div class="col-sm-6">
              <div class="text-sm-end d-none d-sm-block"> Developments by <a href="#" target="_blank" class="text-reset">PT. Selaras Bahagia Lestari</a></div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- end main content-->
  </div>
   </footer>

  <?php endif; ?> 
    <!-- JAVASCRIPT -->
    <script src="<?= base_url() ?>public/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>public/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>public/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url() ?>public/libs/node-waves/waves.min.js"></script>
    <script src="<?= base_url() ?>public/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>public/libs/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- Required datatable js -->
    <script src="<?= base_url() ?>public/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="<?= base_url() ?>public/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>public/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>public/libs/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>public/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>public/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>public/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>public/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>public/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    
    <!-- Responsive examples -->
    <script src="<?= base_url() ?>public/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>public/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- parsleyjs -->
    <script src="<?= base_url() ?>public/libs/parsleyjs/parsley.min.js"></script>
    <script src="<?= base_url() ?>public/js/pages/form-validation.init.js"></script>

    <!-- Datatable init js -->
    <script src="<?= base_url() ?>public/js/pages/datatables.init.js"></script>

    <!-- parsleyjs -->
    <script src="<?= base_url() ?>public/libs/parsleyjs/parsley.min.js"></script>
    <script src="<?= base_url() ?>public/js/pages/form-validation.init.js"></script>

    <!-- apexcharts -->
    <script src="<?= base_url() ?>public/libs/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>public/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>public/js/app.js"></script>

    <!--DATATABLES-->
	<?php if(!empty($css_js_files) && in_array('data_tables', $css_js_files)) { ?>

	<?php if($this->config->item('site_settings')->admin_css=='orange') {?><!-- DataTables -->
        <link href="<?= base_url() ?>public/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>public/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= base_url() ?>public/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<?php } ?>

	<script type="text/javascript" src="<?php echo ADMIN_DATA_TBL_JS;?>"></script> 

	<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
	  <?php if(!empty($ajaxrequest["url"])) { ?>
		get_tableData('datatable','<?php echo $ajaxrequest["url"];?>','<?php if(!empty($ajaxrequest["conditions"])) echo $ajaxrequest["conditions"]; ?>','<?php if(!empty($ajaxrequest["disablesorting"])) echo $ajaxrequest["disablesorting"]; ?>',[[ 0, "desc" ]],'<?php if(!empty($ajaxrequest["type"])) echo $ajaxrequest["type"];?>');
	  <?php } else { ?>
	  $('#datatable').dataTable();
	  <?php } ?>
	});
	</script>
	<!--DATATABLES-->
	 <?php } ?>
    <!--CHOSEN CLASS-->
	<script type="text/javascript">
	$(document).ready(function() {
		 $(".chzn-select").chosen();
	});  
	function photo(input,name)
	{
		if (input.files && input.files[0]) 
		{
			var reader = new FileReader();
			reader.onload = function (e) 
			{
				input.style.width = '50%';
				$('#'+name+'').attr('src', e.target.result);
				$('#'+name+'').fadeIn();
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
	</script>

	<!-- CK Editor Scripts /Start -->
	<?php if(!empty($css_js_files) && in_array('ckeditor', $css_js_files)) { ?>
	<script type="text/javascript" src='<?php echo ADMIN_CKEDITOR_JS;?>'></script>
	<?php } ?>
	<!-- CK Editor Scripts /End -->	

	<!-- DATEPICKER Scripts Start -->
	<?php if(!empty($css_js_files) && in_array('datepicker', $css_js_files)) { ?>
	<script type="text/javascript" src="<?php echo BOOTSTRAP_DATEPICKER_JS;?>"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		
		var formatt = '<?php echo get_datepicker_format();?>';
		$('.dta').datepicker({format:formatt}).on('changeDate', function(ev)
		{
			$('.datepicker').hide();
		});
		
		
		var nowTemp = new Date();
		var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
		
		var checkin = $('.dpd1').datepicker({
			format:formatt,
		  onRender: function(date) {
			return date.valueOf() < now.valueOf() ? 'disabled' : '';
		  }
		}).on('changeDate', function(ev)
		{
			$('.datepicker').hide();
		});
	}); 
	</script>
	<?php } ?>
	<!-- DATEPICKER Scripts /End -->	

	<!--full calender-->
	<?php  
	$method = $this->uri->segment(2);
	if ($method === "orders-overview") {
	?>
	<!--FULL CALENDAR-->
	<link href="<?php echo CSS_FULLCALENDAR_MIN;?>" rel="stylesheet">
	<link href="<?php echo CSS_FULLCALENDAR_PRINT_MIN;?>" rel="stylesheet">
	<!--FULL CALENDAR-->
	   
	<script src='<?php echo JS_FULLCALENDAR_MOMENT_MIN;?>'></script>
	<script src='<?php echo JS_FULLCALENDAR_MIN;?>'></script>

	<!--full calender-->
	<script>
	var ajaxResult=[];
	var eventss=[];

		$(document).ready(function() 
		{
			$.ajax({
				type: "post",
				url: "<?php echo base_url();?>admin/fetch_orders_overview",
				data: '<?php echo $this->security->get_csrf_token_name();?>=<?php echo $this->security->get_csrf_hash();?>&',
				cache: false,
				async : false,  
				dataType:"json",
				success: function(data) 
				{
					$.each(data, function(i) {
						ajaxResult[i] = data[i];
					});
				}		
			}); 
			
			for(j=0;j < ajaxResult.length;j++)
			{
				eventss.push(
				{
					title  : ajaxResult[j].title,
					start  : ajaxResult[j].start,
					end    : ajaxResult[j].end,
					color  :  "#FFB347",
					backgroundColor :"#FFB347"
				}
				);
			}
			
			
			$('#calendar_test').fullCalendar({
				
				// timeFormat: 'H(:mm)T',
				// lang: 'es',
				timeFormat: 'hh:mm a',
				displayEventEnd : true,
				header: {
					left: 'prev,next today',
					center: 'title',
					// right: 'month,agendaWeek,agendaDay'
					right: 'month,basicWeek,basicDay'
				},
				defaultDate: new Date(),
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: eventss
			});
			
		});



	</script>
	<?php } ?>


	<!--MODAL-->
	<div id="notfn_modal" class="modal fade" role="dialog">
	  <div class="order-modal-dialog">

	  
	  <?php echo form_open(URL_VIEW_ORDER);?>
	    <!-- Modal content-->
	    <div class="modal-content order-content">
	      <div class="order-modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title"><?php echo get_languageword('new_order');?></h4>
	      </div>
	      <div class="modal-body">
			<p class="text-dark"><?php echo get_languageword('you_have_new_order_would_you_like_to_view');?>?</p>
			
			
			<input type="hidden" name="order_id" id="ord_id" value="">
			
			<input type="hidden" name="order_type" value="new">
	      </div>
	      
		  <div class="order-modal-footer modal-footer">
			
			
			<button type="submit" class="btn btn-primary" name="view_order"><?php echo get_languageword('yes');?></button>
		
		  <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo get_languageword('no');?></button>
		</div>
			
	    </div>
		
		<?php echo form_close();?>

	  </div>
	</div>
	<!--MODAL-->



	<!--KM SENT TO DM MODAL-->
	<div id="km_dm_modal" class="modal fade" role="dialog">
	  <div class="order-modal-dialog">
	  
	<?php echo form_open(URL_VIEW_ORDER);?>
	    <!-- Modal content-->
	    <div class="modal-content order-content">
	      <div class="order-modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title"><?php echo get_languageword('new_order');?></h4>
	      </div>
	      <div class="modal-body">
			<p><?php echo get_languageword('kitchen_manager_has_been_sent_an_order_to_delivery_manager');?></p>
			<p><?php echo get_languageword('would_you_like_to_view');?>?</p>
			
			<input type="hidden" name="order_id" id="km_sent_order_id" value="">
			
			<input type="hidden" name="order_type" value="out_to_deliver">
	      </div>
	      
		  <div class="order-modal-footer modal-footer">
			
			<button type="submit" class="btn btn-primary" name="view_order"><?php echo get_languageword('yes');?></button>
		
		  <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo get_languageword('no');?></button>
		</div>
			
	    </div>
	<?php echo form_close();?>
	  </div>
	</div>
	<!--KM SENT TO DM MODAL-->





	<!--DM UPATED DELIVERD STATUS MODAL-->
	<div id="dm_admin_modal" class="modal fade" role="dialog">
	  <div class="order-modal-dialog">
	<?php echo form_open(URL_VIEW_ORDER);?>
	    <!-- Modal content-->
	    <div class="modal-content order-content">
	      <div class="order-modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title"><?php echo get_languageword('new_order');?></h4>
	      </div>
	      <div class="modal-body">
			<p><?php echo get_languageword('delivery_manager_has_been_updated_an_order_status_as_delivered');?></p>
			<p><?php echo get_languageword('would_you_like_to_view');?>?</p>
			
			<input type="hidden" name="order_id" id="dm_delivered_ord_id" value="">
			
			<input type="hidden" name="order_type" value="delivered">
	      </div>
	      
		  <div class="order-modal-footer modal-footer">
			
			<button type="submit" class="btn btn-primary" name="view_order"><?php echo get_languageword('yes');?></button>
		
		  <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo get_languageword('no');?></button>
		</div>
			
	    </div>
	<?php echo form_close();?>
	  </div>
	</div>
	<!--DM UPATED DELIVERD STATUS MODAL-->


	<?php 
	$pusher_keyy = $this->config->item('site_settings')->pusher_key;

	if ($pusher_keyy!="" && $pusher_keyy!=="KEY") { ?>

	<audio id="myAudio" loop>
	<script src="<?php echo JS_ADMIN;?>pusher.min.js"></script>

	<script>
	    // Enable pusher logging - don't include this in production
	     Pusher.logToConsole = true;
		 var pusher_key= '<?php echo $pusher_keyy;?>';
				
	    var pusher = new Pusher(pusher_key, {
	     cluster: 'ap2',
	      encrypted: true
	    });
			
		//NEW ORDER BOOKED	
	    var channel = pusher.subscribe('my-channel');
	    channel.bind('my_event', function(data) {
			
			var ord_id = data.order_id;
			$('#ord_id').val(ord_id);
			
			$('#notfn_modal').modal('show');
			playAudio();
		});
		//NEW ORDER BOOKED	
		
		
		
		//KM SENT TO DM
		var channel = pusher.subscribe('my-channel');
	    channel.bind('km_admin_event', function(data) {
			
			var ord_id = data.order_id;
			$('#km_sent_order_id').val(ord_id);
			
			$('#km_dm_modal').modal('show');
			playAudio();
		});
		//KM SENT TO DM
		
		
		
		//DM UPDATED DELIVERED STATUS
		var channel = pusher.subscribe('my-channel');
	    channel.bind('dm_delivered_event', function(data) {
			
			var ord_id = data.order_id;
			
			$('#dm_delivered_ord_id').val(ord_id);
			$('#dm_admin_modal').modal('show');
			playAudio();
		});
		//DM UPDATED DELIVERED STATUS
		
		
		
	var x = document.getElementById("myAudio");
	function playAudio() 
	{
		x.play();
	}
	</script>
	<?php } ?>


	</body>
	</html>