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
				<form action="<?php echo base_url().'forgotpassword/update/'.$uri?>" method="post">
				<div class="form-group">
					<div class="col-sm-12">
						<?php if($this->session->flashdata('success')): ?>
						  <div class="success_reg">
							<p class="alert alert-success"><strong>Password has successfully changed</strong>
							</p>
						  </div>
						<?php endif; ?>
						<div class="form-group error">
								<div class="col-sm-12">
									<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
								</div>
							</div>
						<div class="input-group">
							<input type="password" name="password" class="form-control" placeholder="New Password" />
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						</div>
						<br>
						<div class="input-group">
							<input type="password" name="confNewPassword" class="form-control" placeholder="Confirm New Password" />
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						</div>
						<br>
						<input type="hidden" name="randomCode" value="<?php echo $uri; ?>" />
						<input type="submit" class="btn btn-success" value="Change Password" />
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->