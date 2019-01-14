<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Login</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Login</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
<div class="container">
<div class="row">
		<form action="<?php echo base_url().'login/auth.html'?>" method="post" class="form-horizontal" role="form">
	<div class="col-md-6">
	<!-- LOGIN FORM -->
		<h2 class="section-heading">Login Here</h2>

			<div class="form-group">
				<label for="" class="control-label sr-only">Username</label>
				<div class="col-sm-12">
					<div class="input-group">
						<input type="text" class="form-control"  name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" >
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
					</div>
					<?php echo form_error('username', '<div class="alert alert-danger">', '</div>'); ?>
				</div>
			</div>
			
		<br>
	
	</div>
	<div class="col-md-6" style='margin-top:65px;'>
		<h2></h2>
		<div class="form-group">
				<label for="inputpassword3" class="control-label sr-only">password</label>
				<div class="col-sm-12">
					<div class="input-group">
						<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					</div>
					<?php echo form_error('password', '<div class="alert alert-danger">', '</div>'); ?>
				</div>
			</div>
			<div class="pull-right form-group">
				<div class="col-sm-12">
					<label class="fancy-checkbox">
						<input type="checkbox">
						<span>Remember me</span>
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="pull-right col-sm-12">
					<button type="submit" class="btn btn-primary btn-lg pull-right"><i class="fa fa-sign-in"></i> Sign in</button>
				<br>
				<br>
				<br>
				<div class="pull-right">
					<p><em>Don't have an account yet?</em> <a href="<?php echo base_url().'register.html'?>"><strong>Sign Up</strong></a>
					<br>
					<em>Forgot your password?</em> <a href="<?php echo base_url().'forgotpassword.html'?>">Recover Password</a></p>
				</div>
				</div>
			</div>
			
		<!-- END LOGIN FORM -->
	</div>
	</form>
</div>
	
</div>
</div>
<!-- END PAGE CONTENT -->

