<?php error_reporting(0); ?>
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Change Password</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Change Password</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url().'changepassword/change.html';?>" method="post">
					<div class="form-group">
						<div class="col-sm-12">
							<div class="form-group error">
								<div class="col-sm-12">
									<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
								</div>
							</div>
							 <?php if($this->session->flashdata('successPassword')):?>
								<div class="alert alert-success">
								  <p>Password successfully change</p>
								</div>
							<?php endif; ?>
							<div>
								<p><?php echo $errorCurrentPassword;?></p>
							</div>
							<label>Current Password:</label>
							<input type="password" name="currentPassword" class="form-control" value="<?php echo set_value('currentPassword')?>" />
							<label>New Password:</label>
							<input type="password" name="newPassword" class="form-control" value="<?php echo set_value('newPassword')?>" />  
							<label>Confirm New Password:</label>
							<input type="password" name="confPassword" class="form-control" value="<?php echo set_value('confPassword')?>" />
							<br>
							<input type="submit" class="btn btn-success" value="Change Password" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->