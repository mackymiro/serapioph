<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Register</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Register</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<?php echo form_open_multipart('register/add', 'class="form-horizontal"');?>
			<div class="col-md-6">
			<!-- REGISTRATION FORM -->
			<h2 class="section-heading">Member's Sign Up Info</h2>
			
				<?php if($this->session->flashdata('success')): ?>
				  <div class="success_reg">
					<p class="alert alert-success"><strong>You are successfully registered! Serapio.ph will review your 
						submitted documents and will text you if you can login.</strong>
					</p>
				  </div>
				<?php endif; ?>
			
				<div class="form-group error" style="color:red; font-size:18px;">
					<div class="col-sm-12">
						<?php 
							if(isset($error)){
								echo $error;
							}						
						?>
					</div>
				</div>
				<div class="form-group error" style="color:red; font-size:18px;">
					<div class="col-sm-12">
						<?php 
							if(isset($empty)){
								echo $empty;
							}						
						?>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo set_value('firstName');?>" placeholder="First Name" />
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
						<?php echo form_error('firstName', '<div class="alert alert-danger">', '</div>'); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="middleName" name="middleName" value="<?php echo set_value('middleName')?>" placeholder="Middle Name" />
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
						<?php echo form_error('middleName', '<div class="alert alert-danger">', '</div>'); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo set_value('lastName'); ?>" placeholder="Last Name" />
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
						<?php echo form_error('lastName', '<div class="alert alert-danger">', '</div>'); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="address" name="address" value="<?php echo set_value('address');?>" placeholder="Address" />
								<span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
						</div>
						<?php echo form_error('address', '<div class="alert alert-danger">', '</div>'); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="contactNumber" name="contactNumber" value="<?php echo set_value('contactNumber'); ?>" placeholder="Contact Number" />
								<span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
						</div>
						<?php echo form_error('contactNumber', '<div class="alert alert-danger">', '</div>'); ?>
					</div>
				</div>
			
				<!--<div class="form-group">
					
					<div class="col-sm-12">
						<label class="fancy-checkbox">
							<input type="checkbox">
							<span>I accept the <a href="#">Terms &amp; Agreement</a></span>
						</label>
					</div>
				</div>-->
				
			<!-- END REGISTRATION FORM -->
			</div>
			<div class="col-md-6" style='margin-top:105px;'>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="referencePerson" name="referencePerson" value="<?php echo set_value('referencePerson'); ?>" placeholder="Reference Person (Optional)" />
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
		
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<div class="input-group">
							<input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" />
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
						</div>
						<?php echo form_error('username', '<div class="alert alert-danger">', '</div>'); ?>
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="control-label sr-only">Email</label>
					<div class="col-sm-12">
						<div class="input-group">
							<input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email');?>" placeholder="Email">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						</div>
						<?php echo form_error('email', '<div class="alert alert-danger">', '</div>'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="control-label sr-only">Password</label>
					<div class="col-sm-12">
						<div class="input-group">
							<input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password');?>" placeholder="Password">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						</div>
						<?php echo form_error('password', '<div class="alert alert-danger">', '</div>'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="password2" class="control-label sr-only">Repeat Password</label>
					<div class="col-sm-12">
						<div class="input-group">
							<input type="password" class="form-control" id="password2" name="password2" value="<?php echo set_value('password2');?>" placeholder="Repeat Password">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						</div>
						<?php echo form_error('password2', '<div class="alert alert-danger">', '</div>'); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<label style="color:red;">Note* Upload Seaman's Book/Students ID<br><i>Please upload file using PDF or JPG</i></label>
						<input type="file" name="pdf"  />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="checkbox" name="checkbox" /> <a href="<?php echo base_url().'termsandconditions.html'?>">Terms and Condition</a>
						
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="pull-right btn btn-success btn-lg"><i class="fa fa-check-circle"></i> Create Account</button>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->