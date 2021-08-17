<body class="authentication-bg">
	<div class="account-pages my-5 pt-sm-5 mb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center">
						<div href="#" class="mb-5 d-block"></div>
					</div>
				</div>
			</div>
			<div class="row align-items-center justify-content-center">
				<div class="col-md-8 col-lg-6 col-xl-5">

					<?php echo $this->session->flashdata('message'); ?>

					<div class="card">
						<div class="card-body p-4">
							<div class="text-center mt-2">
								<h2 class="text-primary">Surgana Rasa</h2>
								<p class="text-muted">Sign in to continue.</p>
							</div>
							<div class="p-2 mt-4">

								<?php $attributes = array('name'=>'login_form','id'=>'login_form','class'=>'form-horizontal');
									echo form_open(URL_AUTH_LOGIN,$attributes);?>

									<div class="mb-3">
										<?php 
											$val='';
											if(isset($_POST['login']))
											{
												$val = set_value('email');
											}
											$element = array(
												'name'=>'email',
												'id'=>'lemail',
												'type'=>'email',
												'required'=>'required',
												'class'=>'form-control form-check-label',
												'placeholder'=>get_languageword('email'));

											echo form_input($element).form_error('email');		
										?>
									</div>
									<div class="mb-3">
										<?php 
											 $val='';
											 if(isset($_POST['login']))
											 {
												 $val = set_value('password');
											 }
											 $element = array('name'=>'password',
															  'id'=>'lpassword',
															  'type'=>'password',
															  'required'=>'required',
															  'class'=>'form-control form-check-label',
															  'placeholder'=>get_languageword('password'));

											echo form_input($element).form_error('password');		
										?>
									</div>

									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="auth-remember-check">
										<label class="form-check-label" for="auth-remember-check">Remember me</label>
									</div>

									<div class="mt-3 text-end">
										<button class="btn btn-primary w-sm waves-effect waves-light" name="login" type="submit">
											<?php echo get_languageword('login');?>
										</button>
									</div>

									<div class="mt-4 text-center">
										<p class="mb-0">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Signup now </a> </p>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="mt-5 text-center">
						<p>©
							<script>
							document.write(new Date().getFullYear())
							</script> PT. Selaras Bahagia Lestari.</p>
					</div>
				</div>
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>

	<!-- JAVASCRIPT -->
	<script src="<?= base_url() ?>public/assets/libs/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>public/assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="<?= base_url() ?>public/assets/libs/simplebar/simplebar.min.js"></script>
	<script src="<?= base_url() ?>public/assets/libs/node-waves/waves.min.js"></script>
	<script src="<?= base_url() ?>public/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="<?= base_url() ?>public/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
	<!-- App js -->
	<script src="<?= base_url() ?>public/assets/js/app.js"></script>
</body>

</html>