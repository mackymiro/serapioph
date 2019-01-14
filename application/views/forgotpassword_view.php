<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Forgot Password</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Forgot Password</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url().'forgotpassword/request.html'?>" method="post">
					<div class="form-group">
						<div class="col-sm-12">
							<div class="form-group error">
								<div class="col-sm-12">
									<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
								</div>
							</div>
							<div class="form-group error">
								<?php if($this->session->flashdata('succ_send')): ?>
								<div class="col-sm-12">
									<p class="alert alert-success">Request successfully sent to your email</p>
								</div>
								<?php endif; ?>
							</div>
							<div class="form-group error">
								<?php if($this->session->flashdata('succ_failed')): ?>
								<div class="col-sm-12">
									<p class="alert alert-danger">Email Address not found on our database</p>
								</div>
								<?php endif; ?>
							</div>
							<div class="input-group">
								<input type="text" name="email" class="form-control" placeholder="Email Address" />
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
							</div>
							<br>
							<input type="submit" class="btn btn-success btn-lg" value="Forgot Password" />
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->