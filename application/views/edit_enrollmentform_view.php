<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Edit Enrollment Form </h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Edit Enrollment Form</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-4">
					<form action="<?php echo base_url().'enrollmentform/update'?>" method="post">
						<?php if($this->session->flashdata('update')): ?>
						<div class="alert alert-success">
							<p>You Have Successfully Updated a Enrollment Form</p>
						</div>
						<?php endif;?>
						<label>Category</label>
						<select name="category" class="form-control">
						<?php foreach($getAllTrainingCategory as $trainingInfo): ?>
							<option value="<?php echo $trainingInfo->id;?>" <?php echo ($getEnrollmentForm->category == $trainingInfo->id) ? 'selected="selected"' : ''?>><?php echo $trainingInfo->category;?></option>
						<?php endforeach; ?>
						</select>
						<label>Training</label>
						<input type="text" name="training" class="form-control" value="<?php echo $getEnrollmentForm->training; ?>" />
						<label>Name</label>
						<input type="text" name="name" class="form-control" value="<?php echo $getEnrollmentForm->name; ?>" />
						<label>Preferred Month</label>
						<select name="preferredMonth" class="form-control">
							<?php foreach($getMonth as $key=>$month): ?>
							<option value="<?php echo $key; ?>" <?php echo ($getEnrollmentForm->preferred_month == $key) ? 'selected="selected"' : '' ?>><?php echo $month;?></option>
							<?php endforeach; ?>
						</select>
						<label>Preferred Time</label>
						<select name="preferredTime" class="form-control">
							<?php foreach($getTime as $key=>$time): ?>
							<option value="<?php echo $key; ?>" <?php echo ($getEnrollmentForm->preferred_time == $key) ? 'selected="selected"' : '' ?>><?php echo $time;?></option>
							<?php endforeach; ?>
						</select>
						<label>Details</label>
						<textarea class="form-control" name="details" cols="10" rows="10"><?php echo $getEnrollmentForm->details;?></textarea>
						<label>Reference Number</label>
						<input type="text" name="referenceNumber" class="form-control"  value="<?php echo $getEnrollmentForm->reference_number;?>" />
						<br>
						<input type="hidden" name="editId" value="<?php echo $getEnrollmentForm->id; ?>" />
						<input type="submit" value="Update" class="btn btn-success pull-right" />
					</form>
			</div>	
			<div class="col-md-3"></div>
			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo base_url().'enrollmentform.html' ?>">Back to Enrollment Form</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->