<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Profile</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Profile</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url().'profile/update.html'?>" method="post">
					<?php if($this->session->flashdata('success')): ?>
					  <div class="success_reg">
						<p class="alert alert-success">Profile has been successfully updated!</p>
					  </div>
					<?php endif; ?>
					<label>First Name: </label>
					<input type="text" name="firstName" class="form-control" value="<?php echo $getUser->first_name;?>" />
					<label>Middle Name: </label>
					<input type="text" name="middleName" class="form-control" value="<?php echo $getUser->middle_name;?>" />
					<label>Last Name: </label>
					<input type="text" name="lastName" class="form-control" value="<?php echo $getUser->last_name;?>" />
					<label>Address: </label>
					<input type="text" name="address" class="form-control" value="<?php echo $getUser->address;?>" />
					<label>Contact Number: </label>
					<input type="text" name="contactNumber" class="form-control" value="<?php echo $getUser->contact_number;?>" />
					<br>
					<label>Seaman's Book: </label>
					<a href="<?php echo base_url();?>assets/uploads/"<?php echo $getUser->filename;?>><?php echo $getUser->filename;?></a>
					<br>
					<input type="hidden" value="<?php echo $getUser->id; ?>" name="userId" />
					<input type="submit" class="btn btn-success" value="Update" />
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->
