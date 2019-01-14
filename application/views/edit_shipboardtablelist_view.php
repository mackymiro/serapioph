<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Edit Shipboard Table List</h1>
		<ol class="breadcrumb">
			<li><a href="#">Company Registration Form</a></li>
			<li class="active">Edit Shipboard Table List</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->	
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url().'shipboardtablelist/update'?>" method="post">
					<?php if($this->session->flashdata('update')): ?>
						<div class="alert alert-success">
							<p>Successfully Updated!</p>
						</div>
					<?php endif;?>
					<label>Category</label>
					<select disabled name="category" class="form-control">
						<?php foreach($getCategory as $key=>$cat): ?>
							<option value="<?php echo $key; ?>" <?php echo ($getShipboardId->category == $key) ? 'selected="selected"' : '' ?>><?php echo $cat;?></option>
						<?php endforeach;?>
					</select>
					<label>Course</label>
					<select class="form-control" name="shipboardTraining">
						<option value="0">Please Select</option>
						<option value="Engine Cadet" <?php echo ($getShipboardId->shipboard_training_course == "Engine Cadet") ? 'selected="selected"' : '' ?>>Engine Cadet</option>
						<option value="Deck Cadet" <?php echo ($getShipboardId->shipboard_training_course == "Deck Cadet") ? 'selected="selected"' : '' ?>>Deck Cadet</option>
						
					</select>
					<label>Company Name</label>
					<select class="form-control" name="companyName">
						<?php foreach($getCompanyName as $company): ?>
							<option value="<?php echo $company->id; ?>" <?php echo ($getShipboardId->company_id == $company->id) ? 'selected="selected"' : '' ?>><?php echo $company->company_name; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Minimum Requirments</label>
					<input type="text" name="minimunReq" class="form-control" value="<?php echo $getShipboardId->minimum_requirements; ?>" />
					<label>Slot</label>
					<input type="text" name="slot" class="form-control" value="<?php echo $getShipboardId->slot; ?>" />
					<label>Amount</label>
					<input type="text" name="amount" class="form-control" value="<?php echo number_format($getShipboardId->amount, 2); ?>" />
					<label>Branch Address</label>
					<input type="text" name="branchAddress" class="form-control" value="<?php echo $getShipboardId->branch_address; ?>" />
					<label>Province</label>
					<select name="province" class="form-control">
						<?php foreach($getProvince as $key=>$province): ?>
						<option value="<?php echo $key?>"  <?php echo ($getShipboardId->province == $key) ? 'selected="selected"' : '' ?>><?php echo $province; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Schedule</label>
					<input type="text" name="schedule" class="form-control"  value="<?php echo $getShipboardId->schedule;?>" />
					<input type="hidden" name="updateId" value="<?php echo $getShipboardId->id;?>" />
					<br>
					<input type="submit" name="submit" class="btn btn-success" value="Update" />
				</form>
				<br>
				<br>
				<a href="<?php echo base_url().'shipboardtablelist.html'?>">Back to shipboard table list</a>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->